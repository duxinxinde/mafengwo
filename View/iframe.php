<?php
session_start();
if(!isset($_SESSION['status'])) {$x=0;
    $u=0;}
else{ $x=1;
       $u=$_SESSION['status'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
      a{color:#ff9d00;text-decoration: none}
     #dic a:hover{text-decoration:underline;}
     #dic div{display: inline;margin-left: 5px}
    </style>
</head>
<body>
            <div id="dic">
                <div id="user" class="login-out"><a style='margin-right: 5px' id="uname" href="myinfo.php" target="_parent">hyt</a><a target="_parent" id="btne" style="cursor: pointer;">退出</a></div>
                <div>
                <a class="" target="_parent" title="登录蚂蜂窝" href="login.php">登录</a><span class="split" style='color:grey;margin-left: 5px;margin-right: 5px'>|</span><a target="_parent" href="reg.php" title="注册帐号" class="showreg">注册</a>
                </div>
            </div>
</body>
<script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$("#btne").click(function(){
               $.post('mainprocess.php',{u:1},function(data){
                if(data==1) top.location=window.top.location;
               });
            });
            if(<?php echo $x;?>==0){
               $("#user").css('display','none');
            }else{
                var u="<?php echo $u;?>";
                $("#user").css('display','inline');
                $('#uname').html(u);
            }
            </script>
</html>