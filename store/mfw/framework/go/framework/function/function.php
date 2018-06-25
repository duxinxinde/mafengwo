<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 15/01/2018
 * Time: 11:44 AM
 */

function initController($controllerName,$theMethodForTheController){
    $dir = dirname(dirname(dirname(__FILE__)));
    require_once $dir."/libs/Controller/".$controllerName.'Controller.class.php';
    eval('
    $obj = new '.$controllerName.'Controller();
    $obj->'.$theMethodForTheController.'();
    ');
}

function initModel($modelName){
    $dir = dirname(dirname(dirname(__FILE__)));
    require_once $dir."/libs/Model/".$modelName.'Model.class.php';
    $model = $modelName.'Model';
    $obj = new $model();
    return $obj;
}

function initView($viewName){
    $dir = dirname(__FILE__);
    require_once $dir."/fuck.php";
    $view = "JsonOutputView";
    $obj = new $view();
    return $obj;
}