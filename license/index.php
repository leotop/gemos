<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("���������");
    $title=$APPLICATION->GetTitle();
    $APPLICATION->AddChainItem($title, "");
?><div class="wrappInfo" id="news_item">
 <img src="documents.png" alt="">
	<div class="textContain">
		<p class="title">
			 ������-���������������� ����������� "������-�"
		</p>
		<p class="text">
			 �� ��� ����������� ����������� ������� "��� ������-�" ����� ����������� �������������� � �������� ��������� �� �������� ������������ � ���������� � ����������� ��������: <a href="http://gemos.ru/upload/ru.pdf" color="red">��������������� ������������� ���������������</a>, ���������� ������������ ������������, ����������� �������, ����������� �� ������������, �������, �������� ����� � �������� �� ������������.
		</p>
		<p class="photo">
 <a href="http://gemos.ru/upload/ru.pdf"><img width="100%" src="http://gemos.ru/upload/ru.jpg"></a>
		</p>
	</div>
</div>
<br><?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>