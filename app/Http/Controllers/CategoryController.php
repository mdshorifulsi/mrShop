<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{


	public function index(){

		$category=Category::get();

		return view('admin.category.index',compact('category'));


	}

    public function create(){


    	return view('admin.category.create');
    }

    public function store(Request $request){



        $validatedData=$request->validate([

        'name' => 'required|max:300|min:2',
        'image' => 'nullable|image',
        'description' => 'required|max:500|min:5',
      
        

        ]);




    	$category= new Category;
    	$category->name=$request->name;
    	$category->description=$request->description;

    		if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$category->image=$request->file('image')->move("storage/images",$name);
    		

}

		$category->save();
    	Session::put('msg','<div class="alert alert-success">
  <strong>Success!</strong> Category Insert successful !!.
</div>');
		return redirect()->back();





    }


public function destroy($id){

	$category=Category::find($id);

	$image=$category->image;

	if(!is_null($category)){

			$category->delete();
		}

	unlink($image);

	Session::put('msg','<div class="alert alert-danger">
  <strong>Success!</strong> Delete successful !!.
</div>');
    	 
 	return redirect()->route('all.category');


}


public function edit($id){


	$category=Category::find($id);

	return view('admin.category.edit',compact('category'));


}

public function update(Request $request,$id){

			$category=Category::find($id);


			$category->name=$request->name;
    		$category->description=$request->description;
    		$image=$category->image;

    		if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$category->image=$request->file('image')->move("storage/images",$name);
    		

}


		$category->save();
		unlink($image);
    	Session::put('msg','<div class="alert alert-success">
					<strong>Success!</strong> update successful !!.
					</div>');
		return redirect()->route('all.category');




}


}
