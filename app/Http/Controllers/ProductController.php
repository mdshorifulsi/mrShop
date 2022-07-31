<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacture;
use Session;
use DB;

class ProductController extends Controller
{
    


	public function index(){

		$product=Product::get();
		return view('admin.product.index',compact('product'));


	}


    public function create(){


    	return view('admin.product.create');
    }

    public function store(Request $request){



    		$validatedData=$request->validate([

    	'name' => 'required|max:300|min:2',
        'image' => 'nullable|image',
        'description' => 'required|max:500|min:5',
        'price' => 'required',
        'publication_status' => 'required',
        

    	]);


    	$product=new Product;


    	$product->name=$request->name;
    	$product->category_id=$request->category_id;
    	$product->manufacture_id=$request->manufacture_id;
    	$product->price=$request->price;
    	$product->description=$request->description;
    	$product->publication_status=$request->publication_status;

    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$product->image=$request->file('image')->move("storage/images",$name);	

    	}

    	$product->save();
			   Session::put('msg','<div class="alert alert-success">
			  <strong>Success!</strong> Product Insert Successfully compalte.
			</div>');
		return redirect()->back();



    }



public function destroy($id){


	$product=Product::find($id);

    $image=$product->image;

	if(!is_null($product)){
		$product->delete();
	}

	unlink($image);
	Session::put('msg','<div class="alert alert-danger">
			  <strong>Success!</strong> Product Delete Successfully.!!
			</div>');
		return redirect()->route('all.product');



}


	public function edit($id){

		$product=Product::find($id);

		return view('admin.product.edit',compact('product'));


	}


public function update(Request $request,$id){

		$product=Product::find($id);

    	$product->name=$request->name;
    	$product->category_id=$request->category_id;
    	$product->manufacture_id=$request->manufacture_id;
    	$product->price=$request->price;
    	$product->description=$request->description;
    	
		$image=$product->image;
    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$product->image=$request->file('image')->move("storage/images",$name);




    }

    $product->save();
    	unlink($image);
    	Session::put('msg','<div class="alert alert-danger">
			  <strong>Success!</strong> Product Delete Successfully.!!
			</div>');
		return redirect()->route('all.product');




}


public function unactive_product($id){

        

        $product=Product::where('id',$id)
            ->update(['publication_status'=>0]);

        return redirect()->route('all.product');

}

public function active_product($id){

       $product=Product::where('id',$id)
            ->update(['publication_status'=>1]);

        return redirect()->route('all.product');



}






}
