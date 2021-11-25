<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\GiveAnswer;
use App\Answer;
use App\User;
use Carbon\Carbon;
use Redirect;
use Auth;
use Hash;
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
use App\Customer;
use App\Student;


class HomeController extends Controller
{
    
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()

    {
        
        return view('wellknown.home');
    }    








    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $get_questions = Question::orderBy('id','asc')->where('status',1)->paginate(15);
        $get_answer = GiveAnswer::all();
        $total_users = User::where('role',0)->count();
        $total_question = Question::count();
        $total_answers = Answer::count();
        $get_user = Auth::user();
        $total_subscriber=Subcribe::all()->count();
        $total_project=Project::all()->count();
        $total_blog=Blog::all()->count();
        $total_course=Course::all()->count();
        $total_product=AdminProduct::all()->count();
        //dd($total_subscriber);
        return view('dashboard',compact('get_questions','get_answer','total_users','total_question','total_answers','get_user','total_subscriber','total_project','total_blog','total_course','total_product'));
    }

    public function home()
    {
        $get_questions = Question::orderBy('id','asc')->where('status',1)->paginate(15);
        $get_answer = GiveAnswer::all();
        $total_users = User::where('role',0)->count();
        $total_question = Question::count();
        $total_answers = Answer::count();
        $get_user = Auth::user();
        $total_subscriber=Subcribe::all()->count();
        $total_project=Project::all()->count();
        $total_blog=Blog::all()->count();
        $total_course=Course::all()->count();
        $total_product=AdminProduct::all()->count();
        //dd($total_subscriber);
        return view('dashboard',compact('get_questions','get_answer','total_users','total_question','total_answers','get_user','total_subscriber','total_project','total_blog','total_course','total_product'));
    }
    public function users()
    {
        $all_users = User::where('role',0)->orderBy('id','asc')->paginate(10);
        $all_admin = User::where('role',1)->orderBy('id','asc')->paginate(5);

        return view('admin.users.all_users',compact('all_users','all_admin'));
    }
    public function user_delete($user_id)
    {
       User::find($user_id)->delete();
       return back()->with('delete_success','User Delete Successfully');
    }
    public function user_edit($user_id)
    {
        $get_user = User::find($user_id);
        return view('admin.users.edit',compact('get_user'));
    }
    public function edit_user_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ],[
            'name.required' => 'Enter User Name',
            'email.required' => 'Enter User Email',
        ]);
        User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'created_at' => Carbon::now(),
        ]);
        return Redirect::to('users')->with('edit_successs', 'User Information Update Successfully');
    }
    public function editprofile()
    {
        return view('admin.profile.editprofile');
    }
    public function editprofilepost(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ],[
            'old_password.required' => 'Please field your old password',
            'password.required' => 'Enter your new password',
            'password_confirmation.required' => 'Enter your confirm password',
        ]);
          $old_password = $request->old_password;
          $db_password = Auth::user()->password;
          if (Hash::check($old_password,$db_password)) {
            User::find(Auth::id())->update([
              'password' => Hash::make($request->password),
            ]);
            return back()->with('editsuccess','Password update Successfully');
          } else {
            return back()->with('editerror','Password does not match!');
          }
    }


     public function updateHeader(Request $request,$id){

      $request->validate([
       
         'email'      =>'required',
         'phone'      =>'required',
         'open_time'  =>'required',
         'f_link'     =>'required',
         'i_link'     =>'required',
         't_link'     =>'required',
         'u_link'     =>'required',
         'copyright'  =>'required',


  

        ]
        );
      
      $header = Header::find($id);

      $header->email     = $request->email;
      $header->phone     = $request->phone;
      $header->open_time = $request->open_time;
      $header->f_link    = $request->f_link;
      $header->i_link    = $request->i_link;
      $header->t_link    = $request->t_link;
      $header->t_link    = $request->t_link;
      $header->u_link    = $request->u_link;
      $header->copyright = $request->copyright;

      $header->save();




     
       return redirect()->back()->with('message','Header Update Successfully');



    }

    public function postHeader(Request $request){

         $request->validate([
       
         'email'      =>'required',
         'phone'      =>'required',
         'open_time'  =>'required',
         'f_link'     =>'required',
         'i_link'     =>'required',
         't_link'     =>'required',
         'u_link'     =>'required',
         'copyright'  =>'required',

  

        ]
        );
        $header = new Header;

      $header->email     = $request->email;
      $header->phone     = $request->phone;
      $header->open_time = $request->open_time;
      $header->f_link    = $request->f_link;
      $header->i_link    = $request->i_link;
      $header->t_link    = $request->t_link;
      $header->t_link    = $request->t_link;
      $header->u_link    = $request->u_link;
      $header->copyright = $request->copyright;

      $header->save();




    
         return redirect()->back()->with('message','Header Create Successfully');


    }


    public function createService(Request $request){

          $request->validate([
           'service_name'   => 'required',
           'service_topic'  => 'required',
           'service_details'=> 'required',
           'service_class'  => 'required',
           'service_image'  => 'required',

        ]);



       $path = '';

        if( $request->hasFile('service_image') ) {
        $file = $request->file('service_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/service', $fileName);
        //dd($path);
    }
      
        $service = new Service;
        $service->service_name     = $request->service_name;
        $service->service_topic    = $request->service_topic;
        $service->service_details  = $request->service_details;
        $service->service_class    = $request->service_class;
        $service->service_image    = $path;
        $service->save();
         
       
       return redirect()->back()->with('message','Service create Successfully');

    }



    public function postService(Request $request,$id){

        $request->validate([
           'service_name'   => 'required',
           'service_topic'  => 'required',
           'service_details'=> 'required',
           'service_class'  => 'required',

        ]);
      
        $service = Service::find($id);
        $service->service_name     = $request->service_name;
        $service->service_topic    = $request->service_topic;
        $service->service_details  = $request->service_details;
        $service->service_class    = $request->service_class;
        $service->save();
         
       
        return redirect()->back()->with('message','Service Update Successfully');

    }

    public function postServiceLogo(Request $request,$id){
    
     $request->validate([
           'servicelogo'   => 'required',

        ]);


       $service           =Service::find($id);

       $service_image     =  $service->service_image;

       $delete_path = public_path().'/frontend/images/service/'. $service_image;
       

        if(!empty($service_image)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if($request->hasFile('servicelogo') ) {
        $file = $request->file('servicelogo');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/service', $fileName);
        //dd($path);
        

       $service->service_image = $path;

       $service->save();

       return redirect()->back()->with('logomessage','Service Image Update Successfully');

    }
}


    public function createProject(Request $request){

        $request->validate([
          'project_name'       =>'required',
          'client_name'        =>'required',
          'project_type'       =>'required',
          'project_awards'     =>'required',
          'demo_link'          =>'required',
          'project_details'    =>'required',
          'project_image'      =>'required'
         
        ]);
        $input=$request->all();
        //dd($input);

           

        $project_detail=$request->project_details;
        $dom = new \DomDocument();
        $dom->loadHtml($project_detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name="/frontend/project/images" . time().$k.'.png';
 
            $path = public_path() . $image_name;
            
            

            file_put_contents($path, $data);
            
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $project_details = $dom->saveHTML();

 

 






            $path = '';

        if( $request->hasFile('project_image') ) {
        $file = $request->file('project_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/project/images', $fileName);
        //dd($path);
    }


         //$input['logo']=$path;
       $project                   = New Project; 
       $project->project_name     = $request->project_name;
       $project->client_name      = $request->client_name; 
       $project->project_type     = $request->project_type ;
       $project->project_awards   = $request->project_awards;
       $project->demo_link        = $request->demo_link;
       $project->project_details  = $project_details;
       $project->project_image    = $path;  
       $project->save();
       return redirect()->back()->with('message','Project create Successfully');
      }




    public function postProject(Request $request,$id){

        $request->validate([
           'project_name'    =>'required',
           'project_type'    =>'required',
          // 'project_image'=>'required'
           'client_name'    => 'required',
           'project_awards' => 'required',
           'demo_link'      => 'required',
           'project_details'=> 'required',
         
        ]);
    //     $input=$request->all();
    //     //dd($input);
    //         $path = '';

    //     if( $request->hasFile('project_image') ) {
    //     $file = $request->file('project_image');
    //     // Get the Image Name
    //     $fileName = $file->getClientOriginalName();
    //     // Set the Filepath 
    //     $path = $fileName;
    //     // Move the file to the upload Folder
    //     $file = $file->move('frontend/images/gallery', $fileName);
    //     //dd($path);
    // }

    //      //$input['logo']=$path;
        
    //      $input['project_image']=$path;
    //      //dd($input);
    //      Project::create($input);
         $project = Project::find($id);

         $project->project_name   = $request->project_name;
         $project->project_type   = $request->project_type;
         $project->client_name    = $request->client_name;
         $project->project_awards = $request->project_awards;
         $project->demo_link      = $request->demo_link;
         $project->project_details= $request->project_details;

         $project->save();
        

         return redirect()->back()->with('message','Project Update Successfully');
      }
      

     public function postProjectLogo(Request $request,$id){

           $request->validate([
           'project_image'   => 'required',

        ]);


       $project           =Project::find($id);

       $project_image     =  $project->project_image;

       $delete_path = public_path().'/frontend/project/images/'. $project_image;
       

        if(!empty($project_image)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if($request->hasFile('project_image') ) {
        $file = $request->file('project_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/project/images/', $fileName);
        //dd($path);
        

       $project->project_image = $path;

       $project->save();

       return redirect()->back()->with('imagemessage','Project image update Successfully');

     }
 }

    public function createNavitem(Request $request){
         $request->validate([
         'nav_one'  => 'required',
         'nav_two'  => 'required',
         'nav_three'=> 'required',
         'nav_four' => 'required',
         'nav_five' => 'required',
         'nav_six'  => 'required',
         'nav_seven'=> 'required',
         'nav_eight'=> 'required',
         'logo'     => 'required',



         ]); 

      // $input = $request->all();   
      $path = '';
        if( $request->hasFile('logo') ) {
        $file = $request->file('logo');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images', $fileName);
        //dd($path);
    }

         //$input['logo']=$path;
        
         // $input['logo']=$path;
         //dd($input);
         // Navbar::create($input);

      $nav = new Navbar;

      $nav->nav_one    = $request->nav_one;
      $nav->nav_two    = $request->nav_two;
      $nav->nav_three  = $request->nav_three;
      $nav->nav_four   = $request->nav_four;
      $nav->nav_five   = $request->nav_five;
      $nav->nav_six    = $request->nav_six;
      $nav->nav_seven  = $request->nav_seven;
      $nav->nav_eight  = $request->nav_eight;
      $nav->logo       = $path;

      $nav->save();




     return redirect()->back()->with('message','Navbar Create Successfully');




    }

    public function postNavItem(Request $request,$id){
          
         $request->validate([
         'nav_one'  => 'required',
         'nav_two'  => 'required',
         'nav_three'=> 'required',
         'nav_four' => 'required',
         'nav_five' => 'required',
         'nav_six'  => 'required',
         // 'logo'     => 'required',



         ]); 

    //   $input = $request->all();   
    //   $path = '';
    //     if( $request->hasFile('logo') ) {
    //     $file = $request->file('logo');
    //     // Get the Image Name
    //     $fileName = $file->getClientOriginalName();
    //     // Set the Filepath 
    //     $path = $fileName;
    //     // Move the file to the upload Folder
    //     $file = $file->move('frontend/images', $fileName);
    //     //dd($path);
    // }

         //$input['logo']=$path;
        
         // $input['logo']=$path;
         //dd($input);
         // Navbar::create($input);

      $nav = Navbar::find($id);

      $nav->nav_one    = $request->nav_one;
      $nav->nav_two    = $request->nav_two;
      $nav->nav_three  = $request->nav_three;
      $nav->nav_four   = $request->nav_four;
      $nav->nav_five   = $request->nav_five;
      $nav->nav_six    = $request->nav_six;

      $nav->save();




     return redirect()->back()->with('message','Navbar Update Successfully');




    }


    public function postNavLogo(Request $request,$id){
         $request->validate([
             'logo' => 'required',

        ]);

       $nav          =Navbar::find($id);

       $nav_logo     = $nav->logo;

       $delete_path = public_path().'/frontend/images/logo/'.$nav_logo;
       

        if(!empty($nav_logo)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if($request->hasFile('logo') ) {
        $file = $request->file('logo');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/logo', $fileName);
        //dd($path);
        

       $nav->logo = $path;

       $nav->save();

       return redirect()->back()->with('logomessage','Logo Update Successfully');


    }
}

    public function createBanner(Request $request){
          $request->validate([
        'banner_name'    => 'required',
        'highlight_name' => 'required',
        'next_name'      => 'required',
        'bg_image'       => 'required',
        'banner_details' => 'required',
        


        ]);

        // $input = $request->all();   
        $path = '';
        if( $request->hasFile('bg_image') ) {
        $file = $request->file('bg_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/main-slider', $fileName);
        //dd($path);
    }

    
        
         // $input['bg_image']=$path;
         // Banner::create($input);


        $banner = new Banner;


        $banner->banner_name      = $request->banner_name;
        $banner->highlight_name   = $request->highlight_name;
        $banner->next_name        = $request->next_name;
        $banner->banner_details   = $request->banner_details;
        $banner->bg_image         = $path;
       
        $banner->save();
        return redirect()->back()->with('message','Banner Created');

    }

    public function postBanner(Request $request,$id){

        $request->validate([
        'banner_name'    => 'required',
        'highlight_name' => 'required',
        'next_name'      => 'required',
        'banner_details' => 'required',
        


        ]);

    //     $input = $request->all();   
    //     $path = '';
    //     if( $request->hasFile('bg_image') ) {
    //     $file = $request->file('bg_image');
    //     // Get the Image Name
    //     $fileName = $file->getClientOriginalName();
    //     // Set the Filepath 
    //     $path = $fileName;
    //     // Move the file to the upload Folder
    //     $file = $file->move('frontend/images/main-slider', $fileName);
    //     //dd($path);
    // }

    
        
         // $input['bg_image']=$path;
         // Banner::create($input);


        $banner = Banner::find($id);


        $banner->banner_name      = $request->banner_name;
        $banner->highlight_name   = $request->highlight_name;
        $banner->next_name        = $request->next_name;
        $banner->banner_details   = $request->banner_details;
      
        $banner->save();
        return redirect()->back()->with('message','Banner Update Successfully');



    }

    public function postBannerImage(Request $request,$id){

        $request->validate([
             'bg_image' => 'required',

        ]);


       $banner =Banner::find($id);

       $banner_image = $banner->bg_image;

       $delete_path = public_path().'/frontend/images/main-slider/'.$banner_image;

        if(!empty($banner_image)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if( $request->hasFile('bg_image') ) {
        $file = $request->file('bg_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/main-slider', $fileName);
        //dd($path);
        

       $banner->bg_image = $path;

       $banner->save();
       return redirect()->back()->with('bannermessage','Banner Image Update Successfully');

        
    }
}
 
 public function testimonialRemove($id){
   $testimonial=Testimonial:: find($id);
   $testimonial->delete();
   return redirect()->back()->with('error','Testimonial Deleted');

 }
  public function customerRemove($id){
  //dd($id);
   $customer=Customer:: find($id);
   $customer->delete();
   return redirect()->back()->with('error','Customer Remove');

 }

 public function studentRemove($id){
   $student=Student::find($id);
   $student->delete();
   return redirect()->back()->with('error','Student Remove');

 }

public function sponsorRemove($id){
   $sponsor=Sponsor:: find($id);
   $sponsor->delete();
   return redirect()->back()->with('error','Sponsor Deleted'); 

}

public function serviceRemove($id){
   $service=Service:: find($id);
   $service->delete();
   return redirect()->back()->with('error','Service Deleted');

}

public function footerRemove($id){
   $footer_remove=Footer:: find($id);
   $footer_remove->delete();
   return redirect()->back()->with('error','Footer Deleted');   

}

public function projectRemove($id){
   $project=Project:: find($id);
   $project->delete();
   return redirect()->back()->with('error','Project Deleted');
}

public function blogRemove($id){
   $blog=Blog:: find($id);
   $blog->delete();
   return redirect()->back()->with('error','Blog Deleted');

}
 public function courseRemove($id){

   $course=Course:: find($id);
   $course->delete();
   return redirect()->back()->with('error','Course Deleted');

 }

 public function bannerRemove($id){

   $banner=Banner:: find($id);
   $banner->delete();
   return redirect()->back()->with('error','Banner Deleted');
 }

 public function createAbout(Request $request){

     $request->validate([
        'title_name'     => 'required',
        'highlite_name'  => 'required',
        'next_title'     => 'required',
        'about_details'  => 'required',
        'bg_image'       => 'required',
        'ceo_image'      => 'required',



        ]);
         $input = $request->all();
        // dd($input);


             
        $path = '';
        if( $request->hasFile('bg_image') ) {
        $file = $request->file('bg_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/background', $fileName);
        //dd($path);
    }
       $input['bg_image']=$path;

      $path = '';
        if( $request->hasFile('ceo_image') ) {
        $file = $request->file('ceo_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/about', $fileName);
        //dd($path);
    }
     $input['ceo_image']=$path;
     About::create($input);
     return redirect()->back();
 }

    public function postAbout(Request $request,$id){

         $request->validate([
        'title_name'     => 'required',
        'highlite_name'  => 'required',
        'next_title'     => 'required',
        'about_details'  => 'required',
      



        ]);
    //      $input = $request->all();
    //     // dd($input);


             
    //     $path = '';
    //     if( $request->hasFile('bg_image') ) {
    //     $file = $request->file('bg_image');
    //     // Get the Image Name
    //     $fileName = $file->getClientOriginalName();
    //     // Set the Filepath 
    //     $path = $fileName;
    //     // Move the file to the upload Folder
    //     $file = $file->move('frontend/images/background', $fileName);
    //     //dd($path);
    // }
    //    $input['bg_image']=$path;

    //   $path = '';
    //     if( $request->hasFile('ceo_image') ) {
    //     $file = $request->file('ceo_image');
    //     // Get the Image Name
    //     $fileName = $file->getClientOriginalName();
    //     // Set the Filepath 
    //     $path = $fileName;
    //     // Move the file to the upload Folder
    //     $file = $file->move('frontend/images/about', $fileName);
    //     //dd($path);
    // }
    //  $input['ceo_image']=$path;
    //  About::create($input);

      $about                      = About::find($id);
      $about->title_name          = $request->title_name;
      $about->highlite_name       = $request->highlite_name;
      $about->next_title          = $request->next_title;
      $about->about_details       = $request->about_details;

      $about->save();

      return redirect()->back()->with('message','About Update Successfully');


    }
    public function postCeoLogo(Request $request,$id){
          $request->validate([
             'ceo_image' => 'required',

        ]);


       $about =About::find($id);

       $ceo_image =  $about->ceo_image;

       $delete_path = public_path().'/frontend/images/about/'.$ceo_image;

        if(!empty($ceo_image )) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if( $request->hasFile('ceo_image') ) {
        $file = $request->file('ceo_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/about', $fileName);
        //dd($path);
        

       $about->ceo_image = $path;

       $about->save();
       return redirect()->back()->with('ceomessage','CEO Image Update Successfully');

    }
}

    public function  postBgLogo(Request $request,$id){
          $request->validate([
             'bg_image' => 'required',

        ]);


       $about =About::find($id);

       $bg_image =  $about->bg_image;

       $delete_path = public_path().'/frontend/images/background/'.$bg_image;

        if(!empty($bg_image )) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if( $request->hasFile('bg_image') ) {
        $file = $request->file('bg_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/background', $fileName);
        //dd($path);
        

       $about->bg_image = $path;

       $about->save();
       return redirect()->back()->with('aboutmessage','About background Image update Successfully');


    }
} 

  public function postCta(Request $request){
     $request->validate([
          'title'       => 'required',
          'bold_title'  => 'required',
          'phone'       => 'required',
          'details'     => 'required',
         




        ]);

       $cta             = new Cta;

       $cta->title      = $request->title;
       $cta->bold_title = $request->bold_title;
       $cta->phone      = $request->phone;
       $cta->details    = $request->details;
       $cta->save();  
      
        return redirect()->back()->with('message','Cta Created Successfully');


  }


    public function updateCta(Request $request,$id){

        $request->validate([
          'title'       => 'required',
          'bold_title'  => 'required',
          'phone'       => 'required',
          'details'     => 'required',
         




        ]);

       $cta             = Cta::find($id);

       $cta->title      = $request->title;
       $cta->bold_title = $request->bold_title;
       $cta->phone      = $request->phone;
       $cta->details    = $request->details;
       $cta->save();  
      
        return redirect()->back()->with('message','Cta Update Successfully');

    }

    public function postVideo(Request $request){

        $request->validate([
         'v_name' => 'required',
         'v_link' => 'required|url',

        ]);
        $input = $request->all();
        //dd($input);
        Video::create($input);

         return redirect()->back()->with('message','Video Update Successfully');


    }
    public function createTestimonial(Request $request){
         $request->validate([
         
         'author'      =>  'required',
         'designation' =>  'required',
         'details'     =>  'required',
         'clint'       =>  'required',
         


        ]);
        $testimonial  = new Testimonial;
        $testimonial->author       = $request->author;
        $testimonial->designation  = $request->designation;
        $testimonial->details      = $request->details;
        $testimonial->clint        = $request->clint;
        
        $testimonial->save();

       
       return redirect()->back()->with('message','Testimonial create Successfully');
        


    }

    public function postTestimonial(Request $request,$id){
        $request->validate([
         
         'author'      =>  'required',
         'designation' =>  'required',
         'details'     =>  'required',
         'clint'       =>  'required',
         


        ]);

        $testimonial  = Testimonial::find($id);
        $testimonial->author       = $request->author;
        $testimonial->designation  = $request->designation;
        $testimonial->details      = $request->details;
        $testimonial->clint        = $request->clint;
        
        $testimonial->save();

       
        return redirect()->back()->with('message','Testimonial Update Successfully');
        



    }

    public function createSponsor(Request $request){
       $request->validate([
       's_name'       => 'required',
       'sponsor_image'=> 'required'
    

     ]);
        $sponsor = new Sponsor;

        $sponsor->s_name        = $request->s_name;
        $path = '';
        if( $request->hasFile('sponsor_image') ) {
        $file = $request->file('sponsor_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/clients', $fileName);
        // dd($path);
        

      

        
    }
       $sponsor->sponsor_image = $path;
      

       $sponsor->save();
       return redirect()->back()->with('message','Sponsor create Successfully');



    }



    public function postSponsor(Request $request,$id){
     
     $request->validate([
       's_name'       => 'required',
       'sponsor_image'=> 'required'
    

     ]);


       $sponsor = Sponsor::find($id);

        $sponsor->s_name        = $request->s_name;

     
       $sponsor_image = $sponsor->sponsor_image;

       $delete_path   = public_path().'/frontend/images/clients/'.$sponsor_image;

        if(!empty($sponsor_image)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if( $request->hasFile('sponsor_image') ) {
        $file = $request->file('sponsor_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/clients', $fileName);
        // dd($path);
        

      

        
    }
       $sponsor->sponsor_image = $path;
      

       $sponsor->save();
       return redirect()->back()->with('message','Sponsor Update Successfully');



    }
    public function createBlog(Request $request){
         $request->validate([
       'blog_title'       => 'required',
       'blog_discription' => 'required',
       'blog_details'     => 'required',
       'blog_type'        => 'required',
       'blog_author'      => 'required',
       'blog_image'       => 'required'
    

     ]);

        $input = $request->all();
        //dd($input);

        $description=$request->blog_details;
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name="/frontend/images/blog/" . time().$k.'.png';
 
            $path = public_path() . $image_name;
            
            

            file_put_contents($path, $data);
            
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $Blog_details = $dom->saveHTML();

        //dd($description);
        //dd($path);



        $path = '';
        if( $request->hasFile('blog_image') ) {
        $file = $request->file('blog_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/resource/', $fileName);
        //dd($path);
    }
      // $input['blog_image']=$path;

       // Blog::create($input);

    //dd($Blog_details);

       $blog                   = New Blog; 
       $blog->blog_title       = $request->blog_title;
       $blog->blog_discription = $request->blog_discription; 
       $blog->blog_details     = $Blog_details; 
       $blog->blog_type        = $request->blog_type;
       $blog->blog_author      = $request->blog_author;
       $blog->blog_image       = $path;  
       $blog->save();


       return redirect()->back()->with('message','Blog Created');
       

    }

    public function postBlog(Request $request,$id){

       $request->validate([
       'blog_title'       => 'required',
       'blog_discription' => 'required',
       'blog_details'     => 'required',
       'blog_type'        => 'required',
       'blog_author'      => 'required',
      
    
    

     ]);

    //    $input = $request->all();
    //     $path = '';
    //     if( $request->hasFile('blog_image') ) {
    //     $file = $request->file('blog_image');
    //     // Get the Image Name
    //     $fileName = $file->getClientOriginalName();
    //     // Set the Filepath 
    //     $path = $fileName;
    //     // Move the file to the upload Folder
    //     $file = $file->move('frontend/images/resource/', $fileName);
    //     //dd($path);
    // }
    //    $input['blog_image']=$path;

    //    Blog::create($input);

        $blog = Blog::find($id);

        $blog->blog_title         = $request->blog_title;
        $blog->blog_discription   = $request->blog_discription;
        $blog->blog_details       = $request->blog_details;
        $blog->blog_type          = $request->blog_type;
        $blog->blog_author        = $request->blog_author;

        $blog->save();


        return redirect()->back()->with('message','Blog Update Successfully');
       


    }

    public function postBlogLogo(Request $request,$id){

    $request->validate([
          'blog_image' => 'required',
    

     ]);


       $blog = Blog::find($id);

     
       $blog_image = $blog->blog_image;

       $delete_path   = public_path().'/frontend/images/resource/'.$blog_image;

        if(!empty($blog_image)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if( $request->hasFile('blog_image') ) {
        $file = $request->file('blog_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/resource', $fileName);
        // dd($path);
        

      

        
    }
       $blog->blog_image = $path;
      

       $blog->save();
       return redirect()->back()->with('imagemessage','Image Update Successfully');

    }
    public function updateMap(Request $request,$id){
       $request->validate([
         'm_name'     => 'required',
         'm_link'     => 'required',

        ]);
       $map = Map::find($id);

       //dd($map);
       $map->m_name = $request->m_name;
       $map->m_link = $request->m_link;
       $map->save();

       return redirect()->back()->with('message','Map Updated');

    }

     public function postMap(Request $request){

        $request->validate([
         'm_name' => 'required',
         'm_link' => 'required',

        ]);
        $input = $request->all();
        //dd($input);
        Map::create($input);

        return redirect()->back()->with('message','Map Created');

    }

    public function updateChoose(Request $request,$id){
         $request->validate([
          'b_point1'      => 'required',
          'details1'      => 'required',
          'b_point2'      => 'required',
          'details2'      => 'required',
          'b_point3'      => 'required',
          'details3'      => 'required',

        ]);
    
      $updatechoose = Choose::find($id);
      $updatechoose->b_point1 = $request->b_point1;
      $updatechoose->details1 = $request->details1;
      $updatechoose->b_point2 = $request->b_point2;
      $updatechoose->details2 = $request->details2;
      $updatechoose->b_point3 = $request->b_point3;
      $updatechoose->details3 = $request->details3;
      $updatechoose->save();
       return redirect()->back()->with('message','Update Successfully');


    }


    public function postChoose(Request $request){

        $request->validate([
          'b_point1'      => 'required',
          'details1'      => 'required',
          'b_point2'      => 'required',
          'details2'      => 'required',
          'b_point3'      => 'required',
          'details3'      => 'required',

        ]);
        $input = $request->all();
        //dd($input);

        Choose::create($input);

        return redirect()->back()->with('message','Create Successfully');



    }
    public function updateFooter(Request $request,$id){
   
    $request->validate([
       'title'  => 'required',
       'link1'  => 'required',
       'link2'  => 'required',
       'link3'  => 'required',
       'link4'  => 'required',
       'link5'  => 'required',
       
       

      
     

    ]);

    $footerupdate= Footer::find($id);
    $footerupdate->title =$request->title;
    $footerupdate->link1 =$request->link1;
    $footerupdate->link2 =$request->link2;
    $footerupdate->link3 =$request->link3;
    $footerupdate->link4 =$request->link4;
    $footerupdate->link5 =$request->link5;

    $footerupdate->save();

    return redirect()->back()->with('message','Footer Update Successfully');


    }
  public function postfooter(Request $request){

    $request->validate([
       'title'  => 'required',
       'link1'  => 'required',
       'link2'  => 'required',
       'link3'  => 'required',
       'link4'  => 'required',
       'link5'  => 'required',
       
       

      
     

    ]);

    $input= $request->all();

    Footer::create($input);

    return redirect()->back()->with('message','Footer Created');




  }


 public function getStudentTable(){

    $student=Student::paginate(10);
    return view('pages.tables.student-table',compact('student'));
   }

   public function getCustomerTable(){
     $customer=Customer::paginate(10);
    return view('pages.tables.customer-table',compact('customer'));

   }

  public function getServiceTable(){
   
    
    $service = Service::all();
    

    return view('pages.tables.service',compact('service'));



  }

  public function getProjectTable(){

   $project = Project::all();

   return view('pages.tables.project',compact('project'));

  }


  public function getTestimonialTable(){

    $testimonial = testimonial::all();

    return view('pages.tables.testimonial',compact('testimonial'));
    
   }

  public function getsponsorTable(){
  
   $sponsor = Sponsor::all();

   return view('pages.tables.sponsor',compact('sponsor'));

  }
 
 public function getGalleryTable(){
    $gallery  = Gallery::all();

   return view('pages.tables.gallery',compact('gallery'));

 }

 public function createGallary(Request $request){
     $request->validate([
       'gallery_type'       => 'required',
       'gallery_image'      => 'required'
    

     ]);
        $gallery = new Gallery;

        $gallery->gallery_type       = $request->gallery_type;
        $path = '';
        if( $request->hasFile('gallery_image') ) {
        $file = $request->file('gallery_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/gallery', $fileName);
        // dd($path);
        

      

        
    }
      $gallery->gallery_image = $path;
      

      $gallery->save();
       return redirect()->back()->with('message','Gallery create Successfully');

 }

 public function updateGallery(Request $request,$id){
     $request->validate([
       'gallery_type'       => 'required',
       'gallery_image'      => 'required'
    

     ]);
     //dd($request->gallery_type);

        $gallery = Gallery::find($id);
        // dd($gallery);

      
        $gallery_image               = $gallery->gallery_image ;   


         $delete_path = public_path().'/frontend/images/gallery/'.$gallery_image ;
       

        if(!empty($team_images)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           



        $path = '';
        if( $request->hasFile('gallery_image') ) {
        $file = $request->file('gallery_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/gallery', $fileName);
        // dd($path);
        

      

        
    }
      $gallery->gallery_type       = $request->gallery_type;
      $gallery->gallery_image      = $path;
      

      $gallery->save();
       return redirect()->back()->with('message','Gallery create Successfully');


 }

   
    public function getBlogTable(){

        $blog = Blog::all();

        return view('pages.tables.blog',compact('blog'));

    }


    public function getCourseTable(){
        $course =Course::all();
        return view('pages.tables.course',compact('course'));
    }


   //  public function getFooter(){

   //  $sk = Footer::find(6);
   //  // dd($footer->title);
   //  return view('pages.forms.footer',compact('sk'));
   // }


 public function getFooterTable(){
    $footertable = Footer::all()->sortByDesc("id");

    return view('pages.tables.footer',compact('footertable'));


 }


 public function postDetails(Request $request){
    $request->validate([
     'thana'         =>  'required',
     'district'      =>  'required',
     'house_no'      =>  'required',
     'floor_no'      =>  'required',
     'road_no'       =>  'required',
     'sector'        =>  'required',
     'uk_road'       =>  'required',
     'uk_phone'      =>  'required',
     'working_hours' =>  'required'


    ]);

    $input = $request->all();
//    dd($request);
    Detail::create($input);

    return redirect()->back()->with('message','Details Create Successfully');

  }

  public function updateDetails(Request $request,$id){

      $request->validate([
     'thana'         =>  'required',
     'district'      =>  'required',
     'house_no'      =>  'required',
     'floor_no'      =>  'required',
     'road_no'       =>  'required',
     'sector'        =>  'required',
     'uk_road'       =>  'required',
     'uk_phone'       =>  'required',
     'working_hours' =>  'required'


    ]);
     
      $details = Detail::find($id);

      $details->thana         = $request->thana;
      $details->district      = $request->district;
      $details->house_no      = $request->house_no;
      $details->floor_no      = $request->floor_no;
      $details->road_no       = $request->road_no;
      $details->sector        = $request->sector;
      $details->uk_road       = $request->uk_road;
      $details->uk_phone      = $request->uk_phone;
      $details->working_hours = $request->working_hours;
      $details->save();

     return redirect()->back()->with('message','Details update Successfully');




  }


  public function getteamTable(){
   $team = Team::all();
    

    return view('pages.tables.team',compact('team'));


 }
 public function  updateTeam(Request $request,$id){
    $request->validate([
       'name'        => 'required',
       'designation' => 'required',
       'f_link'      => 'required',
       'i_link'      => 'required',
       't_link'      => 'required',
       'l_link'      => 'required',
       
    

     ]);

        //$input = $request->all();
        //dd($input);

        



       $Team                   = Team::find($id); 
       $Team->name             = $request->name;
       $Team->designation      = $request->designation; 
       $Team->f_link           = $request->f_link;
       $Team->i_link           = $request->i_link;
       $Team->t_link           = $request->t_link;
       $Team->l_link           = $request->l_link;
       $Team->save();


       return redirect()->back()->with('message','Team Update Successfully');
       


 }



 public function updateTeamImage(Request $request,$id){
     $request->validate([
           'image'   => 'required',

        ]);


       $team          =Team::find($id);

       $team_image     =  $team->image;

       $delete_path = public_path().'/frontend/images/team/'.$team_image;
       

        if(!empty($team_images)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if($request->hasFile('image') ) {
        $file = $request->file('image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/team', $fileName);
        //dd($path);
        

       $team->image = $path;

       $team->save();

       return redirect()->back()->with('logomessage','Team Image Update Successfully');

    }



 }

 public function createTeam(Request $request){
   $request->validate([
       'name'        => 'required',
       'designation' => 'required',
       'f_link'      => 'required',
       'i_link'      => 'required',
       't_link'      => 'required',
       'l_link'      => 'required',
       'image'       => 'required'
    

     ]);

        $input = $request->all();
        //dd($input);

        



        $path = '';
        if( $request->hasFile('image') ) {
        $file = $request->file('image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/team', $fileName);
        //dd($path);
    }
      // $input['blog_image']=$path;

       // Blog::create($input);

    //dd($Blog_details);

       $Team                   = New Team; 
       $Team->name             = $request->name;
       $Team->designation      = $request->designation; 
       $Team->f_link           = $request->f_link;
       $Team->i_link           = $request->i_link;
       $Team->t_link           = $request->t_link;
       $Team->l_link           = $request->l_link;
       $Team->image            = $path;  
       $Team->save();


       return redirect()->back()->with('message','Team Created');
       


 }


 public function teamRemove($id){
   $team=Team::find($id);
   $team->delete();
   return redirect()->back()->with('error','Team Deleted');

 }



 public function createTeamDetails(Request $request){
     $request->validate([
        'title_name'     => 'required',
        'highlite_name'  => 'required',
        'next_title'     => 'required',
        'team_details'   => 'required',
        'bg_image'       => 'required',
        'team_image'     => 'required',



        ]);
         $input = $request->all();
        // dd($input);


             
        $path = '';
        if( $request->hasFile('bg_image') ) {
        $file = $request->file('bg_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/background', $fileName);
        //dd($path);
    }
       $input['bg_image']=$path;

      $path = '';
        if( $request->hasFile('team_image') ) {
        $file = $request->file('team_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/team', $fileName);
        //dd($path);
    }
     $input['team_image']=$path;
     Teamdetail::create($input);
     return redirect()->back()->with('message',"Team Details Create Successfully");



 }

 public function updateTeamDetail(Request $request,$id){
     $request->validate([
        'title_name'     => 'required',
        'highlite_name'  => 'required',
        'next_title'     => 'required',
        'team_details'   => 'required',
        


        ]);
     //dd($request->all());

     $teamdetail = Teamdetail::find($id);
     $teamdetail->title_name    = $request->title_name;
     $teamdetail->highlite_name = $request->highlite_name;
     $teamdetail->next_title    = $request->next_title;
     $teamdetail->team_details  = $request->team_details;
     $teamdetail->save();

     return redirect()->back()->with('message','Team Details Update Successfully');

 }


 public function updateTeamLogo(Request $request,$id){
      $request->validate([
             'team_image' => 'required',

        ]);


       $teamdetail =Teamdetail::find($id);

       $team_image =  $teamdetail->team_image;

       $delete_path = public_path().'/frontend/images/team/'.$team_image;

        if(!empty($team_image)) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           

        $path = '';
        if( $request->hasFile('team_image') ) {
        $file = $request->file('team_image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/team', $fileName);
        //dd($path);
    }

       $teamdetail->team_image = $path;
       $teamdetail->save();
       return redirect()->back()->with('teammessage','Team Image Update Successfully');

}


public function updateTeamBgLogo(Request $request,$id){
    $request->validate([
             'bg_image' => 'required',

        ]);


       $teamdetail =Teamdetail::find($id);

       $bg_image =  $teamdetail->bg_image;

       $delete_path = public_path().'/frontend/images/background/'.$bg_image;

        if(!empty($bg_image )) {

            if(file_exists($delete_path)) {
                unlink($delete_path);
            }
        }
           


        $path = '';
        if( $request->hasFile('bg_image') ) {
        $file = $request->file('bg_image');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/images/background', $fileName);
        //dd($path);
        

       $teamdetail->bg_image = $path;

       $teamdetail->save();
       return redirect()->back()->with('bgimagemessage','Team background Image update Successfully');


}
}




  

     

    
}