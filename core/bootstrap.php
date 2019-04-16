<?php

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/App.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{   
    extract($data);
    return require "views/{$name}.view.php";
}
