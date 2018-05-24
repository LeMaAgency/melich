<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/articles/([^/]+)/?(?:\\?(.*))?$#',
    'RULE' => 'CODE=$1&$2',
    'ID' => '',
    'PATH' => '/articles/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
);
