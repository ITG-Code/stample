<?php

class Session
{
    public static function set($name, $value){
        $_SESSION[$name] = $value;
    }
    public static function get($name){
        return self::exists($name) ? $_SESSION[$name] : NULL;
    }
    public static function exists($name){
        return isset($_SESSION[$name]);
    }
    public static function start(){
        session_start();
    }
}