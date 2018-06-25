<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 2018/2/6
 * Time: 2:37 AM
 */

class cartController
{
    function insert(){
        $uid = $_GET["uid"];
        $pid = $_GET["pid"];
        $date = $_GET["date"];
        $daydream = $_GET["daydream"];
        $adult = $_GET["adult"];
        $child = $_GET["child"];
        $name = $_GET["name"];
        $tel = $_GET["tel"];
        DB::insert("cart",["uid"=>$uid,"pid"=>$pid,"date"=>$date,"daydream"=>$daydream,"adult"=>$adult,"child"=>$child,"name"=>$name,"tel"=>$tel]);
        echo 1;
    }

}