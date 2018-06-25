
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>添加文字 - 写游记</title>
<style>
.head-nav li a{font-size: 17px}
</style>
<link rel="stylesheet" type="text/css" href="../assets/css/xcConfirm.css"/>
<script type="text/javascript">
window.Env = {"WWW_HOST":"www.mafengwo.cn","IMG_HOST":"images.mafengwo.net","P_HOST":"passport.mafengwo.cn","P_HTTP":"https:\/\/passport.mafengwo.cn","PAGELET_HTTP":"http:\/\/pagelet.mafengwo.cn","JS_HOST":"js.mafengwo.net","UID":88518637,"CSTK":"3f1a5c7baed53cfe622ce8a43a5c6e8f_483ca1600f6d08b105874f8325cbe27a","GOOGLE_MAP_KEY":"AIzaSyD-Su0x_rPy1xehlMBcMyTqWkU49Bk53nQ","TONGJI_HOST":"tongji.mafengwo.cn"};
</script>

<link href="http://css.mafengwo.net/css/cv/css+base:css+jquery.suggest:css+plugins:css+plugins+jquery.jgrowl:css+other+popup:css+mfw-header.2015^YlVS^1493708283.css" rel="stylesheet" type="text/css"/>



<link href="http://css.mafengwo.net/css/cv/css+mfweditor+mfweditor:css+post+addpost:css+jquery-ui-1.9.1.custom.min^ZFQ^1493174418.css" rel="stylesheet" type="text/css"/>


<script language="javascript" src="http://js.mafengwo.net/js/cv/js+jquery-1.8.1.min:js+global+json2:js+M+Module:js+M+M:js+M+Log:js+m.statistics:js+advert+inspector^alw^1511419343.js" type="text/javascript" crossorigin="anonymous"></script>

</head>
<body>
    
    
    

<div id="header" xmlns="http://www.w3.org/1999/html">
    <div class="mfw-header">
        <div class="header-wrap clearfix">
            <div class="head-logo"><a class="mfw-logo" title="蚂蜂窝自由行" href="http://www.mafengwo.cn/"></a></div>
            <ul class="head-nav" data-cs-t="headnav" id="_j_head_nav">
                <li class="head-nav-index" data-cs-p="index"><a href="main.php">首页</a></li>
                <li class="head-nav-gonglve" data-cs-p="gonglve"><a href="http://localhost:8080/mafengwo/qxm/travesgonglue.php" title="旅游攻略">旅游攻略</a></li>
                <li class="head-nav-sales head-nav-dropdown _j_sales_nav_show" id="_j_nav_sales" data-cs-p="sales">
                    <a class="drop-toggle" href="http://localhost:8080/mafengwo/store/mfw/sales.html" style="cursor: pointer;display: block;border-bottom:0 none;" data-sales-nav="自由行商城">
                        <span>自由行商城</span>
                    </a>
                </li>
                
                
                
            </ul>
            <div>
            <div data-pagelet id="pagelet-block-e77570a8fb3ac9282e65aa8903a83b29" class="" data-api="apps:user:pagelet:pageViewHeadInfo" data-params="{&quot;type&quot;:1}" data-async="1" data-controller="/js/pageletcommon/pageHeadUserInfoWWWNormal"></div>
        </div>
        <div class="shadow"></div>
    </div>
    
    <!-- 新自由行菜单 begin -->
