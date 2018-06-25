<?php
session_start();
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
$i=6;
//所有游记查询
if(isset($_POST['mm'])){
$loadsql="select travels.id,travels.x,travels.tittle,content,img,address,clicks,
gotime,userreg.username,count(ding.x) as 'num' from travels
left join userreg
on travels.id=userreg.userid
left join ding
on travels.x=ding.x
group by travels.x
order by gotime desc
limit ".$_POST['p'].",".$i;
file_put_contents("d:1/1.txt", $loadsql);
$res=$dbserver->SelUserMessage($loadsql);
echo json_encode($res);
}
//点击量
if(isset($_POST['s'])){
   $clicksql="update travels set clicks=clicks+1 where id='{$_POST['zan']}' and x='{$_POST['tittle']}'";
   $res=$dbserver->SaveUserMessage($clicksql);
   echo 1;
}
// 查询总页数
if(isset($_POST['g'])){
$pageallsql="select count(*) from travels";
$res=$dbserver->SelUserMessage($pageallsql);
echo ceil($res[0]['count(*)']/$i);
}
if(isset($_POST['u'])){
   unset($_SESSION['status']);
   echo 1;
}
//是否已经点赞
if(isset($_POST['t'])){
$sql="select * from ding where x='{$_POST['y']}' and duser='{$_SESSION['status']}'";
$res=$dbserver->SelUserMessage($sql);
if($res[0]==""){
	$sqlo="insert into ding values('{$_POST['x1']}','{$_SESSION['status']}','{$_POST['y']}')";
	$dbserver->SaveUserMessage($sqlo);
    echo 0;
}else{
	echo 1;
}
}