<?php
session_start();
require_once "../Model/myform.class.php";
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
$myinfo=new myinfo();
$sqli="select userid from userreg where username='{$_SESSION['status']}'";
$link=mysqli_connect("localhost","root",'root','hyt');
$res=mysqli_query($link,$sqli);
$s=mysqli_fetch_assoc($res);
file_put_contents("d:1/1.txt",$s);
if(isset($_POST['x'])){
  $myinfo->myname=$_POST['myname'];
  $myinfo->sex=$_POST['sex'];
  $myinfo->city=$_POST['city'];
  $myinfo->birth=$_POST['birth'];
  $myinfo->brief=$_POST['brief'];
  $myinfo->address=$_POST['address'];
  $updatesql="update myinfo set myname='$myinfo->myname',sex='$myinfo->sex',city='$myinfo->city',birth='$myinfo->birth',brief='$myinfo->brief',address='$myinfo->address' where id='{$s['userid']}'";
  echo $dbserver->SaveUserMessage($updatesql);
}
if(isset($_POST['x1'])){
   $selsql="select * from myinfo where id=1";
   echo json_encode($dbserver->SelUserMessage($selsql));
}
//关注
if(isset($_POST['q'])){
   $sql="select * from focus where fuser='{$_SESSION['status']}'";
   $res=$dbserver->SelUserMessage($sql);
   echo json_encode($res);
}