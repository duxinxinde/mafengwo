<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>蚂蜂窝注册页</title>
    <link rel="icon" href="assets/images/icon/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <style type="text/css" media="screen">
        html{
            overflow:hidden;
    }
    </style>
</head>
<body style="background:url(../assets/images/img1.png)">
    <div class="reg-wrapper">
        <div class="container">
            <a title="" class="logo"></a>
            <div class="signup-forms">
                <div class="signup-box" id="signup_box">
                    <div class="add-info">
                        <div class="hd">账号注册</div>
                        <div class="form2-outer">
                            <div class="form-field mt10">
                                <input type="text" id="name" name="name" placeholder="您的名号"  onblur="uname()">
                                 <div id="err-tip"></div>
                            </div>
                           
                            <div class="form-field">
                                <input type="password" id="pwd" name="password" placeholder="您的密码"  onkeyup="mima()">
                                <div id="err-tip1"></div>
                            </div>
                            
                            <div class="form-field">
                                <input type="password" id="pwd1" name="repassword" placeholder="确认密码" errormsg="输入的密码不一致" datatype="*" recheck="password" nullmsg="请再次输入密码" onkeyup="mima1()">
                                <div id="err-tip2"></div>
                            </div>
                            
                            <div class="form-field ">
                                <input type="text" name="name" id="tel" placeholder="您的手机号" nullmsg="手机号不能为空" onkeydown="tel1()">
                                <div id ="err-tip3"></div>
                            </div>
                            
                            <div class="form-field">
                                <div class="clearfix">
                                    <button   class="vcode-send" onclick="time(this)">免费获取验证码</button>
                                    <input type="text" name="smscode" id="code" class="vcode-input" placeholder="短信验证码" nullmsg="短信验证码不能为空" errormsg="短信验证码错误">
                                </div>
                                 <div id="err-tip4"></div>
                            </div>
                           
                            <div class="submit-btn">
                                <button  id="signup" >完成注册</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="photoby">&lt;&nbsp;<a href="" target="_blank">第二个夏天——带着闺蜜去旅行..</a>&nbsp;&gt;&nbsp;by&nbsp;<a href="" target="_blank">小A</a></div>
        <div class="fullscreen-bg">
        </div>
    </div>
</body>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script>
        var wait=60; 
function time(obj) { 
       if (wait == 0) { 
        obj.removeAttribute("disabled");    
        obj.innerHTML="获取验证码";
           wait = 60; 
       } else { 
        obj.setAttribute("disabled", true); 
        obj.innerHTML=wait+"秒后重新发送";
           wait--; 
           setTimeout(function() { 
               time(obj) 
           }, 
           1000) 
       } 
   }
        $(function(){
            $(".vcode-send").click(function(){
                var cs="12";
                $.ajax({
                    url:"reopro.php",
                    type:'post',
                    data:{'cs':$('#tel').val()},
                    dataType:"text",
                    success:function(data){
                       //code.val(data);
                       // alert(data);
                    }
                })
            });
            $("#signup").click(function(){
                var name=$("#name").val();
                var pwd=$("#pwd").val();
                var tel=$("#tel").val();
                var code=$("#code").val();
                var cs2="12";
                //var code=$("#code").val();
                $.ajax({
                url:"reopro.php",
                type:"post",
                data:{'name':name,'pwd':pwd,'tel':tel,'cs2':cs2,'code':code},
                dataType:"text",
                success:function(data){
                    //alert(data);
                    if(data==0){
                        alert("信息不能为空！");
                    }else if(data==-2){
                        alert("验证码有误");
                    }else if(data==1){ alert('注册成功');
                    location="login.php";
                }
            }
                }) 
            });
            
        
        })
         //判断用户名的方法
            function  uname(){
                // var name=document.getElementById('name');
                // var err=document.getElementById("err-tip");
                // if(name.value.length<3){
                //     err.innerHTML="<font color='red'>名号请输入大于3位字符</font>";
                // }
                // else if(name.value.length<=3){
                //     err.innerHTML="";
                //     return true;
                // }
                var name=$("#name").val();
                var pwd=$("#pwd").val();
                var tel=$("#tel").val();
                var code=$("#code").val();
                var cs1="12";
                $.ajax({
                    url:"reopro.php",
                    data:{'name':name,'pwd':pwd,'tel':tel,'cs1':cs1,'code':code},
                    type:"post",
                    dataType:"text",
                    success:function(data){
                        //alert(data);l
                        if(data==-1){
                           alert("用户名已存在");
                         }else if(data==-2) {
                            alert("请输入用户名");
                         }
                    }
                });
            }
            //判断密码的方法
            function mima(){
                var pwd=document.getElementById("pwd");
                var err=document.getElementById("err-tip1");
                if(pwd.value.length<6){
                    err.innerHTML="<font color='green'>密码安全度太低</font>";
                   // return true;
                }else if(6<pwd.value.length||pwd.value.length<10){
                    err.innerHTML="<font color='green'></font>";
                   // return true;
                }else if(pwd.value.length>10){
                    err.innerHTML="<font color='green'></font>";
                   // return true;
                }
            }
            //判断再次输入密码
            function mima1(){
                var pwd=document.getElementById("pwd").value;
                var pwd1=document.getElementById("pwd1").value;
                var err=document.getElementById("err-tip2");
                if(pwd!=pwd1){
                    err.innerHTML="<font color='red'>两次密码不一致</font>";
                    return false;
                }else{
                    err.innerHTML="<font color='green'></font>";
                    //return true;
                }
            }
            //判断输入手机号的方法
            function tel1(){
                var tel=document.getElementById('tel').value;
                var err=document.getElementById('err-tip3');
                var reg=/^1[3|4|5|8][0-9]\d{4,8}$/;
                 if(reg.test(tel)){
                     err.innerHTML="<font color='red'><br></font>";
                    return true;
                }if(tel==""){
                    //alert("wwd");
                    err.innerHTML="<font color='red'>请输入手机号</font>";
                    return false;
                }if(!reg.test(tel)){
                     //alert("wwd");
                    err.innerHTML="<font color='red'>请输入有效的手机号</font>";
                    return false;
                }
            }
    </script>
</html>