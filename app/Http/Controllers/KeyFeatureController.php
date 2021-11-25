<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use App\KeyFeature;
use App\ProductKey;
use DB;
use Illuminate\Http\Request;

class KeyFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = AdminProduct::all();
        $product_feature = ProductKey::all();
        return view('pages.tables.key_feature', ['product' => $product, 'product_feature' => $product_feature]);
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
        $check_product_keys=  DB::table('product_keys')->where('product_id', $request->product_id)->get();
        if ($check_product_keys->count() > 0) {
            session()->flash('message', 'Please Change Your Product Name And Try Again  !!');
            return redirect()->back();
        } else {
            $p_f = new ProductKey();
            $p_f->product_id = $request->product_id;
            $p_f->save();
            $p_id =  $p_f->id;

            foreach ($request->key_features as $key => $key_features) {
                $data = new KeyFeature();
                $data->key_features = $key_features;
                $data->product_id =  $request->product_id;
                $data->product_keys_id = $p_id;
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
        $product_feature = ProductKey::find($id);
        $f_id = $product_feature->id;
        $features      = DB::table('key_features')->where('product_keys_id',  $f_id)->get();
       
         return view('pages.tables.key_feature_edit', ['product_feature' => $product_feature, 'features' => $features]);
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
               
            $data = KeyFeature::find($features_id);
           
               $data->id = $features_id;
             
              $data->key_features = $request->key_features[$key];
            
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

        $product_feature = ProductKey::find($id);

        $product_feature->delete();

        session()->flash('message', 'Delete Successfully. Thanks !!');
        return redirect()->back();
    }
}
