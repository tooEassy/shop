<?php
namespace src;
use src\sessionHasName;
use src\sessionSetNotStarted;
use src\sessionStarted;
use src\sessionDeleteNotStarted;
class Session {

    private static $name;

    public static function setName($name)
    {
        if(self::sessionExist()){
            throw new sessionHasName('Cannot set session name. Session already started.');
        }
        self::$name = $name;
        session_name($name);
    }

    public static function getName()
    {

    }

    public static function getSavePath()
    {

    }

    public static function set($key, $val)
    {
        if(self::sessionExist())$_SESSION[$key] = $val;
        else throw new sessionSetNotStarted('Session not started.');
    }

    public static function get($key)
    {
        if(self::sessionExist())return $_SESSION[$key];
        else throw new sessionSetNotStarted('Session not started.');
    }

    public static function contains()
    {

    }

    public static function delete($key)
    {
        if (self::sessionExist()) unset($_SESSION[$key]);
        else throw new sessionDeleteNotStarted('Session not started.');
    }

    public static function start()
    {
        if(self::sessionExist()) throw new sessionStarted('Cannot start session. It\'s already started.');
        else session_start();
    }

    public static function cookieExist()
    {

    }

    public static function sessionExist()
    {
        if (session_status() == 1) {
            return false;
        } elseif (session_status() == 2) {
            return true;
        }
    }

    public static function signBlock($uri)
    {
        if(self::sessionExist() == true && $uri == 'signin') return '';
        else return $uri;
    }
}