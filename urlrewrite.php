<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
    array(
        'CONDITION' => '#^/articles/([^/]+)/?(?:\\?(.*))?$#',
        'RULE' => 'CODE=$1&$2',
        'ID' => '',
        'PATH' => '/articles/detail.php',
    ),
);

?>