<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    IncludeTemplateLangFile(__FILE__);
?>
<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
        "ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
        "MENU_CACHE_TYPE" => "Y",	// ��� �����������
        "MENU_CACHE_TIME" => "36000000",	// ����� ����������� (���.)
        "MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
        "MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
        "MAX_LEVEL" => "1",	// ������� ����������� ����
        "USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
        "ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
        "COMPONENT_TEMPLATE" => "blue_tabs",
        "CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
        "DELAY" => "N",	// ����������� ���������� ������� ����
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
            <?if($_SERVER['PHP_SELF']!='/index.php'){ ?>������� ������������ ��� ������<?}
                else{?>������ ������������ ��� ������<?}?>
        </p>
        <form>
            <input type="text" placeholder="���" id="input-name" class="mandatory-field">
            <input type="text" placeholder="�������" id="input-phone" class="mandatory-field">
            <input type="text" class="mail mandatory-field" placeholder="����������� �����" id="input-email">
            <input type="text" placeholder="���������� �����" id="input-city">
            <input type="text" placeholder="�����������" id="input-company">
            <textarea placeholder="��� ������" id="input-question"></textarea>
            <?//<p class="comment">���� ���������� <span class="red">*</span>,����������� ��� ����������.</p> ?>
            <input type="button" id="submit-input-button" value="��������� ������">
            <?if($_SERVER['PHP_SELF']!='/index.php'){ ?><p class="cleaBut">��������</p><?}
                else{?><p class="cleaBut" style="margin-left: -1px;">��������</p><?}?>
            <img class="formClose" src="/images/chrest.png">
        </form>
    </div>
    <div class="ajax-response" style="display: none;">
        <p class="titles">
            ���� ��������� ������� ��������!
        </p>
        <input type="button" id="success-button" value="����������">
    </div>
    <div class="formBack"></div>  
    </footer>
    <div class="grayBack"></div>
      
</body>
</html>