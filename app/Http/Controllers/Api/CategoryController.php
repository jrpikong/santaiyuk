<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Library\ApiHelper;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        return ApiHelper::buildResponse(200,null,$categories);
    }
}
