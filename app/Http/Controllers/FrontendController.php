<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Header;
use App\Navbar;
use App\Service;
use App\Banner;
use App\About;
use App\Cta;
use App\Video;
use App\Project;
use App\Testimonial;
use App\Sponsor;
use App\Consulation;
use App\Blog;
use App\Detail;
use App\Choose;
use App\Footer;
use App\Contact;
use App\Map;
use Mail;
use App\Order;
use App\Team;
use App\Subcribe;
use App\Teamdetail;
use App\Gallery;
use App\BlogComment;


class FrontendController extends Controller
{
 
	// // Create FrontPage method & page For User
 //    public function index()
 //    {
 //    	return view('frontend.index');
 //    }
 //    // Create CartPage method & page For User
 //    public function cartpage()
 //    {
 //    	return view('frontend.cart');
 //    }
 //    // Create Checkout method & page For User
 //    public function frontcheckout()
 //    {
 //    	return view('frontend.checkout');
 //    }



     public function index(){

        //$header      = Header::latest()->first();
        //$header = Header::all();
        //dd($header->email);
        //$nav         =Navbar::latest()->first();
        //dd($nav);
        $banner      = Banner::orderBy('id', 'desc')->take(3)->get();
         //dd($banner);
        $about       = About::latest()->first();
        $cta         =Cta::latest()->first();
        $service     =Service::orderBy('id','desc')->take(8)->get();;
        $video       = Video::latest()->first();
        $project     = Project::orderBy('id','desc')->take(3)->get();
        $testimonial = Testimonial::all();
        // dd($testimonial->author);
        $clint       = Testimonial::latest()->first();
        $clint       = $clint->clint;
        // dd($clint);
        $sponsor     =Sponsor::all();
        //dd($sponsor);
        // $tt=$testimonial->created_at->diffForHumans();
        $business_blog        = Blog::where('blog_type', '=', 'business')->latest()->first();
        $tips_blog            = Blog::where('blog_type', '=', 'tips')->latest()->first();
         $bank_blog           = Blog::where('blog_type', '=', 'bank')->latest()->first();
        //dd($blog);
        //$db          =DB::table('blogs')->select('col3')->get();
        //dd($db);

        $choose      = Choose::latest()->first();

        //$footer      = Footer::orderBy('id','desc')->take(3)->get();
       
    
       return view("wellknown.frontend.index",compact('banner','about','cta','service','video','project','testimonial','clint','sponsor','business_blog','tips_blog','bank_blog','choose'));
   }
   public function about(){
     
         //$header = Header::latest()->first();
          //$nav   =Navbar::latest()->first();
        //dd($nav);
         $banner = Banner::orderBy('id', 'desc')->take(3)->get();
         $about  = About::latest()->first();
         //$footer      = Footer::orderBy('id','desc')->take(3)->get();
        // $team   = Team::all();
    

      return view("wellknown.frontend.about",compact('banner','about'));
   }

   public function subscribePost(Request $request){
    $request->validate([
     'email' => 'required|unique:Subcribes,email'
    ],[

      'email.unique' => 'You Alredy  Subscribe'

    ]);

    //dd($request->email);
    $subscribe = new Subcribe;
    $subscribe->email = $request->email;
    $subscribe->save();


 return redirect()->back()->with('subscribemessage','Subscribe Successfully');



   }

