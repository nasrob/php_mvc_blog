<?php
$app['database']->insert('posts', [
    'title' => $_POST['title'], 
    'post_text' => $_POST['text'],
    'post_date' => strtotime(date('Y-m-d H:i:s')),
    'category'=> $_POST[],
    'is_published' => $_POST['is_published']
]);
header('Location: /');

