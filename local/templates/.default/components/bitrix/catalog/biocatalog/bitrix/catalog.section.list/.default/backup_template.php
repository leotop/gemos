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
    //$this->setFrameMode(true);
    $strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
    $strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
    $arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="wrappProducts">
    <ul class="productList">
        <?
            //добавление ссылок на элеметы в корне подразделов
            function child_element($depth,$items)
            {
                if($depth===1) echo '<ul class="itemTypes">';
                foreach($items as $item)
                {
                ?>
                <li><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item['NAME'];?></a></li>
                <?
                }
                return 2;
            }
            //вывод элементов из корня в ul каталога
            function section_li($arSection,&$template)
            {
            ?>
            <li id="<?=$template->GetEditAreaId($arSection['ID']);?>">
            <div class="imgContainer">
                <?  if(empty($arSection['PICTURE']['SRC'])) { ;}
                    else {?><img src="<?=$arSection['PICTURE']['SRC'];?>">
                    <?}?>    
            </div>
            <div class="item non-click">
            <?if($arSection['RELATIVE_DEPTH_LEVEL']===1) 
                switch($arSection['RELATIVE_DEPTH_LEVEL']):
                case 1:
                ?><p class="itemName"><?=$arSection["NAME"];?></p> <?
                    break;
                case 2:
                ?><a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="itemName non-click"><p><?=$arSection["NAME"];?></p></a><?
                    break;
                    endswitch;
            ?>


            <p class="itemText"><?=$arSection["DESCRIPTION"]?></p>
            <?
                return;
            }
            if (0 < $arResult["SECTIONS_COUNT"])
            {  
                foreach ($arResult['FREE_ITEMS'] as &$arItem)
                {
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="imgContainer">
                        <?if(empty($arItem['PREVIEW_PICTURE']['src'])) { ;}
                            else {?><a class="catalog-sections" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']['src'];?>"></a>
                            <?}?>    
                    </div>
                    <div class="item">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="itemName"><p><?=$arItem["NAME"];?></p></a>
                        <p class="itemText"><?=$arItem["PREVIEW_TEXT"]?></p>
                    </div>
                </li>
                <?
                }

                $intCurrentDepth=1;
                $first=true;
                foreach ($arResult['SECTIONS'] as &$arSection)
                {  
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                    if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
                    {
                    ?>
                    <ul class="itemTypes">
                        <li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"];?></a></li>
                        <?
                        }
                        elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
                        {
                            if($first){
                                section_li($arSection,$this);
                                $first=false;
                                if(!empty($arResult['ITEMS'][$arSection['ID']])&&($arSection['RELATIVE_DEPTH_LEVEL']===1))  
                                {    
                                    $intCurrentDepth=child_element($intCurrentDepth,$arResult['ITEMS'][$arSection['ID']]);
                                    continue;
                                }

                            }
                            else
                            {
                                switch($intCurrentDepth):
                                case 1:
                                    echo "</div></li>";
                                    section_li($arSection,$this);
                                    if(!empty($arResult['ITEMS'][$arSection['ID']])&&($arSection['RELATIVE_DEPTH_LEVEL']===1)) 
                                    {    
                                        $intCurrentDepth=child_element($intCurrentDepth,$arResult['ITEMS'][$arSection['ID']]);
                                        continue;
                                    }
                                    break;
                                case 2:
                                ?><li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"];?></a></li><?
                                    break;
                                    endswitch;
                            }
                        }
                        elseif ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL']) 
                        {
                            echo "</ul></div></li>";
                            section_li($arSection,$this);
                            if(!empty($arResult['ITEMS'][$arSection['ID']])&&($arSection['RELATIVE_DEPTH_LEVEL']===1)) 
                            {    
                                $intCurrentDepth=child_element($arSection['RELATIVE_DEPTH_LEVEL'],$arResult['ITEMS'][$arSection['ID']]);
                                continue;
                            }
                        }
                        $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
                    }
                if($intCurrentDepth===2) ?></ul><?;
            ?>            
            <?
            }
        ?>
        </div></li><p class="products-discription">* - «НПП Биотех-М» снабжает расходными материалами все модели аппаратов серии «Гемос», выпущенные с 1995 г. по настоящее время.</p>
    </ul>
    </div>