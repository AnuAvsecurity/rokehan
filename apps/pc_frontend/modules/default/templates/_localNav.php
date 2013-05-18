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
     <?php  $host = $_SERVER["HTTP_HOST"]; ?>
     <ul class="mypage_navi">
          <li><a href="#"><img src="/rokehan/web/assets/images/control/control_navi1.gif" width="189" height="45" alt="マイページTOP" /></a></li>
          <li><a href=" /rokehan/web/member/profile"><img src="/rokehan/web/assets/images/control/control_navi2_bg.gif" width="187" height="45" alt="プロフィール" /></a></li>
          <li><a href=""><img src="/rokehan/web/assets/images/control/control_navi3_bg.gif" width="187" height="45" alt="メッセージ" /></a></li>
          <li><a href=""><img src="/rokehan/web/assets/images/control/control_navi4_bg.gif" width="187" height="45" alt="レンダー（貸し手）ページ" /></a></li>
          <li><a href=""><img src="/rokehan/web/assets/images/control/control_navi5_bg.gif" width="189" height="45" alt="ボロワー貸し手ページ" /></a></li>
        </ul>

