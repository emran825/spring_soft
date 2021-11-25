<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;


use App\Question;
use App\GiveAnswer;
use App\Answer;
use App\User;
use Carbon\Carbon;
use Redirect;

use App\Header;
use App\Service;
use App\Navbar;
use App\Banner;
use App\About;
use App\Cta;
use App\Video;
use App\Project;
use App\Testimonial;
use App\Sponsor;
use App\Blog;
use App\Choose;
use App\Footer;
use App\Course;
use App\Detail;
use App\Map;
use App\Team;
use App\Teamdetail;
use App\Gallery;
use App\Subcribe;
use App\AdminProduct;
use App\Order;


class StudentController extends Controller
{
    //
    use AuthenticatesUsers;

   
    public function studentLogin(){

       
       
       return view('wellknown.frontend.studentlogin');
    }
    public function studentLoginAuth(Request $request){
    	$this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);
        // $input=$request->all();
        // dd(Hash::make($input['password']));
        //dd(Auth::guard('student')->attempt(['email'=>$request->email]));

        $studentInfo = Student::where('email','=',$request->email)->first();

        if(!$studentInfo){
            return back()->with('fail','yout email do not recognize');

        }
        else{
          if(Hash::check($request->password,$studentInfo->password))
          {
             if(Session()->has('customer_id')){
                    Session::forget('customer_id');

                }
            session()->put('LoginStudent',$studentInfo->id);
            session()->put('StudentName',$studentInfo->name);
            session()->put('StudentEmail',$studentInfo->email);
            // return redirect()->route('student');
           return redirect()->route('student');

          }else{
            return back()->with('fail','Incorrect password');
          }

        }

       
    }
    public function studentPostReg(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'number'=>'required',
            'password'=>'min:6|required|required_with:password_confirmation|same:password_confirmation',
          'password_confirmation' => 'min:6|required',
        ]);
        $input = $request->all();
        //dd($input);
        $student = new Student;
        $student->name     = $request->name;
        $student->email    = $request->email;
        $student->phone    = $request->number;
        $student->password = Hash::make($request->password);
        $student->save();
        return redirect()->back()->with('message','Account Create Successfully');

    }
    public function studentLogout() {
    	Session::forget('LoginStudent');
    	return redirect('/studentlogin');
    }
    public function studentDashboard(){

       $total_course = Order::where('student_id','=',Session::get('LoginStudent'))->count();
      // dd($total_course);
        //dd($total_subscriber);
       $course=Course::select('*')
    ->join('orders', 'orders.course_id', '=', 'courses.id')
    ->where('orders.student_id','=',Session::get('LoginStudent'))
    ->get();
    //dd($course);
    $curr_course_details='';
    $curr_course_id     ='';
    $curr_course_id = Student::select('curr_course_id')->where('id','=',Session::get('LoginStudent'))->first();
    //dd($curr_course_id);
    if($curr_course_id){
       $curr_course_details = Course::Find($curr_course_id)->first();
    }else{
       $curr_course_details = "You Not Enroll Any Course";
    }
     //dd($curr_course_details->course_name);
   
    
        return view('student_dashboard',compact('total_course','course','curr_course_details'));
    }




  public function completeCourseList(){
       $total_course = Order::where('student_id','=',Session::get('LoginStudent'))->count();
      // dd($total_course);
        //dd($total_subscriber);
        $curr_course_id = Student::select('curr_course_id')->where('id','=',Session::get('LoginStudent'))->first();
       $course=Course::select('*')
    ->join('orders', 'orders.course_id', '=', 'courses.id')
    ->where('orders.student_id','=',Session::get('LoginStudent'))
    ->whereNotIn('courses.id',$curr_course_id)
    ->get();
    //dd($course);
      return view('complete-course',compact('total_course','course'));
    }



        
    


    public function studentEditprofile(){

       return view('student.studentedit');
    }
    public function editprofileStudent(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ],[
            'old_password.required' => 'Please field your old password',
            'password.required' => 'Enter your new password',
            'password_confirmation.required' => 'Enter your confirm password',
        ]);
          $student = Student::find(Session::get('LoginStudent'));
          //dd($student);
          $old_password = $request->old_password;
          $db_password = $student->password;
          if (Hash::check($old_password,$db_password)) {
            Student::find(Session::get('LoginStudent'))->update([
              'password' => Hash::make($request->password),
            ]);
            return back()->with('editsuccess','Password update Successfully');
          } else {
            return back()->with('editerror','Password does not match!');
          }
    }

    public function courseRoutine(){
      return view('course_routine');
    }
}
