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
?>
<div class="furWrap">
    <div class="mainWrap">
        <div class="imgCont">
            <?if(empty($arResult['PICTURE']['SRC'])) { ;}
                else {?>  <img src="<?=$arResult['PICTURE']['SRC'];?>">
                <?}?>
        </div>  
        <div class="textCont">
            <img src="/images/phone.png" class="imgPhone">
            <p class="title"><?=$arResult['SECTION']['NAME'];?></p> 
            <p class="text"><?=$arResult['SECTION']['DESCRIPTION'];?></p>
            <table>
                <tr>
                    <th class="num firstRow">№</th>
                    <th class="prod firstRow">Наименование</th>
                    <th class="links firstRow"></th>
                </tr>
                <?
                    foreach ($arResult['ITEMS'] as $arItem)
                    {
                        $i+=1;
                    ?>
                    <tr>
                        <td class="num"><?=$i;?></td>
                        <td class="prod"><?=$arItem["NAME"]?></td>
                        <td class="links"><a href="<?=$arItem['DETAIL_PAGE_URL']?>">подробнее</a></td>
                    </tr>


                    <?
                    }
                ?>
            </table>
            <p class="text"><?$arResult['SECTION']['UF_TITLE'];?></p>
            <p class="littleTitle"><span class="red">Внимание</span></p>
            <p class="text"><span class="red"><?=$arResult['SECTION']['UF_ATTENTION'];?></span></p>
        </div> 
    </div>

    <div class="informWrap">
        <p class="title">Информация</p> 
        <ul>
            <?                     foreach ($arResult['SECTION']['UF_INFO'] as $info)
                {
                    echo "<li>".$info."</li>";
                }
            ?>
        </ul>  
    </div>
    <?$APPLICATION->ShowViewContent('contacts_section');?>
    <div class="comlexWrap">
        <p class="title">Комплектующие</p>

        <?
            foreach ($arResult['ITEMS'] as $arItem)
            {?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem["NAME"]?></a>
            <?}?>
    </div>
    </div>