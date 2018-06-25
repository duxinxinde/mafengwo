<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>蚂蜂窝</title>
     <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_387257_ktukd140m3dw8kt9.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
     <style>
       .focus .slide ol{left:523px;top:275px;}
       h3{font-size: 16px}
       a:hover{text-decoration: none}
       .index{height: 67px}
       .title:hover{color:#ff9d00;}
     </style>
</head>
<script type="text/javascript">
     aa();
    function aa(){
    //当页面加载完成，旅游攻略的信息从数据库反馈到页面上
        var cs1=12;
           $.ajax({
            url:"travelprocess.php",
            data:{"cs1":cs1},
            type:"post",
            dataType:"json",
            success:function(data){
                 var str="";
                    $.each(data,function(index,value){
                    var img2=value.img.split("*");
                    // alert(value.title+value.content+value.img+value.address+value.clicks+value.goods
                    //     +value.pre+value.author+value.authorimg);
                    str+="<div class='feed-item' id='feed'><a title='' style='color:black;'><div "+
                    "class='bar clearfix'><span class='stat'><span class='num'>"+value.clicks+"</"+
                    "span><i value='"+value.id+"' class='i'></i></span><span class='type'><i"+
                     "class='icon-sales'></i>来自 <strong>"+value.pre+"</strong></span></div><div "+ 
                     "class='title' ><b>"+value.title+"</b></div><div class='txt' value='"+value.id+"' >"+value.content+"<div class"+
                     "='info'></div></div><div class='imgs'><ul class='clearfix'>"+
                     "<li style='margin-top:10px'>";
                     for(var i=0;i<img2.length;i++){
                         str+="<img src="+img2[i]+" width='240px' height='150px' style='margin-top:10px;  margin-right:23.3px;'>";
                            }
                     str+="<div style='margin-top:15px'><font style='margin-left:92%; color:orange;"+
                     "text-decoration:none;' class='font' >"+value.goods+"</font><span class='glyphicon glyphicon-eye-open' style='color:grey;margin-left:10px'></span></div></li></ul></div></a></div><div class='hr'></div>";
                        })
                $(".gl-post").html(str); 
                    }
            });
        }

     $(function(){
        //点击量
            $("body").on("click",".i",function(){
            var cs2=15;
            var datatype=$(this).attr("value");
            //var num=$(".num").text();
            var w=$(this);
            //alert(w);
            $.ajax({
                url:"travelprocess.php",
                type:"post",
                data:{"cs12":cs2,"datatype":datatype},
                dataType:"text",
                success:function(data){
                   var s=parseInt(w.parent().children().eq(0).html());
                   s++;
                   w.parent().children().eq(0).html(s);
                    }
                }); 
            }) ;
        //浏览量
        $("body").on("click",".txt",function(){
            var cs3=12;
            var font=$(this).attr("value");
            //var font1=$("#font");
            var w=$(".font");
            $.ajax({
                url:"travelprocess.php",
                type:"post",
                data:{"cs3":cs3,"font":font},
                dataType:"text",
                success:function(data){
                   //alert(data);
                   w.html(data);
                }
            });
        });
    })
</script>
<style type="text/css">
    .domn_in p a:hover{
        text-decoration: none;
        color: #666;
    }
    .highlight {
        color: #FFA801;
    }
    .input_like input {
        line-height: normal;
    }
    ._j_page_loader{
        background-color: #fff5e5;
        border-radius: 4px;
        color: #666;
        display: block;
        height: 40px;
        line-height: 40px;
        text-align: center;
        width: 100%;
    }
    ._j_page_loader i{
        background: rgba(0, 0, 0, 0) url("http://css.mafengwo.net/images/mfw-ask/mfwask-2016sprite_v3.png") no-repeat scroll 0 -592px;
        display: inline-block;
        height: 10px;
        margin-left: 6px;
        width: 10px;
    }
    ._j_page_loader:hover {
        background-color: #efefef;
        color: #666;
        text-decoration: none;
    }
    .loader {
        background-color: #efefef;
        color: #666;
        text-decoration: none;
    }
    ._j_page_loader:hover i {
        background-position: 0 -621px;
    }

</style>

<body>
    <header class="header">
        <div  class="mfw-header">
            <div class="header-wrap">
                <div class="head-logo"><a class="mfw-logo" title="蚂蜂窝自由行" href="/"></a></div>
                <ul class="head-nav">
                    <li style="height: 67px"><a href="http://localhost:8080/mafengwo/View/main.php" title="">首页</a></li>
                    
                    <li class="index"><a href="" title="">旅游攻略</a></li>
                    <li class="head-nav-dropdown ">
                        <a href="http://localhost:8080/mafengwo/store/mfw/sales.html" class="drop-toggle" title="">自由行商城</i></a>
                        
                    </li>
                    <li>
                     <iframe src="http://localhost:8080/mafengwo/View/iframe.php" frameborder=0 scrolling="none" style="height:59px;padding-top:13px;margin-left:120%"></iframe>
                    </li>
                </ul>
            </div>
            <div class="shadow"></div>
        </div>
    </header>
    <div class="wrapper">
        <div class="focus">
            <div class="mdd_nav">
            <div class="gonglve-nav" data-cs-t="攻略导航">
                        <div class="nav-item" data-cs-p="海外冬季目的地精选">
              <div class="nav-title"><h3>海外冬季目的地精选</h3><b class="gn-arrow"></b></div>
              <div class="nav-panel rank-panel"><ol><li class="top3"><em class="rank-num">1</em><strong><a href="#" target="_blank">北海道</a></strong><a  target="_blank">在皑皑白雪中泡温泉</a></li><li class="top3"><em class="rank-num">2</em><strong><a  target="_blank">冰岛</a></strong><a target="_blank">亲近极北之地的莫测极光</a></li><li class="top3"><em class="rank-num">3</em><strong><a target="_blank">澳大利亚</a></strong>< target="_blank">在南半球过个暖洋洋的圣诞节</a></li><li><em class="rank-num">4</em><strong><a target="_blank">洛杉矶</a></strong><a  target="_blank">阳光加州，避寒圣地</a></li><li><em class="rank-num">5</em><strong><a  target="_blank">新加坡</a></strong><a  target="_blank">活力四射的花园之城</a></li><li><em class="rank-num">6</em><strong><a  target="_blank">斯里兰卡</a></strong><a "target="_blank">便利签证，异域风情</a></li><li><em class="rank-num">7</em><strong><a  target="_blank">帕劳</a></strong><a  target="_blank">潜水者的朝圣地</a></li><li><em class="rank-num">8</em><strong><a  target="_blank">缅甸</a></strong><a  target="_blank">踏上佛国净化之旅</a></li><li><em class="rank-num">9</em><strong><a href="#" target="_blank">菲律宾</a></strong><a  target="_blank">徜徉海岛间，潜入深海中</a></li><li><em class="rank-num">10</em><strong><a  target="_blank">迪拜</a></strong><a  target="_blank">沙漠中的奇迹之城</a></li></ol><span class="nav-banner" style="background:url(http://file31.mafengwo.net/M00/DB/72/wKgBs1dfpuaATGRlAAAVhrE4pLc75.jpeg) no-repeat;"><a  hidefocus="ture" target="_blank"></a></span></div>
            </div>
                        <div class="nav-item" data-cs-p="国内冬季目的地推荐">
              <div class="nav-title"><h3>国内冬季目的地推荐</h3><b class="gn-arrow"></b></div>
              <div class="nav-panel rank-panel"><ol><li class="top3"><em class="rank-num">1</em><strong><a  target="_blank">漠河</a></strong><a  target="_blank">至寒圣地的极光约会</a></li><li class="top3"><em class="rank-num">2</em><strong><a  target="_blank">黄山</a></strong><a  target="_blank">银装素裹秒杀菲林季</a></li><li class="top3"><em class="rank-num">3</em><strong><a  target="_blank">海螺沟</a></strong><a  target="_blank">冰川温泉的童话世界</a></li><li><em class="rank-num">4</em><strong><a  target="_blank">壶口瀑布</a></strong><a  target="_blank">绝美的冰瀑玉壶奇观</a></li><li><em class="rank-num">5</em><strong><a  target="_blank">西岭雪山</a></strong><a target="_blank">成都周边最大滑雪场</a></li><li><em class="rank-num">6</em><strong><a  target="_blank">西双版纳</a></strong><a target="_blank">聆听欣赏原生态歌舞</a></li><li><em class="rank-num">7</em><strong><a  target="_blank">霞浦</a></strong><a  target="_blank">红枫白荻的交相辉映</a></li><li><em class="rank-num">8</em><strong><a  target="_blank">广州</a></strong><a target="_blank">相约一起喝粤式早茶</a></li><li><em class="rank-num">9</em><strong><a  target="_blank">高雄</a></strong><a  target="_blank">暖冬初阳遇最美台湾</a></li><li><em class="rank-num">10</em><strong><a  target="_blank">三亚</a></strong><a  target="_blank">去热带海滩逃离寒冬</a></li></ol><span class="nav-banner" style="background:url(http://file31.mafengwo.net/M00/DB/72/wKgBs1dfpuaATGRlAAAVhrE4pLc75.jpeg) no-repeat;"><a  hidefocus="ture" target="_blank"></a></span></div>
            </div>
                        <div class="nav-item" data-cs-p="奔向海岛">
              <div class="nav-title"><h3>奔向海岛</h3><b class="gn-arrow"></b></div>
              <div class="nav-panel rank-panel"><ol><li class="top3"><em class="rank-num">1</em><strong><a  target="_blank">象岛</a></strong><a  target="_blank">腻了普吉，来象岛玩个深度</a></li><li class="top3"><em class="rank-num">2</em><strong><a  target="_blank">巴厘岛</a></strong><a  target="_blank">巴厘岛免签啦</a></li><li class="top3"><em class="rank-num">3</em><strong><a  target="_blank">毛里求斯</a></strong><a  target="_blank">印度洋上的海上明珠</a></li><li><em class="rank-num">4</em><strong><a  target="_blank">塞班岛</a></strong><a  target="_blank">错“季”出行，也有惊喜</a></li><li><em class="rank-num">5</em><strong><a target="_blank">长滩岛</a></strong><a  target="_blank">潜水与蜜月的天堂</a></li><li><em class="rank-num">6</em><strong><a  target="_blank">圣托里尼</a></strong><a  target="_blank">蓝白之城映衬着海风吹拂</a></li><li><em class="rank-num">7</em><strong><a  target="_blank">沙美岛</a></strong><a  target="_blank">如果你厌倦了芭提雅</a></li><li><em class="rank-num">8</em><strong><a  target="_blank">杜马盖地</a></strong><a  target="_blank">找小丑鱼做客去！</a></li><li><em class="rank-num">9</em><strong><a  target="_blank">兰卡威</a></strong><a  target="_blank">海钓、潜水，看蓝天</a></li><li><em class="rank-num">10</em><strong><a target="_blank">沙巴</a></strong><a  target="_blank">这里有世界上最美的落日</a></li></ol><span class="nav-banner" style="background:url(http://file31.mafengwo.net/M00/DB/72/wKgBs1dfpuaATGRlAAAVhrE4pLc75.jpeg) no-repeat;"><a hidefocus="ture" target="_blank"></a></span></div>
            </div>
                        <div class="nav-item" data-cs-p="主题推荐">
              <div class="nav-title"><h3>主题推荐</h3><b class="gn-arrow"></b></div>
              <div class="nav-panel category-panel"><dl class="clearfix"><dt>骑行</dt><dd><a title="海南" href="#" target="_blank">海南</a></dd><dd><a title="青海湖"  target="_blank">青海湖</a></dd><dd><a title="敦煌"  target="_blank">敦煌</a></dd><dd><a title="漠河"  target="_blank">漠河</a></dd><dd><a title="台湾" target="_blank">台湾</a></dd><dd><a title="北京"  target="_blank">北京</a></dd><dd><a title="杭州"  target="_blank">杭州</a></dd><dd><a title="双廊"  target="_blank">双廊</a></dd><dd><a title="婺源" target="_blank">婺源</a></dd><dd><a title="阿尔山"  target="_blank">阿尔山</a></dd><dd><a title="法国"  target="_blank">法国</a></dd><dd><a title="厦门"  target="_blank">厦门</a></dd><dd><a title="阳朔"  target="_blank">阳朔</a></dd><dd><a title="香格里拉"  target="_blank">香格里拉</a></dd><dd><a title="太湖"  target="_blank">太湖</a></dd><dd><a title="西藏" target="_blank">西藏</a></dd><dd><a title="大理"  target="_blank">大理</a></dd><dd><a title="成都"  target="_blank">成都</a></dd><dd><a title="乌鲁木齐"  target="_blank">乌鲁木齐</a></dd></dl><dl class="clearfix"><dt>潜水</dt><dd><a title="沙巴" target="_blank">沙巴</a></dd><dd><a title="三亚"  target="_blank">三亚</a></dd><dd><a title="斐济" target="_blank">斐济</a></dd><dd><a title="巴厘岛"  target="_blank">巴厘岛</a></dd><dd><a title="长滩岛" target="_blank">长滩岛</a></dd><dd><a title="马尔代夫" target="_blank">马尔代夫</a></dd><dd><a title="苏梅岛"  target="_blank">苏梅岛</a></dd><dd><a title="普吉岛" target="_blank">普吉岛</a></dd><dd><a title="夏威夷" target="_blank">夏威夷</a></dd><dd><a title="巴拉望"  target="_blank">巴拉望</a></dd><dd><a title="马来西亚" target="_blank">马来西亚</a></dd><dd><a title="兰卡威"  target="_blank">兰卡威</a></dd><dd><a title="埃及"  target="_blank">埃及</a></dd><dd><a title="印度尼西亚" target="_blank">印度尼西亚</a></dd><dd><a title="泰国"  target="_blank">泰国</a></dd></dl><dl class="clearfix"><dt>徒步</dt><dd><a title="尼泊尔"  target="_blank">尼泊尔</a></dd><dd><a title="虎跳峡" target="_blank">虎跳峡</a></dd><dd><a title="喀纳斯"  target="_blank">喀纳斯</a></dd><dd><a title="墨脱"  target="_blank">墨脱</a></dd><dd><a title="小五台" target="_blank">小五台</a></dd><dd><a title="贡嘎雪山" target="_blank">贡嘎雪山</a></dd><dd><a title="海陀山" target="_blank">海陀山</a></dd><dd><a title="海螺沟"  target="_blank">海螺沟</a></dd><dd><a title="雨崩"  target="_blank">雨崩</a></dd><dd><a title="三峡"  target="_blank">三峡</a></dd><dd><a title="阳朔" target="_blank">阳朔</a></dd><dd><a title="新都桥"  target="_blank">新都桥</a></dd><dd><a title="楠溪江"  target="_blank">楠溪江</a></dd><dd><a title="梅里雪山"target="_blank">梅里雪山</a></dd><dd><a title="野三坡"  target="_blank">野三坡</a></dd><dd><a title="西双版纳"  target="_blank">西双版纳</a></dd></dl><dl class="clearfix"><dt>登山</dt><dd><a title="珠穆朗玛峰" target="_blank">珠穆朗玛峰</a></dd><dd><a title="乞力马扎罗" target="_blank">乞力马扎罗</a></dd><dd><a title="牛背山"  target="_blank">牛背山</a></dd><dd><a title="太白山"  target="_blank">太白山</a></dd><dd><a title="四姑娘山" target="_blank">四姑娘山</a></dd><dd><a title="雁荡山"  target="_blank">雁荡山</a></dd><dd><a title="云台山" target="_blank">云台山</a></dd><dd><a title="三清山"  target="_blank">三清山</a></dd><dd><a title="普陀山" target="_blank">普陀山</a></dd><dd><a title="庐山"  target="_blank">庐山</a></dd><dd><a title="海陀山" target="_blank">海陀山</a></dd><dd><a title="小五台"  target="_blank">小五台</a></dd><dd><a title="华山" target="_blank">华山</a></dd><dd><a title="泰山" target="_blank">泰山</a></dd><dd><a title="黄山 " target="_blank">黄山 </a></dd><dd><a title="武功山"  target="_blank">武功山</a></dd></dl></div>
            </div>
                        </div>
            <!-- <div class="input_like"> -->
                <!-- <div>
                    <span ></span>
                    <input id="search_word" type="text" placeholder="请输入想去的地方，如:香港" />
                    <div class="clear"></div>
                </div>
                <div class="no_gl" id="search_result"  >
                <strong></strong>
                </div> -->
           <!--  </div> -->
            <div class="app_d">
                <h3><a href="http://imfw.cn/l/654850" target="_blank"><img src="https://n1-q.mafengwo.net/s11/M00/48/44/wKgBEFp1vlOAQETeAARVJoky0Uc95.jpeg" alt="" width="50" height="50"/></a></h3>
                <div class="domn_in">
                    <h4><a href="http://imfw.cn/l/654850" target="_blank">蚂蜂窝自由行APP下载</a></h4>
                    <p>
                        <a style="cursor: auto;">iPhone版</a>
                        <span>|</span>
                        <a style="cursor: auto;">Android版</a>
                        <span>|</span>
                        <a style="cursor: auto;">iPad版</a>
                    </p>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
            <div class="slide">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="carousel slide" id="carousel-568661">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-568661">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-568661">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-568661">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="https://n1-q.mafengwo.net/s11/M00/48/44/wKgBEFp1vlOAQETeAARVJoky0Uc95.jpeg" />
                        <div class="carousel-caption">
                            <h4>
                                First Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="https://p2-q.mafengwo.net/s11/M00/48/BC/wKgBEFp1vpmAWeydAAMfaWDGTs847.jpeg" />
                        <div class="carousel-caption">
                            <h4>
                                Second Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="https://n2-q.mafengwo.net/s11/M00/49/05/wKgBEFp1vsuAU7DxAAMHsdF0j7o96.jpeg" />
                        <div class="carousel-caption">
                            <h4>
                                Second Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="https://p3-q.mafengwo.net/s11/M00/48/89/wKgBEFp1vnqAEdTcAAMEGqCYkEA80.jpeg" />
                        <div class="carousel-caption">
                            <h4>
                                Second Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="assets/images/uploads/gonglve-slider/1.jpeg" />
                        <div class="carousel-caption">
                            <h4>
                                Third Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-568661" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-568661" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>






        </div>
        <div class="adver">
            <a href="" title=""><img src="assets/images/uploads/adver01.png"></a>
            <img src="assets/images/icon/icon_v.png">
        </div>
        <div class="gonglve_wrap clearfix">
            <div class="sidebar">
                <div class="side-hd">旅游攻略导航</div>
                <ul class="nav-drop" >
                    <li class="drop-item" data-open="close">
                        <div class="tit">
                            国内<i></i>
                            <b></b>
                        </div>
                        <div class="drop-pop">
                            <ul class="inner">
                                <li><a href="" title="">四川(27)</a></li>
                                <li><a href="" title="">云南(26)</a></li>
                                <li><a href="" title="">江苏(23)</a></li>
                                <li><a href="" title="">浙江(20)</a></li>
                                <li><a href="" title="">北京(19)</a></li>
                                <li><a href="" title="">广东(18)</a></li>
                                <li><a href="" title="">河北(16)</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="drop-item"  data-open="close">
                        <div class="tit">
                            国外<i></i>
                            <b></b>
                        </div>
                        <div class="drop-pop">
                            <ul class="inner">
                                <li><a href="" title="">欧洲(102)</a></li>
                                <li><a href="" title="">东南亚(71)</a></li>
                                <li><a href="" title="">北美(38)</a></li>
                                <li><a href="" title="">东亚(38)</a></li>
                                <li><a href="" title="">大洋洲(38)</a></li>
                                <li><a href="" title="">南亚(38)</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="drop-item"  data-open="close">
                        <div class="tit">
                            主题<i></i>
                        </div>
                        <div class="drop-pop">
                            <ul class="inner">
                                <li><a href="" title="">休闲(27)</a></li>
                                <li><a href="" title="">户外(26)</a></li>
                                <li><a href="" title="">数据报告(23)</a></li>
                                <li><a href="" title="">文化(23)</a></li>
                                <li><a href="" title="">美食(23)</a></li>
                                <li><a href="" title="">特别策划(23)</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="rank">
                    <ul>
                        <li class="gl_list">
                            <a href="" title=""><img src="assets/images/uploads/qingdao.jpeg"></a>
                            <p>更新日期:2016-01-28</p>
                            <div class="down_cout">
                                <span></span>
                                <p>3610199人下载</p>
                            </div>
                        </li>
                        <li><span>2</span><a href="" title="">成都</a></li>
                        <li><span>3</span><a href="" title="">北京</a></li>
                        <li><span>4</span><a href="" title="">西安</a></li>
                        <li><span>5</span><a href="" title="">东京</a></li>
                        <li><span>6</span><a href="" title="">普吉岛</a></li>
                        <li><span>7</span><a href="" title="">香港</a></li>
                        <li><span>8</span><a href="" title="">青海湖</a></li>
                        <li><span>9</span><a href="" title="">京都</a></li>
                        <li><span>10</span><a href="" title="">泰国</a></li>
                    </ul>
                </div>
            </div>
            <div class="con-main clearfix">
                <h3 class="hd">推荐攻略</h3>
                <!-- 数据类型分3种   1=>问答 2=>自由行 3=>游记 -->
                <div class="gl-post">
                </div>                             
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
                <a href="" title="" class="codeimg"><img src="assets/images/icon/code.jpeg"></a>
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
                    <dd><a href="/s/about.html">关于蚂蜂窝</a></dd>
                    <dd><a href="/s/property.html">网络信息侵权通知指引</a></dd>
                    <dd><a href="/s/private.html">隐私政策</a></dd>
                    <dd><a href="/s/agreement.html">服务协议</a></dd>
                    <dd><a href="/s/contact.html">联系我们</a></dd>
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

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <!-- <script src="./node_modules/jquery-mousewheel/jquery.mousewheel.js"></script> -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/json.js"></script>

</body>

</html>