<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    public function manage_order(){





	$all_order=DB::table('orders')
	->join('customers','orders.customer_id','=','customers.customer_id')
   
    ->select('orders.*','customers.customer_name')


      ->get();

	return view('admin.order.manage_order',compact('all_order'));


    }
}
