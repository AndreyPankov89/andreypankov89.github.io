<?php
//Принимаем постовые данные
$name=$_POST['name'];
$email = $_POST['Email'];
$msg = $_POST['message'];
//Тут указываем на какой ящик посылать письмо
$to = $email;
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Сообщение: ".htmlspecialchars($msg)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: Pankov Langing page\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>