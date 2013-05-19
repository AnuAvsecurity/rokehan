<!--
<div style="padding-top:20px;" class="navbar">
    <div style="padding-top:10px; padding-bottom:5px;" class="navbar-inner">

        <div class="container">
            <div>
                <?php if ($navs): ?>
                    <ul class="<?php echo $type; ?> nav">
                        <?php foreach ($navs as $nav): ?>

                            <?php if (isset($navId)): ?>
                                <?php $uri = $nav->uri.'?id='.$navId; ?>
                            <?php else: ?>
                                <?php $uri = $nav->uri; ?>
                            <?php endif; ?>

                            <?php if (op_is_accessible_url($uri)): ?>
                                <li id="<?php echo $nav->type ?>_<?php echo op_url_to_id($nav->uri) ?>"><?php echo link_to($nav->caption, $uri); ?></li>
                            <?php endif; ?>

                        <?php endforeach; ?>
                         <?php if($culture == 'en'): ?>
                            <li><?php echo link_to('Invite', '@member_invite') ?></li>
                            <li><?php echo link_to('Settings', '@member_config') ?></li>
                            <li><?php echo link_to('Search Members', '@member_search') ?></li>
                            <li><?php echo link_to('Search Communities', '@community_search') ?></li>
                            <li><?php echo link_to('Logout', '@member_logout') ?></li>
                         <?php else: ?>
                            <li><?php echo link_to('友人を招待する', '@member_invite') ?></li>
                            <li><?php echo link_to('設定変更', '@member_config') ?></li>
                            <li><?php echo link_to('メンバー検索', '@member_search') ?></li>
                            <li><?php echo link_to('コミュニティ検索', '@community_search') ?></li>
                            <li><?php echo link_to('ログアウト', '@member_logout') ?></li>
                         <?php endif; ?>

                    </ul>
                <?php endif; ?>
            </div>

        </div>

    </div>

</div>
  -->
    <?php  $server_info = explode('/', $_SERVER["REQUEST_URI"]);?>
    <?php

      if (in_array('profile', $server_info)):
          $img_1 = '<img src="/rokehan/web/assets/images/control/control_navi2.gif" width="187" height="45" alt="プロフィール" />';
      else:
          $img_1 = '<img src="/rokehan/web/assets/images/control/control_navi2_bg.gif" width="187" height="45" alt="プロフィール" />';
      endif;
      if(in_array('messages', $server_info)):
            $img_2 = '<img src="/rokehan/web/assets/images/control/control_navi3.gif" width="187" height="45" alt="メッセージ" />';
      else:
          $img_2 = '<img src="/rokehan/web/assets/images/control/control_navi3_bg.gif" width="187" height="45" alt="メッセージ" />';
      endif;
      if($server_info[3]== ''):
          $img_3 = ' <img src="/rokehan/web/assets/images/control/control_navi1.gif" width="187" height="45" alt="プロフィール" />';
      else:
          $img_3 = '<img src="/rokehan/web/assets/images/control/control_navi1_bg.gif" width="187" height="45" alt="プロフィール" />';
      endif;
     ?>

   <ul class="mypage_navi">
          <li><a href="/rokehan/web/"><?php echo $img_3; ?></a></li>
          <li><a href=" /rokehan/web/member/profile"><?php echo $img_1; ?></a></li>
          <li><a href=" /rokehan/web/messages"><?php echo $img_2; ?></a></li>
          <li><a href=""><img src="/rokehan/web/assets/images/control/control_navi4_bg.gif" width="187" height="45" alt="レンダー（貸し手）ページ" /></a></li>
          <li><a href=""><img src="/rokehan/web/assets/images/control/control_navi5_bg.gif" width="189" height="45" alt="ボロワー貸し手ページ" /></a></li>
        </ul>