<div class="dropdown-bar" style="display: none">
    <div class="content">
        <ul class="clearfix ul-dropdown-bar" id="Js_middleNav">
            <li data-type="sales"><a href="http://www.mafengwo.cn/sales/">机票＋酒店</a></li>
            <li data-type="freewalker"><a href="http://www.mafengwo.cn/sales/0-0-0-0-0-0-0-0.html?group=4">跟团游</a></li>
            <li data-type="localdeals"><a href="http://www.mafengwo.cn/localdeals/">当地游</a></li>
            <li data-type="flight"><a href="http://www.mafengwo.cn/flight/">国内机票</a></li>
            <li data-type="visa"><a href="http://www.mafengwo.cn/sales/visa/">签证</a></li>
            <li data-type="wifi"><a href="http://www.mafengwo.cn/localdeals/0-0-0-21-0-0-0-0.html">全球WiFi</a></li>
            <li data-type="cruise"><a href="http://www.mafengwo.cn/sales/0-0-0-5-0-0-0-0.html">邮轮</a></li>
            
            <li data-type="insurance"><a href="http://www.mafengwo.cn/insurance/">旅游保险</a></li>
        </ul>
    </div>

</div>
<!-- 新自由行菜单 end -->

<script>
    //判断是否显示 下拉bar
;(function () {
    window.showBarFlag = true;
    var realPathName = location.pathname,$nav = $('#Js_middleNav');
    var regExp = /localdeals|sales|flight|insurance|activity/gi;
    var pathArr = realPathName.match(regExp);
        if(window.Env.middleNavHide) { $('.dropdown-bar').hide();return;}
        if(realPathName == '/sales/0-0-0-5-0-0-0-0.html' || window.Env.salesType ==5){
            $nav.children('[data-type="cruise"]').addClass('on');
            window.showBarFlag = false;
            $('.dropdown-bar').show();
        }else if(realPathName == '/localdeals/0-0-0-21-0-0-0-0.html' || window.Env.salesType ==21){
            $nav.children('[data-type="wifi"]').addClass('on');
            window.showBarFlag = false;
            $('.dropdown-bar').show();
        }else if(window.Env.sales_title_tag == 'visa' || window.Env.salesType == 4){
            $nav.children('[data-type="visa"]').addClass('on');
            window.showBarFlag = false;
            $('.dropdown-bar').show();
        }else if(window.Env.sales_title_tag == 'semi_self_service' || realPathName == '/sales/0-0-0-6-0-0-0-0.html?group=4' || window.Env.salesType == 30 || window.Env.salesType == 6){
            $nav.children('[data-type="freewalker"]').addClass('on');
            window.showBarFlag = false;
            $('.dropdown-bar').show();
        }
        else if(window.Env.salesType) {
            switch(window.Env.salesType|0) {
                case 1:
                case 3:
                    $nav.children('[data-type="sales"]').addClass('on');
                    break;
                case 2:
                    $nav.children('[data-type="localdeals"]').addClass('on');
                    break;
                case 30:
                case 6:
                    $nav.children('[data-type="freewalker"]').addClass('on');
                    break;
                default:
                    $nav.children('[data-type="localdeals"]').addClass('on');
                    break;
            }
            window.showBarFlag = false;
            $('.dropdown-bar').show();
        }
        else {
            if( pathArr){
                if(pathArr.length == 1 && pathArr[0] != 'activity'){
                    switch(pathArr[0]){
                        case 'localdeals':
                            $nav.children('[data-type="localdeals"]').addClass('on');
                            break;
                        case 'insurance':
                            $nav.children('[data-type="insurance"]').addClass('on');
                            break;
                        case 'sales':
                            $nav.children('[data-type="sales"]').addClass('on');
                            break;
                        case 'flight':
                            $nav.children('[data-type="flight"]').addClass('on');
                            break;
                        default:
                            break;
                    }
                    window.showBarFlag = false;
                    $('.dropdown-bar').show();
                }else {
                    if('activity'.indexOf(pathArr) != -1){
                        window.showBarFlag  = true;
                        $('.dropdown-bar').hide();
                    }
                }
        }
    }
        // 点击时触发
        $('.ul-dropdown-bar > li').on('click',function () {
            $(this).addClass('on').siblings().removeClass('on');
        });
})();

</script>

</div>



