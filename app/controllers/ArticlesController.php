<?php

namespace App\Controllers;

require 'app/models/Article.php';

use App\Models\Article;

class ArticlesController {
    
    public function index()
    {
        $articles = Article::getAll();
        return view('index', ['articles' => $articles]);
    }

    public function edit()
    {
        return view('add-article');
    }

    public function create()
    {
        // die(var_dump($_POST));
        $article = Article::createArticle();   
        redirect('/articles');
    }

}



