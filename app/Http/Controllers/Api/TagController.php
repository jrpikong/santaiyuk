<?php

namespace App\Http\Controllers\Api;

use App\Http\Library\ApiHelper;
use App\Http\Resources\TagResource;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TagController extends Controller
{
    public function getTags (Request $request)
    {
        $keyword = $request->input('keyword');
        return $tags = Post::allTags()->where('name','like','%'.$keyword.'%')->get();
        Log::info($keyword);
        if($tags->isEmpty()){
            return ApiHelper::buildResponse(400,'Data Not Found');
        }
        return ApiHelper::buildResponse(200,null,TagResource::collection($tags));
    }
}
