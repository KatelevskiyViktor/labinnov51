<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Neww extends Model
{
    protected $fillable = ['title', 'under_title', 'content', 'author','img', 'event', 'created_at'];
    public static function uploadImage(Request $request, $image = null)
    {
//        dd($request->file('img')->getClientOriginalName());
        if($request->hasFile('img')){
            if($image){

                Storage::delete(str_replace("storage/", "","$image"));
            }
            $folder = date('Y-m-d');
            return $data['img'] = 'storage/'. $request->file('img')->store("images/{$folder}");
        }
        return null;
    }

    public function getImage()
    {
        if(!$this->img){
            return asset("storage/images/non_ava.png");
        }
        return asset("$this->img");
    }

}
