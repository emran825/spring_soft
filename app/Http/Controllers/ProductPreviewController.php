<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use App\PreviewProduct;
use DB;
use Illuminate\Http\Request;

class ProductPreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = AdminProduct::all();
        $product_feature = PreviewProduct::all();
        return view('pages.tables.preview', ['product' => $product, 'product_feature' => $product_feature]);
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
       
        $check_learn =  DB::table('preview_products')->where('product_id', $request->product_id)->get();
        if ($check_learn->count() > 0) {
            session()->flash('message', 'Please Change Your Product Name And Try Again  !!');
            return redirect()->back();
        } else {
            $p_f = new PreviewProduct();
            $p_f->product_id = $request->product_id;
            $p_f->preview_link = $request->preview_link;
            $p_f->save();
           

           

            session()->flash('message', 'Add Successfully. Thanks !!');
            return redirect()->back();
        }
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
        $product_feature = PreviewProduct::find($id);
       
       
         return view('pages.tables.preview_edit', ['product_feature' => $product_feature]);
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
        $data = PreviewProduct::find($request->id);
              $data->preview_link = $request->preview_link;
            
              $data->update();
              session()->flash('message', 'Your Update is Successfull !!');
              return redirect()->back();   
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
