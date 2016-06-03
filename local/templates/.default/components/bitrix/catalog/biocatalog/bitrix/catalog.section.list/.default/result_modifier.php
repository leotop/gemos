<?
    /*if(CModule::IncludeModule("iblock"))
    {
    $iblocks = GetIBlockElementList(12);
    $free_elements=Array();
    while($arIBlock = $iblocks->GetNext())
    {
    array_push($arResult['SECTIONS'],$arIBlock);
    }
    //arshow($free_elements);

    arshow($arResult['SECTIONS']);
    array_multisort($arResult['SECTIONS'],"SORT"=SORT_ASC,SORT_NUMERIC);
    }
    */       
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    $arViewModeList = array('LIST', 'LINE', 'TEXT', 'TILE');

    $arDefaultParams = array(
        'VIEW_MODE' => 'LIST',
        'SHOW_PARENT_NAME' => 'Y',
        'HIDE_SECTION_NAME' => 'N'
    );

    $arParams = array_merge($arDefaultParams, $arParams);

    if (!in_array($arParams['VIEW_MODE'], $arViewModeList))
        $arParams['VIEW_MODE'] = 'LIST';
    if ('N' != $arParams['SHOW_PARENT_NAME'])
        $arParams['SHOW_PARENT_NAME'] = 'Y';
    if ('Y' != $arParams['HIDE_SECTION_NAME'])
        $arParams['HIDE_SECTION_NAME'] = 'N';

    $arResult['VIEW_MODE_LIST'] = $arViewModeList;

    if (0 < $arResult['SECTIONS_COUNT'])
    {
        if ('LIST' != $arParams['VIEW_MODE'])
        {
            $boolClear = false;
            $arNewSections = array();
            foreach ($arResult['SECTIONS'] as &$arOneSection)
            {
                if (1 < $arOneSection['RELATIVE_DEPTH_LEVEL'])
                {
                    $boolClear = true;
                    continue;
                }
                $arNewSections[] = $arOneSection;
            }
            unset($arOneSection);
            if ($boolClear)
            {
                $arResult['SECTIONS'] = $arNewSections;
                $arResult['SECTIONS_COUNT'] = count($arNewSections);
            }
            unset($arNewSections);
        }
    }

    if (0 < $arResult['SECTIONS_COUNT'])
    {
        $boolPicture = false;
        $boolDescr = false;
        $arSelect = array('ID');
        $arMap = array();
        if ('LINE' == $arParams['VIEW_MODE'] || 'TILE' == $arParams['VIEW_MODE'])
        {
            reset($arResult['SECTIONS']);
            $arCurrent = current($arResult['SECTIONS']);
            if (!isset($arCurrent['PICTURE']))
            {
                $boolPicture = true;
                $arSelect[] = 'PICTURE';
            }
            if ('LINE' == $arParams['VIEW_MODE'] && !array_key_exists('DESCRIPTION', $arCurrent))
            {
                $boolDescr = true;
                $arSelect[] = 'DESCRIPTION';
                $arSelect[] = 'DESCRIPTION_TYPE';
            }
        }
        if ($boolPicture || $boolDescr)
        {
            foreach ($arResult['SECTIONS'] as $key => $arSection)
            {
                $arMap[$arSection['ID']] = $key;
            }
            $rsSections = CIBlockSection::GetList(array(), array('ID' => array_keys($arMap)), false, $arSelect);
            while ($arSection = $rsSections->GetNext())
            {
                if (!isset($arMap[$arSection['ID']]))
                    continue;
                $key = $arMap[$arSection['ID']];
                if ($boolPicture)
                {
                    $arResult['SECTIONS'][$key]['PICTURE'] = CFile::ResizeImageGet($arSection['PICTURE'], 
                        Array("width"=>240, "height"=>200), 
                        BX_RESIZE_IMAGE_PROPORTIONAL, 
                        false, 
                        false, 
                        false, 
                        false
                    );
                    //$arResult['SECTIONS'][$key]['~PICTURE'] = $arSection['~PICTURE'];
                }
                if ($boolDescr)
                {
                    $arResult['SECTIONS'][$key]['DESCRIPTION'] = $arSection['DESCRIPTION'];
                    $arResult['SECTIONS'][$key]['~DESCRIPTION'] = $arSection['~DESCRIPTION'];
                    $arResult['SECTIONS'][$key]['DESCRIPTION_TYPE'] = $arSection['DESCRIPTION_TYPE'];
                    $arResult['SECTIONS'][$key]['~DESCRIPTION_TYPE'] = $arSection['~DESCRIPTION_TYPE'];
                }
            }
        }
    }      

    if(CModule::IncludeModule("iblock")) {
        $iblocks = CIBlockElement::GetList(array($arParams["ELEMENT_SORT_FIELD"]=>$arParams["ELEMENT_SORT_ORDER"]),array("IBLOCK_ID"=>12), false, false, array());
        while($arIBlock = $iblocks->GetNext()){
            $arIBlock['PREVIEW_PICTURE']=CFile::ResizeImageGet($arIBlock['PREVIEW_PICTURE'], 
                Array("width"=>240, "height"=>200), 
                BX_RESIZE_IMAGE_PROPORTIONAL, 
                false, 
                false, 
                false, 
                false
            );                         
            if($arIBlock["IBLOCK_SECTION_ID"])       {
                $arResult["ITEMS"][$arIBlock["IBLOCK_SECTION_ID"]][]=$arIBlock;
            } else {
                $arIBlock['DETAIL_PAGE_URL']=str_replace("/products/","/products/0/",$arIBlock['DETAIL_PAGE_URL']);
                $arResult["FREE_ITEMS"][]=$arIBlock;
            }    
        }
    }



    function itemsSort($a, $b) {
        if ($a["SORT"] == $b["SORT"]) {
            return 0;
        }
        return ($a["SORT"] < $b["SORT"]) ? -1 : 1;
    }


    usort($arResult["FREE_ITEMS"], "itemsSort");

   



?>