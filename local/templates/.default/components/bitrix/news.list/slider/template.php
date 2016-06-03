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
<div class="mainSlide">
    <ul class="slides slides-list">
        <?$arItem=$arResult['ITEMS'][count($arResult['ELEMENTS'])-1];?>
        <li class="slide">
            <div class="<?=$arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'];?>">
                <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"> 
                <?if(empty($arItem['PROPERTIES']['LINK']['VALUE'])):?><a href="#"><?else:?><a href="<?=$arItem['PROPERTIES']['LINK']['VALUE'];?>"><? endif;?>
                    <h1>
                        <?if($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]);?>
                        <span class="head_text"> <?if($arItem["NAME"])echo htmlspecialcharsBack($arItem["NAME"]);?></span>
                        <p><?if($arItem["PROPERTIES"]["OPT_DESCRIPTION"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["OPT_DESCRIPTION"]["VALUE"]["TEXT"]);?></p>  
                    </h1>
                </a>
            </div>
        </li>    
        <?
            foreach($arResult['ITEMS'] as $arItem)
            {
            ?>   
            <li class="slide">
                <div class="<?=$arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'];?>">
                    <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"> 
                    <?if(empty($arItem['PROPERTIES']['LINK']['VALUE'])):?><a href="#"><?else:?><a href="<?=$arItem['PROPERTIES']['LINK']['VALUE'];?>"><? endif;?>
                        <h1>
                            <?if($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]);?>
                            <span class="head_text"> <?if($arItem["NAME"])echo htmlspecialcharsBack($arItem["NAME"]);?></span>
                            <p><?if($arItem["PROPERTIES"]["OPT_DESCRIPTION"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["OPT_DESCRIPTION"]["VALUE"]["TEXT"]);?></p>  
                        </h1>
                    </a>
                </div>
            </li>   
            <?
            }
        ?>
        <?$arItem=$arResult['ITEMS'][0];?>     
        <li class="slide">
            <div class="<?=$arItem['PROPERTIES']['TYPE']['VALUE_XML_ID'];?>">
                <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"> 
                <?if(empty($arItem['PROPERTIES']['LINK']['VALUE'])):?><a href="#"><?else:?><a href="<?=$arItem['PROPERTIES']['LINK']['VALUE'];?>"><? endif;?>
                    <h1>
                        <?if($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]);?>
                        <span class="head_text"> <?if($arItem["NAME"])echo htmlspecialcharsBack($arItem["NAME"]);?></span>
                        <p><?if($arItem["PROPERTIES"]["OPT_DESCRIPTION"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["OPT_DESCRIPTION"]["VALUE"]["TEXT"]);?></p>  
                    </h1>
                </a>
            </div>
        </li>     
    </ul>
</div>

            

       