<?php
sfConfig::add(array('openpne_community_config' => array(
'public_flag' => array (
  'Name' => 'public_flag',
  'Caption' => 'Authority to See Community',
  'FormType' => 'radio',
  'ValueType' => 'string',
  'IsUnique' => false,
  'IsRequired' => true,
  'Default' => 'public',
  'Choices' => 
  array (
    'public' => 'Only SNS members can see',
    'open' => 'Everyone can see',
  ),
),
'register_policy' => array (
  'Name' => 'register_policy',
  'Caption' => 'Register policy',
  'FormType' => 'radio',
  'Default' => 'open',
  'Choices' => 
  array (
    'open' => 'Everyone can join',
    'close' => '%Community%\'s admin authorization needed',
  ),
  'IsUnique' => false,
  'IsRequired' => true,
),
'description' => array (
  'Name' => 'description',
  'Caption' => '%community% Description',
  'FormType' => 'textarea',
  'ValueType' => 'string',
  'IsUnique' => false,
  'IsRequired' => true,
),
),
));
sfConfig::add(array('openpne_community_category' => array(
'general' => array(
'public_flag',
'register_policy',
'description',
),
),
));
sfConfig::add(array('openpne_community_category_attribute' => array(
),
));