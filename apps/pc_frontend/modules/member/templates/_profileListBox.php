<?php
/*
$culture = sfCultureInfo::getInstance($sf_user->getCulture());

$list = array();

$list[__('%Nickname%')] = $member->getName();

if ($member->getAge(true))
{
  $ageValue = __('%1% years old', array('%1%' => $member->getAge()));
  if ($member->getConfig('age_public_flag') == ProfileTable::PUBLIC_FLAG_FRIEND)
  {
    $ageValue .= ' ('.__('Only Open to %my_friend%', array(
      '%my_friend%' => $op_term['my_friend']->titleize()->pluralize(),
    )).')';
  }

  $list[__('Age')] = $ageValue;
}

foreach ($member->getProfiles(true) as $profile)
{
  $caption = $profile->getProfile()->getCaption();
  if ($profile->getProfile()->isPreset())
  {
    $presetConfig = $profile->getProfile()->getPresetConfig();
    $caption = __($presetConfig['Caption']);
  }

  $profileValue = (string)$profile;
  if ('' === $profileValue)
  {
    continue;
  }

  if ('textarea' == $profile->getFormType())
  {
    $profileValue = op_auto_link_text(nl2br($profileValue));
  }

  if ($profile->getProfile()->isPreset())
  {
    if ('country_select' === $profile->getFormType())
    {
      $profileValue = $culture->getCountry($profileValue);
    }
    elseif ('op_preset_birthday' === $profile->getName())
    {
      $profileValue = op_format_date($profileValue, 'XShortDateJa');
    }

    $profileValue = __($profileValue);
  }

  if ($member->getId() == $sf_user->getMemberId())
  {
    if ($profile->getPublicFlag() == ProfileTable::PUBLIC_FLAG_FRIEND)
    {
      $profileValue .= ' ('.__('Only Open to %my_friend%', array(
        '%my_friend%' => $op_term['my_friend']->titleize()->pluralize(),
      )).')';
    }
    elseif ($profile->getPublicFlag() == ProfileTable::PUBLIC_FLAG_WEB && $profile->Profile->is_public_web)
    {
      $profileValue .= ' ('.__('All Users on the Web').')';
    }
  }
  $list[$caption] = $profileValue;
}
$options = array(
  'title' => __('Profile'),
  'list' => $list,
);
op_include_parts('listBox', 'profile', $options);*/

