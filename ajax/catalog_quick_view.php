<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
global $APPLICATION;

if(!empty($_POST['COAT_ID']))
{
//    $lol = preg_match('/[^\d]+/', $_POST['COAT_ID']);
    $coat = null;
    if(CModule::IncludeModule("iblock"))
    {
        $arOrder = Array();
        $arSelect = Array("ID", "NAME", "IBLOCK_ID","PROPERTY_MORE_PHOTOS","PROPERTY_ARTICUL","PROPERTY_TYPE_FUR","PROPERTY_SIZE","PROPERTY_COLOR","PROPERTY_COLOR_XML_ID","PROPERTY_OTDELKA","PROPERTY_VOROT");
        $arFilter = Array("IBLOCK_ID"=>9, "ACTIVE"=>"Y","ID"=>$_POST['COAT_ID']);
        $res = CIBlockElement::GetList($arOrder, $arFilter, false, false ,$arSelect);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            $arColors = $ob->GetProperty("6");
            $coat = $arFields;
            if(!empty($arColors['VALUE_XML_ID']))
            $coat['PROPERTY_COLOR_VALUE_XML_ID'] = $arColors['VALUE_XML_ID'];

        }
        foreach ($coat["PROPERTY_MORE_PHOTOS_VALUE"] as $key=>$value)
        {
            $coat["IMAGES"][] = CFile::getPath($value);
        }

    }
    echo json_encode($coat);
}
else
{
    die();
}