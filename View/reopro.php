<?php
require '../DAL/sms.php';
session_start();
if(isset($_POST['cs'])){
$code=rand(1000,9999);
$e=$_POST['cs'];
$sms = new Sms( array('api_key' => 'bd9eaebddce1020628a377401f693086' , 'use_ssl' => FALSE ) );
$sms->send($e, "您本次的验证码为".$code.",如非本人请勿操作【铁壳测试】");
$_SESSION['code']=$code;
}
		if(isset($_POST['cs1'])){
			 $name=$_POST['name'];
			 $pwd=md5($_POST['pwd']);
			 $tel=$_POST['tel'];
			 $code=$_POST['code'];
			 if($name!=""){
				$link=mysqli_connect('localhost','root','root','hyt');
				// mysqli_select_db($link,'trave');
				mysqli_query($link,'set names utf-8');
				$sql1="select username from user where username='$name';";
				$res1=mysqli_query($link,$sql1);
				$arr=[];
				while(($ret=mysqli_fetch_assoc($res1))!=false){
					$arr[]=$ret;
				}
				// file_put_contents("d:1/1.txt", $ret);
				if(isset($arr[0])){
						echo -1;//用户名存在
					}
				}
				else{
			 	//请输入用户名
			 	echo -2;
			 }
		}
 		if(isset($_POST['cs2'])){
 			 $name=$_POST['name'];
			 $pwd=md5($_POST['pwd']);
			 $tel=$_POST['tel'];
			 $code1=$_POST['code'];
				if($name!=""&&$pwd!=""&&$tel!=""){
					if($_SESSION['code']!=$code1){
                         echo -2;
					}else{
					$link=mysqli_connect('localhost','root','root','hyt');
					mysqli_select_db($link,'hyt');
					mysqli_query($link,'set names utf-8');
					$sql="insert into userreg values(0,'$name','$pwd','$tel','正常')";
					$res=mysqli_query($link,$sql);
					$sql1="insert into myinfo values(0,'','','','','','')";
                    mysqli_query($link,$sql1);
						echo 1;//注册成功
					}
					 	}else{
						echo 0;//信息不能为空
					}
				}
 









