<?php
session_start();
$x=$_SESSION['status'];
?>
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

<body>
    <header class="header">
        <div  class="mfw-header">
            <div class="header-wrap">
                <div class="head-logo"><a class="mfw-logo" title="蚂蜂窝自由行" href="/"></a></div>
                <ul class="head-nav">
                    <li><a href="main.php" title="">首页</a></li>
                    <li><a href="http://localhost:8080/mafengwo/qxm/travesgonglue.php" title="">旅游攻略</a></li>
                    <li class="head-nav-dropdown">
                        <a href="http://localhost:8080/mafengwo/store/mfw/sales.html" class="drop-toggle" title="">自由行商城</a>
                    </li>
                    <li>
                <iframe src="iframe.php" frameborder=0 scrolling="none" style="height:59px;padding-top:13px;margin-left:120%"></iframe>
                </li>
                </ul>
                    
                </div>
            </div>
            <div class="shadow"></div>
        </div>
    </header>
    <div class="wrapper clearfix">
        <div class="myinfo-outer">
            <div class="aside">
                <a href="" class="on"><i class="i1"></i>我的信息</a>
                <a href="mycenter.php?u=<?php echo $x;?>"><i class="i2"></i>我的游记</a>
                <a class="xia"><i class="i2"></i>我的关注</a>
                 <ul class="ul" style="border-radius: 5px;">
                    
                </ul>


                
            </div>
            <div class="content">
                <div class="hd">
                    <strong>我的信息</strong>
                    <span>资料完善度
                        <div class="progress">
                            <div class="num">0%</div>
                            <div class="on" style="width:60%"></div>
                        </div>
                    </span>
                </div>
                <div class="userinfo">
                    <form action="" method="post" accept-charset="utf-8">
                        <dl class="clearfix">
                            <dt>名号：</dt>
                            <dd>
                                <input type="text" id="myname" value="冬末">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>性别：</dt>
                            <dd>
                                <label>
                                    <span class="cssradio">
                                        <input type="radio" name="sex" class="sex" value="男">
                                        <span></span>
                                    </span>男
                                </label>
                                <label>
                                    <span class="cssradio">
                                        <input type="radio" name="sex" class="sex" value="女">
                                        <span></span>
                                    </span>女
                                </label>
                                <label>
                                    <span class="cssradio">
                                        <input type="radio" name="sex" class="sex" value="保密" checked="checked">
                                        <span></span>
                                    </span>保密
                                </label>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>居住城市：</dt>
                            <dd>
                                <input type="text" id="city" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>出生日期：</dt>
                            <dd>
                                <input type="text" id="birth" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>个人简介：</dt>
                            <dd>
                                <textarea id="brief" placeholder="例：摄影师/旅居澳洲/潜水爱好者"></textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>收货地址：</dt>
                            <dd class="myaddress">
                                <input type="text" id="address" value="">
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt></dt>
                            <dd class="tips">
                                <p class="title"><b>**</b>提示信息<b>**</b></p>
                                <p>如果您在蚂蜂窝活动中获得奖品，我们将按照该收货地址发送奖品，
                                    所以请填写 真实有效 的收货信息。</p>
                            </dd>
                        </dl>
                        <div class="btn-sub"><button type="button" id="save">保存</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="ft-content">
            <div class="ft-info">
                <dl class="ft-info-col ft-info-intro">
                    <dt>中国领先的自由行服务平台</dt>
                    <dd>覆盖全球200多个国家和地区</dd>
                    <dd><strong>100,000,000</strong> 位旅行者</dd>
                    <dd><strong>920,000</strong> 家国际酒店</dd>
                    <dd><strong>21,000,000</strong> 条真实点评</dd>
                    <dd><strong>382,000,000</strong> 次攻略下载</dd>
                    <dd><a class="highlight" href="" target="_blank">中国旅游行业第一部“玩法”</a></dd>
                </dl>
                <dl class="ft-info-col ft-info-about">
                    <dt>关于我们</dt>
                    <dd><a href="">关于蚂蜂窝</a></dd>
                    <dd><a href="">网络信息侵权通知指引</a></dd>
                    <dd><a href="">隐私政策</a></dd>
                    <dd><a href="">服务协议</a></dd>
                    <dd><a href="">联系我们</a></dd>
                    <dd><a class="highlight" title="蚂蜂窝团队招聘" target="_blank" href="">加入蚂蜂窝</a></dd>
                </dl>
                <dl class="ft-info-col ft-info-service">
                    <dt>旅行服务</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a target="_blank" href="">旅游攻略</a></li>
                            <li><a target="_blank" href="">酒店预订</a></li>
                            <li><a target="_blank" href="">旅游特价</a></li>
                            <li><a target="_blank" href="">国际租车</a></li>
                            <li><a target="_blank" href="">旅游问答</a></li>
                            <li><a target="_blank" href="">旅游指南</a></li>
                            <li><a target="_blank" href="">订火车票</a></li>
                            <li><a target="_blank" href="">旅游资讯</a></li>
                            <li><a target="_blank" href="">APP下载</a></li>
                            <li style="clear: left;"><a target="_blank" href="" class="highlight">全球供应商入驻</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="ft-info-col ft-info-qrcode">
                    <dd>
                        <span class="ft-qrcode-tejia"></span>
                        <p>蚂蜂窝良品<br>官方服务号</p>
                    </dd>
                    <dd>
                        <span class="ft-qrcode-weixin"></span>
                        <p>蚂蜂窝自由行<br>订阅号</p>
                    </dd>
                </dl>
                <dl class="ft-info-social">
                    <dt>关注我们</dt>
                    <dd>
                        <a class="ft-social-weibo" target="_blank" href=""><i></i></a>
                        <a class="ft-social-qqt" target="_blank" href=""><i></i></a>
                        <a class="ft-social-qzone" target="_blank" href=""><i></i></a>
                    </dd>
                </dl>
            </div>
            <div class="ft-links">
                <a target="_blank" href="">马可波罗</a>
                <a target="_blank" href="" se_prerender_url="complete">Onlylady女人志</a>
                <a target="_blank" href="">艺龙旅游指南</a><a target="_blank" href="http://www.cncn.com">欣欣旅游网</a><a target="_blank" href="http://www.8264.com/">户外运动</a><a target="_blank" href="http://www.yue365.com/">365音乐网</a><a target="_blank" href="http://ishare.iask.sina.com.cn/">爱问共享资料</a><a target="_blank" href="http://www.uzai.com/">旅游网</a><a target="_blank" href="http://www.zongheng.com/">小说网</a><a target="_blank" href="http://www.xuexila.com/">学习啦</a><a target="_blank" href="http://www.yododo.com">游多多自助游</a><a target="_blank" href="http://www.zhcpic.com/">问答</a><a target="_blank" href="http://huoche.mafengwo.cn/">火车时刻表</a><a target="_blank" href="http://www.lvmama.com">驴妈妈旅游网</a><a target="_blank" href="http://www.haodou.com/">好豆美食网</a><a target="_blank" href="http://www.taoche.com/">二手车</a><a target="_blank" href="http://www.lvye.cn">绿野户外</a><a target="_blank" href="http://www.tuniu.com/">途牛旅游网</a><a target="_blank" href="http://www.mapbar.com/">图吧</a><a target="_blank" href="http://www.chnsuv.com">SUV联合越野</a><a target="_blank" href="http://www.uc.cn/">手机浏览器</a><a target="_blank" href="http://sh.city8.com/">上海地图</a><a target="_blank" href="http://www.tianqi.com/">天气预报查询</a><a target="_blank" href="http://www.ly.com/">同程旅游</a><a target="_blank" href="http://www.tieyou.com/">火车票</a><a target="_blank" href="http://you.ctrip.com/">携程旅游</a><a target="_blank" href="http://www.jinjiang.com">锦江旅游</a><a target="_blank" href="http://www.huoche.net/">火车时刻表</a><a target="_blank" href="http://www.tripadvisor.cn/" se_prerender_url="complete">TripAdvisor</a><a target="_blank" href="http://www.tianxun.com/">天巡网</a><a target="_blank" href="http://www.mayi.com/">短租房</a><a target="_blank" href="http://www.zuzuche.com">租租车</a><a target="_blank" href="http://www.5fen.com/">五分旅游网</a><a target="_blank" href="http://www.zhuna.cn/">酒店预订</a><a target="_blank" href="http://www.ailvxing.com">爱旅行网</a><a target="_blank" href="http://360.mafengwo.cn/all.php">旅游</a><a target="_blank" href="http://vacations.ctrip.com/">旅游网</a><a target="_blank" href="http://www.wed114.cn" se_prerender_url="complete">wed114结婚网</a><a target="_blank" href="http://www.chexun.com/">车讯网</a><a target="_blank" href="http://www.aoyou.com/">遨游旅游网</a><a target="_blank" href="http://www.91.com/">手机</a>
                <a href="" target="_blank">更多友情链接&gt;&gt;</a>
            </div>
            <div class="ft-copyright">
                <a href="" title="" class="f f1"></a>
                <a href="" title="" class="f f2"></a>
                <a href="" title="" class="f f3"></a>
                <a href="" class="ft-mfw-logo"><i></i></a>
                <p>© 2017 Mafengwo.cn
                    <a href="" target="_blank" >京ICP备11015476号</a> 京公网安备110105013401号
                    <a href="" target="_blank">京ICP证110318号</a>
                </p>
                <p>
                    <a href="" target="_blank">营业执照</a> 新出网证(京)字242号 全国统一客服电话：
                    <span class="highlight">4006-345-678</span>
                    <a target="_blank" href="" class="highlight">网站地图</a>
                </p>
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
    <script>
        ;(function(){
        calender('#birth').init(function(date){
 		this.value= date
	});
	calender('#inp2').init({format : 'yyyy-MM-dd',
                date : [2020,5,12],
		button : true
	},function(date){
		this.value= date
	});
})();
    </script>
    <script type="text/javascript">
      $(".xia").click(function(){
        $.post('myinfoprocess.php',{q:1},function(data){
            console.log(data);
             var str="";
            $.each(data,function(k,v){
             str+="<li><img style='margin-left:-37px;margin-top:5px' src='../assets/images/"+
             "activitor04.jpeg'> <a style='color:#ff9d00;margin-left:-28px'"+
              "href='mycenter.php?u="+v.dfuser+"'>"+v.dfuser+"</a></li>";
            })
            $(".ul").html(str);
        },'json')
      })
    </script>
</body>
</html>