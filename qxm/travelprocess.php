<?php
if(isset($_POST['cs1'])){
	//echo "asdxs";
// $datatype=$_POST['datatype'];
// $datatype1=$_POST['datatype1'];
// $datatype2=$_POST['datatype2'];
// $datatype3=$_POST['datatype3'];
// $datatype4=$_POST['datatype4'];
$link=mysqli_connect("localhost","root","root","store");
mysqli_query($link,"set names utf-8");
$sql="select * from travels1"; 
//file_put_contents("d:1/1.txt", $sql);
$res=mysqli_query($link,$sql);
$arr=array();
while(($res1=mysqli_fetch_assoc($res))!=false){
$arr[]=$res1;
}
echo json_encode($arr);

}
//点击量使用到ajax的POST方式获取点击量
if(isset($_POST['cs12'])){
	//echo "dsxw";
$datatype=$_POST['datatype'];
$link=mysqli_connect("localhost","root","root","store");
mysqli_query($link,"set names utf-8");
$sql="update travels1 set clicks=clicks+1  where id='$datatype';"; 
$res=mysqli_query($link,$sql);
if($res){
	$affectrow=mysqli_affected_rows($link);
if($affectrow>=0){
	echo 1;//更新成功
}else{
	echo 0;//更新失败
}
}else{
	echo -1;
} 
}
//浏览量使用ajax的post方式获取点击量
if(isset($_POST['cs3'])){
	$font=$_POST['font'];
	$link=mysqli_connect("localhost","root","root","store");
	mysqli_query($link,"set names utf-8");
	$sql="update travels1 set goods=goods+1 where id='$font';";
	$res=mysqli_query($link,$sql);
	//echo $res;
	if($res){
	$affectrow=mysqli_affected_rows($link);
	if($affectrow>=0){
		//echo 1;//浏览成功
		$sql1="select goods from travels1 where id='$font';";
		$res=mysqli_query($link,$sql1);
		$arr=array();
		while($res1=mysqli_fetch_assoc($res)){
			$arr[]=$res1;
		}
		echo $arr[0]['goods'];
	}else{
		echo 0;//浏览失败
	}
	}else{
		echo -1;
	} 
}
?>