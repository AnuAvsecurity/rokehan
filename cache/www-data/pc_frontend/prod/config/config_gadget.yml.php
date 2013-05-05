<?php
return array (
  'informationBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'インフォメーションボックス',
    ),
    'description' => 
    array (
      'ja_JP' => 'ホーム画面にお知らせなどの通知が可能なインフォメーションボックスを設置できます。',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'informationBox',
    ),
    'config' => 
    array (
      'value' => 
      array (
        'Name' => 'value',
        'Caption' => '内容',
        'FormType' => 'rich_textarea',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'freeArea' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'フリーエリア',
    ),
    'description' => 
    array (
      'ja_JP' => 'フリーエリアを設置できます',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'freeAreaBox',
    ),
    'config' => 
    array (
      'title' => 
      array (
        'Name' => 'title',
        'Caption' => 'タイトル',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'value' => 
      array (
        'Name' => 'value',
        'Caption' => '内容',
        'FormType' => 'rich_textarea',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'memberImageBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'プロフィール写真',
    ),
    'description' => 
    array (
      'ja_JP' => 'メンバーの登録した写真をホームに表示します',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'memberImageBox',
    ),
    'config' => 
    array (
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'friendListBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'フレンドリスト',
    ),
    'description' => 
    array (
      'ja_JP' => 'メンバーのフレンドリストを表示します',
    ),
    'component' => 
    array (
      0 => 'friend',
      1 => 'friendListBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '表示する行',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
      'col' => 
      array (
        'Name' => 'col',
        'Caption' => '表示する列',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
      'type' => 
      array (
        'Name' => 'type',
        'Caption' => '表示タイプ',
        'FormType' => 'radio',
        'ValueType' => 'text',
        'IsRequired' => true,
        'Default' => 'full',
        'Choices' => 
        array (
          'full' => '画像と名前の両方を表示',
          'only_image' => '画像のみ表示',
          'only_name' => '名前のみ表示',
        ),
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'communityJoinListBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => '参加コミュニティリスト',
    ),
    'description' => 
    array (
      'ja_JP' => 'メンバーが参加しているコミュニティのリストを表示します',
    ),
    'component' => 
    array (
      0 => 'community',
      1 => 'joinListBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '表示する行',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
      'col' => 
      array (
        'Name' => 'col',
        'Caption' => '表示する列',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 3,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
        ),
      ),
      'type' => 
      array (
        'Name' => 'type',
        'Caption' => '表示タイプ',
        'FormType' => 'radio',
        'ValueType' => 'text',
        'IsRequired' => true,
        'Default' => 'full',
        'Choices' => 
        array (
          'full' => '画像と名前の両方を表示',
          'only_image' => '画像のみ表示',
          'only_name' => '名前のみ表示',
        ),
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'searchBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => '検索ボックス',
    ),
    'description' => 
    array (
      'ja_JP' => '検索用のフォームを表示します',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'searchBox',
    ),
    'config' => 
    array (
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'rssBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'RSS リーダー',
    ),
    'description' => 
    array (
      'ja_JP' => '指定された URL の RSS フィードを表示します',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'rssBox',
    ),
    'config' => 
    array (
      'title' => 
      array (
        'Name' => 'title',
        'Caption' => 'タイトル',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url' => 
      array (
        'Name' => 'url',
        'Caption' => 'URL',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'linkListBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'リンク集',
    ),
    'description' => 
    array (
      'ja_JP' => '指定されたリンクのリストを表示します',
    ),
    'component' => 
    array (
      0 => 'default',
      1 => 'linkListBox',
    ),
    'config' => 
    array (
      'title' => 
      array (
        'Name' => 'title',
        'Caption' => 'タイトル',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url1' => 
      array (
        'Name' => 'url1',
        'Caption' => 'URL1',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text1' => 
      array (
        'Name' => 'text1',
        'Caption' => 'リンクテキスト1',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url2' => 
      array (
        'Name' => 'url2',
        'Caption' => 'URL2',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text2' => 
      array (
        'Name' => 'text2',
        'Caption' => 'リンクテキスト2',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url3' => 
      array (
        'Name' => 'url3',
        'Caption' => 'URL3',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text3' => 
      array (
        'Name' => 'text3',
        'Caption' => 'リンクテキスト3',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url4' => 
      array (
        'Name' => 'url4',
        'Caption' => 'URL4',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text4' => 
      array (
        'Name' => 'text4',
        'Caption' => 'リンクテキスト4',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url5' => 
      array (
        'Name' => 'url5',
        'Caption' => 'URL5',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text5' => 
      array (
        'Name' => 'text5',
        'Caption' => 'リンクテキスト5',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url6' => 
      array (
        'Name' => 'url6',
        'Caption' => 'URL6',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text6' => 
      array (
        'Name' => 'text6',
        'Caption' => 'リンクテキスト6',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url7' => 
      array (
        'Name' => 'url7',
        'Caption' => 'URL7',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text7' => 
      array (
        'Name' => 'text7',
        'Caption' => 'リンクテキスト7',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url8' => 
      array (
        'Name' => 'url8',
        'Caption' => 'URL8',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text8' => 
      array (
        'Name' => 'text8',
        'Caption' => 'リンクテキスト8',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url9' => 
      array (
        'Name' => 'url9',
        'Caption' => 'URL9',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text9' => 
      array (
        'Name' => 'text9',
        'Caption' => 'リンクテキスト9',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'url10' => 
      array (
        'Name' => 'url10',
        'Caption' => 'URL10',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'text10' => 
      array (
        'Name' => 'text10',
        'Caption' => 'リンクテキスト10',
        'FormType' => 'input',
        'ValueType' => 'text',
        'IsRequired' => false,
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'activityBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'アクティビティ',
    ),
    'description' => 
    array (
      'ja_JP' => '利用者本人とそのフレンドのSNS上での活動記録を表示します',
    ),
    'component' => 
    array (
      0 => 'friend',
      1 => 'activityBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '表示する行',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 5,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
          7 => 7,
          8 => 8,
          9 => 9,
          10 => 10,
        ),
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'allMemberActivityBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => '全員のアクティビティ',
    ),
    'description' => 
    array (
      'ja_JP' => 'SNSメンバー全員のSNS上での活動記録を表示します',
    ),
    'component' => 
    array (
      0 => 'member',
      1 => 'allMemberActivityBox',
    ),
    'config' => 
    array (
      'row' => 
      array (
        'Name' => 'row',
        'Caption' => '表示する行',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 5,
        'Choices' => 
        array (
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
          7 => 7,
          8 => 8,
          9 => 9,
          10 => 10,
        ),
      ),
      'is_viewable_activity_form' => 
      array (
        'Name' => 'is_viewable_activity_form',
        'Caption' => '投稿フォームを表示',
        'FormType' => 'radio',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          0 => 'No',
          1 => 'Yes',
        ),
      ),
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
  'birthdayBox' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'バースデイボックス',
    ),
    'description' => 
    array (
      'ja_JP' => 'バースデイ通知ボックスを設置できます。',
    ),
    'component' => 
    array (
      0 => 'member',
      1 => 'birthdayBox',
    ),
    'config' => 
    array (
      'viewable_privilege' => 
      array (
        'Name' => 'viewable_privilege',
        'Caption' => '公開範囲',
        'FormType' => 'select',
        'ValueType' => 'int',
        'IsRequired' => true,
        'Default' => 1,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
);