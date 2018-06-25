
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/date.css"/>
    <style>
    .ul li{padding-left:57px;font-size: 17px}
    .ul li:hover{background-color: #eee;border-radius: 3px}
    .ul li a{color: #ff9d00;}
    </style>
</head>

<body style="">
    
    <div class="wrapper clearfix" style="margin-top: 60px;margin-left:207px">
        <div class="myinfo-outer">
            <div class="content">
                <div class="hd">
                    <strong style="color: #ffa800;">找回密码</strong>
                    <span>请填写注册时的信息
                        <div class="progress">
                            <div class="num">0%</div>
                            <div class="on" style="width:60%"></div>
                        </div>
                    </span>
                </div>
                <div class="userinfo">
                    <form action="forgetprocess.php" method="post" accept-charset="utf-8">
                        <dl class="clearfix">
                            <dt >用户名：</dt>
                            <dd>
                                <input type="text" id="myname" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>姓名：</dt>
                            <dd>
                                <input type="text" id="myname1" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>曾用密码：</dt>
                            <dd>
                                <input type="text" id="pwd" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>现居地址：</dt>
                            <dd>
                                <input type="text" id="addr" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>出生日期：</dt>
                            <dd>
                                <input type="text" id="birth" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>手机号：</dt>
                            <dd>
                                <input type="text" id="tel" value="">
                            </dd>
                        </dl>

                        <div class="btn-sub" style="position: relative;left:-41px"><button type="button"  onclick="aa()">提交</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/json.js"></script>
    <script type="text/javascript" src="../assets/js/myinfo.js"></script>
    <script type="text/javascript" src="http://www.itakeo.com/down/calender2.js"></script>
    <script type="text/javascript">
          function aa(){
            var name=document.getElementById('myname').value;
            var name1=document.getElementById('myname1').value;
            var pwd=document.getElementById('pwd').value;
            var addr=document.getElementById('addr').value;
            var birth=document.getElementById('birth').value;
            var tel=document.getElementById('tel').value;
            if(name==""||name1==""||pwd==""||addr==""||birth==""||tel==""){
                alert("信息不能为空");
            }else{
                alert("预计四小时之内完成处理");
            }
          }
    </script>
</body>
</html>