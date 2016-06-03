<?   
    foreach($arResult['ITEMS'] as &$item)
    {
        $item['PREVIEW_PICTURE']=CFile::ResizeImageGet($item['PREVIEW_PICTURE'], 
            Array("width"=>240, "height"=>200), 
            BX_RESIZE_IMAGE_PROPORTIONAL, 
            false, 
            false, 
            false, 
            false
        );
    }
?>