<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$sect_id=Array();
$grouped_items=Array();
    foreach($arResult['ITEMS'] as $arItem)
    {
        if(in_array($arItem["IBLOCK_SECTION_ID"], $sect_id))
        {
           array_push($grouped_items[$arItem["IBLOCK_SECTION_ID"]],$arItem);
        }
        else
        {
            array_push($sect_id,$arItem["IBLOCK_SECTION_ID"]);
            $grouped_items[$arItem["IBLOCK_SECTION_ID"]]=Array();
            array_push($grouped_items[$arItem["IBLOCK_SECTION_ID"]],$arItem);
            
        }
    }
    $arResult["ITEMS"]=$grouped_items;
?>