<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Career;
use App\Applylist;
use Response;
use App\Http\Requests\jobApplyValidate;

class CareerController extends Controller
{
    //

    public function getCareer(){
    	$job = Career::paginate(5);
       $dev=Career::where('job_type','=','development')->count();
       $mar=Career::where('job_type','=','marketing')->count();
       $hr=Career::where('job_type','=','hr')->count();
       $edi  =Career::where('job_type','=','editor')->count();
      

    	return view('wellknown.frontend.career',compact('job','dev','mar','hr','edi'));
    }

    public function getCareerTable(){
    	 

       $career = Career::all();
       return view('pages.tables.career',compact('career'));
    	
    }
    public function postJob(Request $request){
    	$request->validate([
          'job_name'     => 'required',
          'job_details'  => 'required',
          'job_res'      => 'required',
          'p_req'        => 'required',
          'experience'   => 'required',
          'e_req'        => 'required',
          's_range'      => 'required',
          'benifits'     => 'required',
          'job_type'     => 'required'

    	]);
    	$input = $request->all();
    	//dd($input);
        //dd($input);

           

        $job_res=$request->job_res;
        $dom = new \DomDocument();
        $dom->loadHtml($job_res, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        // $images = $dom->getElementsByTagName('img');

        // foreach($images as $k => $img){
        //     $data = $img->getAttribute('src');

        //     list($type, $data) = explode(';', $data);
        //     list(, $data)      = explode(',', $data);
        //     $data = base64_decode($data);

        //     $image_name="/frontend/project/images" . time().$k.'.png';
 
        //     $path = public_path() . $image_name;
            
            

        //     file_put_contents($path, $data);
            
        //     $img->removeAttribute('src');
        //     $img->setAttribute('src', $image_name);
        // }

        $job_res = $dom->saveHTML();


        $p_req=$request->p_req;
        $dom = new \DomDocument();
        $dom->loadHtml($p_req, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); 
        $p_req = $dom->saveHTML(); 
        
        $benifits=$request->benifits;
        $dom = new \DomDocument();
        $dom->loadHtml($benifits, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); 
        $benifits = $dom->saveHTML(); 
 

 






           


         //$input['logo']=$path;
       $job                   = New Career; 
       $job->job_name         = $request->job_name;
       $job->job_details      = $request->job_details; 
       $job->job_type         = $request->job_type ;
       $job->job_res          = $job_res;
       $job->p_req            = $p_req;
       $job->e_req            = $request->e_req;
       $job->benifits         = $benifits;
       $job->experience       = $request->experience;
       $job->s_range          = $request->s_range;
       $job->save();
      return redirect()->back()->with('message','Job Create Succesfully');






    	

    }

    public function jobLiveSearch(Request $request){

    	$job=Career::where('job_name', 'like', '%'.$request->get('searchQuest').'%')->get();

    	
    	return json_encode($job);

    	
    }

    public function getCareerForms($id){

        $job = Career::find($id);
        return view('pages.forms.career',compact('job'));

    }
    public function updateCareerForms(Request $request,$id){
        $request->validate([
          'job_name'     => 'required',
          'job_details'  => 'required',
          'job_res'      => 'required',
          'p_req'        => 'required',
          'experience'   => 'required',
          'e_req'        => 'required',
          's_range'      => 'required',
          'benifits'     => 'required',
          'job_type'     => 'required'

        ]);
       $input = $request->all();
       //dd($input);






           


         //$input['logo']=$path;
       $job                   = Career::find($id); 
       $job->job_name         = $request->job_name;
       $job->job_details      = $request->job_details; 
       $job->job_type         = $request->job_type ;
       $job->job_res          = $request->job_res;
       $job->p_req            = $request->p_req;
       $job->e_req            = $request->e_req;
       $job->benifits         = $request->benifits;
       $job->experience       = $request->experience;
       $job->s_range          = $request->s_range;
       $job->save();
        return redirect()->back()->with('message','Job Update Succesfully');


    }
    public function deleteJob($id){
       Career::find($id)->delete();
       return back()->with('delete','Job Delete Successfully');

    }

    public function jobDetails($id){
        
        $job_details=Career::find($id);

        return view('wellknown.frontend.job-details',compact('job_details'));
    }
    public function jobApply($id){
         $job_id = $id;
        return view('wellknown.frontend.job-apply',compact('job_id'));

    }

    public function postApplyJob(jobApplyValidate $request,$id){
        $request->validated();
        $input = $request->all();
        //dd($input);
          $path = '';

        if( $request->hasFile('resume') ) {
        $file = $request->file('resume');
        // Get the Image Name
        $fileName =time()."-".$file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        $file = $file->move('frontend/resume', $fileName);
        //dd($path);
    }


   $apply               = new Applylist;
   $apply->name         = $request->name;
   $apply->email        = $request->email;
   $apply->pev_job_role = $request->role;
   $apply->gender       = $request->gender;
   $apply->city         = $request->city;
   $apply->contact      = $request->contact;
   $apply->resume       = $path;
   $apply->job_id       = $id;
   $apply->save();
   return redirect()->back()->with('message','Job Apply Succesfully Submitted');


    }
    public function pdfView($id){

        $applylist=Applylist::find($id);
        $filename=$applylist->resume;
        $path= 'frontend/resume/'. $filename;
       // dd($path);
        return response()->file($path);

    }

    public function getApplyList(){
       
     $list = DB::table('careers')
            ->join('applylists', 'careers.id', '=', 'applylists.job_id')
            ->select('careers.job_name', 'applylists.*')
            ->paginate(10);
        
          //dd($list);
        return view('pages.tables.applylist',compact('list'));
    }
}