<div class="wrapper">
    <div class="ap-head">
        <h1>发表新话题/文章</h1>
        <dl d-data="1" class="on">
            <dt>游记</dt>
            <dd>关联至具体的旅行目的地</dd>
        </dl>
        <dl d-data="2" class="">
            <dt>随笔</dt>
            <dd>只在我的蚂蜂窝显示</dd>
        </dl>
        <div class="clearfix"></div>
    </div>
    <div class="ap-wrap">
        <div class="ap-main">
            <form class="forms" id="infoform" action="artitleprocess-1.php" method="post" enctype="multipart/form-data" onsubmit=" return ww()">
                <dl class="title cf">
                    <dd>
                        <label class="lab">请在这里输入标题</label>
                        <span class="char-limit hide _j_char_limit">可输入<strong>48</strong>字</span>
                        <input id="tittle" name="title" type="text" maxlength="48" value="" />
                        <input id="type" name="type" type="hidden" />
                        <input id="cid" name="cid" type="hidden" />
                        <input id="rid" name="rid" type="hidden" value="" />
                        <input id="sfrom" name="sfrom" type="hidden" value="" />
                        <input type="hidden" name="target" value="iframe" />
                    </dd>
                </dl>
                                <dl class="body cf">
                    <dd name="content_div" id="content_div">
                        <textarea class="hide" width="665" height="550" id="content" name="content">请输入内容...</textarea>
                    </dd>
                </dl>
                <dl class="music cf">
                    <dd>
                                                <span>达到5级才可上传音乐</span>
                                            </dd>
                </dl>
                <div class="btns">
                    <div class="accept_pact">
                        <input type="checkbox" checked id="ck">
                        我已阅读并同意<a href="/s/rules.html" title="《蚂蜂窝游记协议》" target="_blank">《蚂蜂窝游记协议》</a>
                    </div>
                    <input class="btn_submit" value="发表" type="submit" />
                    <div class="cont">或者</div>
                    <input class="btn_save" value="保存草稿" type="button" />
                    <div class="sns_sync" id="sns_sync_bar">
                        <dl class="sync_to clearfix">
                            <dt>同步到：</dt>
                            <dd><a d-type="wb" href="javascript:void(0);"><b class="rs_wb">微博</b></a></dd>
                            <dd><a d-type="qz" href="javascript:void(0);"><b class="rs_qz">空间</b></a></dd>
                            <dd><a d-type="rr" href="javascript:void(0);"><b class="rs_rr">人人</b></a></dd>
                            <dd><a d-type="qt" href="javascript:void(0);"><b class="rs_qt">腾讯</b></a></dd>
                            <div class="layer_sync hide" id="sync_tip"></div>
                        </dl>
                    </div>
                </div>
            </form>
        </div>
        <div class="ap-aside">
            <div class="notes_new">
                <a href="/note/create.php/modify" class="nn_link">
                    <img src="http://images.mafengwo.net/images/post/notes_pic.gif" alt="新模板" >
                    <span></span>
                </a>
                <p><i></i><a href="/activity/propaganda/" target="_blank">游记新模板</a></p>
                <a class="btn_faq" href="/i/5317220.html" target="_blank">游记常见问题与解答</a>
            </div>
            <!--DraftBox-->
            <div class="drafts clearfix hide">
                <div class="drafts-left">
                    <p class="t1">感谢勤劳的蜂蜂贡献！</p>
                    <p class="t2">还有未发布的游记，你可以在右侧草稿箱中<i></i></p>
                    <p class="t3">过段时间再发布？点击这里<a href="javascript:void(0);" class="write-new">发表新游记</a></p>
                </div>
                <div class="drafts-right">
                    <div class="hd clearfix"><em>草稿箱(<span>0</span>)</em><a href="/group/infoadd.php">新建草稿</a></div>
                    <div class="bd unopen">
                        <div class="nodata">没有草稿</div>
                    </div>
                    <a href="javascript:void(0);" class="down disabled">^</a>
                </div>
            </div>
            <!--DraftBoxEnd-->
            <div class="mod" style="text-align:center;">
                <!--<a href="/i/3017558.html" target="_blank"><img src="http://images.mafengwo.net/images/post/bn-kindle2.jpg"></a>-->
            </div>
            <div class="mod hide">
                <a href="/widget/imgedit.php" target="_blank"><img src="http://images.mafengwo.net/images/post/imagedit.jpg" width="260" height="88"></a>
            </div>
            <div class="mod tips hide">
                <div class="hd">发表文章小贴士</div>
                <div class="bd">
                    <p class="photo">图片将会保存在你的相册中</p>
                    <p class="video">可以用来添加一段视频</p>
                    <p class="music">可以用来添加情景音乐和歌曲，音乐将保存在你的音乐盒中。</p>
                    <p class="quick">博客搬家：直接复制自己发表的博客内容，然后粘贴到文字内容填写区即可；目前支持的博客网站：新浪 腾讯 网易 搜狐；</p>
                    <p class="p_t_8">Word复制：从word文档中复制文字，然后粘贴到内容填写区，但是不能复制图片。</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--PopupBox 设置目的地-->
