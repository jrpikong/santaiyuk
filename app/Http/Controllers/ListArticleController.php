<?php

namespace App\Http\Controllers;

use App\Http\Library\ApiHelper;
use App\Http\Library\VoyagerHelper;
use App\Post;
use Illuminate\Http\Request;

class ListArticleController extends Controller
{
    public function index (Request $request,$slug)
    {
        $slug = $slug;
        $article = Post::whereHas( 'category' ,function ($query)use($slug) {
            $query->where('slug', '=', $slug);
            $query->select('id', 'parent_id', 'order', 'name', 'slug');

        })->with( array(
            'category' => function ($query)use($slug) {
                $query->select('id','parent_id','order','name','slug');
            },
            'authorId' => function ($query){
                $query->select('id','name','avatar');
            }))
            ->select('id','title','seo_title','excerpt','body','image','slug',
                'meta_description','meta_keywords','featured','published_at','created_at','author_id','category_id'
            )->orderby('created_at','DESC')
            ->where('published_at','<=',date('Y-m-d H:i'))
            ->wherein('status',['PUBLISHED'])
            ->get();
        $voyagerHelper = new VoyagerHelper();
        foreach ($article as $item) {
            $item->image = $voyagerHelper->thumbnail($item->image, 'medium');
        }
        return view('pages.ListArticle',compact('slug','article'));
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $article = Post::with( array(
            'authorId' => function ($query){
                $query->select('id','name','avatar');
            }))
            ->select('id','title','seo_title','excerpt','body','image','slug',
                'meta_description','meta_keywords','featured','published_at','created_at','author_id','category_id'
            )->orderby('created_at','DESC')
            ->where('published_at','<=',date('Y-m-d H:i'))
            ->wherein('status',['PUBLISHED'])
            ->where('title','LIKE','%'.$keywords.'%')
            ->orWhere('body','LIKE','%'.$keywords.'%')
            ->get();
        $voyagerHelper = new VoyagerHelper();
        foreach ($article as $item) {
            $item->image = $voyagerHelper->thumbnail($item->image, 'medium');
        }
        return view('pages.ListArticle',compact('article'));
    }
}
