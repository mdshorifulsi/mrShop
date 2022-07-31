<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkout;
use Session;
use DB;


class CheckoutController extends Controller
{
    public function login_check(){


    	return view('pages.checkout.customer_login');
    }

    public function customer_registration(Request $request){


    	$data=array();
    		$data['customer_name']=$request->customer_name;
    		$data['customer_email']=$request->customer_email;
    		$data['customer_password']=$request->customer_password;
    		$data['customer_phone']=$request->customer_phone;

    		$customer_id=DB::table('customers')
    			->insertGetId($data);
    			Session::put('customer_id',$customer_id);
    			Session::put('customer_name',$request->customer_name);
               
               return Redirect()->route('checkout');



    }



public function checkout(){


	return view('pages.checkout.checkout');

	
}

    public function shipping_details(Request $request){



            $data=array();
        $data['shipping_name']=$request->shipping_name;
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_phone']=$request->shipping_phone;
        $data['shipping_address']=$request->shipping_address;
  
        echo "<pre>";
            print_r($data);
            echo "<pre>";

       $shipping_id= DB::table('shippings')
                    ->insertGetId($data);
                    Session::put('shipping_id',$shipping_id);
                    return Redirect('/payment');
        



    }



    public function customer_login(Request $request){

        $customer_password= $request->customer_password;
        $customer_email=$request->customer_email;

        $result=DB::table('customers')
                ->where('customer_email',$customer_email)
                ->where('customer_password',$customer_password)
                ->first();
                //
                // print_r($result);


                if($result){
                    
                    Session::put('customer_id',$result->customer_id);
                   
                    return Redirect()->route('checkout');

                }else{
                     return Redirect()->route('login_check');
                 

                }
            }


            public function login_logout(){


                Session::flush();
                return Redirect()->route('home');


            }



   






}
