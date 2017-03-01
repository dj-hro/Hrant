<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use File;


class EditComment extends Controller
{
    public function index(Request $request){
    	if($request->isMethod('post'))

    		$id = $request->id; 

    		$text = $request->text;

    		
			$comment = Comment::find($id);
            $oldfname = $comment->image;

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $fname = time() . '.' . $image->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/uploads/comments/'), $fname);


            if (File::exists(public_path('/uploads/comments/') . $oldfname))

                {
                    File::delete(public_path('/uploads/comments/') . $oldfname);
                }

            $comment->comment = "$text";
            $comment->image   = "$fname";
            $comment->save();
            return redirect()->route('mycomments');

        }

            else{

			
            $comment->comment = "$text";
            // $comment->image   = "$fname";
            $comment->save();
			return redirect()->route('mycomments');

        }

    }
}
