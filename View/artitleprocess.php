<?php
session_start();
require_once "../DAL/dbserver.php";
$dbserver=new dbserver();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$filename=strrchr($_FILES['file']['name'],".");
    $newpath="../assets/img/".date("YmdHis",time()).rand().$filename;
    if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
          move_uploaded_file($_FILES['file']['tmp_name'],$newpath);
          echo json_encode($newpath);
    }

}