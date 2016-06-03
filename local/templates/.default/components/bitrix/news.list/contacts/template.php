<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    /** @var array $arParams */
    /** @var array $arResult */
    /** @global CMain $APPLICATION */
    /** @global CUser $USER */
    /** @global CDatabase $DB */
    /** @var CBitrixComponentTemplate $this */
    /** @var string $templateName */
    /** @var string $templateFile */
    /** @var string $templateFolder */
    /** @var string $componentPath */
    /** @var CBitrixComponent $component */
    $this->setFrameMode(true);
?>
<div class="adres">
<?
    foreach($arResult['ITEMS']['7'] as $arItem)
    {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
        
        <p class="littleTitle" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?=$arItem["NAME"];?></p>
        <p class="text"><?=htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?></p>
        <?
    }
?>
</div>
<div class="phone">
<?
    foreach($arResult['ITEMS']['10'] as $arItem)
    {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
        
        <p class="littleTitle" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?=$arItem["NAME"];?></p>
        <p class="text"><?=htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?></p>
        <?
    }
?>
</div>
<p class="recvisits">Реквизиты</p>
<ul>
<?
    foreach($arResult['ITEMS']['8'] as $arItem)
    {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
        <li id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?=$arItem["NAME"];?><span><?=htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?></span></li>
        <?
    }
?>
</ul>
<?
    foreach($arResult['ITEMS']['9'] as $arItem)
    {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
        <p class="wayTitle" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?=$arItem["NAME"];?></p>
        <p class="wayText"><?=htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?></p>
        <?
    }
?>
            

                