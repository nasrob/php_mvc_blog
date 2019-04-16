<?php

namespace App\Models;

use App\Core\App;

class Article {
    
    public function getAll()
    {
        $articles = App::get('database')->selectAll('articles');
        return $articles;
    }

    public function createArticle()
    {
        // $article = App::get('database')->insert('articles', [
        //     'title' => $_POST['title'], 
        //     'article_text' => $_POST['text'],
        //     'date' => strtotime(date('Y-m-d H:i:s')),
        //     'category'=> $_POST[],
        //     'is_published' => $_POST['is_published']
        // ]);
    }
}