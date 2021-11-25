<?php

namespace App\Http\Controllers;

use App\Customer;
use App\OrderTable;
use App\Productorder;
use App\Shipping;
use Illuminate\Http\Request;
use DB;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = OrderTable::all();
        return view('pages.tables.customer_order_table',['order'=>$order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order_details($id)
    {
        $order_details =  DB::table('productorders')->where('order_id', $id)->get();
        return view('pages.tables.customer_order_details_table',['order_details'=>$order_details]);
    }

    public function shipping_details($id)
    {
       
        $shipping_details = Shipping::find($id);
     
        return view('pages.tables.shipping_details',['shipping_details'=>$shipping_details]);
        
    }

   
    public function update_status(Request $request)
    {
        $data = Shipping::find($request->id);
        //   $data->learns_id = $lidi;
      //  return $data;
          
         
          $data->shipping_status = $request->shipping_status;
        //  return $data->shipping_status;
        
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
    public function dashboard($id)
    {
  $customer =   Customer::find($id);
  $total =number_format(OrderTable::where('customer_id',$id)->sum('order_total'),2);
   $qty  =Productorder::where('customer_id',$id)->sum('product_quentity');


       
        // return $customer =  DB::table('customers')->where('id', 4)->first();
        //  $order_details =  DB::table('order_tables')->where('customer_id', $id)->first();
       
        // $qty =  $order_details->id;
        // $total = number_format(OrderTable::where('customer_id',$id)->sum('order_total'),2);

   
        //    $tqty = Productorder::where('order_id',$qty)->sum('product_quentity');


      
         return view('wellknown.frontend.customer_dashboard',['total_qty'=> $qty,'tpc'=> $total]);
    }
    public function order_show($id){
        $order =     DB::table('order_tables')
        ->join('customers', 'order_tables.customer_id', '=', 'customers.id')
        ->join('shippings', 'order_tables.shipping_id', '=', 'shippings.id')
        ->where('order_tables.customer_id', '=',$id )
        ->select('order_tables.*','order_tables.id as oid',  'customers.*', 'shippings.*')
        ->get();
        return view('pages.tables.customer_order_show',['order'=>$order]);

    }

    public function order_details_show($id){
        $order_details =  DB::table('productorders')->where('order_id', $id)->get();
        return view('pages.tables.customer_order_details_show',['order_details'=>$order_details]);

    }

    public function shipping_details_show($id){
        $shipping_details = Shipping::find($id);
     
        return view('pages.tables.shipping_details_show',['shipping_details'=>$shipping_details]);

    }

    public function profile_update($id){

       return $update_profile = Customer::find($id);
        return view('pages.tables. update_profile.blade',['update_profile'=>$update_profile]);
       
    }
}
