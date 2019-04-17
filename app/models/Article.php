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
        // die(var_dump($_POST));
        $title = $_POST['title'];
        $text = $_POST['text'];
        $category = '';
        $status = $_POST['status'];

        // die(var_dump($status));
        $article = App::get('database')->insert('articles', [
            'title' => $title, 
            'article_text' => $text,
            'date' => (date('Y-m-d H:i:s')),
            'category'=> $category,
            'is_published' => $status,
        ]);
    }
}