<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class Sale extends Model
{
    public static function uploadImage($file){

        if (empty($file)) return null;

        $destinationPath = public_path('files');

        $ext = $file->getClientOriginalExtension();

        $file_url =Str::random(12).'.'.$ext;

        $file->move($destinationPath,$file_url);

        return $file_url;   
             
    }

    public static function setUserCoockie($value) {
        // return response("File set successfully")->cookie(
        //     'cakes', $value, time()
        // );

        Cookie::queue(Cookie::make('cake', $value, time()));
 
        Cookie::queue('cake', $value, time());
    }

  
}
