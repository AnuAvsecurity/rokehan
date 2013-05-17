<!DOCTYPE html>
<html lang="en">

<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php //include_title() ?>
<?php include_stylesheets() ?>

<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>マイページ｜貸しスペースなら「スペースシェア」</title>
<meta name="keywords" content="スペースシェア,レンタルオフィス,ルームメイト,ルームシェア,レンタル,格安,激安,SPACESHARE" />
<meta name="description" content="スペースシェアは、スペースを貸したい人と、借りたい人をマッチング。レンタルオフィスをシェアしたり、ルームメイトを募集したり、トランクルームとして使っていないスペースを貸し出したり、用途は自由。1日貸しから時間貸し、月単位の貸し出しも可能です。" />
<link rel="shortcut icon" href=assets/images/favicon.ico type="image/vnd.microsoft.icon">
<link rel="icon" href= assets/images/favicon.ico type="image/vnd.microsoft.icon">

<link rel="stylesheet" type="text/css" href="assets/css/navi.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/mypage.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/question.css"/>

<?php if (Doctrine::getTable('SnsConfig')->get('customizing_css')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo url_for('@customizing_css') ?>" />
<?php endif; ?>
<?php if (opConfig::get('enable_jsonapi') && opToolkit::isSecurePage()): ?>
<?php
use_helper('Javascript');
use_javascript('custom/prototype.js');
use_javascript('custom/ajaxzip2.js');
use_javascript('jquery.min.js');
use_javascript('custom/copy.js');
use_javascript('custom/jquery.pngFix-1.2.js');


$jsonData = array(
  'apiKey' => $sf_user->getMemberApiKey(),
  'apiBase' => app_url_for('api', 'homepage'),
);

$json = defined('JSON_PRETTY_PRINT') ? json_encode($jsonData, JSON_PRETTY_PRINT) : json_encode($jsonData);

echo javascript_tag('
var openpne = '.$json.';
');
?>
<?php endif ?>
<?php include_javascripts() ?>
<?php //echo $op_config->get('pc_html_head') ?>
 <script type="text/javascript">
$(document).ready(function(){
$("#demo1Btn").mopTip({'w':210,'style':"overOut",'get':"#demo1"});
$("#demo2Btn").mopTip({'w':200,'style':"overOut",'get':"#demo2"});
$("#demo3Btn").mopTip({'w':200,'style':"overOut",'get':"#demo3"});
$("#demo4Btn").mopTip({'w':200,'style':"overOut",'get':"#demo4"});
$("#demo5Btn").mopTip({'w':180,'style':"overOut",'get':"#demo5"});
$("#demo6Btn").mopTip({'w':230,'style':"overOut",'get':"#demo6"});
$("#demo7Btn").mopTip({'w':230,'style':"overOut",'get':"#demo7"});
$("#demo8Btn").mopTip({'w':210,'style':"overOut",'get':"#demo8"});
$("#demo9Btn").mopTip({'w':230,'style':"overOut",'get':"#demo9"});
$("#demo10Btn").mopTip({'w':230,'style':"overOut",'get':"#demo10"});
$("#demo11Btn").mopTip({'w':150,'style':"overOut",'get':"#demo11"});
$("#demo12Btn").mopTip({'w':150,'style':"overOut",'get':"#demo12"});
$("#demo13Btn").mopTip({'w':200,'style':"overOut",'get':"#demo13"});
$("#demo14Btn").mopTip({'w':200,'style':"overOut",'get':"#demo14"});
$("#demo15Btn").mopTip({'w':200,'style':"overOut",'get':"#demo15"});
$("#demo16Btn").mopTip({'w':200,'style':"overOut",'get':"#demo16"});
$("#demo17Btn").mopTip({'w':200,'style':"overOut",'get':"#demo17"});
$("#demo18Btn").mopTip({'w':230,'style':"overOut",'get':"#demo18"});
$("#demo19Btn").mopTip({'w':230,'style':"overOut",'get':"#demo19"});
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29160238-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript"><!--
function cText(obj){
if(obj.value==obj.defaultValue){
obj.value="";
obj.style.color="#000";
}
}

function sText(obj){
if(obj.value==""){
obj.value=obj.defaultValue;
obj.style.color="#999";
}
}
//-->
</script>

  </head>


<div class="gray">
  <div class="fotter_bg">
    <div class="head_bg">
      <div class="container">
    <?php  include_partial('global/header') ;?>
        <!--head-->
        <br class="both" />
        <div class="top_pankuzu_box">
          <ul class="pan">
            <li><a href="http://test.s-share.net/">スペースシェア TOP</a><span class="pan_space">&gt;</span></li>
            <li>マイページ <!--&gt;--></li>
            <!--<li>パンくずリストの作り方</li>-->
          </ul>
          <div class="login_small">
            <p class="login_link"><a href="#">ログアウト</a></p>
          </div>
          <p class="name"><span class="pl10">ようこそ<a href="mypage.html">○○○○</a>さん</span></p>
        </div>
        <!--top_pankuzu_box-->
        <br class="both" />
        <!--<div class="navi_wrap">
          <ul class="navi">
            <li><a href="http://test.s-share.net/"><img src="assets/images/navi_home.jpg" width="189" height="154" alt="HOME" /></a></li>
            <li><a href="http://test.s-share.net/first/"><img src="assets/images/navi_f.jpg" width="189" height="154" alt="初めての方へ" /></a></li>
            <li><a href="http://test.s-share.net/l_step/"><img src="assets/images/navi_l.jpg" width="189" height="154" alt="貸したいガイド" /></a></li>
            <li><a href="http://test.s-share.net/b_step/"><img src="assets/images/navi_b.jpg" width="189" height="154" alt="借りたいガイド" /></a></li>
            <li><img src="assets/images/navi_waku.jpg" width="189" height="154" alt="空" /></li>
          </ul>
          <br class="both" />
        </div>-->
        <!--navi_wrap-->

        <h3 class="h3 mt20"><span class="h3_text"><span class="h3big">マイページ</span></span></h3>
        <div class="top_roll">
          <ul class="mypage_navi">
          <li><a href="mypage.html"><img src="assets/images/control/control_navi1.gif" width="189" height="45" alt="マイページTOP" /></a></li>
          <li><a href="index.html"><img src="assets/images/control/control_navi2_bg.gif" width="187" height="45" alt="プロフィール" /></a></li>
          <li><a href="message/index.html"><img src="assets/images/control/control_navi3_bg.gif" width="187" height="45" alt="メッセージ" /></a></li>
          <li><a href="property_lender/index.html"><img src="assets/images/control/control_navi4_bg.gif" width="187" height="45" alt="レンダー（貸し手）ページ" /></a></li>
          <li><a href="property_borrower/index.html"><img src="assets/images/control/control_navi5_bg.gif" width="189" height="45" alt="ボロワー貸し手ページ" /></a></li>
        </ul>
          <br class="both" />
          <div class="massage_box">
            <p>こんにちは〇〇○さん。<br />
              まずはプロフィールを登録頂き、その後、物件を掲載する場合は、レンダー（貸し手）ページから物件掲載をお願いいたします。</p>
          </div>
          <!--massage_box-->

          <div class="side">
            <div class="face_bg">
              <p class="face"><img src="assets/images/control/face/face_noimage.jpg" width="224" height="213" alt="NOIMAGE" /></p>
            </div>
            <!--face_bg-->

            <div class="side_box">
              <div class="point_tag">
                <p class="tag_p">ユーザー総合評価</p>
              </div>
              <!--point_tag-->

              <div class="point_lender">
                <p class="lender_title">レンダー<span class="small">（貸し手）</span>としての評価</p>
                <table width="200" border="0" class="point_table">
                  <tr>
                    <td class="td1">評価件数</td>
                    <td class="td2">0件</td>
                  </tr>
                  <tr>
                    <td class="td1">非常に良い評価率</td>
                    <td class="td2">100％</td>
                  </tr>
                </table>
                <ul class="star">
                  <li><img src="assets/images/control/star1.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/star1.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/star05.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/stargray.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/stargray.png" width="28" height="27" alt="star" /></li>
                </ul>
                <br class="both" />
              </div>
              <!--point_lender-->

              <div class="point_borrower">
                <p class="borrower_title">ボロワー<span class="small">（貸し手）</span>としての評価</p>
                <table width="200" border="0" class="point_table">
                  <tr>
                    <td class="td1">評価件数</td>
                    <td class="td2">0件</td>
                  </tr>
                  <tr>
                    <td class="td1">非常に良い評価率</td>
                    <td class="td2">100％</td>
                  </tr>
                </table>
                <ul class="star">
                  <li><img src="assets/images/control/star1.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/star1.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/star05.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/stargray.png" width="28" height="27" alt="star" /></li>
                  <li><img src="assets/images/control/stargray.png" width="28" height="27" alt="star" /></li>
                </ul>
                <br class="both" />
              </div>
              <!--point_borrower-->

              <p class="point_btn"><a href="assessment.html">評価の詳細はこちらから</a></p>
            </div>
            <!--side_box-->

            <div class="side_box">
              <table width="237" border="0" class="mail_table">
                <tr>
                  <td width="38"><img src="assets/images/control/mail_icon.jpg" width="36" height="23" alt="メール" /></td>
                  <td>未読メッセージ件数</td>
                  <td class="mail_count"><a href="message/index.html">0件</a></td>
                </tr>
              </table>
            </div>
            <!--side_box-->

            <div class="side_box">
              <table width="237" border="0" class="money_table">
                <tr>
                  <td><img src="assets/images/control/money_icon.jpg" width="40" height="40" alt="お金" /></td>
                  <td class="mail_count">35,000円</td>
                </tr>
              </table>
              <p class="point_btn"><a href="bank.html">振込み依頼はこちらから</a></p>
            </div>
            <!--side_box-->

            <div class="side_box">
              <ul class="side_btn1">
                <li><a href="index.html">プロフィール画面</a></li>
                <li><a href="message/index.html">メッセージ</a></li>
                <li><a href="property_lender/entry/index.html">スペース掲載</a></li>
                <li><a href="property_lender/index.html">レンダー（貸し手）用画面</a></li>
                <li><a href="property_borrower/index.html">ボロワー（借り手）用画面</a></li>
              </ul>
            </div>
            <!--side_box-->

            <div class="side_box">
              <ul class="side_btn2">
                <li><a href="#">プロフィール編集</a></li>
                <li><a href="#">退会</a></li>
              </ul>
            </div>
            <!--side_box-->

          </div>
          <!--side-->

          <div class="message_main mt20">
            <div class="mypage_left">
              <h4 class="h4"><span class="h4_text">プロフィール</span></h4>
              <div class="mypage_box">
                <dl class="pt5">
                  <dt class="aicon"><a href="index.html">プロフィール編集・確認</a></dt>
                  <dd class="aicon_text pl50">→プロフィール編集・確認できます。</dd>
                </dl>
                <dl class="pt5 pb5">
                  <dt class="aicon"><a href="assessment.html">評価一覧</a></dt>
                  <dd class="aicon_text pl50">→今までの評価を確認できます。</dd>
                </dl>
              </div>
              <!--mypage_box-->

              <h4 class="h4 mt20"><span class="h4_text">レンダー（貸し手）ページ</span></h4>
              <div class="mypage_box">
                <dl class="pt5">
                  <dt class="aicon"><a href="property_lender/entry/index.html">新規にスペースを掲載</a></dt>
                  <dd class="aicon_text pl50">→新規にスペースを掲載できます。</dd>
                </dl>
                <dl class="pt5 pb5">
                  <dt class="aicon"><a href="property_lender/lender_list/index.html">貸出一覧・履歴</a></dt>
                  <dd class="aicon_text pl50">→レンダーとして貸出一覧・履歴を確認できます。</dd>
                </dl>
              </div>
              <!--mypage_box-->

              <h4 class="h4 mt20"><span class="h4_text">その他</span></h4>
              <div class="mypage_box">
                <dl class="pt5">
                  <dt class="aicon"><a href="bank.html">振込み依頼</a></dt>
                  <dd class="aicon_text pl50">→スペースシェアに対して振込み依頼ができます。</dd>
                </dl>
                <dl class="pt5 pb5">
                  <dt class="aicon"><a href="#">入出金履歴</a></dt>
                  <dd class="aicon_text pl50">→入出金の履歴を確認できます。</dd>
                </dl>
              </div>
              <!--mypage_box-->
            </div>
            <!--mypage_left-->
            <div class="mypage_right">
            <h4 class="h4"><span class="h4_text">メッセージ</span></h4>
              <div class="mypage_box">
                <dl class="pt5">
                  <dt class="aicon"><a href="message/index.html">メッセージ一覧</a></dt>
                  <dd class="aicon_text pl50">→メッセージの一覧です。</dd>
                </dl>
                <dl class="pt5 pb5">
                  <dt>&nbsp;</dt>
                  <dd class="aicon_text pl50">&nbsp;</dd>
                </dl>
              </div>
              <!--mypage_box-->

              <h4 class="h4 mt20"><span class="h4_text">ボロワー（借り手）ページ</span></h4>
              <div class="mypage_box">
                <dl class="pt5">
                  <dt class="aicon"><a href="http://test.s-share.net/list/">スペース情報を閲覧する</a></dt>
                  <dd class="aicon_text pl50">→他のスペース情報を確認できます。</dd>
                </dl>
                <dl class="pt5 pb5">
                  <dt class="aicon"><a href="property_borrower/borrower_list/index.html">貸出一覧・履歴</a></dt>
                  <dd class="aicon_text pl50">→ボロワーとして貸出一覧・履歴を確認できます。</dd>
                </dl>
              </div>
              <!--mypage_box-->

              </div>
            <!--mypage_right-->
              <br class="both" />

              <h4 class="h4_2 mt50"><span class="h4_text">メッセージ一覧</span></h4>
            <table width="673" border="0" class="massage_table">
              <tr class="m_table_th">
                <th scope="col" class="m_table_td" width="40">削除</th>
                <th scope="col" class="m_table_td" width="58">&nbsp;</th>
                <th scope="col" class="m_table_td" width="150">ユーザ名</th>
                <th scope="col" class="m_table_td" width="23">&nbsp;</th>
                <th scope="col" class="m_table_td" width="258">受信内容</th>
                <th scope="col" class="m_table_td" width="120">受信日時</th>
                <th scope="col" class="m_table_td" width="24">&nbsp;</th>
              </tr>
            </table>
            <table width="673" border="0" class="table_li">
              <tr class="m_table_tr">
                <!--▼削除▼-->
                <td class="m_table_td2 text_center" width="40"><input name="" type="checkbox" value="" /></td>
                <!--▲削除▲-->
                <!--▽タグ▽-->
                <td class="m_table_td2" width="58" onclick="location.href='http://test.s-share.net/mypage/message/message_main/'"><img src="assets/images/control/message_nego.png" width="58" height="40" alt="条件交渉" /></td>
                <!--△タグ△-->
                <!--▼ユーザ名▼-->
                <td class="m_table_td2 text_center" width="150" onclick="location.href='http://test.s-share.net/mypage/message/message_main/'"><img src="assets/images/control/message_lender.png" width="119" height="20" alt="レンダー" /><br />
                  ddddddd </td>
                <!--▲ユーザ名▲-->
                <!--▽メール▽-->
                <td class="m_table_td2" width="23" onclick="location.href='http://test.s-share.net/mypage/message/message_main/'"><img src="assets/images/control/mail_new_icon.png" width="23" height="17" alt="未読" /></td>
                <!--△メール△-->
                <!--▼受信タイトル▼-->
                <td class="m_table_td2 text_center" width="258" onclick="location.href='http://test.s-share.net/mypage/message/message_main/'"> オフィスシェアしませんか..... </td>
                <!--▲受信タイトル▲-->
                <!--▽受信日時▽-->
                <td class="m_table_td2 text_center" width="120" onclick="location.href='http://test.s-share.net/mypage/message/message_main/'"> 13-02-04 20:00 </td>
                <!--△受信日時△-->
                <!--▼添付▼-->
                <td class="m_table_td2" width="24" onclick="location.href='http://test.s-share.net/mypage/message/message_main/'"><img src="assets/images/control/clip_icon.png" width="24" height="25" /></td>
                <!--▲添付▲-->
              </tr>

            </table>
            <p class="pt10">

              <input name="" type="button" value="削除" />
            </p>
            <table width="673" border="0" class="table_setsumei mt30">
              <tr>
                <td>【アイコンの説明】</td>
                <td><img src="assets/images/control/mail_new_icon.png" width="23" height="17" alt="未読" /></td>
                <td>・・・未読</td>
                <td><img src="assets/images/control/mail_back_icon.png" width="23" height="24" alt="既読" /></td>
                <td>・・・既読</td>
                <td><img src="assets/images/control/clip_icon.png" width="24" height="25" alt="添付あり" /></td>
                <td>・・・添付あり</td>
              </tr>
            </table>

          </div>
          <!--message_main-->

        </div>
        <!--top_roll-->
        <p><img src="assets/images/top_bottom.jpg" width="980" height="20" /></p>
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
    <p class="fotter_logo"><a href="http://test.s-share.net/"><img src="assets/images/fotter_logo.jpg" width="278" height="43" alt="SPACE SHARE" /></a></p>
    <address>
    Copyright©2012 SPACE SHARE All rights reserved.
    </address>
  </div>
  <!--fotter_bottm-->
</div>
<!--fotter_bottom_in-->

</body>
</html>