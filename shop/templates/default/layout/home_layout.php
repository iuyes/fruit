<?php defined('InShopNC') or exit('Access Invalid!');?>
<!doctype html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>">
<title><?php echo $output['html_title'];?></title>
<meta name="keywords" content="<?php echo $output['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $output['seo_description']; ?>" />
<meta name="author" content="">
<meta name="copyright" content="">
<?php echo html_entity_decode($GLOBALS['setting_config']['qq_appcode'],ENT_QUOTES); ?><?php echo html_entity_decode($GLOBALS['setting_config']['sina_appcode'],ENT_QUOTES); ?><?php echo html_entity_decode($GLOBALS['setting_config']['share_qqzone_appcode'],ENT_QUOTES); ?><?php echo html_entity_decode($GLOBALS['setting_config']['share_sinaweibo_appcode'],ENT_QUOTES); ?>
<style type="text/css">
body {
_behavior: url(<?php echo SHOP_TEMPLATES_URL;
?>/css/csshover.htc);
}
</style>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/base.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_header.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_login.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_RESOURCE_SITE_URL;?>/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo SHOP_RESOURCE_SITE_URL;?>/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?php echo RESOURCE_SITE_URL;?>/js/html5shiv.js"></script>
      <script src="<?php echo RESOURCE_SITE_URL;?>/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>
<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->
<script>
var COOKIE_PRE = '<?php echo COOKIE_PRE;?>';var _CHARSET = '<?php echo strtolower(CHARSET);?>';var SITEURL = '<?php echo SHOP_SITE_URL;?>';var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL;?>';var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';var SHOP_TEMPLATES_URL = '<?php echo SHOP_TEMPLATES_URL;?>';
</script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/common.js" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.validation.min.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.masonry.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>

