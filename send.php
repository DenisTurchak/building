<?php
// Файлы phpmailer
use PHPMailer\PHPMailer\PHPMailer;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
// Переменные
$user_name = $_POST['user_name'];
$user_phone = $_POST['user_phone'];
$user_project = $_POST['user_project'];
// Настройки
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 4;
$mail->Host = 'smtp.beget.com';
$mail->SMTPAuth = true;
$mail->Username = 'test@dturchak.ru'; // Ваш логин. Именно логин, без @yandex.ru
$mail->Password = '1565086m'; // Ваш пароль
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('test@dturchak.ru'); // Ваш Email
$mail->addAddress('Turchak92@gmail.com'); // Email получателя
$mail-> CharSet = 'UTF-8';
//$mail->addAddress(‘example@gmail.com’); // Еще один email, если нужно.
// Прикрепление файлов
// for ($ct = 0; $ct < count($_FILES[‘userfile’][‘tmp_name’]); $ct++) {
//     $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES[‘userfile’][‘name’][$ct]));
//     $filename = $_FILES[‘userfile’][‘name’][$ct];
//     if (move_uploaded_file($_FILES[‘userfile’][‘tmp_name’][$ct], $uploadfile)) {
//         $mail->addAttachment($uploadfile, $filename);
//     } else {
//         $msg .= ‘Failed to move file to ‘ . $uploadfile;
// }
// }

// Письмо
$mail->isHTML(true);
$mail->Subject = "Заявка с сайта"; // Заголовок письма
$mail->Body = "Имя: " . $user_name .
              "<br>Телефон: " . $user_phone .
              "<br>Описание проекта: " . $user_project; // Текст письма
// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено';
}
?>