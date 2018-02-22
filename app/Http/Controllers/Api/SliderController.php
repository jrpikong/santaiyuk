<?php

namespace App\Http\Controllers\Api;

use App\Http\Library\ApiHelper;
use App\Http\Resources\SliderResource;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(){

        $sliders = Slider::status()
            ->orderBy('order')
            ->get();
        if($sliders->isEmpty()){
            return ApiHelper::buildResponse(400,'Data Not Found');
        }
        return ApiHelper::buildResponse(200,null,SliderResource::collection($sliders));
    }
}