<div id="popup-box-tag" class="hide tagpopup">
    <div class="viewer-layer"></div>
    <div class="popup-box popup-setmdd" style="margin:-215px 0 0 -285px;">
        <a class="close-btn" href="javascript:void(0);"><i></i></a>
        <div class="pop-ico">
            <i class="i3"></i>
        </div>
        <div class="pop-ctn">
            <p class="hd">发表成功！</p>
            <div class="bd">
                <p>感谢您发帖！系统检测到您的大作中提及了以下目的地</p>
                <p>请选择一个和您大作最有关联的目的地：</p>
                <p id="popup-box-tag-taglist"></p>
                <p>如果都不理想，那就为您的大作添加一个目的地： <label><input class="othertag" type="radio" name="infotag" value=""><input type="text" class="mdd"></label></p>
                <p>如果都不选，您的大作就只会显示在“我的蚂蜂窝”</p>
            </div>
        </div>
        <div class="pop-btn">
            <input type="submit" id="" class="btn-sub" value="确定">
        </div>
    </div>
</div>
<!--PopupBox End-->
<!--PopupBox-->
<div id="popup-box-notag" class="hide tagpopup">
    <div class="viewer-layer"></div>
    <div class="popup-box popup-setmdd" style="margin:-215px 0 0 -285px;">
        <a class="close-btn" href="javascript:void(0);"><i></i></a>
        <div class="pop-ico">
            <i class="i3"></i>
        </div>
        <div class="pop-ctn">
            <p class="hd">发表成功！</p>
            <div class="bd">
                <p>感谢您发帖！蚂蜂窝的系统中没有您大作中提及的目的地</p>
                <p>请为蚂蜂窝创建一个和您文章最有关联的目的地吧： <input type="text" class="mdd"></p>
                <p>如果都不选，您的大作就只会显示在“我的蚂蜂窝”</p>
            </div>
        </div>
        <div class="pop-btn">
            <input type="submit" id="" class="btn-sub" value="确定">
        </div>
    </div>
</div>
<!--PopupBox End-->
<!--PopupBox-->
<!--PopupBox End-->
<iframe src="" name="postinfo" style="display:none;" ></iframe>

<link href="http://css.mafengwo.net/css/mfw-footer.css?1517465697" rel="stylesheet" type="text/css"/>

