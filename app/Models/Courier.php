<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;
    private static $courier, $image,  $directory, $imageName, $extension,  $imageUrl;

    public static function saveCourier($request)
    {
        self::$courier = new Courier();
        self::$courier->name =$request->name;
        self::$courier->email=$request->email;
        self::$courier->mobile=$request->mobile;
        self::$courier->address=$request->address;
        self::$courier->image  = self::getImageUrl($request);
        self::$courier->save();
    }
    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->extension();
        self::$imageName    = rand().'.'.self::$extension;
        self::$directory    = 'admin/image/courier/';
        self::$imageUrl     = self::$directory.self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }
    public static function updateCourierInfo($request, $id)
    {
        self::$courier = Courier::find($id);
        self::$courier->name =$request->name;
        self::$courier->email=$request->email;
        self::$courier->mobile=$request->mobile;
        self::$courier->address=$request->address;
        self::$courier->image  = self::$imageUrl;

        if ($request->file('image')) {
            if (file_exists(self::$courier->image)){
                unlink(self::$courier->image);
            }
            self::$courier->image = self::getImageUrl($request);
        }
        self::$courier->save();

    }
    public static function deleteCourier($id)
    {
        self::$courier =  Courier::find($id);
        if (self::$courier->image){
            unlink(self::$courier->image);
        }
        self::$courier->delete();
    }

}
