<?php
$to = 'azhginartemdeveloper@gmail.com';

$subject = 'Заказ';

$message = 'Пользователь' . $_POST['name'] . ' отправил письмо:<br/>'. $_POST['comment'] . '<br/>Связаться с ним можно по этому адресу: ' . $_POST['email'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


$headers .= 'To: Artem <azhginartemdeveloper@gmail.com>' . "\r\n";
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


mail($to, $subject, $message, $headers);
?>