<div id="footer">
    <div class="ft-content">
        <div class="ft-info clearfix">
    <dl class="ft-info-col ft-info-intro">
        <dt>中国领先的自由行服务平台</dt>
        <dd>覆盖全球200多个国家和地区</dd>
        <dd><strong>100,000,000</strong> 位旅行者</dd>
        <dd><strong>920,000</strong> 家国际酒店</dd>
        <dd><strong>21,000,000</strong> 条真实点评</dd>
        <dd><strong>382,000,000</strong> 次攻略下载</dd>
        <dd><a class="highlight" href="http://www.mafengwo.cn/activity/sales_report2015/index" target="_blank">中国旅游行业第一部“玩法”</a></dd>
    </dl>
    <dl class="ft-info-col ft-info-about">
        <dt>关于我们</dt>
        <dd><a href="http://www.mafengwo.cn/s/about.html" rel="nofollow">关于蚂蜂窝</a></dd>
        <dd><a href="http://www.mafengwo.cn/s/property.html" rel="nofollow">网络信息侵权通知指引</a></dd>
        <dd><a href="http://www.mafengwo.cn/s/private.html" rel="nofollow">隐私政策</a><a href="http://www.mafengwo.cn/s/agreement.html" rel="nofollow" class="m_l_10">服务协议</a></dd>
        <dd><a href="http://www.mafengwo.cn/s/contact.html" rel="nofollow">联系我们</a></dd>
        <dd><a href="http://www.mafengwo.cn/s/sitemap.html" target="_blank">网站地图</a></dd>
        <dd><a class="joinus highlight" title="蚂蜂窝团队招聘" target="_blank" href="http://www.mafengwo.cn/s/hr.html" rel="nofollow">加入蚂蜂窝</a></dd>
    </dl>
    <dl class="ft-info-col ft-info-service">
        <dt>旅行服务</dt>
        <dd>
            <ul class="clearfix">
                <li><a target="_blank" href="http://www.mafengwo.cn/gonglve/">旅游攻略</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/hotel/">酒店预订</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/sales/">旅游特价</a></li>
                <li><a target="_blank" href="http://zuche.mafengwo.cn/">国际租车</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/wenda/">旅游问答</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/insure/">旅游保险</a></li>
                <li><a target="_blank" href="http://z.mafengwo.cn">旅游指南</a></li>
                <li><a target="_blank" href="http://huoche.mafengwo.cn">订火车票</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/travel-news/">旅游资讯</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/app/intro/gonglve.php">APP下载</a></li>
                <li><a target="_blank" href="http://www.mafengwo.cn/sales/alliance.php" class="highlight">旅行商城全球商家入驻</a></li>
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
        <dt>向崇尚自由的加勒比海盗致敬！</dt>
        <dd>
            <a class="ft-social-weibo" target="_blank" href="http://weibo.com/mafengwovip" rel="nofollow"><i class="ft-social-icon"></i></a>
            <a class="ft-social-qqt" target="_blank" href="http://t.qq.com/mafengwovip" rel="nofollow" ><i class="ft-social-icon"></i></a>
            <a class="ft-social-qzone" target="_blank" href="http://1213600479.qzone.qq.com/" rel="nofollow"><i class="ft-social-icon"></i></a>
        </dd>
    </dl>
</div>

        <div class="ft-copyright">
    <div class="ft-safety">
        <a class="s-a" target="_blank" href="https://search.szfw.org/cert/l/CX20140627008255008321" id="___szfw_logo___"></a>
        <a class="s-b" href="https://ss.knet.cn/verifyseal.dll?sn=e130816110100420286o93000000&ct=df&a=1&pa=787189" target="_blank" rel="nofollow"></a>
        <a class="s-c" href="http://www.itrust.org.cn/Home/Index/itrust_certifi/wm/1669928206.html" target="_blank" rel="nofollow"></a>
    </div>
    <a href="http://www.mafengwo.cn"><i class="ft-mfw-logo"></i></a>
    <p>© 2018 Mafengwo.cn <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">京ICP备11015476号</a> 京公网安备110105013401号 <a href="http://images.mafengwo.net/images/about/icp.jpg" target="_blank" rel="nofollow">京ICP证110318号</a></p>
    <p><a href="http://images.mafengwo.net/images/about/licence.jpg" target="_blank" rel="nofollow">营业执照</a> 新出网证(京)字242号 蚂蜂窝客服：国内 <span class="highlight">4006-345-678</span><span class="m_l_10">海外</span> <span class="highlight">+86-10-5922-2799</span></p>
    <p class="line3">北京蚂蜂窝网络科技有限公司</p>
