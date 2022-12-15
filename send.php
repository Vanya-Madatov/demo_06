<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("bulavskiy2000@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$phone ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>