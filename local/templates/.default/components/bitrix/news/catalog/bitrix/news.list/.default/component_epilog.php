<?
if(isset($arResult["SECTION"]["PATH"][0]["NAME"])){
	$APPLICATION->SetTitle($arResult["SECTION"]["PATH"][0]["NAME"]);
}
$res = CIBlockSection::GetByID($arParams["PARENT_SECTION"]);
if($ar_res = $res->GetNext())
  $arResult["SECTION_IMAGE"] = CFile::getPath($ar_res['PICTURE']);
if(!empty($arResult["SECTION_IMAGE"])){
	$APPLICATION->AddViewContent("banner-image", "style='background-image:url(".$arResult["SECTION_IMAGE"].");'", 100);
}