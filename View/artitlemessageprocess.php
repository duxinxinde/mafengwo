<?php
session_start();
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
if(isset($_POST['x'])){
   $sqlx="select * from travels where id='{$_POST['x']}' and x='{$_POST['y']}'";
   $res=$dbserver->SelUserMessage($sqlx);
   echo json_encode($res);
}
//评论内容
if(isset($_POST['d'])){
	$sql1="select max(floors) from comments where pubuser='{$_POST['x1']}' and x='{$_POST['y']}'";
  // file_put_contents("d:1/1.txt",$sql1);
	$res1=$dbserver->SelUserMessage($sql1);
	if($res1[0]=="") $x=1;
	else $x=$res1[0]['max(floors)']+1;
   $sqlcom="insert into comments values('{$_POST['x1']}','{$_SESSION['status']}','{$_POST['w1']}',now(),0,'{$x}','{$_POST['y']}')";
   file_put_contents("d:1/1.txt",$sqlcom);
   $res=$dbserver->SaveUserMessage($sqlcom);
   echo $res;
}
//查询评论内容
if(isset($_POST['s1'])){
   $sql="select * from comments where pubuser='{$_POST['q1']}' and x='{$_POST['y']}' order by floors asc";
   $res=$dbserver->SelUserMessage($sql);
   echo json_encode($res);
}
//回复
if(isset($_POST['z'])){
	$sql1="select max(floors) from comments where pubuser='{$_POST['x1']}' and  x='{$_POST['y']}'";
	$res1=$dbserver->SelUserMessage($sql1);
	if($res1[0]=="") $x=1;
	else $x=$res1[0]['max(floors)']+1;
$sqlcom1="insert into comments values('{$_POST['x1']}','{$_SESSION['status']}','{$_POST['w1']}',now(),1,'$x','{$_POST['y']}')";
   $res=$dbserver->SaveUserMessage($sqlcom1);
   echo $res;
}
//游记目录查询
if(isset($_POST['o'])){
  $sql="select x,id,tittle
   from travels";
  $res=$dbserver->SelUserMessage($sql);
  echo json_encode($res);
}
//关注
if(isset($_POST['u'])){
    $sqle="select count(*) from focus where fuser='{$_SESSION['status']}' and dfuser='{$_POST['puser']}'";
    $r=$dbserver->SelUserMessage($sqle);
   if($_SESSION['status']==$_POST['puser']){
      echo 0;
   }else if($r[0]["count(*)"]==1){
     echo -1;
   }else{
    $sql="insert into focus values('{$_SESSION['status']}','{$_POST['puser']}')";
     $res=$dbserver->SaveUserMessage($sql);
     echo 1;
   }
}