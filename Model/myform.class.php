<?php
class myinfo{
	private $myinfo;
	private $sex;
	private $city;
	private $brief;
	private $address;
	function __set($k,$v){
        $this->$k=$v;
    }
    function __get($k){
       return $this->$k;
    }
}