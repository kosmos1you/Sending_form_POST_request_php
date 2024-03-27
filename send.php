<?php
$headers = "Content-type: text/html; charset=windows-1251"; //Кодировка
$headers = "From:3879076@mail.ru"; // Почта 

//mail("text@yandex.ru")
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$to = "3879076@mail.ru"; // Почта на которую придет письма 
$subject = 'Заявка с сайта stekloastra.ru'; // заголовок письма

$name = iconv('UTF-8', 'windows-1251', $_POST['name']); // получение русских букв в поле name 
$phone = $_POST['phone']; // получение значения в поле телефон
$email = $_POST['mail']; // получение значения в поле почта
$message = "Сообщение: \nИмя: {$name}\n Телефон: {$phone}\n Email: {$email}";  // передаем все переменные для отправки




$result = mail($to,$subject,$message,$headers); // передаем переменные ( переменные $name,$phone,$email передают свои значения в переменную $message. тут их выводить не нужно )
?>