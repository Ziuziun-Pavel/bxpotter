<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$SITE_ID = 's1'; //Индетификатор сайта
$EVEN_TYPE = 'SEND_EMAIL';

$name = $_POST["NAME"];
$email = $_POST["EMAIL"];
$tel = $_POST["TEL"];

$arFields = array(
    "USER_NAME" => $name,
    "USER_EMAIL" => $email,
    "USER_PHONE" => $tel
);

if (CEvent::Send($EVEN_TYPE, $SITE_ID, $arFields)) {
    echo 1;
} else {
    echo 0;

}
?>