   public function getSubscribeList(){
    $subcribe = Subcribe::paginate(10);
    return view('pages.tables.subscribe',compact('subcribe'));
   }
   public function blog_detail($id){
         // $title = $name;
         //dd($title);
          //$header = Header::latest()->first();
          //$nav   =Navbar::latest()->first();
          $blog_detail     = Blog::find($id);
          //dd($blog_detail->blog_title);
          $blog_title      = strtolower($blog_detail->blog_title);
          $blog_type       = $blog_detail->blog_type;
          //dd($blog_title);
          $relatedpost     = Blog::where('blog_type','=',$blog_type)->where('blog_title','!=',$blog_title)->latest()->take(2)->get();
          //dd($relatedpost);
          //$blog        = Blog::all();
          //$footer      = Footer::orderBy('id','desc')->take(3)->get();
           $recent_blog = Blog::latest()->take(3)->get();
          //dd($recent_blog);
          $business     = Blog::where('blog_type','=','business')->count();
          $tips    = Blog::where('blog_type','=','tips')->count();
          $bank    = Blog::where('blog_type','=','bank')->count();
          $other   = Blog::where('blog_type','=','other')->count();
          $all=$business+ $tips+$bank+$other;
       return view("wellknown.frontend.blog-detail",compact('blog_detail','recent_blog','business','tips','bank','other','all','relatedpost'));
   }

   public function blogSearch(Request $request){
    $blog_title=$request->input('search-field');
    $blog =Blog::query()
   ->where('blog_title', 'LIKE', "%{$blog_title}%")
   ->paginate(3);;
   //dd($blog);

     $recent_blog = Blog::latest()->take(3)->get();
          //dd($recent_blog);
          $business    = Blog::where('blog_type','=','business')->count();
          $tips    = Blog::where('blog_type','=','tips')->count();
          $bank    = Blog::where('blog_type','=','bank')->count();
          $other    = Blog::where('blog_type','=','other')->count();
          $all=$business+ $tips+$bank+$other;
         // dd($business);
          //$footer      = Footer::orderBy('id','desc')->take(3)->get();
          return view("wellknown.frontend.blog_search",compact('recent_blog','blog','business','tips','bank','other','all'));
         
     



   }

   public function blogCategori($type){

          $blog        = Blog::where('blog_type','=',$type)->paginate(3);
          $recent_blog = Blog::latest()->take(3)->get();
          //dd($recent_blog);
          $business    = Blog::where('blog_type','=','business')->count();
          $tips    = Blog::where('blog_type','=','tips')->count();
          $bank    = Blog::where('blog_type','=','bank')->count();
          $other    = Blog::where('blog_type','=','other')->count();
          $all=$business+ $tips+$bank+$other;

    return view('wellknown.frontend.blog_categori',compact('recent_blog','blog','business','tips','bank','other','all'));

      

   }
   public function blog(){
          //$header = Header::latest()->first();
          //$nav   =Navbar::latest()->first();
          $blog        = Blog::paginate(3);
          $recent_blog = Blog::latest()->take(3)->get();
          //dd($recent_blog);
          $business    = Blog::where('blog_type','=','business')->count();
          $tips    = Blog::where('blog_type','=','tips')->count();
          $bank    = Blog::where('blog_type','=','bank')->count();
          $other    = Blog::where('blog_type','=','other')->count();
          $all=$business+ $tips+$bank+$other;
         // dd($business);
          //$footer      = Footer::orderBy('id','desc')->take(3)->get();
          return view("wellknown.frontend.blog",compact('recent_blog','blog','business','tips','bank','other','all'));
         
         
   }
   public function contact(){

       $our_details = Detail::latest()->first();

       return view("wellknown.frontend.contact",compact('our_details'));
   }
   public function project(){
       $header = Header::latest()->first();
       $nav    =Navbar::latest()->first();
        //dd($nav);
       $banner = Banner::orderBy('id', 'desc')->take(3)->get();
       $project= Project::all();
       $footer      = Footer::orderBy('id','desc')->take(3)->get();

       return view("wellknown.frontend.project",compact('header','nav','banner','project','footer'));
   }
   public function service_detail($id){
     
       $header          = Header::latest()->first();
        //$header = Header::all();
        //dd($header->email);
        $nav            =Navbar::latest()->first();
        //dd($nav);
        $banner         = Banner::orderBy('id', 'desc')->take(3)->get();
        $footer         = Footer::orderBy('id','desc')->take(3)->get();

        $service_detail = Service::find($id);

       


       return view("wellknown.frontend.service-detail",compact('header','nav','banner','service_detail','footer'));
   }

