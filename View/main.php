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
    <meta charset="UTF-8">
    <title>蚂蜂窝</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/reset.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_387257_ktukd140m3dw8kt9.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/mfw.css"/> 
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.page.css"/> 
    <style type="text/css">
    	*{margin:0;padding:0;}
    	.tn-wrapper dd{height:58px}
        .header .mfw-header .header-wrap .login-out > a{font-size: 17px}
    	}
        @media (max-width: 1440px){
        .mfw-header{height: 68px} 
}
    </style>
</head>
<body>
    <header class="header">
        <div  class="mfw-header">
            <div class="header-wrap">
                <div class="head-logo"><a class="mfw-logo" title="蚂蜂窝自由行" href="/"></a></div>
                <ul class="head-nav">
                    <li class="index"><a href="" title="">首页</a></li>
                    
                    <li><a href="http://localhost:8080/mafengwo/qxm/travesgonglue.php" title="">旅游攻略</a></li>
                    <li class="head-nav-dropdown ">
                        <a href="http://localhost:8080/mafengwo/store/mfw/sales.html" class="drop-toggle" title="">自由行商城</a>
                        
                    </li>
                </ul>
                <div>
                <iframe src="iframe.php" scrolling="none" style="height:59px;padding-top:13px;margin-left:120%"></iframe>
                </div>
            </div>
        </div>
    </header>
    <div class="mfw-focus">
        <div class="show-slider" id="banner">
            <ul class="show-image">
                <li class="first">
                    <a href="" title="" class="show-pic">
                        <img src="../assets/images/uploads/show-image01.jpeg" alt="">
                    </a>
                    <div class="show-title">
                        <a href="" target="_blank" class="dark">
                            <div class="date">
                                <span class="day">16</span>/Aug.2017
                            </div>
                            <h3>法兰西8日，被地中海的阳光与音乐温柔款待</h3>
                        </a>
                    </div>
                    <p class="show-info">图片来自于<span><a href="" target="_blank">花鸟岛</a></span>，此目的地共收藏了<span><a href="/photo/mdd/198518.html" target="_blank">0</a></span>张<span><a href="/travel-scenic-spot/mafengwo/198518.html" target="_blank">花鸟岛</a></span>图片。本片由<span><a href="/u/19922585.html" target="_blank">在远方的阿伦</a></span>荣誉出品！
                    </p>
                </li>
                <li class="">
                    <a href="" title="" class="show-pic">
                        <img src="../assets/images/uploads/show-image02.jpeg" alt="">
                    </a>
                    <div class="show-title">
                        <a href="/i/7266407.html" target="_blank" class=" dark" se_prerender_url="complete">
                            <div class="date">
                                <span class="day">15</span>/Aug.2017
                            </div>
                            <h3>北京以北，那群历经时代变迁的火山群</h3>
                        </a>
                    </div>
                    <p class="show-info">图片来自于<span><a href="/travel-scenic-spot/mafengwo/11572.html" target="_blank">乌兰察布</a></span>，此目的地共收藏了<span><a href="/photo/mdd/11572.html" target="_blank">7427</a></span>张<span><a href="/travel-scenic-spot/mafengwo/11572.html" target="_blank">乌兰察布</a></span>图片。本片由<span><a href="/u/317574.html" target="_blank">in老板</a></span>荣誉出品！</p>
                </li>
                <li class="">
                    <a href="" title="" class="show-pic">
                        <img src="../assets/images/uploads/show-image03.jpeg" alt="">
                    </a>
                    <div class="show-title">
                        <a href="/i/7323527.html" target="_blank" class=" dark">
                            <div class="date">
                                <span class="day">14</span>/Aug.2017
                            </div>
                            <h3>梦见，一抹濑户内海蓝</h3>
                        </a>
                    </div>
                    <p class="show-info">图片来自于<span><a href="/travel-scenic-spot/mafengwo/182216.html" target="_blank">濑户内海</a></span>，此目的地共收藏了<span><a href="/photo/mdd/182216.html" target="_blank">2463</a></span>张<span><a href="/travel-scenic-spot/mafengwo/182216.html" target="_blank">濑户内海</a></span>图片。本片由<span><a href="/u/17654178.html" target="_blank">SUKI</a></span>荣誉出品！</p>
                </li>
                <li class="">
                    <a href="" title="" class="show-pic">
                        <img src="../assets/images/uploads/show-image04.jpeg" alt="">
                    </a>
                    <div class="show-title">
                        <a href="/i/7346786.html" target="_blank" class=" dark">
                            <div class="date">
                                <span class="day">13</span>/Aug.2017
                            </div>
                            <h3>你说想去海岛，我指着美娜多的方向！</h3>
                        </a>
                    </div>
                    <p class="show-info">图片来自于<span><a href="/travel-scenic-spot/mafengwo/66121.html" target="_blank">万鸦老</a></span>，此目的地共收藏了<span><a href="/photo/mdd/66121.html" target="_blank">123</a></span>张<span><a href="/travel-scenic-spot/mafengwo/66121.html" target="_blank">万鸦老</a></span>图片。本片由<span><a href="/u/17253839.html" target="_blank">汤勺</a></span>荣誉出品！</p>
                </li>
                <li class="">
                    <a href="" title="" class="show-pic">
                        <img src="../assets/images/uploads/show-image05.jpeg" alt="">
                    </a>
                    <div class="show-title">
                       <a href="/i/7089470.html" target="_blank" class="dark">
                            <div class="date">
                                <span class="day">12</span>/Aug.2017
                            </div>
                            <h3>老挝：一个埋有8000多万颗未爆炸炸弹的国土</h3>
                        </a>
                    </div>
                    <p class="show-info">图片来自于<span><a href="/travel-scenic-spot/mafengwo/11572.html" target="_blank">乌兰察布</a></span>，此目的地共收藏了<span><a href="/photo/mdd/11572.html" target="_blank">7427</a></span>张<span><a href="/travel-scenic-spot/mafengwo/11572.html" target="_blank">乌兰察布</a></span>图片。本片由<span><a href="/u/317574.html" target="_blank">in老板</a></span>荣誉出品！</p>
                </li>
            </ul>
            <div class="search-container" id="search-index">
                <div class="search-group">
                    <div class="searchtab" id="">
                        <ul class="">
                            <li class="tab-selected" data-index="0"><i></i>全部</li>
                            <li data-index="1"><i></i>酒店</li>
                            <li data-index="2"><i></i>目的地</li>
                            <li data-index="3"><i></i>自由行商城</li>
                        </ul>
                    </div>
                    <div class="searchbar" id="search_bar_mdd">
                        <form action="/search" method="get">
                        <div class="search-wrapper">
                            <div class="search-input">
                                <input name="mdd" type="text" placeholder="我要去..." id="index_search_input_mdd">
                            </div>
                        </div>
                        <div class="search-button" id="index_search_btn_mdd">
                            <a role="button" href="javascript:"><i class="icon-search"></i></a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <ul class="show-nav">
                <li class="active"><img src="../assets/images/uploads/show-nav-img01.jpeg"></li>
                <li class=""><img src="../assets/images/uploads/show-nav-img02.jpeg"></li>
                <li class=""><img src="../assets/images/uploads/show-nav-img03.jpeg"></li>
                <li class=""><img src="../assets/images/uploads/show-nav-img04.jpeg"></li>
                <li class=""><img src="../assets/images/uploads/show-nav-img05.jpeg"><a class="show-more" target="_blank" href="">历历在目</a></li>
            </ul>

        </div>

    </div>
    <div class="content">
        <!-- 左边栏内容start -->
        <div class="mfw-aside">
            <div class="da-banner">
                <a href="" title=""><img src="../assets/images/uploads/mfw-aside01.jpeg" alt=""></a>
            </div>
            <div class="asidebox box-traveller">
                <div class="asidebox-hd">
                    <a href="" title="" class="hd-title">旅行家专栏</a><a class="hd-more" href="" title="">专栏首页</a>
                </div>
                <div class="asidebox-bd" id="traveller_slide">
                    <ul class="slide-ul">
                        <li>
                            <div class="image"><a href="" title=""><img src="../assets/images/uploads/traveller01.jpeg" alt=""></a></div>
                            <h3><a href="" title="">东欧难民的顺从综合症</a></h3>
                            <p>这种病只发生在瑞典，而且只存在于瑞典的东欧难民之中——他们的身体机能没有任何毛病，但失去了生存下去的意愿。</p>
                        </li>
                        <li>
                            <div class="image"><a href="" title=""><img src="../assets/images/uploads/traveller02.jpeg" alt=""></a></div>
                            <h3><a href="" title="">在旅途中我们都是孩子</a></h3>
                            <p>在旅途中，我们都是孩子，唱歌的孩子，跳舞的孩子，看星星的孩子。</p>
                        </li>
                        <li>
                            <div class="image"><a href="" title=""><img src="../assets/images/uploads/traveller03.jpeg" alt=""></a></div>
                            <h3><a href="" title="">柏林夏天</a></h3>
                            <p>柏林的魅力就是简单自然，没有过多的修饰，也没有更多金钱上的压力。</p>
                        </li>
                        <li>
                            <div class="image"><a href="" title=""><img src="../assets/images/uploads/traveller04.jpeg" alt=""></a></div>
                            <h3><a href="" title="">嘉兴夏天</a></h3>
                            <p>热浪滚滚的村子里，年轻人都进城去了，留下不多的一些个老人，蚊子们为口粮也着实苦恼。</p>
                        </li>
                        <li>
                            <div class="image"><a href="" title=""><img src="../assets/images/uploads/traveller05.jpeg" alt=""></a></div>
                            <h3><a href="" title="">北京夏天</a></h3>
                            <p>这就是我对夏天的第一个记忆，同时这或许也造成了我日后对集体活动的反感继而对集体的反叛？</p>
                        </li>
                    </ul>
                    <ol class="slide-ol">
                        <li class="active" data-id="0"></li>
                        <li data-id="1"></li>
                        <li data-id="2"></li>
                        <li data-id="3"></li>
                        <li data-id="4"></li>
                    </ol>
                </div>
            </div>
            <div class="asidebox box-gonglve">
                <div class="asidebox-hd">
                    <a href="" title="" class="hd-title">旅游攻略推荐</a>
                    <a class="hd-more" href="http://localhost:8080/mafengwo/qxm/travesgonglue.php" title="">更多</a>
                </div>
                <div class="asidebox-bd">
                    <dl>
                        <dt><a href="" title=""><img src="../assets/images/uploads/gonglv01.jpeg" alt=""></a></dt>
                        <dd>
                            <h3><a href="" title="">纽约</a></h3>
                            <p>详细的吃、住、行、景点、线路、实用信息</p>
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <a href="" target="_blank">蚂蜂窝用</a> 点评了&nbsp;
                            莲湖区的 <a href="" target="_blank">西安途悦酒店</a>
                        </li>
                        <li>
                            <a href="" target="_blank">18311076</a> 点评了&nbsp;
                            东城区(北京市)的 <a href="" target="_blank">天坛</a>
                        </li>
                        <li>
                            <a href="" target="_blank">北京贼猫</a> 点评了&nbsp;
                            市中区的 <a href="" target="_blank">乐山大佛</a>
                        </li>
                        <li>
                            <a href="" target="_blank">水yan</a> 点评了&nbsp;
                            香格里拉的 <a href="" target="_blank">纳帕海</a>
                        </li>
                        <li>
                            <a href="" target="_blank">The Arms</a> 点评了&nbsp;
                            新南威尔士的 <a href="" target="_blank">阿联酋唯一沃</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="asidebox box-activity">
                <div class="asidebox-hd">
                    <a href="" title="" class="hd-title">我的活动</a>
                    <a class="hd-more" href="" title="">正在进行</a>
                </div>
                <div class="asidebox-bd activitynav" id="activitynav">
                    <ul>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor01.jpeg" alt="">
                            <strong>
                                <span>吉利帝豪GS城歌行</span>
                                <p>开启动静音乐之旅！</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor02.jpeg" alt="">
                            <strong>
                                <span>环球60城，“暑”你最会玩</span>
                                <p>6200元代金券等你来拿</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor03.jpeg" alt="">
                            <strong>
                                <span>亚洲航空 嬉游泰国</span>
                                <p>跟随亚洲航空 发现泰国 赢取机票</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor04.jpeg" alt="">
                            <strong>
                                <span>梦回世界客都，醉游慢城梅州</span>
                                <p>看尽梅州风韵，醉心客家故里~</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor05.jpeg" alt="">
                            <strong>
                                <span>新奥迪A3，重色轻游</span>
                                <p>新奥迪A3，陪你领略世界的多彩</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor06.jpeg" alt="">
                            <strong>
                                <span>探访不为人知的秘境之旅</span>
                                <p>跟随小四去探索更多的丰富多彩</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor07.jpeg" alt="">
                            <strong>
                                <span>乐而雅体验官计划</span>
                                <p>向世界轻快出发，千元大奖等你来</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor08.jpeg" alt="">
                            <strong>
                                <span>一汽马自达CX-4 走自己的路</span>
                                <p>坚持自我，来分享你的路吧！</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor09.jpeg" alt="">
                            <strong>
                                <span>体验地道文化，感受当地生活</span>
                                <p>一起放慢节奏，细看全球绝美景致</p>
                            </strong>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                            <img src="../assets/images/uploads/activitor10.jpeg" alt="">
                            <strong>
                                <span>蚂蜂窝拍卖行</span>
                                <p>每周二：拍精美实物奖品！</p>
                            </strong>
                            </a>
                        </li>
                    </ul>
                    <div class="scrollBar"></div>
                </div>
            </div>
            <div class="da-banner">
                <a href="" title=""><img src="../assets/images/uploads/mfw-aside02.jpeg" alt=""></a>
            </div>
            <div class="asidebox box-hr">
                <div class="asidebox-hd">
                    <a href="" title="" class="hd-title">加入蚂蜂窝</a><a class="hd-more" href="" title="">更多职位></a>
                </div>
                <div class="asidebox-bd">
                    <a href="" title=""><img src="../assets/images/uploads/hr.jpg" alt=""></a>
                    <ul>
                        <li><a href="" target="_blank"><span>申请职位&gt;</span>广告销售经理<i>HOT</i></a>
                        </li>
                        <li><a href="" target="_blank"><span>申请职位&gt;</span>资深PHP开发工程师<i>HOT</i></a>
                        </li>
                        <li><a href="" target="_blank"><span>申请职位&gt;</span>广告执行经理</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="asidebox box-news">
                <div class="asidebox-hd">
                    <a href="" title="" class="hd-title">蚂蜂窝旅行网站最新进展</a>
                </div>
                <ul class="asidebox-bd">
                    <li>05月12日<a href="" target="_blank">指路人俱乐部首期面基大会圆满成功</a></li>
                    <li>10月29日<a href="" target="_blank">蚂蜂窝秋酷大趴完美收官&amp;全纪录</a></li>
                    <li>09月29日<a href="" target="_blank">蚂蜂窝秋酷大趴进入倒计时</a></li>
                    <li>09月20日<a href="" target="_blank">手机写游记功能上线</a></li>
                    <li>08月24日<a href="" target="_blank">蚂蜂窝C9计划·秋酷大趴开始报名</a></li>
                    <li>08月15日<a href="" target="_blank">2016蚂蜂窝指路人全球招募</a></li>
                </ul>
            </div>
        </div><!-- 左边栏内容end -->
        <div class="mfw-wrapper">
            <div class="da-banner">
                <a href="" title=""><img src="../assets/images/uploads/mfw-wrapper01.gif" alt=""></a>
            </div>
            <div class="mfw-salse">
                <div class="hd">爆款热卖</div>
                <div class="bd">
                   <ul id="store">

                    </ul>
                </div>
            </div>
            <div class="mfw-travelnotes" id="tn">
                <div class="navbar">
                    <ul class="tn-nav" id="tn_nav">
                        <li class="gs-tab active">
                            <a href="javascript:void(0);" title="" data-type="hots">热门游记</a>
                            <span class="tn-menu open-search">
                                <i class="tn-menu-icon"></i>筛选
                            </span>
                        </li>
                        <li class="gs-tab n-nav-new">
                            <a href="javascript:void(0);" title="" data-type="news">最新发表</a>
                        </li>
                    </ul>
                    <div class="tn-write">
                        <a class="btn-add" id="er" title=""><i></i>写游记</a>
                    </div>
                    <a href="" class="tn-tips" title=""><i></i>我要上首页</a>
                </div>
                <!-- 筛选start -->
                <div class="tn-dropdown-pop" id="tn-dropdown-pop" style="">
                    <span class="underline"></span>
                    <a class="close" href="javascript:void(0);">×</a>
                    <div class="section">
                        <div class="label">目的地</div>
                        <div class="section-cont">
                            <div class="mui-search">
                                <input class="mui-search-inp" type="text" placeholder="输入你想查看的目的地">
                            </div>
                            <div class="hot-place">
                                <a class="gs_item" href="javascript:void(0);">斯里兰卡</a>
                                <a class="gs_item" href="javascript:void(0);">济州岛</a>
                                <a class="gs_item" href="javascript:void(0);">香港</a>
                                <a class="gs_item" href="javascript:void(0);">北京</a>
                                <a class="gs_item" href="javascript:void(0);">云南</a>
                                <a class="gs_item" href="javascript:void(0);">泰国</a>
                                <a class="gs_item" href="javascript:void(0);">青海湖</a>
                                <a class="gs_item" href="javascript:void(0);">日本</a>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="label">兴趣</div>
                        <div class="section-cont">
                            <ul class="interest-list">
                                <li class="gs_item" data-objid="417" data-type="1" data-name="吃遍天下">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg1.jpeg"></span>
                                        <h3>吃遍天下</h3>
                                        <p>无敌手</p>
                                    </a>
                                </li>
                                <li class="gs_item">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg2.jpeg"></span>
                                        <h3>带着对象</h3>
                                        <p>去虐狗</p>
                                    </a>
                                </li>
                                <li class="gs_item">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg3.jpeg"></span>
                                        <h3>姑娘漂亮</h3>
                                        <p>就是美</p>
                                    </a>
                                </li>
                                <li class="gs_item">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg4.jpeg"></span>
                                        <h3>带着孩子</h3>
                                        <p>看世界</p>
                                    </a>
                                </li>
                                <li class="gs_item ">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg5.jpeg"></span>
                                        <h3>登山徒步</h3>
                                        <p>用脚走</p>
                                    </a>
                                </li>
                                <li class="gs_item">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg6.jpeg"></span>
                                        <h3>带着父母</h3>
                                        <p>去远方</p>
                                    </a>
                                </li>
                                <li class="gs_item ">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg7.jpeg"></span>
                                        <h3>独自一人</h3>
                                        <p>最自由</p>
                                    </a>
                                </li>
                                <li class="gs_item">
                                    <a href="javascript:void(0);">
                                        <span class="img"><img width="110" src="../assets/images/uploads/interest/intimg8.jpeg"></span>
                                        <h3>短途周末</h3>
                                        <p>散散心</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- 筛选end -->
                <div class="_j_tn_content">
                	<div class="tn_list">
                	</div>
                </div>
                    <div align="right" class="m-pagination" id="tn_pagination">
                        <!-- <span class="count">共<span>0</span>页 /<span>0</span>条</span>
                        <span class="pg-current">1</span>
                        <a class="pi pageitem" href="javascript:;" data-page="2">2</a>
                        <a class="pi pageitem" href="javascript:;" data-page="3">3</a>
                        <a class="pi pageitem" href="javascript:;" data-page="4">4</a>
                        <a class="pi pageitem" href="javascript:;" data-page="5">5</a>
                        <a class="pi pageitem" href="javascript:;" data-page="6">6</a>
                        <a class="pi pageitem" href="javascript:;" data-page="7">7</a>
                        <a class="pi pageitem" href="javascript:;" data-page="8">8</a>
                        <a class="pi pageitem" href="javascript:;" data-page="9">9</a>
                        <a class="pg-next pageitem" href="javascript:;" data-page="2">下一页 &gt;&gt;</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mfw-toolbar" id="toolbar">
        <div class="toolbar-outer toolbarfix">
            <a href="javascript:void(0);" title="" class="btn top">
                <i class="icon-top"></i>
                <em>返回顶部</em>
            </a>
            <a href="#top" title="" class="btn feedback">
                <i class="icon-feedback"></i>
                <em>意见反馈</em>
            </a>
            <div href="#top" title="" class="btn code">
                <i class="icon-code"></i>
                <a href="" title="" class="codeimg"><img src="../assets/images/icon/code.jpeg"></a>
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
                            <li><a target="_blank" href="/gonglve/">旅游攻略</a></li>
                            <li><a target="_blank" href="/hotel/">酒店预订</a></li>
                            <li><a target="_blank" href="/sales/">旅游特价</a></li>
                            <li><a target="_blank" href="http://zuche.mafengwo.cn/">国际租车</a></li>
                            <li><a target="_blank" href="/wenda/">旅游问答</a></li>
                            <li><a target="_blank" href="http://z.mafengwo.cn">旅游指南</a></li>
                            <li><a target="_blank" href="http://huoche.mafengwo.cn">订火车票</a></li>
                            <li><a target="_blank" href="/travel-news/">旅游资讯</a></li>
                            <li><a target="_blank" href="/app/intro/gonglve.php">APP下载</a></li>
                            <li style="clear: left;"><a target="_blank" href="/sales/alliance.php" class="highlight">全球供应商入驻</a></li>
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
                <a target="_blank" href="http://china.makepolo.com/">马可波罗</a>
                <a target="_blank" href="http://www.onlylady.com/" se_prerender_url="complete">Onlylady女人志</a>
                <a target="_blank" href="http://trip.elong.com/">艺龙旅游指南</a><a target="_blank" href="http://www.cncn.com">欣欣旅游网</a><a target="_blank" href="http://www.8264.com/">户外运动</a><a target="_blank" href="http://www.yue365.com/">365音乐网</a><a target="_blank" href="http://ishare.iask.sina.com.cn/">爱问共享资料</a><a target="_blank" href="http://www.uzai.com/">旅游网</a><a target="_blank" href="http://www.zongheng.com/">小说网</a><a target="_blank" href="http://www.xuexila.com/">学习啦</a><a target="_blank" href="http://www.yododo.com">游多多自助游</a><a target="_blank" href="http://www.zhcpic.com/">问答</a><a target="_blank" href="http://huoche.mafengwo.cn/">火车时刻表</a><a target="_blank" href="http://www.lvmama.com">驴妈妈旅游网</a><a target="_blank" href="http://www.haodou.com/">好豆美食网</a><a target="_blank" href="http://www.taoche.com/">二手车</a><a target="_blank" href="http://www.lvye.cn">绿野户外</a><a target="_blank" href="http://www.tuniu.com/">途牛旅游网</a><a target="_blank" href="http://www.mapbar.com/">图吧</a><a target="_blank" href="http://www.chnsuv.com">SUV联合越野</a><a target="_blank" href="http://www.uc.cn/">手机浏览器</a><a target="_blank" href="http://sh.city8.com/">上海地图</a><a target="_blank" href="http://www.tianqi.com/">天气预报查询</a><a target="_blank" href="http://www.ly.com/">同程旅游</a><a target="_blank" href="http://www.tieyou.com/">火车票</a><a target="_blank" href="http://you.ctrip.com/">携程旅游</a><a target="_blank" href="http://www.jinjiang.com">锦江旅游</a><a target="_blank" href="http://www.huoche.net/">火车时刻表</a><a target="_blank" href="http://www.tripadvisor.cn/" se_prerender_url="complete">TripAdvisor</a><a target="_blank" href="http://www.tianxun.com/">天巡网</a><a target="_blank" href="http://www.mayi.com/">短租房</a><a target="_blank" href="http://www.zuzuche.com">租租车</a><a target="_blank" href="http://www.5fen.com/">五分旅游网</a><a target="_blank" href="http://www.zhuna.cn/">酒店预订</a><a target="_blank" href="http://www.ailvxing.com">爱旅行网</a><a target="_blank" href="http://360.mafengwo.cn/all.php">旅游</a><a target="_blank" href="http://vacations.ctrip.com/">旅游网</a><a target="_blank" href="http://www.wed114.cn" se_prerender_url="complete">wed114结婚网</a><a target="_blank" href="http://www.chexun.com/">车讯网</a><a target="_blank" href="http://www.aoyou.com/">遨游旅游网</a><a target="_blank" href="http://www.91.com/">手机</a>
                <a href="http://www.mafengwo.cn/s/link.html" target="_blank">更多友情链接&gt;&gt;</a>
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
    <script type="text/javascript" src="
    "></script>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/a.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.page.js"></script>
     <script>
        function addInfo(id) {
            $.ajax({
                url: "http://localhost:8080/mafengwo/store/mfw/framework/go/index.php?controller=currentProduct&method=queryPart&part=1",
                dataType: "json",
                error: function () {

                },
                success: function (data,status) {
                   // alert(id)
                    $.each(data,function (index,item) {
                        if (index>2) {return false}
                        document.getElementById(id).innerHTML +=
                            "<li class=\"item item-qiang\">\n" +
                            "            <a href=\"../store/mfw/show.html?pid="+item["pid"]+"\" title=\"\">\n" +
                            "            <div class=\"image\">\n" +
                            "            <img src=\"../store/mfw/"+item["img1"]+"\" alt=\"\">\n" +
                            "        <div class=\"info\">\n" +
                            "        <span class=\"price\">¥<strong>"+item["pay"]+"</strong></span>\n" +
                            "        </div>\n" +
                            "        </div>\n" +
                            "        <h3>"+item["title"]+"</h3>\n" +
                            "        <div class=\"price\">￥<strong>"+item["pay"]+"</strong><em>/人</em></div>\n" +
                            "        </a>\n" +
                            "        </li>"
                    })
                }
            })
        }
        addInfo("store")
        /**/
    </script>
    <script type="text/javascript">
    var p=0;
        $(function(){
            // 退出
            // 
            travels();
            // 点赞量
            $("body").on("click",'.btn-ding',function(){
                if(<?php echo $x;?>==0){
                   alert("请先登陆");
                }else{
                // alert(y);
                var hyt=$(this);
                $.post('mainprocess.php',{t:1,x1:$(this).attr('value'),y:$(this).attr('id')},function(data){
                    if(data==0){
                        
                        $.tipsBox({
                        obj: hyt,
                        str: "+1",
                        callback: function(){
                            // alert(10000);
                        }
                        });
                niceIn(hyt);
                travels();
                    }else{
                    }
                });
            }
            })
            $("body").on('click','.clicks',function(){
                 $.post("mainprocess.php",{s:1,zan:$(this).attr('value'),tittle:$(this).attr('id')},function(data){
                      
                 })
            });
            //分页
            $.post('mainprocess.php',{g:1},function(data){
                var pageall=parseInt(data);
                 $("#tn_pagination").Page({
                     totalPages:pageall,//分页总数
                     liNums: 7,//分页的数字按钮数(建议取奇数)
                     activeClass: 'activP', //active 类样式定义
                     callBack : function(page){
                        p=(page-1)*6;
                        travels();
                     }
                 });
            }); 
            $('.btn-add').click(function(){
                   if(<?php echo $x;?>==0){
                       alert('请先登陆');
                       // location='login.php';
                   }else
                   $(this).attr('href','artitle.php');
            })
            
        });
        //显示所有的文章游记
        function travels(){
             $.post('mainprocess.php',{mm:1,p:p},function(data){
                var str='';
             $.each(data,function(k,v){
                var arr=v.img.split("|");
               str+="<div class='tn_item clearfix'>"+
                            "<div class='tn-image'>"+
                                "<a href='' target='_blank'>"+
                                "<img src='"+arr[0]+"' style='"+"display: inline;'>"+
                                "</a>"+
                           "</div>"+
                           "<div class='tn-wrapper'>"+
                            "<dl>"+
                                "<dt>"+
                                "<a href='artitlemessage.php?x="+v.id+"&y="+v.x+"'"+
                                 "class='clicks' value='"+v.id+"' id='"+v.x+"'>"+v.tittle+"</a>"+
                                "</dt>"+
                                "<dd>"+
                                "<a>"+v.content+"</a>"+
                                "</dd>"+
                            "</dl>"+
                         "<div class='tn-extra'>"+
                            "<span class='tn-ding'>"+
                             "<a class='btn-ding' id='"+v.x+"' value='"+v.id+"' "+
                             "data-japp='articleding' "+
                             "data-iid='8193782' data-vote='245' rel='nofollow'><img width='35px'"+ 
                             "height='33px' src='../assets/images/ding.png'/></a>"+
                             "<em id='topvote8193782'>"+v.num+"</em>"+                    
                            "</span>"+
                            "<span class='tn-place'><i></i><a href='javascript:void(0);' class='"+
                            "_j_gs_item' rel='nofollow' data-name='欧洲' data-objid='14383'"+
                             "data-type='2'>欧洲</a>，by</span>"+
                            "<span class='tn-user'>"+
                                "<a href='mycenter.php?u="+v.username+"' rel='nofollow'>"+
                                "<img src='../assets/images/icon/logo_gonglve_v6_v=20150825.png'>"+
                                    "<span>"+v.username+"</span>"+
                                "</a>"+
                            "</span>"+
                            "<img src='../assets/images/eye.png'  style='width: 18px;height: 1"+
                                "4.25px;margin-top: -2px;'/>"+
                            "<span class='tn-nums' style='margin-left:5px'>"+v.clicks+"</span>"+
                        "</div></div></div>";

             })
             $(".tn_list").html(str);
            },'json')
        }
    </script>
</body>

</html>