?>
<div class="message_main mt20"><h4 style="width:673px; background-image: url(/rokehan/web/assets/images/control/h4_tag.gif);" class="h4"><span class="h4_text">プロフィール入力フォーム</span></h4>

    <div class="message_gray_box pb10 mt10">
        <div class="pl10"><p>まずは下記フォームからプロフィールの登録をお願いいたします。<br><span class="red3">∗</span>は入力必須項目です。</p>

            <p class="question">にマウスを合わせて頂くと、項目の補助説明をご確認いただけます。</p></div>
    </div>
    <table width="677" border="0" class="form_table mt10">
        <tbody>
        <tr>
            <td width="23" class="td_blue"><a id="demo1Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td width="120" class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_hikoukai.png"
                                                          width="111" height="33" alt="非公開"></td>
            <td width="160" class="td_blue2"><span class="red3">∗</span>主な利用用途</td>
            <td class="td_gray">
                <form id="form1" name="form1" method="post" action="#"><label><input type="radio" name="RadioGroup1"
                                                                                     value="ボロワー（借り手）"
                                                                                     id="RadioGroup1_0">
                    ボロワー（借り手）</label> <label><input type="radio" name="RadioGroup1" value="レンダー（貸し手）"
                                                    id="RadioGroup1_1"> レンダー（貸し手）</label></form>
            </td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo2Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>お名前</td>
            <td class="td_gray"><input name="" type="text" class="form_text1" value="例）東京　太郎" onfocus="cText(this)"
                                       onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo3Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>フリガナ</td>
            <td class="td_gray"><input name="" type="text" class="form_text1" value="例）トウキョウ　タロウ" onfocus="cText(this)"
                                       onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo4Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2">郵便番号</td>
            <td class="td_gray"><input name="" type="text" class="form_text2"
                                       onkeyup="AjaxZip2.zip2addr(this,'address0','address1');" value="例）1231567"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"><span class="pl10">※ハイフン不要</span>
            </td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo5Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>都道府県</td>
            <td class="td_gray"><select id="address0" name="address0">
                <option value="">選択して下さい</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo6Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>以下住所</td>
            <td class="td_gray"><input type="text" class="form_text3" id="address1" name="address1"
                                       value="例）目黒区緑が丘1-2-3　ABCビル101号室" onfocus="cText(this)" onblur="sText(this)"
                                       style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo7Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>電話番号</td>
            <td class="td_gray"><input name="" type="text" class="form_text1" value="例）03-1234-5678"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo8Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2">携帯電話番号</td>
            <td class="td_gray"><input name="" type="text" class="form_text1" value="例）090-1234-5678"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo9Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>メールアドレス</td>
            <td class="td_gray"><input name="" type="text" class="form_text1" value="例）info@s-share.net"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo10Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai2.png" width="111"
                                              height="33" alt="貸出しの際、相手にのみ公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>メールアドレス（確認）</td>
            <td class="td_gray"><input name="" type="text" class="form_text1" value="例）info@s-share.net"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo11Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>性別</td>
            <td class="td_gray">
                <form id="form1" name="form1" method="post" action="#"><label><input type="radio" name="RadioGroup2"
                                                                                     value="男性" id="RadioGroup2_0">
                    男性</label> <label><input type="radio" name="RadioGroup2" value="女性" id="RadioGroup2_1"> 女性</label>
                </form>
            </td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo12Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2"><span class="red3">∗</span>年齢</td>
            <td class="td_gray"><select name="年齢" id="年齢">
                <option value="">選択して下さい</option>
                <option value="20代前半"> 20代前半</option>
                <option value="20代後半"> 20代後半</option>
                <option value="30代前半"> 30代前半</option>
                <option value="30代後半"> 30代後半</option>
                <option value="40代前半"> 40代前半</option>
                <option value="40代後半"> 40代後半</option>
                <option value="50代前半"> 50代前半</option>
                <option value="50代後半"> 50代後半</option>
                <option value="60代以上"> 60代以上</option>
            </select></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo13Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2">趣味</td>
            <td class="td_gray"><textarea name="" cols="" rows="" class="form_area" value="例）映画鑑賞・音楽鑑賞"
                                          onfocus="cText(this)" onblur="sText(this)"
                                          style="color:#999">例）映画鑑賞・音楽鑑賞</textarea></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo14Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2">自己紹介</td>
            <td class="td_gray"><textarea class="form_area" value="ご自由にご記入ください" onfocus="cText(this)"
                                          onblur="sText(this)" style="color:#999">ご自由にご記入ください</textarea></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo15Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2"> twitter</td>
            <td class="td_gray"><input name="" type="text" class="form_text3" value="twitterのURLをご記入ください"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo16Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2"> facebook</td>
            <td class="td_gray"><input name="" type="text" class="form_text3" value="facebookのURLをご記入ください"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo17Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2"> blog</td>
            <td class="td_gray"><input name="" type="text" class="form_text3" value="blogのURLをご記入ください"
                                       onfocus="cText(this)" onblur="sText(this)" style="color:#999"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo18Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_hikoukai.png" width="111"
                                              height="33" alt="非公開"></td>
            <td class="td_blue2">本人確認書類</td>
            <td class="td_gray"><input name="" type="file"></td>
        </tr>
        <tr>
            <td class="td_blue"><a id="demo19Btn" class="" href="#?moptip" style="cursor: default; "><img
                    src="/rokehan/web/assets/images/control/question.png" width="16" height="16" alt="question"></a></td>
            <td class="form_tag td_blue"><img src="/rokehan/web/assets/images/control/form_tag_koukai.png" width="111" height="33"
                                              alt="公開"></td>
            <td class="td_blue2">プロフィール画像</td>
            <td class="td_gray"><input name="" type="file"></td>
        </tr>
        </tbody>
    </table>
    <div class="soushin_btn mt20"><input type="image" src="/rokehan/web/assets/images/control/message_soushin.jpg" name=""
                                         alt="送信する"></div>
    <div class="hidden">
        <div id="demo1">主な利用用途を選択してください。<br>いずれを選択頂いても、ボロワー、レンダー両方でサイトをご利用頂けます。</div>
        <div id="demo2">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開されます。<br>それまでは、公開されません。</div>
        <div id="demo3">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開されます。<br>それまでは、公開されません。</div>
        <div id="demo4">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開されます。<br>それまでは、公開されません。</div>
        <div id="demo5">お住まい、又は本拠地の都道府県を選択してください。</div>
        <div id="demo6">お住まい、又は本拠地のご住所を入力してください。ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開されます。<br>それまでは、公開されません。</div>
        <div id="demo7">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開され、貸し借りを行なう際の連絡先になります。<br>それまでは、公開されません。<br>固定電話がない場合は、こちらに携帯番号を入力してください。
        </div>
        <div id="demo8">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開され、貸し借りを行なう際の連絡先になります。<br>それまでは、公開されません。</div>
        <div id="demo9">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開され、貸し借りを行なう際の連絡メールアドレスになります。<br>それまでは、公開されません。</div>
        <div id="demo10">ボロワーの仮決済後、スペースを貸し出す際に相手にのみ公開され、貸し借りを行なう際の連絡メールアドレスになります。<br>それまでは、公開されません。</div>
        <div id="demo11">性別を選択してください。</div>
        <div id="demo12">年齢を選択してください。</div>
        <div id="demo13">相手があなたの人柄等を判断する重要な材料になります。</div>
        <div id="demo14">相手があなたの人柄等を判断する重要な材料になります。</div>
        <div id="demo15">相手があなたの人柄等を判断する重要な材料になります。</div>
        <div id="demo16">相手があなたの人柄等を判断する重要な材料になります。</div>
        <div id="demo17">相手があなたの人柄等を判断する重要な材料になります。</div>
        <div id="demo18">相手があなたの信用度を判断する重要な材料になります。<br>本人確認書類は、提出の「あり」「なし」のみ公開され、本人確認書類自体が公開されることはありません。</div>
        <div id="demo19">相手があなたの人柄・信用度を判断する重要な材料になります。</div>
    </div>
</div>