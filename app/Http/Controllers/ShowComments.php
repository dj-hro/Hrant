<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Paginate;

class ShowComments extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

    	$comments = Comment::orderBy('id', 'desc')->paginate(3);

    	if ($request->ajax()) {
            return view('PageComments', ['comments' => $comments])->render();  


            // return response()->json([
            //    'data' => $comments,
            // ]);
        }



    	return view('ShowComments')->with(['comments' => $comments]);
    }
}