</div>
    </div>
</div>
<div class="mfw-toolbar" id="_j_mfwtoolbar">
    
   
    <div class="toolbar-item-down">
        <a role="button" class="btn _j_gobottom">
            <i class="icon_down"></i>
            <em>页面底部</em>
        </a>
    </div>
</div>



<script type="text/javascript">
    var can_video = true;
    // var rough_id = parseInt('');
</script>

<script language="javascript" src="http://js.mafengwo.net/js/cv/js+common+jquery.plugins:js+common+widgets:js+mfw.storage:js+mfweditor+jquery.autoload:js+mfweditor+jquery.mfweditor:js+mfweditor+plugins+mfweditor.autoload:js+mfweditor+plugins+mfweditor.rmFormat:js+ginfo+Add:js+hb+hb:js+hb+common:js+hb+Request:js+jQueryRotate:js+jquery.mousewheel.min:js+hb+module+ScrollBar:js+hb+module+Sortable:js+jquery-ui-1.9.1.custom.min:js+swfupload+swfupload:js+mfweditor+plugins+mfweditor.emotion_v2:js+M+module+FrequencyVerifyControl:js+M+module+FrequencyAppVerify:js+group+AEdit^ZlVU^1500358831.js" type="text/javascript" crossorigin="anonymous"></script>


<script language="javascript" type="text/javascript">
if (typeof M !== "undefined" && typeof M.loadResource === "function") {
M.loadResource("http://js.mafengwo.net/js/cv/js+Dropdown:js+pageletcommon+pageHeadUserInfoWWWNormal:js+jquery.tmpl:js+M+module+InputListener:js+M+module+SuggestionXHR:js+M+module+DropList:js+M+module+Suggestion:js+M+module+MesSearchEvent:js+SiteSearch:js+AHeader:js+M+module+PageAdmin:js+M+module+Storage:js+M+module+Cookie:js+M+module+ResourceKeeper:js+jquery.jgrowl.min:js+AMessage:js+M+module+dialog+Layer:js+M+module+dialog+DialogBase:js+M+module+dialog+Dialog:js+M+module+FrequencyVerifyControl:js+M+module+FrequencySystemVerify:js+ALogin:js+M+module+ScrollObserver:js+M+module+QRCode:js+AToolbar:js+ACnzzGaLog:js+ARecruit:js+ALazyLoad^ZlxW^1493174421.js");
}
</script>
<script type="text/javascript" src="../assets/js/xcConfirm.js"></script>
<script type="text/javascript">
$("body").on("click",'.t-image',function(){
    var txt="<div style='position: relative;cursor: pointer;margin-top:26px;margin-left:55px'>"+
            "<input type='file' id='x' style='position:absolute;opacity: 0;width:127px;height:48px;cursor: pointer;left:0px;top:-7px'/>"+
            "<button class='btn1' style='border:none;height:2.5em;background-color:rgb(255, 157,"+
            " 0);color:white;font-size:1.2em; width:127px;"+  
                    "border-radius:5px;'>上传图片</button></div>";
                    window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.info);
})
$("#tittle").focus(function(){$(".lab").html("");})
//图片上传
$(function(){
    $("body").on('change',"#x",function(){
         var formData = new FormData();
         formData.append('file',$(this)[0].files[0]);
        $.ajax({
             url:"artitleprocess.php",
             type:"POST",
             dataType:"json",
             contentType: false,
             processData: false,
             data:formData,
             success:function(data){
                var str="<br><img width='220px' height='140px' src='"+data+"'><br>";
                $('#content-mfwediter-iframe').contents().find("p").append(str);
                $("#popup_overlay").css("display","none");
             }
        });
    })
    })
function ww(){
    if($("#tittle").val()==""){
     alert("请输入标题");
     return false;
    }else return true;
}
</script>
</body>
</html>
