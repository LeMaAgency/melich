<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/articles/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/articles/detail.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/catalog/index.php",
	),
);

?>