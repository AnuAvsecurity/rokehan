<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php //include_title() ?>
    
    <?php include_stylesheets();?>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>マイページ｜貸しスペースなら「スペースシェア」</title>
    <meta name="keywords" content="スペースシェア,レンタルオフィス,ルームメイト,ルームシェア,レンタル,格安,激安,SPACESHARE"/>
    <meta name="description"
          content="スペースシェアは、スペースを貸したい人と、借りたい人をマッチング。レンタルオフィスをシェアしたり、ルームメイトを募集したり、トランクルームとして使っていないスペースを貸し出したり、用途は自由。1日貸しから時間貸し、月単位の貸し出しも可能です。"/>
    <link rel="shortcut icon" href=/rokehan/web/assets/images/favicon.ico type="image/vnd.microsoft.icon">
    <link rel="icon" href=/rokehan/web/assets/images/favicon.ico type="image/vnd.microsoft.icon">

    <link rel="stylesheet" type="text/css" href="/rokehan/web/assets/css/navi.css"/>
    <link rel="stylesheet" type="text/css" href="/rokehan/web/assets/css/mypage.css"/>
    <link rel="stylesheet" type="text/css" href="/rokehan/web/assets/css/question.css"/>

    <?php if (Doctrine::getTable('SnsConfig')->get('customizing_css')): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('@customizing_css') ?>"/>
    <?php endif; ?>
   <?php
    use_helper('Javascript');
    use_javascript('custom/prototype.js');
    use_javascript('custom/ajaxzip2.js');
    use_javascript('jquery.min.js');
    use_javascript('custom/mopTip/mopTip-2.2.js');
    use_javascript('custom/jquery.pngFix-1.2.js');
    use_javascript('custom/copy.js');
    ?>
    <?php include_javascripts() ?>
    <?php //echo $op_config->get('pc_html_head') ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#demo1Btn").mopTip({'w':210, 'style':"overOut", 'get':"#demo1"});
            jQuery("#demo2Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo2"});
            jQuery("#demo3Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo3"});
            jQuery("#demo4Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo4"});
            jQuery("#demo5Btn").mopTip({'w':180, 'style':"overOut", 'get':"#demo5"});
            jQuery("#demo6Btn").mopTip({'w':230, 'style':"overOut", 'get':"#demo6"});
            jQuery("#demo7Btn").mopTip({'w':230, 'style':"overOut", 'get':"#demo7"});
            jQuery("#demo8Btn").mopTip({'w':210, 'style':"overOut", 'get':"#demo8"});
            jQuery("#demo9Btn").mopTip({'w':230, 'style':"overOut", 'get':"#demo9"});
            jQuery("#demo10Btn").mopTip({'w':230, 'style':"overOut", 'get':"#demo10"});
            jQuery("#demo11Btn").mopTip({'w':150, 'style':"overOut", 'get':"#demo11"});
            jQuery("#demo12Btn").mopTip({'w':150, 'style':"overOut", 'get':"#demo12"});
            jQuery("#demo13Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo13"});
            jQuery("#demo14Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo14"});
            jQuery("#demo15Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo15"});
            jQuery("#demo16Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo16"});
            jQuery("#demo17Btn").mopTip({'w':200, 'style':"overOut", 'get':"#demo17"});
            jQuery("#demo18Btn").mopTip({'w':230, 'style':"overOut", 'get':"#demo18"});
            jQuery("#demo19Btn").mopTip({'w':230, 'style':"overOut", 'get':"#demo19"});
        });
    </script>

</head>

<div class="gray">
<div class="fotter_bg">
<div class="head_bg">
<div class="container">
<?php  include_partial('global/header');?>
<?php  $server_info = explode('/',$_SERVER["REQUEST_URI"]);?>
<?php if (has_slot('op_top')): ?>
<div id="Top">

    <?php if(!in_array('profile',$server_info)){ include_slot('op_top'); }?>
</div><!-- Top -->
    <?php endif; ?>
<!--head-->
<br class="both"/>

<div class="top_pankuzu_box">
    <ul class="pan">
        <li><a href="http://test.s-share.net/">スペースシェア TOP</a><span class="pan_space">&gt;</span></li>
        <li>マイページ <!--&gt;--></li>
        <!--<li>パンくずリストの作り方</li>-->
    </ul>
    <div class="login_small">
        <p class="login_link"><a href="logout">ログアウト</a></p>
    </div>
    <p class="name"><span class="pl10">ようこそ<a href="mypage.html">○○○○</a>さん</span></p>
</div>
<!--top_pankuzu_box-->
<br class="both"/>
<?php if(in_array('profile',$server_info)){ echo include_component('member', 'profilenavi');}?>
<h3 class="h3 mt20"><span class="h3_text"><span class="h3big">マイページ</span></span></h3>

<div class="top_roll">
<?php echo include_component('default', 'localNav');?>
<br class="both"/>

<div class="massage_box">
    <p>こんにちは〇〇○さん。<br/>
        まずはプロフィールを登録頂き、その後、物件を掲載する場合は、レンダー（貸し手）ページから物件掲載をお願いいたします。</p>
</div>
<!--massage_box--

            <!--massage_box-->
<div class="side">

    <!--face_bg-->
<?php if (has_slot('op_sidemenu')): ?>
    <?php echo include_component('default', 'leftSidebar');?>
    <?php //include_slot('op_sidemenu') ?>
<!-- Left -->
<?php endif; ?>

 <?php
    if(in_array('profile',$server_info)){
     echo include_component('member', 'profileListBox');
    }else{
     echo include_component('default', 'homepagememberInfo');
    }

   ?>
</div>
<!--top_roll-->
<p><img src="/rokehan/web/assets/images/top_bottom.jpg" width="980" height="20"/></p>
<?php include_partial('global/footer') ?>
</div>
<!--container-->
</div>
<!--head_bg-->
</div>
<!--fotter_bg-->
</div>
<!--gray-->
<div class="fotter_bottom">
    <div class="fotter_bottom_in">
        <p class="fotter_logo"><a href="http://test.s-share.net/"><img src="/rokehan/web/assets/images/fotter_logo.jpg" width="278"
                                                                       height="43" alt="SPACE SHARE"/></a></p>
        <address>
            Copyright©2012 SPACE SHARE All rights reserved.
        </address>
    </div>
    <!--fotter_bottm-->
</div>
<!--fotter_bottom_in-->

</body>
</html>