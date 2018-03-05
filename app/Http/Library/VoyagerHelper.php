<?php
/**
 * Created by PhpStorm.
 * User: jrpikong
 * Date: 28/02/18
 * Time: 10:05
 */

namespace App\Http\Library;

use Illuminate\Support\Facades\Storage;

class VoyagerHelper
{
    public function thumbnail($image , $type)
    {
        // We need to get extension type ( .jpeg , .png ...)
        $ext    = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $name   = rtrim($image, '.'. $ext);
        // We merge original name + type + extension
        $newPath = $name . '-' . $type . '.' . $ext;

        $exists = Storage::disk('public')->exists($newPath);
        if($exists){
            return $newPath;
        }
        return $image;
    }
}