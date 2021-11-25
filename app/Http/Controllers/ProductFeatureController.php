<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use App\Feature;
use App\ProductFeature;
use Illuminate\Http\Request;
use DB;

class ProductFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = AdminProduct::all();
        $product_feature = ProductFeature::all();
        return view('pages.tables.feature', ['product' => $product, 'product_feature' => $product_feature]);
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
        $check_learn =  DB::table('product_features')->where('product_id', $request->product_id)->get();
        if ($check_learn->count() > 0) {
            session()->flash('message', 'Please Change Your Product Name And Try Again  !!');
            return redirect()->back();
        } else {
            $p_f = new ProductFeature();
            $p_f->product_id = $request->product_id;
            $p_f->save();
            $p_id =  $p_f->id;

            foreach ($request->product_features as $key => $product_features) {
                $data = new Feature();
                $data->product_features = $product_features;
                $data->product_id =  $request->product_id;
                $data->product_features_id = $p_id;
                $data->save();
            }

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

    public function edit($id)
    {
        $product_feature = ProductFeature::find($id);
        $f_id = $product_feature->id;
        $features      = DB::table('features')->where('product_features_id',  $f_id)->get();
       
         return view('pages.tables.feature_edit', ['product_feature' => $product_feature, 'features' => $features]);
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
        foreach ($request->features_id as $key => $features_id) {
               
            $data = Feature::find($features_id);
           
               $data->id = $features_id;
             
              $data->product_features = $request->product_features[$key];
            
              $data->update();
          }
        session()->flash('message', 'Your Update is Successfull !!');
        return redirect()->back();   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Whylearn::where('learns_id', $id)->delete();

        $product_feature = ProductFeature::find($id);

        $product_feature->delete();

        session()->flash('message', 'Delete Successfully. Thanks !!');
        return redirect()->back();
    }
}
