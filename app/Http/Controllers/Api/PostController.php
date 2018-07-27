<?php

namespace App\Http\Controllers\Api;

use App\Http\Library\ApiHelper;
use App\Http\Library\VoyagerHelper;
use App\Http\Resources\PostResource;
use App\PageView;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\UrlGenerator;
class PostController extends Controller
{
    public function getRecentPost($limit)
    {
        $post = Post::
            where('published_at','<=',date('Y-m-d H:i'))
            ->wherein('status',['PUBLISHED'])
            ->orderby('created_at','DESC')
            ->limit($limit)
            ->get();
        if ($post->isEmpty()) {
            return ApiHelper::buildResponse(400,'Data Not Found');
        }
        $voyagerHelper = new VoyagerHelper();
        foreach ($post as $item) {
            $item->image = $voyagerHelper->thumbnail($item->image, 'medium');
        }
        return ApiHelper::buildResponse(200,null,$post);
    }
    public function getByCategory ($slugcat,$limit)
    {
        $post = Post::
            join('categories','categories.id','=','posts.category_id')
            ->where('categories.slug','=',$slugcat)
            ->where('published_at','<=',date('Y-m-d H:i'))
            ->wherein('status',['PUBLISHED'])
            ->select('posts.id','title','seo_title','excerpt','body','image','posts.slug',
                'meta_description','meta_keywords','featured','posts.published_at','posts.created_at','author_id','category_id'
            )
            ->orderby('created_at','DESC')
            ->limit($limit)
            ->get();
        if ($post->isEmpty()) {
            return ApiHelper::buildResponse(400,'Data Not Found');
        }
        $voyagerHelper = new VoyagerHelper();
        foreach ($post as $item) {
            $item->image = $voyagerHelper->thumbnail($item->image, 'medium');
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
        $post->addPageViewThatExpiresAt(Carbon::now()->addHours(24));
        $url = url()->full();
        return view('pages.viewPost',compact('post','tags','url'));
    }
}
