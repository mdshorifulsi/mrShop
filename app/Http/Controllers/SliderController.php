<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Session;

class SliderController extends Controller
{

public function index(){


	$slider=Slider::get();

	return view('admin.slider.index',compact('slider'));
}

    public function create(){



    	return view('admin.slider.create');
    }


    public function store(Request $request){





    	$slider= new Slider;
    	$slider->name=$request->name;
    	$slider->title=$request->title;
    	$slider->publication_status=$request->publication_status;

    		if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$slider->image=$request->file('image')->move("storage/images",$name);
    		

}

		$slider->save();
    	Session::put('msg','<div class="alert alert-success">
  <strong>Success!</strong> Slider Insert successful !!.
</div>');
		return redirect()->back();



    }


    public function destroy($id){




    		$slider=Slider::find($id);

    $image=$slider->image;

	if(!is_null($slider)){
		$slider->delete();
	}

	unlink($image);
	Session::put('msg','<div class="alert alert-danger">
			  <strong>Success!</strong> Slider Delete Successfully.!!
			</div>');
		return redirect()->route('all.slider');




    }



}
