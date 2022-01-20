$email = $_POST['email'];
$name = $_POST['name'];
$commnet = $_POST['comment'];

$email = htmlspecialchars($email);
$name = htmlspecialchars($name);
$comment = htmlspecialchars($comment);

$email = urldecode($email);
$name = urldecode($name);
$comment = urldecode($comment);

if (mail("azhginartemdeveloper@gmail.com", "Заказ с сайта", "ФИО:".$name.". E-mail: ".$email \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}