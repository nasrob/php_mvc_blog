<?php

$router->get('', 'PagesController@home');
//$router->post('add-post', 'controllers/add-post.php');
$router->get('users', 'UsersController@index');
$router->get('articles', 'ArticlesController@index');
$router->get('add-article', 'ArticlesController@edit');
$router->post('add-article', 'ArticlesController@create');