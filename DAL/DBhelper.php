<?php
class dbhelper{
	private $link;
	private $servername;
	private $uname;
	private $upwd;
	private $dbname;
	function __construct($servername,$uname,$upwd,$dbname){
       $this->servername=$servername;
       $this->uname=$uname;
       $this->upwd=$upwd;
       $this->dbname=$dbname;
	}
	function con(){
		$this->link=mysqli_connect($this->servername,$this->uname,$this->upwd,$this->dbname) or die("连接服务器失败！");
		mysqli_query($this->link,"set names utf-8");
	} 
	function sel($sql){
      $res=mysqli_query($this->link,$sql);
      $arr=[];
      while(($row=mysqli_fetch_assoc($res))!=false){
           $arr[]=$row;
      }
      return empty($arr[0])?0:$arr;
	}
	function DQL($sql){
		$res=mysqli_query($this->link,$sql);
		$row=mysqli_affected_rows($this->link);
		return $row==0?0:1;
	}
	function __destruct(){
		mysqli_close($this->link);
	}
}
?>