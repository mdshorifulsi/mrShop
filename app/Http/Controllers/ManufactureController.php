<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacture;
use Session;

class ManufactureController extends Controller
{
    
	public function index(){

		$manufacture=Manufacture::get();

		return view('admin.manufacture.index',compact('manufacture'));


	}

	public function create(){


		return view('admin.manufacture.create');
	}


	public function store(Request $request){


		  $validatedData=$request->validate([

        'name' => 'required|max:300|min:2',
        'image' => 'nullable|image',
        'description' => 'required|max:500|min:5',
      
        

        ]);
		  

		$manufacture=new Manufacture;

		$manufacture->name=$request->name;
		$manufacture->description=$request->description;
		if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$manufacture->image=$request->file('image')->move("storage/images",$name);
    		
}


			$manufacture->save();
    	Session::put('msg','<div class="alert alert-success">
					  <strong>Success!</strong> Manufacture Insert successful !!.
					</div>');
		return redirect()->back();

	}



	public function destroy($id){

		$manufacture=Manufacture::find($id);

		$image=$manufacture->image;

	if(!is_null($manufacture)){

			$manufacture->delete();
		}

	unlink($image);

	Session::put('msg','<div class="alert alert-danger">
  <strong>Success!</strong> Delete successful !!.
</div>');
    	 
 	return redirect()->route('all.manufacture');


	}


	public function edit($id){

			$manufacture=Manufacture::find($id);


			return view('admin.manufacture.edit',compact('manufacture'));
	}


	public function update(Request $request,$id){

		$manufacture=Manufacture::find($id);



			$manufacture->name=$request->name;
    		$manufacture->description=$request->description;
    		$image=$manufacture->image;

    		if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$manufacture->image=$request->file('image')->move("storage/images",$name);
    		
}


			$manufacture->save();
						unlink($image);
    					Session::put('msg','<div class="alert alert-success">
								<strong>Success!</strong> update successful !!.
								</div>');
					return redirect()->route('all.manufacture');



	}



}
