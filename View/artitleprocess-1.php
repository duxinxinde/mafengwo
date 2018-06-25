<?php
session_start();
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$content=[];
	$img=[];
	$arr=explode("<br>",$_POST['content']);
	for($i=0;$i<count($arr);$i++){
		if(substr($arr[$i],0,4)=="<img"){
        $str=strstr($arr[$i],"../");
        $img[]=substr($str,0,strrev($str)-2)."|";
		}
		else $content[]=$arr[$i];
	}
	$x1=implode("",$img);
	$x2=implode("",$content);
	$x3=substr($x2,3,strrev($x2)-4);
	$sql="select userid from userreg where username='{$_SESSION['status']}'";
	$ress=$dbserver->SelUserMessage($sql);
	$sqlcha="insert into travels values('{$ress[0]['userid']}','{$_POST['title']}','{$x3}','{$x1}','中国',0,0,now(),0)";
	file_put_contents("d:1/1.txt",$sqlcha);
    $res=$dbserver->SaveUserMessage($sqlcha);
    echo "<script>alert('发表成功！');location='artitle.php';</script>";
}
?>