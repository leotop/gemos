<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div id="footer_menu">
        <nav>
            <ul class="top-menu top-menu-bottom">
                <?foreach($arResult as $arItem):?>

                    <?if ($arItem["PERMISSION"] > "D"):?>
                        <li><a href="<?=$arItem["LINK"]?>"><nobr><?=$arItem["TEXT"]?></nobr></a></li>
                        <?endif?>

                    <?endforeach?>
            </ul>
        </nav>
    </div>
    <div class="menu-clear-left"></div>
    <?endif?>