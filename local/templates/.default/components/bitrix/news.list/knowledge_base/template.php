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
<div id = "section_wrap_3">
    <div class="knowledge_base">
        <p class="title">База знаний</p>
        <p class="for1">ВРАЧУ</p>
        <p class="for2">ПАЦИЕНТУ</p>
        <div class="show_2">
            <?
                foreach($arResult['ITEMS']['PATIENT'] as $arItem)
                {
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    if($arItem["PREVIEW_TEXT"]) {?>
                    <div>
                        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?=$arItem["PREVIEW_TEXT"];?></a>
                    </div>
                    <div class="line"></div>
                    <?
                    }
                }
            ?>

        </div>
        <div class="show_1">
            <?
                foreach($arResult['ITEMS']['DOCTOR'] as $arItem)
                {
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    if($arItem["PREVIEW_TEXT"]) {?>
                    <div>
                        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?=$arItem["PREVIEW_TEXT"];?></a>
                    </div>
                    <div class="line"></div>
                    <? 
                    }
                }
            ?>
        </div>
    <!--    <a href="/knowledge_base" class="buttonContent">ВСЕ СТАТЬИ</a>  -->
    </div>
        </div>