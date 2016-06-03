<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    IncludeTemplateLangFile(__FILE__);
?>
<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
        "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
        "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
        "MAX_LEVEL" => "1",	// Уровень вложенности меню
        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
        "COMPONENT_TEMPLATE" => "blue_tabs",
        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        ),
        false
    );?>
<footer>
 <? if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/?clear_cache=Y') {
           require_once ($_SERVER['DOCUMENT_ROOT'].'/include/counter.php');
       } ?>
    <? $APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            "copyright", 
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_DIR."include/copyright.php",
                "COMPONENT_TEMPLATE" => "copyright",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );   
    ?>
    
    <? $APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            "footer", 
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_DIR."include/footer.php",
                "COMPONENT_TEMPLATE" => "footer",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );   
    ?>
    <div class="form" style="display: none;">
        <p class="title">
            <?if($_SERVER['PHP_SELF']!='/index.php'){ ?>Задайте интересующий вас вопрос<?}
                else{?>Задать интересующий Вас вопрос<?}?>
        </p>
        <form>
            <input type="text" placeholder="ФИО" id="input-name" class="mandatory-field">
            <input type="text" placeholder="Телефон" id="input-phone" class="mandatory-field">
            <input type="text" class="mail mandatory-field" placeholder="Электронная почта" id="input-email">
            <input type="text" placeholder="Населенный пункт" id="input-city">
            <input type="text" placeholder="Организация" id="input-company">
            <textarea placeholder="Ваш вопрос" id="input-question"></textarea>
            <?//<p class="comment">Поля отмеченные <span class="red">*</span>,обязательны для заполнения.</p> ?>
            <input type="button" id="submit-input-button" value="Отправить вопрос">
            <?if($_SERVER['PHP_SELF']!='/index.php'){ ?><p class="cleaBut">очистить</p><?}
                else{?><p class="cleaBut" style="margin-left: -1px;">очистить</p><?}?>
            <img class="formClose" src="/images/chrest.png">
        </form>
    </div>
    <div class="ajax-response" style="display: none;">
        <p class="titles">
            Ваше сообщение успешно передано!
        </p>
        <input type="button" id="success-button" value="Продолжить">
    </div>
    <div class="formBack"></div>  
    </footer>
    <div class="grayBack"></div>
      
</body>
</html>