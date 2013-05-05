<?php
return array (
  'loginForm' => 
  array (
    'caption' => 
    array (
      'ja_JP' => 'ログインフォーム',
    ),
    'description' => 
    array (
      'ja_JP' => 'ログイン用のフォームを設置できます。利用可能なすべての認証モード用のログインフォームがすべて含まれています。',
    ),
    'viewable_privilege' => 4,
    'component' => 
    array (
      0 => 'default',
      1 => 'loginFormBox',
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
        'Default' => 4,
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
    'viewable_privilege' => 4,
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
        'Default' => 4,
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
    'viewable_privilege' => 4,
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
        'Default' => 4,
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
    'viewable_privilege' => 4,
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
        'Default' => 4,
        'Choices' => 
        array (
          4 => 'All Users on the Web',
          1 => 'All Members',
        ),
      ),
    ),
  ),
);