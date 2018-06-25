<?php
require_once "DBhelper.php";
$db=new dbhelper('localhost','root','root','hyt');
$db->con();
class dbserver{
	//存储用户资料
	function SaveUserMessage($sql){
      global $db;
      return $db->DQL($sql);
	}
	//查询
	function SelUserMessage($sql){
		global $db;
		return $db->sel($sql);
	}
}
?>