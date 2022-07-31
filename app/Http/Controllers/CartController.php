<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use Cart;
use App\Category;

class CartController extends Controller
{
    

    public function add_cart(Request $request){

    	$qty=$request->qty;
    	$id=$request->id;

    	$product_info=Product::where('id',$id)
    		->first();

    		// echo"<pre>";
    		// print_r($product_info);

    		// echo"</pre>";

    		$data['qty']=$qty;
    		$data['id']=$product_info->id;
    		$data['name']=$product_info->name;
    		$data['price']=$product_info->price;
    		$data['weight']=[0][0];
    		$data['options']['image']=$product_info->image;

    		Cart::add($data);
    		return Redirect()->route('show_cart');



    }


    public function show_cart(){


    	$all_category=Category::get();

    	return view('pages.cart.add_cart',compact('all_category'));
    }


     public function delete_cart($rowId){

        Cart::update($rowId,0);

            return redirect()->back();

    }

    public function update_cart(Request $request){

    		$qty=$request->qty;
			$rowId=$request->rowId;

	// echo $qty;
	// echo "<br>";
	// echo $rowId;
	Cart::update($rowId,$qty);
    	return Redirect()->route('show_cart');

    }
}

