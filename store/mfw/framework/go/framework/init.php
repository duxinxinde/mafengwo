<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 15/01/2018
 * Time: 2:30 PM
 */

$currentDir = dirname(__FILE__);
include_once $currentDir."/include.list.php";
foreach ($paths as $path){
    require_once ($currentDir."/".$path);
}
//require刚刚定义的class

class init{
    public static $controller;
    //静态初始化控制器
    public static $method;
    //控制器对应的方法
    private static $config;
    //配置文件config
    private static function init_db(){
        DB::init('mysql',self::$config);
    }
    //DB类的实例化
    private static function init_controller(){
        self::$controller = isset($_GET['controller'])?$_GET['controller']:'home';
    }
    //控制器静态加载
    private static function init_method(){
        self::$method = isset($_GET['method'])?$_GET['method']:'main';
    }
    //方法静态加载
    public static function run($config){
        self::$config = $config;
        self::init_db();
        self::init_controller();
        self::init_method();
        initController(self::$controller,self::$method);
//        echo "fuck";
    }

}