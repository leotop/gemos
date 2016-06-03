<?
    $new_result=Array();
    foreach($arResult['ITEMS'] as $arItem)
    {
        $new_result[$arItem['CODE']]=$arItem;
    }
    $arResult['ITEMS']=$new_result;
?>