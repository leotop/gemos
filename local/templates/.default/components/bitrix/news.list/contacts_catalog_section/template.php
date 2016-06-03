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

    <p class="buyingText">Телефон <span><?=htmlspecialcharsBack($arResult['ITEMS']['phone']['PROPERTIES']['TEXT']['VALUE']['TEXT']);?></span></p>
    <p class="buyingText">E-mail <span><?=htmlspecialcharsBack($arResult['ITEMS']['email']['PROPERTIES']['TEXT']['VALUE']['TEXT']);?></span></p>  
    <p class="buyingText">Телефон/факс <span><?=htmlspecialcharsBack($arResult['ITEMS']['phone2']['PROPERTIES']['TEXT']['VALUE']['TEXT']);?></span></p>      
</div>