<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Excepton;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHtml(true);

    $mail->setFrom('forroyalee2@gmail.com', 'Заказчик');
    $mail->setAddress('azhginartemdeveloper@gmail.com');
    $mail->Subject = 'Привет';

    $body('<h1>Заказ</h1>');

    $body.='<p>Имя: </p>'.$_POST['name'].'</p>';
    $body.='<p>Email: '.$_POST['email'].'</p>';
    if (trim(!empty($_POST['comment']))) {
        $body.='<p>Комментарий: '.$_POST['comment'].'</p>';
    } else {
        $body.='<p>Комментариев нету(</p>';
    }

    $mail->Body = $body;

    if (!$mail.send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Форма отправлена!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>