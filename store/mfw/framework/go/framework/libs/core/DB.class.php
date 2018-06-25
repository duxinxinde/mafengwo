<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 15/01/2018
 * Time: 9:39 AM
 */
class DB{

    public static $db;

    public static function init($type, $config){
        self::$db = new $type;
        self::$db->connect($config);
    }

    public static function query($sql){
        return self::$db->query($sql);
    }

    public static function fetch_All($query){
        return self::$db->fetch_All($query);
    }

    public static function fetch_singleton($query){
        return self::$db->fetch_singleton($query);
    }

    public static function insert($table,$arr){
        return self::$db->insert($table,$arr);
    }

    public static function update($table,$arr,$where){
        return self::$db->update($table,$arr,$where);
    }

    public static function del($table,$where){
        return self::$db->del($table,$where);
    }

    //对mysql.class.php类中的类静态实例化 以便在全局中使用
}