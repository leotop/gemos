<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" type="text/css">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/furnit.css" type="text/css">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slider_csszzz.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/styleGlide.css">
    <link rel="stylesheet" href="/color.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/valid/inputmask.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/valid/inputmask.extensions.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/valid/jquery.inputmask.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/js.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/map.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.glide.js"></script>

    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->ShowCSS();?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".mainSlide").glide({
                arrowRightText: '',
                arrowLeftText:  '',
                autoplay: 5000,
                startAt: 3,
                afterInit: function() {
                    SliderArrowPadding();
                }
            });
        })

    </script>
     <script type="text/javascript">
      //                  alert(screen.width) ;
        if (screen.width<=360) {
            $('head').append('<meta name="viewport" content="user-scalable=yes, initial-scale=0.3, maximum-scale=0.8, width=device-width">');
        } else if(screen.width<=415){
            $('head').append('<meta name="viewport" content="user-scalable=yes, initial-scale=0.5, maximum-scale=0.8, width=device-width">');
        } else if(screen.width<=960){
            $('head').append('<meta name="viewport" content="user-scalable=yes, initial-scale=0.8, maximum-scale=0.8, width=device-width">');
        } else if (screen.width<1024) {
            $('head').append('<meta name="viewport" content="user-scalable=yes, initial-scale=0.5, maximum-scale=0.8, width=device-width">');
        }
    </script>

</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<header>
    <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
            "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
            "MENU_CACHE_TYPE" => "Y",    // Тип кеширования
            "MENU_CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
            "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
            "MAX_LEVEL" => "1",    // Уровень вложенности меню
            "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
            "COMPONENT_TEMPLATE" => "blue_tabs",
            "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
            "DELAY" => "N",    // Откладывать выполнение шаблона меню
            ),
            false
        );?>


    <?$APPLICATION->IncludeComponent("bitrix:search.form", "top_search", Array(
            "USE_SUGGEST" => "N",    // Показывать подсказку с поисковыми фразами
            "PAGE" => "#SITE_DIR#search/index.php",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
            ),
            false
        );?>
    </div>
</header>
<?/*$APPLICATION->IncludeComponent("bitrix:search.form","",Array(
    "USE_SUGGEST" => "N",
    "PAGE" => "#SITE_DIR#search/index.php"
    )
);*/?>
<div class="wrapper">

    <div id="a_cap">
        <a class="link_logo" href="/"><span class="biotech"><? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"company_name",
	array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/company_name.php",
		"COMPONENT_TEMPLATE" => "company_name",
		"EDIT_TEMPLATE" => ""
	),
	false
);
            ?></span>
            <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "company_discription",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR."include/company_discription.php",
                        "COMPONENT_TEMPLATE" => "company_discription",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );
            ?>
        </a>
   <!--     <aside style="margin-right: 0px;">        -->
            <div class="header-contacts">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "telephone", Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR."include/telephone.php",
                        "COMPONENT_TEMPLATE" => "schedule",
                        "EDIT_TEMPLATE" => "",
                        ),
                        false
                    );   ?>
                <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "email",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."include/email.php",
                            "COMPONENT_TEMPLATE" => "email",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );    ?>
            </div>
     <!--   </aside>        -->
    </div>
</div>
<?if($_SERVER['PHP_SELF']!='/index.php'){?>
    <div class="redBack">
        <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"red_crumps",
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "red_crumps"
	),
	false
);?>
        <h1><?$APPLICATION->ShowTitle();?></h1>
        <div class="line"></div>
        <p class="text"><?=$APPLICATION->ShowProperty("redback_text");?></p>
    </div>
    <?}?>