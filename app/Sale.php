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

        $time = now()->addDays()->timestamp;

        Cookie::queue(Cookie::make('cake_book',$value,$time));
 
        Cookie::queue('cake_book',$value,$time);

         return response("File set successfully")->cookie(
            'cake_book',$value,$time
        );

    }

  
}
