<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 15/01/2018
 * Time: 2:53 PM
 */
header("Content-type: text/html; charset=utf-8");
session_start();
require_once 'config.php';
require_once 'framework/init.php';
function readallfile($dir){
    $handle=opendir($dir);
    while($file=readdir($handle)) {
        if (($ext = pathinfo($file)['extension']) == "php") {
            $list[] = $file;
        }
    }
    closedir($handle);
    return $list;
}

init::run($config);

