<?php


$blog_posts = App::get('database')->selectAll('articles');


require 'views/index.view.php';