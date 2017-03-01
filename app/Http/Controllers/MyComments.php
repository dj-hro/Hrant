<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Comment;


class MyComments extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(){

    	$id = Auth::user()->id;
    	
    	 $comments = Comment::where('user_id', '=', "$id")->orderBy('id', 'desc')->paginate(10);	





    	 return view('MyComments')->with(['comments' => $comments]);
    }
}
