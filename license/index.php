<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Документы");
    $title=$APPLICATION->GetTitle();
    $APPLICATION->AddChainItem($title, "");
?><div class="wrappInfo" id="news_item">
 <img src="documents.png" alt="">
	<div class="textContain">
		<p class="title">
			 Научно-производственное предприятие "БИОТЕХ-М"
		</p>
		<p class="text">
			 На все выпускаемые медицинские изделия "НПП Биотех-М" имеет действующие разрешительные и охранные документы на серийное производство и применение в медицинской практике: <a href="http://gemos.ru/upload/ru.pdf" color="red">регистрационные удостоверения Росздравнадзора</a>, декларации соответствия Госстандарта, технические условия, руководства по эксплуатации, патенты, товарные знаки и лицензию на производство.
		</p>
		<p class="photo">
 <a href="http://gemos.ru/upload/ru.pdf"><img width="100%" src="http://gemos.ru/upload/ru.jpg"></a>
		</p>
	</div>
</div>
<br><?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>