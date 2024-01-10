<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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

  
}
