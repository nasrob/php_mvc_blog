<?php

$router->get('', 'PagesController@home');
//$router->post('add-post', 'controllers/add-post.php');
$router->get('users', 'UsersController@index');