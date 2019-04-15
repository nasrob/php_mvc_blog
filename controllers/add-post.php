<?php
App::get('database')->insert('articles', [
    'title' => $_POST['title'], 
    'article_text' => $_POST['text'],
    'date' => strtotime(date('Y-m-d H:i:s')),
    'category'=> $_POST[],
    'is_published' => $_POST['is_published']
]);
header('Location: /');

