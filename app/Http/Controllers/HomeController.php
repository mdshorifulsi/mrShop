<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacture;
use Session;
use DB;

class HomeController extends Controller
{
    
    public function index(){

		$product=Product::latest()->get();


		return view('pages.home_content',compact('product'));
    }


    public function product_by_category($id){


    		$product_by_category=DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->select('products.*','categories.name')

            ->where('categories.id',$id)
             ->limit(8)
           
            ->get();

		return view('pages.category.show_category',compact('product_by_category'));



    }



    public function product_by_manufacture($id){

        $product_by_manufacture=DB::table('products')
            ->join('manufactures','products.manufacture_id','=','manufactures.id')
            ->select('products.*','manufactures.name')

            ->where('manufactures.id',$id)
             ->limit(8)
           
            ->get();

        return view('pages.manufacture.show_manufacture',compact('product_by_manufacture'));



    }


    public function view_product($id){

      $product=Product::find($id);
        
        return view('pages.product.product_details',compact('product'));


    }

}
