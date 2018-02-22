<?php

namespace App\Http\Controllers\Api;

use App\Http\Library\ApiHelper;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    public function getByCategory ($slugcat,$limit)
    {
        $post = Post::with( array(
            'category' => function ($query)use($slugcat) {
                $query->where('slug','=',$slugcat);
                $query->select('id','parent_id','order','name','slug');
            },
            'authorId' => function ($query){
                $query->select('id','name','avatar');
            }))
            ->select('id','title','seo_title','excerpt','body','image','slug',
                'meta_description','meta_keywords','featured','published_at','created_at','author_id','category_id'
            )
            ->limit($limit)
            ->get();
        if ($post->isEmpty()) {
            return ApiHelper::buildResponse(400,'Data Not Found');
        }
        return ApiHelper::buildResponse(200,null,$post);
    }

    public function getBySlug ($slug)
    {
        $post = Post::with(
            array(
                'category' => function ($query) {
                    $query->select('id','parent_id','order','name','slug');
                },
                'authorId' => function ($query){
                    $query->select('id','name','avatar');
                }))
            ->where('slug', '=', $slug)
            ->select('id','title','seo_title','excerpt','body','image','slug',
                'meta_description','meta_keywords','featured','published_at','created_at','author_id','category_id'
            )
            ->get();
        if ($post->isEmpty()) {
            return ApiHelper::buildResponse(400,'Data Not Found');
        }
        return ApiHelper::buildResponse(200,null,$post);
    }

    public function view ($slug)
    {
        $post = Post::with(
            array(
                'category' => function ($query) {
                    $query->select('id','parent_id','order','name','slug');
                },
                'authorId' => function ($query){
                    $query->select('id','name','avatar');
                }))
            ->where('slug', '=', $slug)
            ->select('id','title','seo_title','excerpt','body','image','slug',
                'meta_description','meta_keywords','featured','published_at','created_at','author_id','category_id'
            )
            ->first();
        $tags = $post->tags;
        return view('pages.viewPost',compact('post','tags'));
    }
}
