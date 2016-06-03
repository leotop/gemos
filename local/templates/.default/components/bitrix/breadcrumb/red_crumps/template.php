<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */
//arshow($arResult);
global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';
$strReturn .= '<p class="crumps">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '<span class="white"><a class="breadcrumps" href="'.$arResult[$index]["LINK"].'" title="'.$title.'"">'.$title.'</a></span>';
	}
	else
	{
		$strReturn .= '<span class="active">'.$title.'</span>';
	}
}

$strReturn .= '</p>';

return $strReturn;