   public function project_detail($id){

          

           $header         = Header::latest()->first();
           //$header = Header::all();
           //dd($header->email);
           $nav            =Navbar::latest()->first();
           $footer         = Footer::orderBy('id','desc')->take(3)->get();
           $project_detail = Project::find($id);

      return view('wellknown.frontend.project-details',compact('header','nav','footer','project_detail'));

   }
   public function service(){

       $service =Service::all();

       $header  = Header::latest()->first();
        //dd($service);
       $sponsor =Sponsor::all();
       $banner  = Banner::orderBy('id', 'desc')->take(3)->get();
       $nav     =Navbar::latest()->first();
      $footer   = Footer::orderBy('id','desc')->take(3)->get();
       return view("wellknown.frontend.service",compact('header','service','nav','banner','footer','sponsor'));
   }

   public function postContact(Request $request){
       $request->validate([
         'name'     => 'required',
         'email'    => 'required',
         'subject'  => 'required',
         'message'  => 'required'
         

       ]);


       $inputs = $request->all();
      // dd($inputs['email']);
    // $inputs = [
    //  'name' =>$request->input['name'],
    //  'email' =>$request->input['email'],
    //  'subject' =>$request->input['subject'],
    //  'message' =>$request->input['message']


    // ];

       Mail::send([],$inputs, function ($mail) use($inputs){
         $mail->from($inputs['email'],$inputs['name'])
          ->to('sabakur12360@gmail.com','Sabakur')
             ->subject($inputs['subject'])
    // here comes what you want
                ->setBody($inputs['message']); // assuming text/plain
    // or:
     // for HTML rich messages
});
     
       Contact::create($inputs);
       //return redirect()->back();
       return redirect()->back()->with('message','Mail Sent');


   }

    public function getContact(){

        $contact = Contact::paginate(10);
        return view('pages.tables.contact-table',compact('contact'));


    }   




   public function indexPost(Request $request){

      $request->validate([
        'name'   => 'required',
        'phone'  => 'required|numeric',
        'select' => 'required',
        'message'=> 'required',


      ]);
      //$input = $request->all();


       $consulation           = new Consulation;

       $consulation->name     = $request->name;
       $consulation->phone    = $request->phone;
       $consulation->topic    = $request->select;
       $consulation->message  = $request->message;

      $consulation->save();


      //dd($input);

     
      return redirect()->back()->with('message','Consulation Request Submited');



   }

   public function getConsulation(){

    $consulation = Consulation::paginate(10);

    return view('pages.tables.consulation_table',compact('consulation'));
   }


   public function getBannerTable(){
    $banner = Banner::all()->sortByDesc("id");

    return view('pages.tables.banner-table',compact('banner'));

   }

   public function getBannerForm($id){
     
     $banner = Banner::find($id);

     return view('pages.forms.banner',compact('banner'));


   }

   public function getHeaderForm(){
    $header = Header::latest()->first();

    return view('pages.forms.header',compact('header'));
   }

   public function getNavForm(){

    $nav = Navbar::latest()->first();
    //dd($nav);

    return view('pages.forms.nav',compact('nav'));
   }

   public function getServiceForm($id){
     $service = Service::find($id);

     return view('pages.forms.service',compact('service'));


   }

    public function getProjectForm($id){

    $project = Project::find($id);
    
    return view('pages.forms.project',compact('project'));

   }
   public function getTestimonialForm($id){
    $testimonial= Testimonial::find($id);
    return view('pages.forms.testimonial',compact('testimonial'));

   }

   public function getSponsorForm($id){

    $sponsor = Sponsor::find($id);
    return view('pages.forms.sponsor',compact('sponsor'));

   }

   public function getBlogForm($id){
    $blog = Blog::find($id);
    return view('pages.forms.blog',compact('blog'));

   }

   public function getAboutForm(){
    $about =About::latest()->first();

    return view('pages.forms.about',compact('about'));
   }
   public function getCta(){
    $cta =Cta::latest()->first();

    return view('pages.forms.cta',compact('cta'));


   }

