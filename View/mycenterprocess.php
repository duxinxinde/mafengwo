<?php
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
if(isset($_POST['u'])){
  $sql1="select userid from userreg where username='{$_POST['u']}'";
  $res1=$dbserver->SelUserMessage($sql1);
  //用户Id
  // $res1[0]['userid'];
  $sql2="select count(*) as 'num1' from travels where id='{$res1[0]['userid']}'";
  $res2=$dbserver->SelUserMessage($sql2);
  //游记数量
  // $res2[0]['num1'];
  //总回复数量
  $sql3="select travels.id,travels.x,img,travels.tittle,gotime,travels.content,clicks,count(comments.x) as 's'
from travels
left join comments
on travels.x=comments.x
where travels.id='{$res1[0]['userid']}'
group by travels.x";
$res3=$dbserver->SelUserMessage($sql3);
  echo json_encode($res3);
}
if(isset($_POST['t'])){
$sql1="select userid from userreg where username='{$_POST['t']}'";
  $res1=$dbserver->SelUserMessage($sql1);
  $sql2="select count(*) as 'num1' from travels where id='{$res1[0]['userid']}'";
  $res2=$dbserver->SelUserMessage($sql2);
  //游记数量
  echo $res2[0]['num1'];
}
if(isset($_POST['i'])){
  $sql1="delete from travels where x='{$_POST['i']}'";
  $res1=$dbserver->SaveUserMessage($sql1);
  $sql2="delete from ding where x='{$_POST['i']}'";
  $res2=$dbserver->SaveUserMessage($sql2);
  $sql3="delete from comments where x='{$_POST['i']}'";
  $res3=$dbserver->SaveUserMessage($sql3);
 echo 1;
}
?>