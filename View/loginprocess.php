<?php
session_start();
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
$x2=md5($_POST['x2']);
$sql="select * from userreg where username='{$_POST['x1']}'";
$res=$dbserver->SelUserMessage($sql);
if($res[0]=='') echo -1;
else if($x2!=$res[0]['userpwd']){
   echo 0;
}else if($res[0]['t']=="异常"){
	echo -2;
}else{
	$_SESSION['status']=$_POST['x1'];
   echo 1;
}

