<?php

namespace App\Core;

// class to add basic Dependency Injection

class App {
    
    // container to store dependencies
    protected static $registry = [];
    
    public function bind($key, $value)
    {
        // pushing to key, value to registry
        static::$registry[$key] = $value;
    }
    
    public function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the DI container");
        }
        return static::$registry[$key];
    }
}