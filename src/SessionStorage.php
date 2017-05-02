<?php

namespace MicroPHP\Csrf;


class SessionStorage implements StorageInterface
{
    public function __construct()
    {
        if(!isset($_SESSION)){
            throw new \Exception('$_SESSION not found.');
        }
    }

    public function add($key, $value){
        $_SESSION[$key] = $value;
    }

    public function has($key){
        return isset($_SESSION[$key]);
    }

    public function get($key){
        return $_SESSION[$key];
    }

    public function delete($key){
        if($this->has($key)){
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

}