<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Picture;

class AddAndViewPictures extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

    	if($request->isMethod('get')){

    	$id = Auth::user()->id;
    		
    	$user = User::find($id);
    	$userpics = $user->pictures;
    	return view('AddAndViewPictures')->with(['userpics' => $userpics]);}
    

     if($request->isMethod('post')){    


     		$this->validate($request, [     									
                                        'picture' => 'image|required'
    									]);



        if ($request->hasFile('picture')) {

            $image = $request->file('picture');            
            $fname = time() . '.' . $image->getClientOriginalExtension();
            $request->file('picture')->move(public_path('/uploads/UsersPictures/'), $fname);
         }

    

     	$id = $request->id;
     	$explain = $request->explain;

     	
    

     	Picture::create([
                'picture' => "$fname",
    			'explains' => "$explain",     			
     			'user_id' => "$id"

    		]);	

     	return redirect()->route('addandviewpictures');			

     	}
     }
}
