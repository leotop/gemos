<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
    if(CModule::IncludeModule("iblock"))
    { 
        $element = new CIBlockElement;
        $PROP = array();
        if(!empty($_POST['email']))$PROP[35] = iconv("UTF-8", "windows-1251", $_POST['email']);
        if(!empty($_POST['city']))$PROP[36] = iconv("UTF-8", "windows-1251", $_POST['city']);
        if(!empty($_POST['phone']))$PROP[37] = iconv("UTF-8", "windows-1251", $_POST['phone']);
        if(!empty($_POST['company']))$PROP[38] = iconv("UTF-8", "windows-1251", $_POST['company']);
        if(!empty($_POST['question']))$PROP[39] = iconv("UTF-8", "windows-1251", $_POST['question']);
        $arLoadProductArray = Array(
            "IBLOCK_ID"      => 14,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => iconv("UTF-8", "windows-1251", $_POST['name']),
            "ACTIVE"         => "Y",    
        );

        if(!$PRODUCT_ID = $element->Add($arLoadProductArray))
        {
            echo false;
        }
        else 
        {
            echo true; 
        }
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $company = $_POST["company"];
    $phone = $_POST["phone"];
    $question = $_POST["question"]; 

    $theme = "Форма обратной связи";
    $mail_text = "
    ==============================================<br>
    <b>Имя:</b> $name<br>
    <b>Город:</b> $city<br>
    <b>Название Компании:</b> $company<br>
    <b>Email:</b> $email<br>
    <b>Телефон для связи:</b> $phone<br>

    <b>Вопрос:</b><br>
    <p>$question</p><br>
    
    ==============================================<br>    
    ";    
    $to = 'gemospf@gmail.com';
    $mail = mail($to,$theme,$mail_text, "From: bioteh.net"."Content-type: text/html; Charset=utf-8 \r\n");
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>