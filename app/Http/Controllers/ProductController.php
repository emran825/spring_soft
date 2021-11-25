<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pr_all = AdminProduct::all();
        // return view('wellknown.frontend.product_display',['p_all'=>$pr_all]);
        return view('wellknown.frontend.product_view',['p_all'=>$pr_all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

   
    public function details($id)
    {
        $product_s = AdminProduct::find($id);
        $key_feature  = DB::table('key_features')->where('product_id', $id)->get();
       $feature  = DB::table('features')->where('product_id', $id)->get();
     $preview  = DB::table('preview_products')->where('product_id', $id)->get();
        return view('wellknown.frontend.product_details',['p_all'=> $product_s,'key_feature'=>$key_feature,'feature'=>$feature,'preview'=>$preview]);
    }

   
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
