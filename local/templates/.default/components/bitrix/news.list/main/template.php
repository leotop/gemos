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
    //arshow($arResult);
?>      
<div class="wrappInfo">
    <div id="section_wrap_1_detail">
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
            foreach($arResult['ITEMS'] as $arItem)
            {
                $i+=1;
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                if($i===($arParams["NEWS_COUNT"]))
                {
                ?>
                <div class="text_block_quality">
                    <p class="titles last" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <?if($arItem["NAME"]) echo $arItem["NAME"];?>
                    </p>
                    <p class="text lastt">
                        <?if($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"])echo htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT"]["VALUE"]["TEXT"]);?>
                    </p>
                </div>
                <?
                    break;
                }
                else
                {
                ?>
                <div class="text_block_quality">
                    <p class="titles" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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
    </div>
</div>