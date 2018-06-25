<?php
session_start();
// echo $_SESSION['x'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>帐号登录 - 蚂蜂窝</title>
    <meta property="mfw:partner-platform" content="">
    <link href="https://css.mafengwo.net/css/login/login_v2.css?1493174418" rel="stylesheet" type="text/css"/>
    <style type="text/css">
    body{background: url(../assets/images/2.jpeg);background-size:cover;}
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="container">
            <a href="http://www.mafengwo.cn" title="返回首页" class="logo">蚂蜂窝</a>
            <div class="signup-forms flip">
                <div class="signup-box" id="_j_signup_box">
                    <div class="inner">
                                                                        <!-- <form action="/regist/" method="post" id="_j_signup_form"> -->
                            <input type="hidden" name="token" value="790e595ab50bc4126ad4d3fed3b4e7e7" />
                            <div class="form-field">
                                <input name="passport" type="text" placeholder="您的手机号码" autocomplete="off" data-type="mobile"
                                       data-verification-name="手机号码" class="verification[required,maxSize[50],custom[mobile]]" value="" />
                                                                <div class="err-tip"></div>
                            </div>
                            
                            <div class="submit-btn">
                                <button type="submit">立即注册</button>
                            </div>
                        <!-- </form> -->
                        <div class="agreement">
                            注册视为同意<a target="_blank" href="http://www.mafengwo.cn/s/agreement.html">《蚂蜂窝用户使用协议》</a>
                        </div>
                        <div class="connect">
    <p class="hd">用合作网站账户直接登录</p>
    <div class="bd">
        <a href="/weibo" class="weibo"><i></i>新浪微博</a>
        <a href="/qq" class="qq"><i></i>QQ</a>
        <a href="/wechat" class="weixin"><i></i>微信</a>
        <div class="clear"></div>
    </div>
</div>                    </div>
                    <div class="bottom-link">
                        已经注册?<a href="#">马上登录</a>
                    </div>
                </div>
                <div class="login-box" id="_j_login_box">
                    <div class="inner">
                            <div class="form-field">
                                <input name="passport" type="text" placeholder="用户名" autocomplete="off"
                                       data-verification-name="帐号" class="verification[required,maxSize[50],funcCall[checkShowCode]]" value="" id="x1" />
                                <div class="err-tip1" style="display: none;color: #ffa800;font-size:15px;margin-top: 10px;">用户名输入不正确</div>
                            </div>
                            <div class="form-field">
                                <input name="password" type="password" placeholder="您的密码" autocomplete="off"
                                       data-verification-name="密码" class="verification[required,minSize[4],maxSize[50]]" id="x2" />
                                <div class="err-tip2" style="display: none;color: #ffa800;font-size:15px;margin-top: 10px;">密码错误</div>
                            </div>
                            <div class="form-field hide">
                                <div class="clearfix">
                                    <a href="#" class="vcode-send verify-code-send"><img data-src="" src="" /></a>
                                    <input name="code" type="text" placeholder="验证码" autocomplete="off"
                                           data-verification-name="验证码" class="vcode-input verification[funcCall[checkCode]]">
                                </div>
                                <div class="err-tip clearfix"></div>
                            </div>
                            <div class="form-link"><a href="forget.php">忘记密码</a></div>
                            <div class="submit-btn">
                                <button id="btn">登 录</button>
                            </div>
                        <div class="connect">
    <p class="hd">用合作网站账户直接登录</p>
    <div class="bd">
        <a href="/weibo" class="weibo"><i></i>新浪微博</a>
        <a href="/qq" class="qq"><i></i>QQ</a>
        <a href="/wechat" class="weixin"><i></i>微信</a>
        <div class="clear"></div>
    </div>
</div>                    </div>
                    <div class="bottom-link">
                        还没有帐号?<a href="reg.php">马上注册</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#btn').click(function(){
            if($('#x1').val()=='') $('.err-tip1').css('display','block');
            else if($('#x2').val()=='') $('.err-tip2').css('display','block');
            else{
                $.post('loginprocess.php',{x1:$('#x1').val(),x2:$('#x2').val()},function(data){
                    if(data==-1) alert('用户名不存在');
                    else if(data==0) alert("密码错误");
                    else if(data==-2) alert('您的账号已被冻结');
                    else{
                        alert('登陆成功');
                    if(document.referrer=="http://localhost:8080/mafengwo/View/reg.php"){
                        location='main.php';
                    }else{
                        window.history.back(-1);
                    }
                    }
                })

            }
        })
        $('#x1').focus(function(){
            $('.err-tip1').css('display','none');
            $('.err-tip2').css('display','none');
        });
        $('#x2').focus(function(){
            $('.err-tip1').css('display','none');
            $('.err-tip2').css('display','none');
        });
    })
</script>
</html>
