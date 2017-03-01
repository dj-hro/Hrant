<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class AddComment extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request){
    	if($request->isMethod('get')){
    		return view('AddComment');
    	}


    	if($request->isMethod('post')){    


    		$this->validate($request, [
    									'text' => 'required',
                                        'photo' => 'image'
    									]);



        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $fname = time() . '.' . $image->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/uploads/comments/'), $fname);
        }

        else{

            $fname = 'img.jpg';
        }

    	$id = $request->id;
    	$name = $request->name;
    	$text = $request->text;

    	Comment::create([
                'image' => "$fname",
    			'name' => "$name",
    			'comment' => "$text",
    			'user_id' => "$id"

    		]);	

    	return redirect()->route('comments');			

    	}


    }
}
