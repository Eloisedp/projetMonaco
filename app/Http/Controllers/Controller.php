<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index () {
        $articles = Article::all();
        $categories = Category::all();
        return view('welcome', compact('articles','categories'));
    }
}
