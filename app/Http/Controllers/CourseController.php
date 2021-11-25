<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Course;
use App\Header;
use App\Navbar;
use App\Footer;
use App\Enroll;
use App\Whylearn;
use App\Content;

use view;


class CourseController extends Controller
{
    //

    
   public function getCourseDetails($id){

   	$whylearns_no='';
    $contentss_no='';
    $whylearns = '';

    $course_id   = $id;

    $whylearns     = DB::table('whylearns')->where('course_id', $id)->get();
    $contents      = DB::table('contents')->where('course_id', $id)->get();
   
    $course        = DB::table('courses')->where('id', $course_id)->first();
    return view('wellknown.frontend.course-details', ['whylearns' => $whylearns,'whylearns_no'=>$whylearns_no,'contentss_no'=>$contentss_no, 'course' => $course, 'contents' => $contents]);

   }

   

    public function postCourse(Request $request){
    $request->validate([
    	   'course_name'       => 'required',
         'course_type'       => 'required',
         'course_details'    => 'required',
         'course_duration'   => 'required',
         'no_ofclass'        => 'required',
         'total_hours'       => 'required',
         'reg_deadline'      => 'required',
         'class_schedule'    => 'required',
         'why_learns'        => 'required',
         'content'           => 'required',
         'ins'               => 'required',
         'venue'             => 'required',
         'course_price'      => 'required',
         'course_image'      => 'required',



    ]);
     // $input = $request->all();
      //dd($input);

     $why_learn=$request->why_learns;
        $dom = new \DomDocument();
        $dom->loadHtml( $why_learn, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
       
        $why_learn = $dom->saveHTML();

        $content=$request->content;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
       
        $content = $dom->saveHTML();

        $path = '';

        if( $request->hasFile('course_image') ) {
        $file = $request->file('course_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/course', $fileName);
        //dd($path);
    }
           

      $course                     = New Course; 
      $course->course_name        = $request->course_name;
      $course->course_type        = $request->course_type; 
      $course->course_details     = $request->course_details; 
      $course->course_duration    = $request->course_duration;
      $course->no_ofclass         = $request->no_ofclass;
      $course->total_hours        = $request->total_hours; 
      $course->reg_deadline       = $request->reg_deadline;
      $course->class_schedule     = $request->class_schedule; 
      $course->why_learns         = $why_learn; 
      $course->course_content     = $content;
      $course->course_instructor  = $request->ins;
      $course->venue              = $request->venue;
      $course->course_price       = $request->course_price;
      $course->course_image       = $path;   
      $course->save();

         //$input['logo']=$path;
        
      //    $input['course_image']=$path;
      //   // dd($input);
      // Course::create($input);
      return redirect()->back()->with('message','Course Created');


  }

  public function postCourseEnroll(Request $request,$id){
       
       $course_id =$id;
       // dd($course_id);

  	   $request->validate([
  	   	 'name'        => 'required',
    	   'email'       => 'required',
         'phone'       => 'required',
         'gender'      => 'required',
         'address'     => 'required',
         



    ]);
      $input = $request->all();
      //dd($input);

       $enroll                    = New Enroll;
       $enroll->name              = $request->name; 
       $enroll->email             = $request->email;
       $enroll ->phone            = $request->phone; 
       $enroll ->gender           = $request->gender; 
       $enroll ->address          = $request->address;
       $enroll ->course_id        = $course_id;  
       $enroll ->save();

       return redirect()->back();



  }
   public function getCourse(){

       $course   = Course::all();
       $web      = Course::where('course_type','=','web')->get(); 
       $app      = Course::where('course_type','=','app')->get();
       $graphics = Course::where('course_type','=','graphics')->get(); 
       $cms      = Course::where('course_type','=','cms')->get();
      // dd($web);
 
       return view('wellknown.frontend.course',compact('course','web','app','graphics','cms'));
   }

   public function getCourseForm($id){

       $course = Course::find($id);

       return view('pages.forms.course',compact('course'));


   }



   public function courseUpdate(Request $request,$id){
    $request->validate([
         'course_name'       => 'required',
         'course_duration'   => 'required',
         'course_type'       => 'required',
         'course_details'    => 'required',
         'no_ofclass'        => 'required',
         'course_done'       => 'required',
         'total_hours'       => 'required',
         'reg_deadline'      => 'required',
         'class_schedule'    => 'required',
         'why_learns'        => 'required',
         'content'           => 'required',
         'ins'               => 'required',
         'venue'             => 'required',
         'course_price'      => 'required',
        



    ]);

    if($request->course_done > $request->no_ofclass){
        return redirect()->back()->with('errormessage','Course Done Is not greater Than No Of Class');
    }
    else{

    $course = Course::find($id);

    $course->course_name       = $request->course_name;
    $course->course_type       = $request->course_type;
    $course->course_details    = $request->course_details;
    $course->course_duration   = $request->course_duration;
    $course->no_ofclass        = $request->no_ofclass;
    $course->course_done       = $request->course_done;
    $course->total_hours       = $request->total_hours;
    $course->reg_deadline      = $request->reg_deadline;
    $course->class_schedule    = $request->class_schedule;
    $course->why_learns        = $request->why_learns; 
    $course->course_content    = $request->content;
    $course->course_instructor = $request->ins;
    $course->venue             = $request->venue;
    $course->course_price      = $request->course_price;

    $course->save();

     return redirect()->back()->with('message','Course Updated');
   }

   }


   public function postCourseImageUpdate(Request $request,$id){

    $request->validate([
           'course_image'   => 'required',

        ]);


       $course         =Course::find($id);

       $course_image     =  $course->course_image;

       $delete_path = public_path().'/frontend/course/'.$course_image;
       

        if(!empty( $course_image )) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if($request->hasFile('course_image') ) {
        $file = $request->file('course_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/course', $fileName);
        //dd($path);
        

       $course->course_image = $path;

       $course->save();

       return redirect()->back()->with('logomessage','Course Logo Updated');

    }

   }

   public function allCourseDetails(){

   
    // $whylearns     = Whylearn::paginate(3); 
    //dd($whylearns);
    // $contents      = Content::paginate(3);
    $course =Course::paginate(5);;
            //dd($course);
    $count=1;
    return view('wellknown.frontend.all-course-details',compact('course','count'));
   }
   public function getCourseEnroll($id){

      $course = DB::table('courses')->where('id',$id)->first();

    return view('wellknown.frontend.enroll',compact('course'));
   }
}
