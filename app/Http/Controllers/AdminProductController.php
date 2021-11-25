<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use App\ProductCategory;
use Illuminate\Http\Request;
use DB;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   
    {
       $product = AdminProduct::all();
        return view('pages.tables.admin_product',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p_c = DB::table('product_categories')->where('status', '1')->get();
       // $p_c = ProductCategory::all();
        return view('pages.tables.new_product_add',['p_c'=>$p_c]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_name'       => 'required',
            'short_description'      => 'required',
            'description'      => 'required',
            'regular_price'   => 'required',
            'sale_price'        => 'required',
            'stock_status'       => 'required',
            'quantity'      => 'required',
            'image'             => 'required',
            'category_id'    => 'required',
            'preview_link' => 'required',
 
     ]);
     $input = $request->all();
     $path = '';
     if( $request->hasFile('image') ) {
        $file = $request->file('image');
        // Get the Image Name
        $fileName = $file->getClientOriginalName();
        // Set the Filepath 
        $path = $fileName;
        // Move the file to the upload Folder
        // $file = $file->move('frontend/course', $fileName);
        $file = $file->move('frontend/admin_product', $fileName);
        //dd($path);
    }

    $input['image']=$path;
    // dd($input);
  AdminProduct::create($input);
  return redirect()->back()->with('message','New Product Add Successfully !!');
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
        $p_c = DB::table('product_categories')->where('status', '1')->get();
        $product = AdminProduct::find($id);
        return view('pages.tables.new_product_edit',['p_c'=>$p_c,'product'=>$product]);
        // new_product_edit.blade
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request)
    // {
    //     return $request->all();
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $a_p         =AdminProduct::find($id);
        $p_image     =  $a_p->image;
        $delete_path = public_path().'/frontend/admin_product/'.$p_image;
         if(!empty( $p_image )) {
             if(file_exists($delete_path)) {
                 unlink($delete_path);
             }
         }
        AdminProduct::find($id)->delete();
        return redirect()->back()->with('message','Product Delete Successfully !!');
    }

    public function update(Request $request) {

          $request->validate([
            'product_name'       => 'required',
            'short_description'      => 'required',
            'description'      => 'required',
            'regular_price'   => 'required',
            'sale_price'        => 'required',
            'stock_status'       => 'required',
            'quantity'      => 'required',
           // 'image'             => 'required',
            'category_id'    => 'required',
            'preview_link' => 'required',
 
     ]);

        $imagUrl = $this->checkImageExiststatus($request);
        $product = AdminProduct::find($request->id);
        $product->product_name = $request->product_name;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->stock_status = $request->stock_status;
        $product->quantity = $request->quantity;
        $product->image = $imagUrl;
        $product->preview_link = $request->preview_link;

        
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->back()->with('message','Product Update Successfully !!');
    }

    private function checkImageExiststatus($request) {
        $imageUrl='';
        $productEditByid = AdminProduct::where('id', $request->id)->first();
        $productImage = $request->file('image');


        //************************************ */
        // $a_p         =AdminProduct::find($request->id);
        // $p_image     =  $a_p->image;
        // $delete_path = public_path().'/frontend/admin_product/'.$p_image;
        //  if(!empty( $p_image )) {
        //      if(file_exists($delete_path)) {
        //          unlink($delete_path);
        //      }
        //  }


        //************************************ */
        if ($productImage) {
            $a_p         =AdminProduct::find($request->id);
            $p_image     =  $a_p->image;
            $delete_path = public_path().'/frontend/admin_product/'.$p_image;
             if(!empty( $p_image )) {
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
             $file = $file->move('frontend/admin_product', $fileName);
             //dd($path);
             
     
             $imageUrl = $path;
           
            // $oldimageUrl = $productEditByid->image;
            // unlink($oldimageUrl);
            // $name = $productImage->getClientOriginalName();
            // $uploadPath = 'public/frontend/admin_product';
            // $productImage->move($uploadPath, $name);
            // $imageUrl = $uploadPath . $name;
        }
    } 
        
        
        else {

            $imageUrl = $productEditByid->image;
        }
        return $imageUrl;
    }
}
