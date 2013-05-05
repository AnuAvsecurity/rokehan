<?php
sfConfig::add(array('openpne_sns_config' => array(
'sns_name' => array (
  'Name' => 'sns_name',
  'Caption' => 'SNS名',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => 'MySNS',
  'IsRequired' => true,
),
'sns_title' => array (
  'Name' => 'sns_title',
  'Caption' => 'ページタイトル',
  'Help' => 'HTML の title 要素の内容になります',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => '',
  'IsRequired' => false,
),
'admin_mail_address' => array (
  'Name' => 'admin_mail_address',
  'Caption' => '管理者メールアドレス',
  'FormType' => 'input',
  'ValueType' => 'email',
  'Default' => 'sns@example.com',
  'IsRequired' => true,
  'IsTrim' => true,
),
'enable_pc' => array (
  'Name' => 'enable_pc',
  'Caption' => 'PC版使用設定',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'IsTrim' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'enable_mobile' => array (
  'Name' => 'enable_mobile',
  'Caption' => '携帯版使用設定',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'IsTrim' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'enable_friend_link' => array (
  'Name' => 'enable_friend_link',
  'Caption' => 'フレンド申請使用設定',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'image_max_filesize' => array (
  'Name' => 'image_max_filesize',
  'Caption' => 'アップロード画像のファイルサイズ制限(bytes)',
  'FormType' => 'input',
  'ValueType' => 'regexp',
  'ValueRegexp' => '/^[1-9]\\d*[K|M]?$/',
  'IsRequired' => true,
  'IsTrim' => true,
  'Default' => '300K',
),
'is_use_captcha' => array (
  'Name' => 'is_use_captcha',
  'Caption' => 'CAPTCHA 使用設定',
  'Help' => 'CAPTCHA (画像のなかの文字列をメンバーに入力させる認証方式) を使用するかどうかを設定します',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'nickname_of_member_who_does_not_have_credentials' => array (
  'Name' => 'nickname_of_member_who_does_not_have_credentials',
  'Caption' => '非SNSユーザー表示名設定',
  'Help' => '非SNSユーザー（退会したユーザーなど）の表示名を設定します',
  'FormType' => 'text',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => '-',
),
'enable_language' => array (
  'Name' => 'enable_language',
  'Caption' => '言語とタイムゾーンの設定の使用設定',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 0,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'enable_connection' => array (
  'Name' => 'enable_connection',
  'Caption' => '外部サービスとの接続設定の使用設定',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 0,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'daily_news_day' => array (
  'Name' => 'daily_news_day',
  'Caption' => 'デイリーニュース受信頻度の設定',
  'Help' => '「毎日」「受信しない」以外の選択肢に設定したときの受信頻度を設定します',
  'FormType' => 'checkbox',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 
  array (
    0 => 0,
    1 => 3,
  ),
  'Choices' => 
  array (
    0 => 'Mon',
    1 => 'Tue',
    2 => 'Wed',
    3 => 'Thu',
    4 => 'Fri',
    5 => 'Sat',
    6 => 'Sun',
  ),
),
'is_allow_post_activity' => array (
  'Name' => 'is_allow_post_activity',
  'Caption' => 'アクティビティ投稿設定',
  'Help' => 'メンバーからのアクティビティ投稿の可否を設定します',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '許可しない',
    1 => '許可する',
  ),
),
'is_allow_config_public_flag_profile_page' => array (
  'Name' => 'is_allow_config_public_flag_profile_page',
  'Caption' => 'メンバーのプロフィールページ公開範囲設定',
  'Help' => 'メンバーがプロフィールページの公開範囲を変更できるようにするどうかを設定します',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => 'メンバーの設定を許可する',
    1 => 'メンバーの設定を許可しない（全員に公開）',
    4 => 'メンバーの設定を許可しない（Web全体に公開）',
  ),
),
'is_allow_web_public_flag_age' => array (
  'Name' => 'is_allow_web_public_flag_age',
  'Caption' => 'Web 全体への年齢公開許可設定',
  'Help' => 'メンバーが年齢を Web 全体に公開できるようにするかどうかを設定します',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 0,
  'Choices' => 
  array (
    0 => 'メンバーの設定を許可しない',
    1 => 'メンバーの設定を許可する',
  ),
),
'enable_jsonapi' => array (
  'Name' => 'enable_jsonapi',
  'Caption' => 'JSON API 使用設定',
  'Help' => 'JSON API を有効にするかを設定します。<br /><span style="color: #FF0000;">【警告】この設定をOFFにするとPC版やスマートフォン版の一部機能が利用できなくなります。設定には十分注意してください。</span>',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'enable_openid' => array (
  'Name' => 'enable_openid',
  'Caption' => 'OpenID Provider 使用設定',
  'FormType' => 'radio',
  'ValueType' => 'text',
  'IsRequired' => true,
  'Default' => 0,
  'Choices' => 
  array (
    0 => '使用しない',
    1 => '使用する',
  ),
),
'external_pc_login_url' => array (
  'Name' => 'external_pc_login_url',
  'Caption' => 'PC版外部ログインページURL',
  'Help' => 'PC版でログアウトした場合やログインに失敗した場合、ここで指定したURLに遷移します<br />※ここで指定するページにはログインフォームを置いておく必要があります<br />※通常のログインページを使用する場合は空欄にしておきます',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => '',
  'IsRequired' => false,
  'IsTrim' => true,
),
'external_mobile_login_url' => array (
  'Name' => 'external_mobile_login_url',
  'Caption' => '携帯版外部ログインページURL',
  'Help' => '携帯版でログアウトした場合やログインに失敗した場合、ここで指定したURLに遷移します<br />※ここで指定するページにはログインフォームを置いておく必要があります<br />※通常のログインページを使用する場合は空欄にしておきます',
  'FormType' => 'input',
  'ValueType' => 'text',
  'Default' => '',
  'IsRequired' => false,
  'IsTrim' => true,
),
'enable_registration' => array (
  'Name' => 'enable_registration',
  'Caption' => '登録の可否',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 3,
  'Choices' => 
  array (
    3 => 'PC・携帯両方から登録可',
    2 => 'PCからのみ登録可',
    1 => '携帯からのみ登録可',
    0 => '登録一時停止',
  ),
),
'retrieve_uid' => array (
  'Name' => 'retrieve_uid',
  'Caption' => 'メンバー登録時の携帯個体識別番号取得設定',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    3 => 'PC・携帯登録時に携帯個体識別番号の登録を必須にする',
    2 => '携帯登録時に携帯個体識別番号の登録を必須にする',
    1 => '携帯登録時に携帯個体識別番号を取得する（任意）',
    0 => '携帯登録時には携帯個体識別番号を取得しない',
  ),
),
'font_size' => array (
  'Name' => 'font_size',
  'Caption' => '携帯版フォントサイズ指定設定',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 0,
  'Choices' => 
  array (
    1 => 'フォントサイズを指定する',
    0 => 'フォントサイズを指定しない',
  ),
),
'is_check_mobile_ip' => array (
  'Name' => 'is_check_mobile_ip',
  'Caption' => '携帯電話のIP帯域設定',
  'FormType' => 'radio',
  'ValueType' => 'integer',
  'IsRequired' => true,
  'Default' => 1,
  'Choices' => 
  array (
    1 => '携帯電話のIP帯域をチェックする',
    0 => '携帯電話のIP帯域をチェックしない',
  ),
),
'mobile_image_max_size' => array (
  'Name' => 'mobile_image_max_size',
  'Caption' => '画像の最大サイズ設定',
  'Help' => '許可されている画像サイズを"横x縦"で指定してください。<br />(空欄の場合フルサイズになります)',
  'FormType' => 'image_size',
  'ValueType' => 'image_size',
  'IsRequired' => false,
  'Default' => '320x320',
),
'user_agreement' => array (
  'Name' => 'user_agreement',
  'Caption' => '利用規約',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => true,
  'Default' => '利用規約はただいま準備中です。
The User Agreement is under construction.',
),
'privacy_policy' => array (
  'Name' => 'privacy_policy',
  'Caption' => 'プライバシーポリシー',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => true,
  'Default' => 'プライバシーポリシーはただいま準備中です。
The Privacy Policy is under construction.',
),
'footer_before' => array (
  'Name' => 'footer_before',
  'Caption' => 'ログイン前フッター',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => 'Powered by <a href="http://www.openpne.jp/" target="_blank">OpenPNE</a>',
),
'footer_after' => array (
  'Name' => 'footer_after',
  'Caption' => 'ログイン後フッター',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsRequired' => false,
  'Default' => 'Powered by <a href="http://www.openpne.jp/" target="_blank">OpenPNE</a>',
),
'google_maps_api_key' => array (
  'Name' => 'google maps api key',
  'Caption' => 'google maps api key',
  'FormType' => 'text',
  'ValueType' => 'string',
  'IsRequired' => false,
  'IsTrim' => true,
  'Default' => '',
),
'google_AJAX_search_api_key' => array (
  'Name' => 'google AJAX search api key',
  'Caption' => 'google AJAX search api key',
  'FormType' => 'text',
  'ValueType' => 'string',
  'IsRequired' => false,
  'IsTrim' => true,
  'Default' => '',
),
),
));
sfConfig::add(array('openpne_sns_category' => array(
'general' => array(
'sns_name',
'sns_title',
'admin_mail_address',
'enable_pc',
'enable_mobile',
'enable_friend_link',
'image_max_filesize',
'is_use_captcha',
'nickname_of_member_who_does_not_have_credentials',
'enable_language',
'enable_connection',
),
'advanced' => array(
'daily_news_day',
'is_allow_post_activity',
'is_allow_config_public_flag_profile_page',
'is_allow_web_public_flag_age',
'enable_jsonapi',
'enable_openid',
),
'external_login_page' => array(
'external_pc_login_url',
'external_mobile_login_url',
),
'authentication' => array(
'enable_registration',
),
'mobile' => array(
'retrieve_uid',
'font_size',
'is_check_mobile_ip',
'mobile_image_max_size',
),
'policy' => array(
'user_agreement',
'privacy_policy',
),
'footer' => array(
'footer_before',
'footer_after',
),
'api_keys' => array(
'google_maps_api_key',
'google_AJAX_search_api_key',
),
),
));
sfConfig::add(array('openpne_sns_category_attribute' => array(
'general' => array (
  'Caption' => 'General Configuration',
),
'advanced' => array (
  'Caption' => 'Advanced Settings',
  'Advanced' => true,
),
'external_login_page' => array (
  'Caption' => 'External Login Page Configuration',
),
'authentication' => array (
  'Caption' => 'Authentication Configuration',
),
'mobile' => array (
  'Caption' => 'Mobile Configuration',
  'Advanced' => true,
),
'policy' => array (
  'Caption' => 'Site Policy Configuration',
),
'footer' => array (
  'Hidden' => true,
),
'api_keys' => array (
  'Caption' => 'API キーの設定',
  'Advanced' => true,
),
),
));