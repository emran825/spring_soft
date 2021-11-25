<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p_cate = ProductCategory::all();
        return view('pages.tables.admin_category',['p_cat'=> $p_cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|unique:product_categories',
           
            'status'=>'required', 
         ]);
        //  $request->all();
         $category = new ProductCategory();
         $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
         $category->status = $request->status;
        $save =  $category->save();
        if($save>0){
            session()->flash('message', 'Category Add Successfully  !!');
            return redirect()->back();
        }
        else{
            session()->flash('message', 'Please Change Your Course Name And Try Again  !!');
            
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return view('pages.tables.new_p_category_add');
        
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
    public function delete($slug)
    {
        DB::table('product_categories')->where('slug', $slug)->delete();
     
        session()->flash('message', 'Delete Successfully !!');
            
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = ProductCategory::find($request->id);
        //   $data->learns_id = $lidi;
           $data->slug =  Str::slug($request->name,'-');
         
          $data->status = $request->status;
        
          $data->update();
          session()->flash('message', 'Update Successfully !!');
            
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
       $p_c =  DB::table('product_categories')->where('slug', $slug)->first();
       return view('pages.tables.new_p_category_edit',['p_c'=>$p_c]);
      
    }
}
