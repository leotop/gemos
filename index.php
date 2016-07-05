<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "�����������, �����������, ������� ������������, ������� �����������, �����-��, ������������, ������� ��� �����������");
$APPLICATION->SetTitle("����������� � ����������� - �������� ����� \"�����\"");?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "7",
		"NEWS_COUNT" => "",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "DESCRIPTION",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "slider",
		"FILE_404" => ""
	),
	false
);?>
<div class="wrapper_2">
    <section class="sections_1">
        <?$APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "quality_list", 
                array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "5",
                    "NEWS_COUNT" => "3",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "TIMESTAMP_X",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "�������",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "COMPONENT_TEMPLATE" => "quality_list",
                    "FILE_404" => ""
                ),
                false
            );?>


        <? $APPLICATION->IncludeComponent(
                "bitrix:main.include", 
                "contacts", 
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR."include/contacts.php",
                    "COMPONENT_TEMPLATE" => "contacts",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );   
        ?>
        <?$APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "knowledge_base", 
                array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "knowledge",
                    "IBLOCK_ID" => "10",
                    "NEWS_COUNT" => "",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "TIMESTAMP_X",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "/knowledge_base/#ID#/",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "�������",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "COMPONENT_TEMPLATE" => "knowledge_base",
                    "FILE_404" => ""
                ),
                false
            );?>
        <div id="Services">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                    "AREA_FILE_SHOW" => "file",    
                    "PATH" => SITE_DIR."include/distributors.php",    
                    "COMPONENT_TEMPLATE" => "",
                    "EDIT_TEMPLATE" => "",    
                    ),
                    false
                );    ?>
        </div>
    </section>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "advantages_list", Array(
            "DISPLAY_DATE" => "Y",	// �������� ���� ��������
            "DISPLAY_NAME" => "Y",	// �������� �������� ��������
            "DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
            "DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
            "AJAX_MODE" => "Y",	// �������� ����� AJAX
            "IBLOCK_TYPE" => "-",	// ��� ��������������� ����� (������������ ������ ��� ��������)
            "IBLOCK_ID" => "6",	// ��� ��������������� �����
            "NEWS_COUNT" => "3",	// ���������� �������� �� ��������
            "SORT_BY1" => "SORT",	// ���� ��� ������ ���������� ��������
            "SORT_ORDER1" => "ASC",	// ����������� ��� ������ ���������� ��������
            "SORT_BY2" => "TIMESTAMP_X",	// ���� ��� ������ ���������� ��������
            "SORT_ORDER2" => "DESC",	// ����������� ��� ������ ���������� ��������
            "FILTER_NAME" => "",	// ������
            "FIELD_CODE" => array(	// ����
                0 => "ID",
                1 => "",
            ),
            "PROPERTY_CODE" => array(	// ��������
                0 => "",
                1 => "DESCRIPTION",
                2 => "",
            ),
            "CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
            "DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
            "PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
            "SET_TITLE" => "Y",	// ������������� ��������� ��������
            "SET_BROWSER_TITLE" => "Y",	// ������������� ��������� ���� ��������
            "SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
            "SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
            "SET_LAST_MODIFIED" => "Y",	// ������������� � ���������� ������ ����� ����������� ��������
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
            "ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",	// �������� ������, ���� ��� ���������� ��������
            "PARENT_SECTION" => "",	// ID �������
            "PARENT_SECTION_CODE" => "",	// ��� �������
            "INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
            "CACHE_TYPE" => "A",	// ��� �����������
            "CACHE_TIME" => "3600",	// ����� ����������� (���.)
            "CACHE_FILTER" => "Y",	// ���������� ��� ������������� �������
            "CACHE_GROUPS" => "Y",	// ��������� ����� �������
            "DISPLAY_TOP_PAGER" => "Y",	// �������� ��� �������
            "DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
            "PAGER_TITLE" => "�������",	// �������� ���������
            "PAGER_SHOW_ALWAYS" => "Y",	// �������� ������
            "PAGER_TEMPLATE" => "",	// ������ ������������ ���������
            "PAGER_DESC_NUMBERING" => "Y",	// ������������ �������� ���������
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
            "PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
            "PAGER_BASE_LINK_ENABLE" => "Y",	// �������� ��������� ������
            "SET_STATUS_404" => "Y",	// ������������� ������ 404
            "SHOW_404" => "Y",	// ����� ����������� ��������
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",	// Url ��� ���������� ������ (�� ��������� - �������������)
            "PAGER_PARAMS_NAME" => "arrPager",	// ��� ������� � ����������� ��� ���������� ������
            "AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
            "AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
            "AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
            "AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
            "COMPONENT_TEMPLATE" => "quality_list",
            "FILE_404" => "",	// �������� ��� ������ (�� ��������� /404.php)
            ),
            false
        );?> 
    <section class="bottom_section">
        <div class="section_wrap_5">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "purchasing", Array(
                    "AREA_FILE_SHOW" => "file",    
                    "PATH" => SITE_DIR."include/purchase.php",    
                    "COMPONENT_TEMPLATE" => "schedule",
                    "EDIT_TEMPLATE" => "",    
                    ),
                    false
                );    ?>
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "supply", Array(
                    "AREA_FILE_SHOW" => "file",    
                    "PATH" => SITE_DIR."include/supply.php",    
                    "COMPONENT_TEMPLATE" => "schedule",
                    "EDIT_TEMPLATE" => "",    
                    ),
                    false
                );    ?>

            <?/*<?$APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "services_list", 
                array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => "13",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "TIMESTAMP_X",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                0 => "ID",
                1 => "",
                ),
                "PROPERTY_CODE" => array(
                0 => "",
                1 => "DESCRIPTION",
                2 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_LAST_MODIFIED" => "Y",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "Y",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "�������",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "Y",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "COMPONENT_TEMPLATE" => "quality_list",
                "FILE_404" => ""
                ),
                false
            );?>*/?>
        </div>     
    </section>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>