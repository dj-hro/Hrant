<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use File;


class DeleteComment extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
    	if($request->isMethod('post'))    		
    		$id = $request->id;


        $find = Comment::find($id);
        $fname = $find->image;

        


            
        
    	$result = Comment::destroy($id);

        // if($result)
        // {
        //     return 1;
        // }
        // else
        // {
        //     return 0;
        // }


        if (File::exists(public_path('/uploads/comments/') . $fname))

                {
                    File::delete(public_path('/uploads/comments/') . $fname);
                }
        
        
    	
    		return redirect()->route('mycomments');

    }
}
