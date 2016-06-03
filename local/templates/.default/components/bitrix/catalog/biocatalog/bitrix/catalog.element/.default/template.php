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

        <p class="prefers">Преимущества</p>
        <div class="benefit"> 
            <?foreach($arResult["PROPERTIES"]["PREFERS"]["VALUE"] as $prefer){?>
                <div><div class="list"><?=$prefer;?></div></div> 
                <?}?> 
        </div>
    </div>
</div>
<!--
<div class="wrappProduct2">
    <p class="infoTitle">Информация</p>
    <ul class="infoMenu">
        <?
        /*    $areas=Array("TARGET","AREA","FEATURES","ADVANTAGES","DOC");
            foreach($areas as $area){
                if(!empty($arResult["PROPERTIES"][$area]["VALUE"])){?> <li data-id='<?=$i+=1;?>'><?=$arResult["PROPERTIES"][$area]["NAME"];?></li>  <?}
            }
      */  ?>
    </ul> 
</div>   -->
<div class="wrappProduct21">    
    <div class="bigLine"></div>
    <?  $i=0;
        foreach($areas as $area){
            if(!empty($arResult["PROPERTIES"][$area]["VALUE"])){?>
            <div class="sec<?=$i+=1;?>">
                <p class="sectionTitle"><?=$arResult["PROPERTIES"][$area]["NAME"];?></p>
                <ul>
                    <?foreach($arResult["PROPERTIES"][$area]["VALUE"] as $value) echo "<li>".$value."</li>";?>
                </ul> 
                <? if($area==="AREA"){      ?>
                    <p class="sectionTitles"><?=$arResult["PROPERTIES"]["CONDITIONS"]["NAME"];?></p>
                    <ul>
                        <?foreach($arResult["PROPERTIES"]["CONDITIONS"]["VALUE"] as $value) echo "<li>".$value."</li>";?>
                    </ul>
                    <? }?> 
            </div> 
            <? }
    }  ?>
</div>
<?$APPLICATION->ShowViewContent('contacts_element');?>
<div class="wrappProduct4">
    <p class="buyInfoTitle"><?=$arResult['PROPERTIES']['RELATED_TITLE']['VALUE'];?></p>  
    <ul>
        <? foreach($arResult['PROPERTIES']['RELATED']['VALUE'] as $item)  {
            ?><li><a href="<?=$item['DETAIL_PAGE_URL'];?>"><?=$item['NAME'];?></a></li><?
        }?>
    </ul> 
    </div>