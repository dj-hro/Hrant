<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use File;

class DeletePicture extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(Request $request){

    	if($request->isMethod('get')){
    		$id = $request->pictureid;


    		$find = Picture::find($id);
    		$fname = $find->picture;






    		$result = Picture::destroy($id);

         if($result)
         {
         	if (File::exists(public_path('/uploads/UsersPictures/') . $fname))

                {
                    File::delete(public_path('/uploads/UsersPictures/') . $fname);
                    return 1;
                }
             
         }
         else
         {
             return 0;
         }
    	}

    }
}
