<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class MainController extends Controller
{
    public function index ()
    {
        return view('pages.homePage');
    }

    public function recentPost()
    {
        return view('pages.recentPost');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('pages.pages',compact('page'));
    }
}
