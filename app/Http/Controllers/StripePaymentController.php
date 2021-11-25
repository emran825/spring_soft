<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use App\OrderPayment;
use App\OrderTable;
use App\Productorder;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
// use Session;
use Stripe;
use Cart;
use Stripe\Token as StripeToken;
// use Stripe\Token as StripeToken;
//use TheSeer\Tokenizer\Token;

use Symfony\Component\CssSelector\Parser\Token;

class StripePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function stripePost(Request $request)
    {
    
     // return $request->all();
       // $t = (int)$request->g_t;
        $t  = (float) str_replace(',', '', $request->g_t);
     //return  $t;
        // dd($request);

         Stripe\Stripe::setApiKey('sk_test_51IsMpzBKEgzbLhPrGmzhn9sFoFvsXVTe6Ln6KtDGA2ylzDWxVUrbQ21oWdf5UjsP8NXJtFp0mGC8PMOXaVAD7J0i00Pfu8bzUF');
         $token = StripeToken::create([
            'card' =>[
                'number' =>request('card_num'),
                'exp_month'=>request('e_m'),
                'exp_year'=>request('e_y'),
                'cvc' =>request('cvc')
            ]
         ]);
        \Stripe\Charge::create(
            [
                // "amount" =>$t*100 ,
                "amount" =>$t*100,
            "currency" => "usd",
            "source" =>$token['id'], // obtained with Stripe.js
            "description" => "Test payment." 
            ]);

        
            session()->flash('message', 'Add Successfully. Thanks !!');
           
       //  dd($token['id']);

        // Stripe\Stripe::setApiKey('sk_test_51IsMpzBKEgzbLhPrGmzhn9sFoFvsXVTe6Ln6KtDGA2ylzDWxVUrbQ21oWdf5UjsP8NXJtFp0mGC8PMOXaVAD7J0i00Pfu8bzUF');
        // Stripe\Charge::create ([
        //         "amount" => 100 * 100,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Test payment from itsolutionstuff.com." 
        // ]);
  
        // Session::flash('success', 'Payment successful!');
        //******************************Payment*************************************** */
        // $shipping = new Shipping();
        // $shipping->fname = $request->fname;
        // $shipping->lname = $request->lname;
        // $shipping->email = $request->email;
        // $shipping->phone = $request->phone;
        // $shipping->country = $request->country;
        // $shipping->add = $request->add;
        // $shipping->zip_code = $request->zip_code;
        // $shipping->city = $request->city;
        // $shipping->save();
        // Session::put('shipping_id',$shipping->id);
        $a  = Cart::total();
          $val = (float)str_replace(',','',$a);
          
          //
          
        $order_table = new OrderTable();
        $order_table->customer_id = Session::get('customer_id');
        $order_table->shipping_id = Session::get('shipping_id');
        $order_table->order_total =  $val; 
        $order_table->save();


        $payment = new OrderPayment();
        $payment->order_id =  $order_table->id;
        $payment->payment_type = $request->payment_type;
        $payment->save();











        $cartproduct =Cart::content();
        foreach($cartproduct as $cartproduct){
           $productorder = new Productorder();
           $productorder->order_id =  $order_table->id;
           $productorder->customer_id =   Session::get('customer_id');
           $productorder->product_id =$cartproduct->id;
           $productorder->product_name = $cartproduct->name;
           $productorder->product_price =$cartproduct->price;
           $productorder->product_quentity =$cartproduct->qty;
           $productorder->save();
           $product = AdminProduct::find($cartproduct->id);
           $product_qty = $product->quantity;
           $new_product = ( $product_qty-$cartproduct->qty);
           $product->quantity =  $new_product;
           $product->update();



        }
        Cart::destroy();
     //   return  $cartproduct;
          
        // return "Payment Success !!";

         return redirect()->route('stripe.success');
    }

   
    public function shippingAdd(Request $request)
    {
        $this->validate($request, [
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required|email',
           // 'phone'=>  'required|min:11|max:11|regex:/^[0-9][0-9]{11}$/ ',
            'phone'=>  'required|regex:/^[0-9]{11}+$/',
            'country'=> 'required',
            'add'=> 'required',
            'zip_code'=> 'required',
            'city'=> 'required'
           
           
         ]);

        $shipping = new Shipping();
        $shipping->fname = $request->fname;
        $shipping->lname = $request->lname;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->country = $request->country;
        $shipping->add = $request->add;
        $shipping->zip_code = $request->zip_code;
        $shipping->city = $request->city;
        $shipping->save();
        Session::put('shipping_id',$shipping->id);
        return redirect()->route('product.payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        return view('wellknown.frontend.stripe_success');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
