<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
     $title=$APPLICATION->GetTitle();
    $APPLICATION->AddChainItem($title, "");
?>
<div class="wrappContacts">

    <div class="mapConteiner">
        <div id="map-zoom-plus" class="map-zoom-plus"></div>
        <div id="map-zoom-minus" class="map-zoom-minus"></div>
        <div id="map-full-mode" class="map-full-mode"></div>
        <div id="map-normal-mode" class="map-normal-mode"></div>
        <div id="map" class="map"></div>
    </div>

    <div class="textContainer">
        <img src="/images/phone.png" class="imgPhoneCont">       
        <p class="title">������-���������������� ����������� "������-�"</p> 
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contacts", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "-",
		"IBLOCK_ID" => "11",
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
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "contacts",
		"FILE_404" => ""
	),
	false
);?>
        <div class="sheme" style="display: none;">
            <img class="shemeClose" src="/images/chrest.png">
            <img src="/images/auto.jpg">
        </div>
        <div class="formBack" id="shemeBack" style="display: none;"></div> 
        <p class="shemeBut">����� �������</p>
    </div>
    </div>
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>