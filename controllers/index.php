<?php

die(var_dump($database));

$blog_posts = $database->selectAll('articles');


require 'views/index.view.php';