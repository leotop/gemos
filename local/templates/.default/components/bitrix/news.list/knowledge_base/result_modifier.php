<?
    foreach($arResult['ITEMS'] as $item)
    {
        if($item['IBLOCK_SECTION_ID']==17) $arResult['ITEMS']['DOCTOR'][]=$item;
        else $arResult['ITEMS']['PATIENT'][]=$item;
    }
?>