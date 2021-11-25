<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Content;
use App\Course;
use App\Learn;
use App\Learncontent;
use App\Whylearn;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContentController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       //
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function getBannerTable()
   {
       $banner = Banner::all()->sortByDesc("id");

       $learns = DB::table('learncontents')
           ->join('courses', 'learncontents.course_id', '=', 'courses.id')
           ->select('learncontents.*', 'courses.course_name')
           ->get();

       $course = Course::all();
       $course2 = Course::all();

       // return view('pages.tables.why_learn_course',compact('banner','course'));
       return view('pages.tables.why_learn_course_content', ['course2' => $course2, 'course' => $course, 'learns' => $learns]);
   }
   public function create()
   {
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

       $check_learn =  DB::table('learncontents')->where('course_id', $request->course_id)->get();
       if ($check_learn->count() > 0) {
           session()->flash('message', 'Please Change Your Course Name And Try Again  !!');
           return redirect()->back();
       } else {
           $learn = new Learncontent();
           $learn->course_id = $request->course_id;
           $learn->save();
           $learn_id =  $learn->id;
           
           foreach ($request->course_content as $key => $course_content) {
               $data = new Content();
               $data->course_content = $course_content;
               $data->course_id = $request->course_id;
               $data->learncontents_id  = $learn_id;
               $data->save();
           }
          
           session()->flash('message', 'Add Successfully. Thanks !!');
           return redirect()->back();
       }


   }

   public function delete($id)
   {
   Content::where('learncontents_id', $id)->delete();

       $learn = Learncontent::find($id);

       $learn->delete();
     
       session()->flash('message', 'Delete Successfully. Thanks !!');
       return redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      
       $learn = Learncontent::find($id);
       
       $course_id =  $learn->course_id;

       $whylearns  = DB::table('contents')->where('learncontents_id', $id)->get();
       




       // $course = Course::all();
    // $course = DB::table('learncontents')
    // ->join('courses', 'learncontents.course_id', '=', 'courses.id')
    // ->select('learncontents.*', 'courses.*')
    // ->get();

    $course = DB::table('learncontents')
    ->join('courses', 'learncontents.course_id', '=', 'courses.id')
     ->where('learncontents.id',$id )
    ->select('learncontents.*', 'courses.*')
   
    
    ->first();




       // return view('pages.tables.why_learn_course',compact('banner','course'));
       return view('pages.tables.why_learn_course_content_edit', ['course' => $course, 'whylearns' => $whylearns, 'learn' => $learn]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
//    public function update(Request $request)
//    {
//        $check_learn =  DB::table('learns')->where('course_id', $request->course_id)->first();
//        $cid = $check_learn->course_id;
//        if( $cid != $request->course_id){
//            session()->flash('message', 'You Never Change Your Course Name !!');
//            return redirect()->back();
//        }
//       else{
//        $id = $request->id;
//        $learn = Learn::find($id);
//        $lid =  $learn->id;
//        $learn->course_id = $request->course_id;
//        $learn->update();
//        $lidi =  $learn->id;

      

//        foreach ($request->why_id as $key => $why_id) {
//            $data = new Whylearn();
//            $data->learns_id = $lidi;
//            $data->id = $why_id;
          
//            $data->why_learn = $request->why_learn[$key];
         
//            $data->save();
//        }
     




//        session()->flash('message', 'Your Update is Successfull !!');
//        return redirect()->back();
//       }
      
//    }





//    public function update(Request $request)
//     {
//         $check_learn =  DB::table('learncontents')->where('course_id', $request->course_id)->first();
        
       
//         if ($check_learn->course_id == $request->course_id) {

//             $id = $request->id;
//             $learn = Learncontent::find($id);
//             $lid =  $learn->id;
//             $learn->course_id = $request->course_id;
//             $learn->update();
//             $lidi =  $learn->id;
//             foreach ($request->why_id as $key => $why_id) {
               
//                   $data = Content::find($why_id);
//                   $data->learns_id = $lidi;
//                    $data->id = $why_id;
                 
//                   $data->course_content = $request->why_learn[$key];
                
//                   $data->update();
//               }
//             session()->flash('message', 'Your Update is Successfull !!');
//             return redirect()->back();   
//         }
//        else{
//             session()->flash('message', 'Please Change Your Course Name And Try Again  !!');
//             return redirect()->back();
//        }
       
//     }





public function update(Request $request)
    {
     
            foreach ($request->why_id as $key => $why_id) {
               
                  $data = Content::find($why_id);
                //   $data->learns_id = $lidi;
                   $data->id = $why_id;
                 
                  $data->course_content = $request->why_learn[$key];
                
                  $data->update();
              }
            session()->flash('message', 'Your Update is Successfull !!');
            return redirect()->back();   
      
      
       
    }




 
   public function updateProductCategory(Request $request, $id)
   {


       if ($request->hasFile('imageEdit')) {
           $edit_img = $request->file('imageEdit');
           $edit_photo_uname = md5(time() . rand()) . '.' . $edit_img->getClientOriginalExtension();
           $edit_img->move(public_path('uploads/product/category'), $edit_photo_uname);
       } else {
           $photo = \App\Brand::find($id);
           $edit_photo_uname = $photo->image;
       }

       $edit_data = \App\Brand::find($id);
       $edit_data->name = $request->brand_nameEdit;
       $edit_data->is_active = $request->statusEdit;
       $edit_data->category_id = $request->category_id;
       $edit_data->image = $edit_photo_uname;


       $edit_data->update();
       return response()->json('Updated');
   }
}
