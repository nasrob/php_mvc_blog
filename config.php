<?php


return [
    'database' => [
        'name' => 'blog_mvc',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
    'categories' => [
        'workout',
        'tech',
        'business',
        'nutrition',
    ],
];