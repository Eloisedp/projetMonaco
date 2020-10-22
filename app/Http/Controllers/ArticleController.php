<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index () {
        $articles = Article::all();
        $categories = Category::all();
        return view('articles.index', compact('articles','categories'));
    }
}