<!-- [扩展js和css] -->
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/basic.min.css" rel="stylesheet" media="screen, projection" />
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/goodsplace.css" rel="stylesheet" media="screen, projection" />
<link rel="stylesheet"  href="<?php echo SHOP_TEMPLATES_URL;?>/css/base-extend.css" />
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/moo.min.js"></script>
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/shop.min.js"></script>
<link rel="stylesheet"  href="<?php echo SHOP_TEMPLATES_URL;?>/css/extend.css" />
<script type="text/javascript">jQuery.noConflict();</script>
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/js/moo.min.js"></script>
<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/js/switch.js"></script>
<!-- [//扩展js和css] -->

</head>
<body>

<?php require_once template('layout/layout_top');?>
<!-- [最顶部] -->
  <div class="topbar" id="topbar">
      <div class="wrap">    
          <ul class="quick-menu frt">
               <li class="cart-menu"><div class="head-cart"><a href="" class="minicart-text">购物车<b class="op-cart-number">0</b>件  </a></div>
              </li>
               <li><a rel="nofollow" target="_top" href="">我的订单</a></li>           
               <li><span class="line">|</span></li> 
               <li><a rel="nofollow" target="_top" href="">我的收藏</a></li>        
               <li><span class="line">|</span></li>
               <li><a href="" target="_self">帮助中心</a></li>       
            </ul>   
            <ul class="topbar-left"> 
              <li class="to-home"><a href="./" target="_self">返回首页</a></li>
              <li class="add-fav"><a href="javascript:void(0);" onclick="">收藏本站</a></li>            
              <li class="login flt">
              <span id="loginBar_191" style="" class="ie-bug">
              Hi，欢迎来到四季果园！<a href="">请登录</a><a href="">免费注册</a></span>
              <span id="memberBar_191">
                  Hi，<span id="uname_191"></span>！<a href="">会员中心</a><a href="">退出</a>
              </span></li>
            </ul>
      </div>
  </div>
<!-- [//最顶部] -->
<div class="header" id="header">
  <div class="menu-column wrap">
    <div class="m-text frt"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/phone.png"/></div>
    <h1 class="logo FFfix flt"><a href="./"><img alt="四季果园" src="<?php echo SHOP_TEMPLATES_URL;?>/images/logo.png" border="0"/></a></h1>
    <div class="eara_list flt"> <div class="now-region-div">配送至：<span class="now_region">优鲜达>></span>
    <img class="region-jiao" src="<?php echo SHOP_TEMPLATES_URL;?>/images/jiao.jpg" width="11" height="11">
    <div class="province-reach">
        <ul class="ul-area1">
            <li>
                <p class="area02">
                                                <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1' class="area_child">北京</a>
                                <div class="childregion_1 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">北京市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_21' class="area_child">上海</a>
                                <div class="childregion_21 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">上海市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_42' class="area_child">天津</a>
                                <div class="childregion_42 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">天津市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_62' class="area_child">重庆</a>
                                <div class="childregion_62 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">重庆市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_104' class="area_child">安徽</a>
                                <div class="childregion_104 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">合肥市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">安庆市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">蚌埠市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">亳州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">巢湖市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">池州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">滁州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">阜阳市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">淮北市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">淮南市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">黄山市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">六安市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">马鞍山市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">宿州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">铜陵市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">芜湖市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">宣城市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_227' class="area_child">福建</a>
                                <div class="childregion_227 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">福州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">厦门市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_322' class="area_child">甘肃</a>
                                <div class="childregion_322 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">兰州市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_423' class="area_child">广东</a>
                                <div class="childregion_423 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">广州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">潮州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">东莞市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">佛山市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">惠州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">汕头市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">深圳市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">肇庆市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">中山市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">珠海市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_566' class="area_child">广西</a>
                                <div class="childregion_566 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">南宁市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">桂林市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_690' class="area_child">贵州</a>
                                <div class="childregion_690 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">贵阳市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_788' class="area_child">海南</a>
                                <div class="childregion_788 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">海口市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_814' class="area_child">河北</a>
                                <div class="childregion_814 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">石家庄市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">唐山市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_998' class="area_child">河南</a>
                                <div class="childregion_998 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">郑州市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1320' class="area_child">湖北</a>
                                <div class="childregion_1320 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">武汉市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1436' class="area_child">湖南</a>
                                <div class="childregion_1436 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">长沙市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1573' class="area_child">吉林</a>
                                <div class="childregion_1573 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">长春市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1643' class="area_child">江苏</a>
                                <div class="childregion_1643 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">南京市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">常州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">连云港市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">南通市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">苏州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">泰州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">无锡市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">盐城市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">扬州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">镇江市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1763' class="area_child">江西</a>
                                <div class="childregion_1763 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">南昌市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">赣州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">吉安市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">九江市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">上饶市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_1874' class="area_child">辽宁</a>
                                <div class="childregion_1874 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">沈阳市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_2103' class="area_child">宁夏</a>
                                <div class="childregion_2103 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">银川市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_2182' class="area_child">山东</a>
                                <div class="childregion_2182 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">济南市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">青岛市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">威海市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">潍坊市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">烟台市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">淄博市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_2340' class="area_child">山西</a>
                                <div class="childregion_2340 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">太原市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_2471' class="area_child">陕西</a>
                                <div class="childregion_2471 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">西安市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_2589' class="area_child">四川</a>
                                <div class="childregion_2589 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">成都市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">广安市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">绵阳市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">南充市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_2987' class="area_child">云南</a>
                                <div class="childregion_2987 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">昆明市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_3133' class="area_child">浙江</a>
                                <div class="childregion_3133 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">杭州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">湖州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">嘉兴市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">金华市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">丽水市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">宁波市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">衢州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">绍兴市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">台州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">温州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">舟山市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                                    <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_3267' class="area_child">上海外环外</a>
                                <div class="childregion_3267 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">上海市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                        </p>
            </li>
        </ul>
    </div>
</div>
<script>
    (function(){
        jQuery('.region-div a').click(function(){
            if(!$(this).hasClass('area_child')){
                jQuery('.now_region').set('html',$(this).get('html'));
                jQuery('.childregion').hide();
                jQuery('.province-reach').hide();
            }
        });
        jQuery('.area_child').click(function(){
            jQuery('.childregion').hide();
            jQuery('.'+$(this).get('data-child')).show();
        });
        jQuery('.now-region-div').mouseover(function(){
            jQuery('.province-reach').show();
        });
        jQuery('.now-region-div').mouseout(function(){
            jQuery('.province-reach').hide();
        });
    })();
</script>


</div>
        <div class="search flt"> 
            
            <form action="/search-result.html" method="post" class="SearchBar searchBar_">
  <table cellpadding="0" cellspacing="0">
    <tr>
      <td class="search_label">
      
    <input name="search_keywords" size="12" type="text" value="果乐汇-见证每个果实的重量" onfocus="this.value=(this.value=='果乐汇-见证每个果实的重量')?'':this.value;" onblur="this.value=(this.value=='')?'果乐汇-见证每个果实的重量':this.value;" class="inputstyle keywords" autocompleter="associate_autocomplete_goods:name,goods_id" ac_options="{}" />
      </td>
      
      <td><input type="submit" value="搜索" class="btn_search" onfocus='this.blur();'/></td>
    </tr>
  </table>
</form>         <div class="search-words"><ul class="urllist"><li class="first"><a href="http://www.guolehui.com.cn/gallery-65.html" target="_blank">新西兰奇异果</a></li><li class="comma"><span>|</span></li><li><a href="http://www.guolehui.com.cn/product-929.html" target="_blank">美国樱桃</a></li><li class="comma"><span>|</span></li><li><a href="http://www.guolehui.com.cn/product-729.html" target="_blank">美国3107新奇士脐橙</a></li><li class="comma"><span>|</span></li><li class="last"><a href="http://www.guolehui.com.cn/product-919.html" target="_blank">妃子笑荔枝 </a></li></ul></div>
        </div>
    </div>
    <div class="nav-column" id="nav">
      <div class="wrap clr">
            <div class="all-category flt" id="all-category">
                <div class="category-handle cat-popup" id="category_handle">
                    <a href="/gallery.html?scontent=n," target="_blank">所有产品分类</a>
                </div>
                <div class="category-box" id="category_box" style="visibility:hidden;">





  <ul class="category-list">
        <li class="category-item">
      <div class="cat-root-box cate1">
       <h3><a href="/gallery-36.html"  class="category-link">进口鲜果 >></a></h3>
                <div class="cat-lv2-redundancy clearfix"><a href="/gallery-37.html"  class="level2">美国水果</a><a href="/gallery-38.html"  class="level2">南非水果</a><a href="/gallery-39.html"  class="level2">泰国水果</a><a href="/gallery-40.html"  class="level2">越南水果</a><a href="/gallery-41.html"  class="level2">法国水果</a><a href="/gallery-42.html"  class="level2">智利水果</a><a href="/gallery-43.html"  class="level2">菲律宾水果</a><a href="/gallery-44.html"  class="level2">墨西哥水果</a><a href="/gallery-45.html"  class="level2">澳大利亚水果</a><a href="/gallery-68.html"  class="level2">西班牙水果</a><a href="/gallery-65.html"  class="level2">新西兰水果</a><a href="/gallery-67.html"  class="level2">  秘鲁水果</a></div>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
                    <div class="cat-children">
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-37.html"  class="level2">美国水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-38.html"  class="level2">南非水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-39.html"  class="level2">泰国水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-40.html"  class="level2">越南水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-41.html"  class="level2">法国水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-42.html"  class="level2">智利水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-43.html"  class="level2">菲律宾水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-44.html"  class="level2">墨西哥水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-45.html"  class="level2">澳大利亚水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-68.html"  class="level2">西班牙水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-65.html"  class="level2">新西兰水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-67.html"  class="level2">  秘鲁水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                              </div>
                  
      </div>
    </li>
        <li class="category-item">
      <div class="cat-root-box cate2">
       <h3><a href="/gallery-46.html"  class="category-link">国产鲜果 >></a></h3>
                <div class="cat-lv2-redundancy clearfix"><a href="/gallery-54.html"  class="level2">新品上市</a><a href="/gallery-53.html"  class="level2">时令水果</a><a href="/gallery-55.html"  class="level2">推荐水果</a><a href="/gallery-52.html"  class="level2">国产热卖水果</a></div>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
                    <div class="cat-children">
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-54.html"  class="level2">新品上市</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-53.html"  class="level2">时令水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-55.html"  class="level2">推荐水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-52.html"  class="level2">国产热卖水果</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                              </div>
                  
      </div>
    </li>
        <li class="category-item">
      <div class="cat-root-box cate3">
       <h3><a href="/gallery-47.html"  class="category-link">高档鲜果礼盒 >></a></h3>
                <div class="cat-lv2-redundancy clearfix"><a href="/gallery-64.html"  class="level2">推荐水果礼盒</a><a href="/gallery-56.html"  class="level2">商务套餐</a><a href="/gallery-57.html"  class="level2">家庭套餐</a><a href="/gallery-58.html"  class="level2">美容套餐</a><a href="/gallery-59.html"  class="level2">水果礼篮</a></div>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
                    <div class="cat-children">
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-64.html"  class="level2">推荐水果礼盒</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-56.html"  class="level2">商务套餐</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-57.html"  class="level2">家庭套餐</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-58.html"  class="level2">美容套餐</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-59.html"  class="level2">水果礼篮</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                              </div>
                  
      </div>
    </li>
        <li class="category-item">
      <div class="cat-root-box cate4">
       <h3><a href="/gallery-48.html"  class="category-link">高端水果礼盒方案 >></a></h3>
                <div class="cat-lv2-redundancy clearfix"><a href="/gallery-60.html"  class="level2">端午水果礼盒</a></div>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
                    <div class="cat-children">
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-60.html"  class="level2">端午水果礼盒</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                              </div>
                  
      </div>
    </li>
        <li class="category-item">
      <div class="cat-root-box cate5">
       <h3><a href="/gallery-49.html"  class="category-link">2015提货券系列 >></a></h3>
                <div class="cat-lv2-redundancy clearfix"><a href="/gallery-61.html"  class="level2">三羊开泰提货券</a><a href="/gallery-62.html"  class="level2">通用系列提货券</a></div>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
                    <div class="cat-children">
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-61.html"  class="level2">三羊开泰提货券</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-62.html"  class="level2">通用系列提货券</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                              </div>
                  
      </div>
    </li>
        <li class="category-item">
      <div class="cat-root-box cate6">
       <h3><a href="/gallery-50.html"  class="category-link">礼卡礼券 >></a></h3>
                <div class="cat-lv2-redundancy clearfix"><a href="/gallery-63.html"  class="level2">礼品储值卡</a></div>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
                    <div class="cat-children">
                                <dl class="sub-category clearfix">
                  <dt><a href="/gallery-63.html"  class="level2">礼品储值卡</a></dt>
                  <dd class="clearfix">
                                      </dd>
                </dl>
                              </div>
                  
      </div>
    </li>
        <li class="category-item no-lv2">
      <div class="cat-root-box cate7">
       <h3><a href="/gallery-69.html"  class="category-link">端午鲜果粽礼盒礼券</a></h3>
                 
         <i class="left-shape"></i>
      </div>
      <div class="cat-children-box clearfix">
            
      </div>
    </li>
        
  </ul>

</div>
            </div>
            <div class="nav flt"><ul class="MenuList MenuList_194 clearfix">
    <li><a  href="" >首页</a></li>
        <li><a  href="" target="_blank">鲜果区</a></li>
        <li><a  href="" target="_blank">干果区</a></li>
        <li><a  href="" target="_blank">礼品区</a></li>
        <li><a  href="" target="_blank">套餐</a></li>
        <li><a  href="" target="_blank">团购区</a></li>
        <li><a  href="" target="_blank">论坛</a></li>
    </ul>
</div>


</div>
        </div>
    </div>
</div><div class="content wrap" id="content">

  <div class="wrap clr">
    <div class="w238 cat-box fl" id="category_index">  
        <ul class="category-list">
            <li class="category-item green1">
                <div class="icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/01jdzs.png"/></div>
                <a href="" class="indexCateDoor">基础展示</a>
            </li>
            <li class="category-item green2">
                <div class="icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/02zzlm.png"/></div>
                <a href="" class="indexCateDoor">种植联盟</a>
            </li>
            <li class="category-item green2">
                <div class="icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/03xxmd.png"/></div>
                <a href="" class="indexCateDoor">线下门店</a>
            </li>
            <li class="category-item">
                <div class="icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/04fbgg.png"/></div>
                <a href="" class="indexCateDoor">发布公告</a>
            </li>
        </ul>
    </div>
        <div class="w950 index-top fr">
            
            <div class="l-column fl">
                <div class="banner">
                  <div id="indexBanner" class="indexBanner">
                      <div class="hd">
                          <ul><li>1</li><li>2</li><li>3</li></ul>
                      </div>
                      <div class="bd">
                          <ul>
                              <li><a href="" target="_blank"><img src="http://mall.guolehui.com.cn/public/images/2c/b0/c8/1f51e2c44c53a59ab3aa5fe71849bfbfffab242c.jpg?1430665892#w" /></a></li>
                              <li><a href="" target="_blank"><img src="http://mall.guolehui.com.cn/public/images/2c/b0/c8/1f51e2c44c53a59ab3aa5fe71849bfbfffab242c.jpg?1430665892#w" /></a></li>
                              <li><a href="" target="_blank"><img src="http://mall.guolehui.com.cn/public/images/2c/b0/c8/1f51e2c44c53a59ab3aa5fe71849bfbfffab242c.jpg?1430665892#w" /></a></li>
                          </ul>
                      </div>

                      <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                      <a class="prev" href="javascript:void(0)"></a>
                      <a class="next" href="javascript:void(0)"></a>
                  </div>
                  <script type="text/javascript">
                  jQuery(".indexBanner").slide({mainCell:".bd ul",autoPlay:true});
                  </script>
                </div>            
            </div>
            <div class="m-r">
            <div class="banner-pic f1">
                    <a href=""><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/bx3.png"/></a>
                    <a href=""><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/bx1.png"/></a>
                    <a href=""><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/bx2.png"/></a>
                    <a href=""><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/bx3.png"/></a>
            </div>
         
            </div>
        </div>
    </div>  
   <div class="floor floor3">
        <div class="hd">
            <span id="f3" class="fgoto"></span><h3 class="fl">1F 鲜果区</h3>
            <div class="f-link fr">
                <ul class="urllist">
                    <li class="first last"><a href="" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
            <div class="l-column fl">
                
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_236" class="ex-slide1">
    <ol class="switchable-content clearfix">
                      <li class="switchable-panel">
                  <a href="http://www.guolehui.com.cn/gallery-48.html" title="" >
                        <img src="http://mall.guolehui.com.cn/public/images/d8/17/7c/27be6709fc639915b5cec874278cfd98ead487b8.jpg?1421201249#h" width="240px" height="520px" alt="" />
                  </a>
          </li>
                      <li class="switchable-panel">
                  <a href="http://www.guolehui.com.cn/product-676.html" title="" >
                        <img src="http://mall.guolehui.com.cn/public/images/96/cf/24/ea16295e81a5cb8d11ce036a50ade7a8ca9f1214.jpg?1413358520#h" width="240px" height="520px" alt="" />
                  </a>
          </li>
                      <li class="switchable-panel">
                  <a href="http://mall.guolehui.com.cn/product-965.html" title="" >
                        <img src="http://mall.guolehui.com.cn/public/images/8d/5b/d2/fd1d50f9af2e4612ff0904fbbb88252f68e1425f.jpg?1413358617#h" width="240px" height="520px" alt="" />
                  </a>
          </li>
              </ol>
        <ul class="switchable-triggerBox slide-trigger">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_236',{
        effect:'fade',
        autoplay:true,
        interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
                <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                            <li><span>sss</span><i></i></li>
                            <li><span>商务礼盒</span><i></i></li>
                            <li><span>儿童礼盒</span><i></i></li>
                            <li><span>节日礼盒</span><i></i></li>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-674.html"><img src="http://www.guolehui.com.cn/public/images/e3/2c/10/72f1124976459941d73ddb72c9815cff7777e214.png?1420114782#h" alt="威尔农庄尊贵商务礼品【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-674.html">威尔农庄尊贵商务礼品【全国通用】</a></h6>
          <div class="attribute">
            <p>产地:山东 配送:青岛</p>
            <p>品种:樱桃</p>
           
          </div>
          <ul>
            <li class="mktprice1">￥358.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-159-674-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-673.html"><img src="http://www.guolehui.com.cn/public/images/a9/63/aa/c96bfb37d4ca632f65994ad3169e551ce2bfc822.png?1420114796#h" alt="真情意意水果礼盒【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-673.html">真情意意水果礼盒【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥408.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-158-673-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-672.html"><img src="http://www.guolehui.com.cn/public/images/8e/18/13/dd1b33e6d71c05bac57439f27bc98a0a5e41c1f7.png?1421488721#h" alt="儿童水果套餐礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-672.html">儿童水果套餐礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥218.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-157-672-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-671.html"><img src="http://www.guolehui.com.cn/public/images/df/7f/72/dca1f554a069ef34cde99b154ae1e06babe49605.png?1420114821#h" alt="家和万事兴水果礼盒【特价】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-671.html">家和万事兴水果礼盒【特价】</a></h6>
          
          <ul>
            <li class="mktprice1">￥198.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-156-671-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-670.html"><img src="http://www.guolehui.com.cn/public/images/9a/4e/2d/2d69eca5db91ebf21a72260ca565e27eb5a14256.png?1420113993#h" alt="威利农山庄尊贵商务礼品" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-670.html">威利农山庄尊贵商务礼品</a></h6>
          
          <ul>
            <li class="mktprice1">￥568.00</li>          
            <li class="price1">￥458.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-155-670-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-669.html"><img src="http://www.guolehui.com.cn/public/images/bb/e3/d9/9e4b2b97a80c2d25ba74f52db31b0410a9126e9b.png?1420114009#h" alt="蓝色经典水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-669.html">蓝色经典水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥238.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-154-669-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-668.html"><img src="http://www.guolehui.com.cn/public/images/66/80/3a/06acee2bfc9d8ce77c5e0fa990265b7fbe1eea68.png?1420114068#h" alt="果乐缤纷水果礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-668.html">果乐缤纷水果礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥308.00</li>          
            <li class="price1">￥238.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-153-668-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-667.html"><img src="http://www.guolehui.com.cn/public/images/31/1a/9d/bd795585a6c7af7da4a74b188b7657f2ca65222b.png?1420114115#h" alt="美白塑身水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-667.html">美白塑身水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥298.00</li>          
            <li class="price1">￥258.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-152-667-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-674.html"><img src="http://www.guolehui.com.cn/public/images/e3/2c/10/72f1124976459941d73ddb72c9815cff7777e214.png?1420114782#h" alt="威尔农庄尊贵商务礼品【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-674.html">威尔农庄尊贵商务礼品【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥358.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-159-674-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-673.html"><img src="http://www.guolehui.com.cn/public/images/a9/63/aa/c96bfb37d4ca632f65994ad3169e551ce2bfc822.png?1420114796#h" alt="真情意意水果礼盒【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-673.html">真情意意水果礼盒【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥408.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-158-673-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-670.html"><img src="http://www.guolehui.com.cn/public/images/9a/4e/2d/2d69eca5db91ebf21a72260ca565e27eb5a14256.png?1420113993#h" alt="威利农山庄尊贵商务礼品" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-670.html">威利农山庄尊贵商务礼品</a></h6>
          
          <ul>
            <li class="mktprice1">￥568.00</li>          
            <li class="price1">￥458.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-155-670-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-669.html"><img src="http://www.guolehui.com.cn/public/images/bb/e3/d9/9e4b2b97a80c2d25ba74f52db31b0410a9126e9b.png?1420114009#h" alt="蓝色经典水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-669.html">蓝色经典水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥238.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-154-669-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-674.html"><img src="http://www.guolehui.com.cn/public/images/e3/2c/10/72f1124976459941d73ddb72c9815cff7777e214.png?1420114782#h" alt="威尔农庄尊贵商务礼品【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-674.html">威尔农庄尊贵商务礼品【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥358.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-159-674-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-673.html"><img src="http://www.guolehui.com.cn/public/images/a9/63/aa/c96bfb37d4ca632f65994ad3169e551ce2bfc822.png?1420114796#h" alt="真情意意水果礼盒【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-673.html">真情意意水果礼盒【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥408.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-158-673-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-672.html"><img src="http://www.guolehui.com.cn/public/images/8e/18/13/dd1b33e6d71c05bac57439f27bc98a0a5e41c1f7.png?1421488721#h" alt="儿童水果套餐礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-672.html">儿童水果套餐礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥218.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-157-672-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-671.html"><img src="http://www.guolehui.com.cn/public/images/df/7f/72/dca1f554a069ef34cde99b154ae1e06babe49605.png?1420114821#h" alt="家和万事兴水果礼盒【特价】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-671.html">家和万事兴水果礼盒【特价】</a></h6>
          
          <ul>
            <li class="mktprice1">￥198.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-156-671-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-670.html"><img src="http://www.guolehui.com.cn/public/images/9a/4e/2d/2d69eca5db91ebf21a72260ca565e27eb5a14256.png?1420113993#h" alt="威利农山庄尊贵商务礼品" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-670.html">威利农山庄尊贵商务礼品</a></h6>
          
          <ul>
            <li class="mktprice1">￥568.00</li>          
            <li class="price1">￥458.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-155-670-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-669.html"><img src="http://www.guolehui.com.cn/public/images/bb/e3/d9/9e4b2b97a80c2d25ba74f52db31b0410a9126e9b.png?1420114009#h" alt="蓝色经典水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-669.html">蓝色经典水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥238.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-154-669-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-668.html"><img src="http://www.guolehui.com.cn/public/images/66/80/3a/06acee2bfc9d8ce77c5e0fa990265b7fbe1eea68.png?1420114068#h" alt="果乐缤纷水果礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-668.html">果乐缤纷水果礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥308.00</li>          
            <li class="price1">￥238.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-153-668-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-667.html"><img src="http://www.guolehui.com.cn/public/images/31/1a/9d/bd795585a6c7af7da4a74b188b7657f2ca65222b.png?1420114115#h" alt="美白塑身水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-667.html">美白塑身水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥298.00</li>          
            <li class="price1">￥258.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-152-667-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
      </ul>
</li>
                        </ul>
                    </div>
                </div>               
            </div>
        </div>
    </div> 



    <div class="floor floor2">
      <div class="hd"><span id="f2" class="fgoto"></span><h3 class="fl">2F 国产鲜果</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="http://www.guolehui.com.cn/gallery-46.html" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_235" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-642.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/28/66/27/cdb4358b21e1837c0204bcf46564e50251b8592e.jpg?1429026190#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-571.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/9c/21/60/85d204982b084294d1a27fe1af0c79518b130563.jpg?1429026688#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-676.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/d5/db/38/5842924aa93f3140d3fb51126c0b9b6ada1631b0.jpg?1421123040#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_235',{
        effect:'fade',
        autoplay:true,
    interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                            <li><span>新品鲜果</span><i></i></li>
                            <li><span>时令鲜果</span><i></i></li>
                            <li><span>热卖鲜果</span><i></i></li>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-918.html"><img src="http://www.guolehui.com.cn/public/images/32/2f/53/d32b4ff148c1aaf1c7e815496c7c67bfb0fb68bc.jpg?1430904179#h" alt="海南妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-918.html">海南妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】</a></h6>
          
          <ul>
            <li class="mktprice1">￥54.00</li>          
            <li class="price1">￥45.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-251-959-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1013.html"><img src="http://www.guolehui.com.cn/public/images/e8/3f/62/246a70ce6c0bc948c60ff51506bcb0bf2a9b40b8.jpg?1435071078#h" alt="新品南汇黄桃4-5两，早期上市，果乐汇基地直发【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1013.html">新品南汇黄桃4-5两，早期上市，果乐汇基地直发【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥166.00</li>          
            <li class="price1">￥138.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-281-1013-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1006.html"><img src="http://www.guolehui.com.cn/public/images/c0/3f/38/dfe9dfb9176e938dd8202b61d281d61bad03735d.jpg?1434348101#h" alt="云南夏黑葡萄【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1006.html">云南夏黑葡萄【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥59.00</li>          
            <li class="price1">￥49.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-280-1006-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1003.html"><img src="http://www.guolehui.com.cn/public/images/40/22/97/ccc8df64996a108b63bf21af01bb14d9a9cdec64.jpg?1434180353#h" alt="优质蓝莓" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1003.html">优质蓝莓</a></h6>
          
          <ul>
            <li class="mktprice1">￥59.00</li>          
            <li class="price1">￥49.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-279-1003-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-996.html"><img src="http://www.guolehui.com.cn/public/images/7e/96/7d/c7cdb27bab70237307376088d75316b0f04d176d.jpg?1434164877#h" alt="正宗无锡阳山水蜜桃4-5两12个装【限上海外环内配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-996.html">正宗无锡阳山水蜜桃4-5两12个装【限上海外环内配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥154.00</li>          
            <li class="price1">￥128.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-276-996-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-877.html"><img src="http://www.guolehui.com.cn/public/images/c0/a7/24/9eab1431fdbba46c83432324c6e686f0108afd68.jpg?1434202559#h" alt="东魁仙居杨梅;限上海配送" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-877.html">东魁仙居杨梅;限上海配送</a></h6>
          
          <ul>
            <li class="mktprice1">￥154.00</li>          
            <li class="price1">￥128.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-243-877-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-833.html"><img src="http://www.guolehui.com.cn/public/images/0f/25/e6/8797aa0411008670b916bc65e7f3420971dc08c9.jpg?1428757818#h" alt="果园促销；团购商品，南汇玉菇甜瓜35/2个；原价69元/2个；2个大约4.8-5斤【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-833.html">果园促销；团购商品，南汇玉菇甜瓜35/2个；原价69元/2个；2个大约4.8-5斤...</a></h6>
          
          <ul>
            <li class="mktprice1">￥42.00</li>          
            <li class="price1">￥35.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-227-833-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-813.html"><img src="http://www.guolehui.com.cn/public/images/7c/a2/c0/a5fdd15edf886b02dc5c371b8748438ba07f4190.jpg?1433514761#h" alt="广西小台农芒果  【配送范围上海/北京/广东/浙江/江苏/合肥】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-813.html">广西小台农芒果  【配送范围上海/北京/广东/浙江/江苏/合肥】</a></h6>
          
          <ul>
            <li class="mktprice1">￥36.00</li>          
            <li class="price1">￥30.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-213-785-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-967.html"><img src="http://www.guolehui.com.cn/public/images/34/62/85/ea3f5d8ada82b17e407d40503bda254df5122834.jpg?1432831309#h" alt="精品妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-967.html">精品妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】</a></h6>
          
          <ul>
            <li class="mktprice1">￥54.00</li>          
            <li class="price1">￥45.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-266-967-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-918.html"><img src="http://www.guolehui.com.cn/public/images/32/2f/53/d32b4ff148c1aaf1c7e815496c7c67bfb0fb68bc.jpg?1430904179#h" alt="海南妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-918.html">海南妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】</a></h6>
          
          <ul>
            <li class="mktprice1">￥54.00</li>          
            <li class="price1">￥45.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-251-959-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1015.html"><img src="http://www.guolehui.com.cn/public/images/63/f5/63/911205fedb541c5fffb1e2d6e76d4e6fa9947e0a.jpg?1435071240#h" alt="新品南汇黄桃5-6两，早期上市，果乐汇基地直发【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1015.html">新品南汇黄桃5-6两，早期上市，果乐汇基地直发【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥202.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-282-1015-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1013.html"><img src="http://www.guolehui.com.cn/public/images/e8/3f/62/246a70ce6c0bc948c60ff51506bcb0bf2a9b40b8.jpg?1435071078#h" alt="新品南汇黄桃4-5两，早期上市，果乐汇基地直发【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1013.html">新品南汇黄桃4-5两，早期上市，果乐汇基地直发【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥166.00</li>          
            <li class="price1">￥138.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-281-1013-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1006.html"><img src="http://www.guolehui.com.cn/public/images/c0/3f/38/dfe9dfb9176e938dd8202b61d281d61bad03735d.jpg?1434348101#h" alt="云南夏黑葡萄【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1006.html">云南夏黑葡萄【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥59.00</li>          
            <li class="price1">￥49.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-280-1006-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1003.html"><img src="http://www.guolehui.com.cn/public/images/40/22/97/ccc8df64996a108b63bf21af01bb14d9a9cdec64.jpg?1434180353#h" alt="优质蓝莓" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1003.html">优质蓝莓</a></h6>
          
          <ul>
            <li class="mktprice1">￥59.00</li>          
            <li class="price1">￥49.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-279-1003-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-998.html"><img src="http://www.guolehui.com.cn/public/images/bb/fa/c5/73922edd98ce5b89422d5607dc595aec99a0ae00.jpg?1434165101#h" alt="正宗无锡阳山水蜜桃6两12个装【限上海配送】6.18/6.21第二件半价" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-998.html">正宗无锡阳山水蜜桃6两12个装【限上海配送】6.18/6.21第二件半价</a></h6>
          
          <ul>
            <li class="mktprice1">￥226.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-277-998-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-996.html"><img src="http://www.guolehui.com.cn/public/images/7e/96/7d/c7cdb27bab70237307376088d75316b0f04d176d.jpg?1434164877#h" alt="正宗无锡阳山水蜜桃4-5两12个装【限上海外环内配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-996.html">正宗无锡阳山水蜜桃4-5两12个装【限上海外环内配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥154.00</li>          
            <li class="price1">￥128.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-276-996-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-967.html"><img src="http://www.guolehui.com.cn/public/images/34/62/85/ea3f5d8ada82b17e407d40503bda254df5122834.jpg?1432831309#h" alt="精品妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-967.html">精品妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】</a></h6>
          
          <ul>
            <li class="mktprice1">￥54.00</li>          
            <li class="price1">￥45.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-266-967-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-918.html"><img src="http://www.guolehui.com.cn/public/images/32/2f/53/d32b4ff148c1aaf1c7e815496c7c67bfb0fb68bc.jpg?1430904179#h" alt="海南妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-918.html">海南妃子笑荔枝 产地直供 新鲜采摘【配送范围上海】</a></h6>
          
          <ul>
            <li class="mktprice1">￥54.00</li>          
            <li class="price1">￥45.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-251-959-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1015.html"><img src="http://www.guolehui.com.cn/public/images/63/f5/63/911205fedb541c5fffb1e2d6e76d4e6fa9947e0a.jpg?1435071240#h" alt="新品南汇黄桃5-6两，早期上市，果乐汇基地直发【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1015.html">新品南汇黄桃5-6两，早期上市，果乐汇基地直发【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥202.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-282-1015-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1013.html"><img src="http://www.guolehui.com.cn/public/images/e8/3f/62/246a70ce6c0bc948c60ff51506bcb0bf2a9b40b8.jpg?1435071078#h" alt="新品南汇黄桃4-5两，早期上市，果乐汇基地直发【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1013.html">新品南汇黄桃4-5两，早期上市，果乐汇基地直发【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥166.00</li>          
            <li class="price1">￥138.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-281-1013-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1006.html"><img src="http://www.guolehui.com.cn/public/images/c0/3f/38/dfe9dfb9176e938dd8202b61d281d61bad03735d.jpg?1434348101#h" alt="云南夏黑葡萄【限上海配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1006.html">云南夏黑葡萄【限上海配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥59.00</li>          
            <li class="price1">￥49.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-280-1006-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-1003.html"><img src="http://www.guolehui.com.cn/public/images/40/22/97/ccc8df64996a108b63bf21af01bb14d9a9cdec64.jpg?1434180353#h" alt="优质蓝莓" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-1003.html">优质蓝莓</a></h6>
          
          <ul>
            <li class="mktprice1">￥59.00</li>          
            <li class="price1">￥49.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-279-1003-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-998.html"><img src="http://www.guolehui.com.cn/public/images/bb/fa/c5/73922edd98ce5b89422d5607dc595aec99a0ae00.jpg?1434165101#h" alt="正宗无锡阳山水蜜桃6两12个装【限上海配送】6.18/6.21第二件半价" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-998.html">正宗无锡阳山水蜜桃6两12个装【限上海配送】6.18/6.21第二件半价</a></h6>
          
          <ul>
            <li class="mktprice1">￥226.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-277-998-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-996.html"><img src="http://www.guolehui.com.cn/public/images/7e/96/7d/c7cdb27bab70237307376088d75316b0f04d176d.jpg?1434164877#h" alt="正宗无锡阳山水蜜桃4-5两12个装【限上海外环内配送】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-996.html">正宗无锡阳山水蜜桃4-5两12个装【限上海外环内配送】</a></h6>
          
          <ul>
            <li class="mktprice1">￥154.00</li>          
            <li class="price1">￥128.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-276-996-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                        </ul>
                    </div>
                </div>            
            </div>
        </div>
    </div>    

    <div class="floor floor3">
      <div class="hd"><span id="f3" class="fgoto"></span><h3 class="fl">3F 高档鲜果礼盒</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="http://www.guolehui.com.cn/gallery-47.html" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_236" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/gallery-48.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/d8/17/7c/27be6709fc639915b5cec874278cfd98ead487b8.jpg?1421201249#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-676.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/96/cf/24/ea16295e81a5cb8d11ce036a50ade7a8ca9f1214.jpg?1413358520#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/product-965.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/8d/5b/d2/fd1d50f9af2e4612ff0904fbbb88252f68e1425f.jpg?1413358617#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_236',{
        effect:'fade',
        autoplay:true,
    interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                            <li><span>端午节礼盒礼券</span><i></i></li>
                            <li><span>商务礼盒</span><i></i></li>
                            <li><span>儿童礼盒</span><i></i></li>
                            <li><span>节日礼盒</span><i></i></li>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-674.html"><img src="http://www.guolehui.com.cn/public/images/e3/2c/10/72f1124976459941d73ddb72c9815cff7777e214.png?1420114782#h" alt="威尔农庄尊贵商务礼品【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-674.html">ss威尔农庄尊贵商务礼品【全国通用】</a></h6>

          <ul>
            <li class="mktprice1">￥358.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-159-674-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-673.html"><img src="http://www.guolehui.com.cn/public/images/a9/63/aa/c96bfb37d4ca632f65994ad3169e551ce2bfc822.png?1420114796#h" alt="真情意意水果礼盒【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-673.html">真情意意水果礼盒【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥408.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-158-673-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-672.html"><img src="http://www.guolehui.com.cn/public/images/8e/18/13/dd1b33e6d71c05bac57439f27bc98a0a5e41c1f7.png?1421488721#h" alt="儿童水果套餐礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-672.html">儿童水果套餐礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥218.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-157-672-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-671.html"><img src="http://www.guolehui.com.cn/public/images/df/7f/72/dca1f554a069ef34cde99b154ae1e06babe49605.png?1420114821#h" alt="家和万事兴水果礼盒【特价】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-671.html">家和万事兴水果礼盒【特价】</a></h6>
          
          <ul>
            <li class="mktprice1">￥198.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-156-671-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-670.html"><img src="http://www.guolehui.com.cn/public/images/9a/4e/2d/2d69eca5db91ebf21a72260ca565e27eb5a14256.png?1420113993#h" alt="威利农山庄尊贵商务礼品" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-670.html">威利农山庄尊贵商务礼品</a></h6>
          
          <ul>
            <li class="mktprice1">￥568.00</li>          
            <li class="price1">￥458.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-155-670-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-669.html"><img src="http://www.guolehui.com.cn/public/images/bb/e3/d9/9e4b2b97a80c2d25ba74f52db31b0410a9126e9b.png?1420114009#h" alt="蓝色经典水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-669.html">蓝色经典水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥238.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-154-669-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-668.html"><img src="http://www.guolehui.com.cn/public/images/66/80/3a/06acee2bfc9d8ce77c5e0fa990265b7fbe1eea68.png?1420114068#h" alt="果乐缤纷水果礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-668.html">果乐缤纷水果礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥308.00</li>          
            <li class="price1">￥238.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-153-668-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-667.html"><img src="http://www.guolehui.com.cn/public/images/31/1a/9d/bd795585a6c7af7da4a74b188b7657f2ca65222b.png?1420114115#h" alt="美白塑身水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-667.html">美白塑身水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥298.00</li>          
            <li class="price1">￥258.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-152-667-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-674.html"><img src="http://www.guolehui.com.cn/public/images/e3/2c/10/72f1124976459941d73ddb72c9815cff7777e214.png?1420114782#h" alt="威尔农庄尊贵商务礼品【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-674.html">威尔农庄尊贵商务礼品【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥358.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-159-674-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-673.html"><img src="http://www.guolehui.com.cn/public/images/a9/63/aa/c96bfb37d4ca632f65994ad3169e551ce2bfc822.png?1420114796#h" alt="真情意意水果礼盒【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-673.html">真情意意水果礼盒【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥408.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-158-673-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-670.html"><img src="http://www.guolehui.com.cn/public/images/9a/4e/2d/2d69eca5db91ebf21a72260ca565e27eb5a14256.png?1420113993#h" alt="威利农山庄尊贵商务礼品" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-670.html">威利农山庄尊贵商务礼品</a></h6>
          
          <ul>
            <li class="mktprice1">￥568.00</li>          
            <li class="price1">￥458.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-155-670-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-669.html"><img src="http://www.guolehui.com.cn/public/images/bb/e3/d9/9e4b2b97a80c2d25ba74f52db31b0410a9126e9b.png?1420114009#h" alt="蓝色经典水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-669.html">蓝色经典水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥238.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-154-669-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-674.html"><img src="http://www.guolehui.com.cn/public/images/e3/2c/10/72f1124976459941d73ddb72c9815cff7777e214.png?1420114782#h" alt="威尔农庄尊贵商务礼品【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-674.html">威尔农庄尊贵商务礼品【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥358.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-159-674-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-673.html"><img src="http://www.guolehui.com.cn/public/images/a9/63/aa/c96bfb37d4ca632f65994ad3169e551ce2bfc822.png?1420114796#h" alt="真情意意水果礼盒【全国通用】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-673.html">真情意意水果礼盒【全国通用】</a></h6>
          
          <ul>
            <li class="mktprice1">￥408.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-158-673-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-672.html"><img src="http://www.guolehui.com.cn/public/images/8e/18/13/dd1b33e6d71c05bac57439f27bc98a0a5e41c1f7.png?1421488721#h" alt="儿童水果套餐礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-672.html">儿童水果套餐礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥218.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-157-672-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-671.html"><img src="http://www.guolehui.com.cn/public/images/df/7f/72/dca1f554a069ef34cde99b154ae1e06babe49605.png?1420114821#h" alt="家和万事兴水果礼盒【特价】" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-671.html">家和万事兴水果礼盒【特价】</a></h6>
          
          <ul>
            <li class="mktprice1">￥198.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-156-671-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-670.html"><img src="http://www.guolehui.com.cn/public/images/9a/4e/2d/2d69eca5db91ebf21a72260ca565e27eb5a14256.png?1420113993#h" alt="威利农山庄尊贵商务礼品" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-670.html">威利农山庄尊贵商务礼品</a></h6>
          
          <ul>
            <li class="mktprice1">￥568.00</li>          
            <li class="price1">￥458.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-155-670-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-669.html"><img src="http://www.guolehui.com.cn/public/images/bb/e3/d9/9e4b2b97a80c2d25ba74f52db31b0410a9126e9b.png?1420114009#h" alt="蓝色经典水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-669.html">蓝色经典水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥238.00</li>          
            <li class="price1">￥188.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-154-669-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-668.html"><img src="http://www.guolehui.com.cn/public/images/66/80/3a/06acee2bfc9d8ce77c5e0fa990265b7fbe1eea68.png?1420114068#h" alt="果乐缤纷水果礼盒" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-668.html">果乐缤纷水果礼盒</a></h6>
          
          <ul>
            <li class="mktprice1">￥308.00</li>          
            <li class="price1">￥238.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-153-668-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-667.html"><img src="http://www.guolehui.com.cn/public/images/31/1a/9d/bd795585a6c7af7da4a74b188b7657f2ca65222b.png?1420114115#h" alt="美白塑身水果套餐" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-667.html">美白塑身水果套餐</a></h6>
          
          <ul>
            <li class="mktprice1">￥298.00</li>          
            <li class="price1">￥258.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-152-667-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
      </ul>
</li>
                        </ul>
                    </div>
                </div>               
            </div>
        </div>
    </div> 

    <div class="floor floor4">
      <div class="hd"><span id="f4" class="fgoto"></span><h3 class="fl">4F 礼卡礼券</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_237" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/gallery-63.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/fd/27/43/699e8e9101b14a2f5ae93ad8b6f7b9bd755bde51.jpg?1413381517#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/gallery-49.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/56/8c/86/2a6587aa69415a0c74fb8658e16c84dd81bb7281.jpg?1417938658#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/05/08/49/c70086304f46cce869095b79b0065f60a2927d97.jpg?1413504320#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_237',{
        effect:'fade',
        autoplay:true,
    interval:5000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                            <li><span>端午礼卡</span><i></i></li>
                            <li><span>通用系列提货券</span><i></i></li>
                            <li><span>礼品购物卡</span><i></i></li>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-658.html"><img src="http://www.guolehui.com.cn/public/images/bf/af/b7/f495764b02737f48a3533c68d16a81ee63a9acc2.gif?1427643023#h" alt="500元生活系列礼品储值卡、全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-658.html">500元生活系列礼品储值卡、全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥500.00</li>          
            <li class="price1">￥500.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-147-658-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-657.html"><img src="http://www.guolehui.com.cn/public/images/7f/88/41/c6558c88c275a037c5decd211a7081ea1708bc68.gif?1427643214#h" alt="300元生活系列礼品储值卡、全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-657.html">300元生活系列礼品储值卡、全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥300.00</li>          
            <li class="price1">￥300.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-146-657-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-656.html"><img src="http://www.guolehui.com.cn/public/images/fc/e4/e7/af52ddef74454863b8908506337a447b3ca50f28.gif?1427643244#h" alt="200元生活系列礼品储值卡、全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-656.html">200元生活系列礼品储值卡、全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥200.00</li>          
            <li class="price1">￥200.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-145-656-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-655.html"><img src="http://www.guolehui.com.cn/public/images/fc/db/60/63720862aa1823b73db7b530d618f3346d0a235a.gif?1427643556#h" alt="100元生活系列礼品储值卡，全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-655.html">100元生活系列礼品储值卡，全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥100.00</li>          
            <li class="price1">￥100.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-144-655-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-601.html"><img src="http://www.guolehui.com.cn/public/images/c7/cd/74/d171aed0fbd21f0e3c4b7fe7b21d99445b00214d.gif?1417936223#h" alt="洋洋得意提货券；全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-601.html">洋洋得意提货券；全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥268.00</li>          
            <li class="price1">￥198.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-125-601-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-600.html"><img src="http://www.guolehui.com.cn/public/images/92/e0/f4/5ac35a93238a25f4257ecdcac51cda18452b3565.gif?1417936554#h" alt="喜气洋洋提货券；全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-600.html">喜气洋洋提货券；全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥318.00</li>          
            <li class="price1">￥268.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-124-600-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-599.html"><img src="http://www.guolehui.com.cn/public/images/2e/54/64/1e40c5ef42a3e76be51bd4c48f696eacd7940ef8.gif?1417937317#h" alt="三阳开泰提货券，全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-599.html">三阳开泰提货券，全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥442.00</li>          
            <li class="price1">￥298.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-123-599-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-598.html"><img src="http://www.guolehui.com.cn/public/images/91/16/7f/fcdb22350078fe8bf8cdf96d0778e77ebdd8dfb7.png?1417952801#h" alt="年年有余提货券；全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-598.html">年年有余提货券；全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥538.00</li>          
            <li class="price1">￥499.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-122-598-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-597.html"><img src="http://www.guolehui.com.cn/public/images/d3/f9/36/d13221afecb320cd64c70568c4059aad8cd87ef8.gif?1419751593#h" alt="万事如意提货券" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-597.html">万事如意提货券</a></h6>
          
          <ul>
            <li class="mktprice1">￥198.00</li>          
            <li class="price1">￥168.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-121-597-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-596.html"><img src="http://www.guolehui.com.cn/public/images/ff/d7/58/616e3bd64bf1a9f78c67341ecef432bdcf55da7f.gif?1419751623#h" alt="富贵吉祥提货券" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-596.html">富贵吉祥提货券</a></h6>
          
          <ul>
            <li class="mktprice1">￥478.00</li>          
            <li class="price1">￥398.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-120-596-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-595.html"><img src="http://www.guolehui.com.cn/public/images/a9/c0/ae/784a41abc9158830c708e23291f873635d1aa629.gif?1419751648#h" alt="五福临门提货券" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-595.html">五福临门提货券</a></h6>
          
          <ul>
            <li class="mktprice1">￥258.00</li>          
            <li class="price1">￥228.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-119-595-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-594.html"><img src="http://www.guolehui.com.cn/public/images/f5/ac/02/efb57b7a8dcfc9b4d91c3c77f7ac888a993078b9.gif?1419751680#h" alt="一马当先提货券" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-594.html">一马当先提货券</a></h6>
          
          <ul>
            <li class="mktprice1">￥398.00</li>          
            <li class="price1">￥358.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-118-594-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                            <li class="gb-item">  <ul class="goods-column clr">
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-658.html"><img src="http://www.guolehui.com.cn/public/images/bf/af/b7/f495764b02737f48a3533c68d16a81ee63a9acc2.gif?1427643023#h" alt="500元生活系列礼品储值卡、全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-658.html">500元生活系列礼品储值卡、全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥500.00</li>          
            <li class="price1">￥500.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-147-658-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-657.html"><img src="http://www.guolehui.com.cn/public/images/7f/88/41/c6558c88c275a037c5decd211a7081ea1708bc68.gif?1427643214#h" alt="300元生活系列礼品储值卡、全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-657.html">300元生活系列礼品储值卡、全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥300.00</li>          
            <li class="price1">￥300.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-146-657-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-656.html"><img src="http://www.guolehui.com.cn/public/images/fc/e4/e7/af52ddef74454863b8908506337a447b3ca50f28.gif?1427643244#h" alt="200元生活系列礼品储值卡、全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-656.html">200元生活系列礼品储值卡、全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥200.00</li>          
            <li class="price1">￥200.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-145-656-1.html">加入购物车</a>    
      </div>
     </li>
        <li class="goods-list">
              <div class="goodpic"><a target="_blank" href="/product-655.html"><img src="http://www.guolehui.com.cn/public/images/fc/db/60/63720862aa1823b73db7b530d618f3346d0a235a.gif?1427643556#h" alt="100元生活系列礼品储值卡，全国通用" width="160" height="160"/></a>
      </div>
      <div class="info">
         <h6><a target="_blank" href="/product-655.html">100元生活系列礼品储值卡，全国通用</a></h6>
          
          <ul>
            <li class="mktprice1">￥100.00</li>          
            <li class="price1">￥100.00</li>
          </ul>
          
          <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="/index.php/cart-add-goods-144-655-1.html">加入购物车</a>    
      </div>
     </li>
      </ul>
</li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <div class="floor-show"><a href="">     
        <img src='<?php echo SHOP_TEMPLATES_URL;?>/images/footertop.jpg' alt="" width='1190'/></a>
    </div>
    
    
   </div> 

    
    </div>
    
    
    
    
    

</div>

<div id="footer" class="footer">
<div class="foot">
      <div class="pageFooter">
 
      <div class="right">
        <ul>
          <li class="title">购物指南</li>
          <li><a rel="nofollow" href="http://help.sfbest.com/140/133.html" target="_blank">积分制度</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/140/132.html" target="_blank">会员介绍</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/140/128.html" target="_blank">购物流程</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/140/138.html" target="_blank">常见问题</a></li>
        </ul>
        <ul>
          <li class="title">配送服务</li>
          <li><a rel="nofollow" href="http://help.sfbest.com/141/134.html" target="_blank">配送政策</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/141/136.html" target="_blank">开箱验货</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/141/137.html" target="_blank">配送运费</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/141/135.html" target="_blank">配送范围</a></li>
        </ul>
        <ul>
          <li class="title">支付方式</li>
          <li><a rel="nofollow" href="http://help.sfbest.com/143/139.html" target="_blank">货到付款</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/143/141.html" target="_blank">在线支付</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/143/131.html" target="_blank">优选卡</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/143/142.html" target="_blank">发票制度</a></li>
        </ul>
        <ul>
          <li class="title">售后服务</li>
          <li><a rel="nofollow" href="http://help.sfbest.com/144/145.html" target="_blank">退款说明</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/144/144.html" target="_blank">退换货流程</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/144/143.html" target="_blank">退换货政策</a></li>
          <li><a rel="nofollow" href="http://help.sfbest.com/390/4643.html" target="_blank">隐私条款</a></li>
        </ul>

<ul class="sj">
<li class="title">商家中心</li>
  
<li>商家入驻</li>
  
<li><a rel="nofollow" href="http://help.sfbest.com/392/7232.html" target="_blank">商家规则</a></li>
</ul>
      </div>
      <div class="left">
        <div class="f_wx">
          <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/mobile.jpg"/>
          <p>四季果园手机版</p>
        </div>
        <div class="f_ios">
          <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/weixin.jpg"/>
          <p>请关注我们的微信</p>
        </div>
      </div>
    </div>
    <div class="clear"></div>


    </div>   
    <div class="bottom">
      <div class="siteinfo">
        <p><span><a rel="nofollow" href="/www/379/5109.html" target="_blank">关于我们</a></span><span><a rel="nofollow" href="/www/380/5116.html" target="_blank">联系我们</a></span><span><a rel="nofollow" href="/www/381/5117.html" target="_blank">招聘人才</a></span><span><a href="/www/330/2705.html" target="_blank">友情链接</a></span><span><a rel="nofollow" href="http://supplier.sfbest.com/supplierApply" target="_blank">供应商申请</a></span><span>Copyright© 四季果园 sjfruit.com 版权所有</span></p>
        <p><span>京公网安备11010502026831号</span><span><a class="beian" rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn">京ICP证150325号</a></span><span>食品流通许可证SP1101131210068671(1-1)号</span><span><a class="beian" rel="nofollow" target="_blank" href="/www/174/461.html">企业营业执照</a></span></p>
      </div>
    </div>
</div>


<?php //include template('home/cur_local');?>
<?php //require_once($tpl_file);?>
<?php //require_once template('footer');?>
</body>
</html>