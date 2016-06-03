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
<section>
    <div class="section_wrap_4">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                    "AREA_FILE_SHOW" => "file",    
                    "PATH" => SITE_DIR."include/advantages_title.php",    
                    "COMPONENT_TEMPLATE" => "",
                    "EDIT_TEMPLATE" => "",    
                    ),
                    false
                );    ?>
        <?
            foreach($arResult['ITEMS'] as $arItem)
            {
                $i+=1;
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                if($i===($arParams["NEWS_COUNT"]))
                {
                ?>
                <div class="text_block_advantages">
                    <?  if($arParams['DISPLAY_PICTURE']=='Y')  echo '<img src="'.$arItem["PREVIEW_PICTURE"]["SRC"].'" class="elips"></img>';?>
                    <p class="title" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <?if($arItem["NAME"]) echo $arItem["NAME"];?>
                    </p>
                    <p class="text last">
                        <?if($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?>
                    </p>
                </div>
                <?
                    break;
                }
                else
                {
                ?>
                <div class="text_block_advantages">
                    <?  if($arParams['DISPLAY_PICTURE']=='Y')  echo '<img src="'.$arItem["PREVIEW_PICTURE"]["SRC"].'" class="elips"></img>';?>
                    <p class="title" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <?if($arItem["NAME"]) echo $arItem["NAME"];?>
                    </p>
                    <p class="text">
                        <?if($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?>
                    </p>
                </div>
                <?
                }
            }
        ?>
        <a href="/advantages" class="button_content">бяе опехлсыеярбю</a>
    </div>  
    </section>