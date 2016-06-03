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
    $strMainID = $this->GetEditAreaId($arResult['ID']);
?>
    <h1><?//=$arResult['NAME']?></h1>
    <div class="line"></div>
</div>
<div class="wrappProduct">
    <div class="imageConteiner">
        <?if(empty($arResult['DETAIL_PICTURE']['SRC'])) { ;}
            else {?>  <img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>">
            <?}?>
    </div>
    <div class="textContainer"> 
        <img src="/images/phone.png" class="imgPhone">       
        <p class="function"><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"];?></p>    
        <p class="text"><?=$arResult["DETAIL_TEXT"];?></p>

        <p class="prefers">������������</p>
        <p class="benefit">
            <?foreach($arResult["PROPERTIES"]["PREFERS"]["VALUE"] as $prefer){?>
                <span><?=$prefer;?></span>
                <?}?>
        </p>
    </div>
</div>