   public function getVideo(){

    $video = Video::latest()->first();
    //dd($video);
    return view('pages.forms.video',compact('video'));
   }
   public function getContactForm(){

    $contact = Detail::latest()->first();
   
    return view('pages.forms.contact',compact('contact'));


   }

 public function getFooterForm($id){
  $sk = Footer::find($id);
  return view('pages.forms.footer',compact('sk'));
 }

 public function gettMap(){
   
    $map=Map::latest()->first();

    return view('pages.forms.map',compact('map'));
 }
 
 public function getChoose(){
  $chooseus = Choose::latest()->first();

  return view('pages.forms.whychooseus',compact('chooseus'));

 }
 public function getEnrollList(){
    
   // $list=DB::select( DB::raw("SELECT * FROM enrolls INNER JOIN courses ON enrolls.course_id=courses.id") );
   ///dd($data);
   // foreach ($data as $all) {
   //   # code...
   //   return $all->course_name;
   // }
   $list= Order::paginate(5);
   ///dd($data);
   // foreach ($data as $all) {
   //   # code...
   //   return $all->course_name;
   // }

  return View('pages.tables.enroll',compact('list'));


  //return View('pages.tables.enroll',compact('list'));


    // $enroll=Course::find(1);

    // return $enroll;
    //dd($enroll);
    // foreach ($enroll as $data) {
    //   # code...
      
    //    $course = Endoll::find($data->course_id)->course;
    // }

  }

  public function geTeamForm($id){
    $team = Team::find($id);
    //dd($team);
  return view('pages.forms.team',compact('team'));

  }

  public function getGallery(){

    $events   = Gallery::where('gallery_type', '=', 'events')->get()->all();


    $seminar1 = Gallery::where('gallery_type','=', 'seminar1')->latest()->first();
    //dd($seminar1);
    $seminar2 = Gallery::where('gallery_type','=', 'seminar2')->latest()->first();
    $seminar3 = Gallery::where('gallery_type','=', 'seminar3')->latest()->first();

//award

     $award1 = Gallery::where('gallery_type','=', 'award1')->latest()->first();
    //dd($seminar1);
    $award2 = Gallery::where('gallery_type','=', 'award2')->latest()->first();
    $award3 = Gallery::where('gallery_type','=', 'award3')->latest()->first();
    $award4 = Gallery::where('gallery_type','=', 'award4')->latest()->first();
    $award5 = Gallery::where('gallery_type','=', 'award5')->latest()->first();
    $award6 = Gallery::where('gallery_type','=', 'award6')->latest()->first();


    //dd($seminar);
    return view('wellknown.frontend.gallery',compact('events','seminar1','seminar2','seminar3','award1','award2','award3','award4','award5','award6'));
  }
 public function getTeam(){
    $team       = Team::all();
    $teamdetail = Teamdetail::latest()->first();

  return view('wellknown.frontend.team',compact('team','teamdetail'));
 }

 public function getTeamDetails(){
   $teamdetail =Teamdetail::latest()->first();
  return view('pages.forms.team_details',compact('teamdetail'));
 }

 public function getGalleryForm($id){
   $gallery = Gallery::find($id);
    //dd($team);
  return view('pages.forms.gallery',compact('gallery'));

 }
 public function blogComments(Request $request,$name){
 // dd($name);

      $request->validate([
        'name'     => 'required',
        'email'    => 'required',
        'subject'  => 'required',
        'comments' => 'required',


      ]);
      //$input = $request->all();


       $blog             = new BlogComment;

       $blog->name       = $request->name;
       $blog->email      = $request->email;
       $blog->subject    = $request->subject;
       $blog->blog_name  = $name;
       $blog->comments   = $request->comments;

       $blog->save();


      //dd($input);

     
      return redirect()->back()->with('message','blog Comments Submited');



 }
 public function getblogComments(){
 
  $comments =BlogComment::paginate(10);

  return view('pages.tables.blog-comments',compact('comments'));
 }
}
