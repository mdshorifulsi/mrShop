<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;

class PaymentController extends Controller
{
    
    public function payment(){


        return view('pages.payment.payment');
    }


    public function order_place(Request $request){

            $payment_method=$request->payment_method;

                $pdata=array();
                    $pdata['payment_method']=$payment_method;
                    $pdata['payment_status']='pending';
                    $payment_id=DB::table('payments')
                            ->insertGetId($pdata);


                $odata=array();
                    $odata['customer_id']=Session::get('customer_id');
                    $odata['shipping_id']=Session::get('shipping_id');
                    $odata['payment_id']=$payment_id;
                    $odata['order_total']=Cart::total();
                    $odata['order_status']='pending';

                    $order_id=DB::table('orders')
                                ->insertGetId($odata);


            $content=Cart::content();
            $oddata=array();

            foreach ($content as $v_content) {

                $oddata['order_id']=$order_id;
                $oddata['product_id']=$v_content->id;
                $oddata['name']=$v_content->name;
                $oddata['price']=$v_content->price;
                $oddata['product_sales_quantity']=$v_content->qty;

                        DB::table('order_details')
                        ->insert($oddata);
                
            }

if($payment_method=='handcash'){

    
    Cart::destroy();
    return view('pages.payment.handcash');

}

elseif($payment_method=='bkash'){
     Cart::destroy();
    return view('pages.payment.bkash');

}
elseif($payment_method=='cart'){
     Cart::destroy();
    return view('pages.payment.cart');

}
else{
    echo "not select";
}



    }
}
