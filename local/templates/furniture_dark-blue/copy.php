<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Биотех</title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/furnit.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slider_csszzz.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css" type="text/css">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/css/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/styleGlide.css" type="csstext/css" >  
    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->ShowCSS();?>
    <?/*
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    */?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.glide.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/js.js"></script>



    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".mainSlide").glide({
                arrowRightText: '',
                arrowLeftText:  '',
                afterInit: function() {
                    SliderArrowPadding();  
                }    
            });    
        })

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
        <a href="/"><span class="biotech">НПП БИОТЕХ-М</span> 
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
        <aside style="margin-right: 0px;">

            <? $APPLICATION->IncludeComponent("bitrix:main.include", "telephone", Array(
                    "AREA_FILE_SHOW" => "file",    
                    "PATH" => SITE_DIR."include/telephone.php",    
                    "COMPONENT_TEMPLATE" => "schedule",
                    "EDIT_TEMPLATE" => "",    
                    ),
                    false
                );    ?>
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
        </aside>
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