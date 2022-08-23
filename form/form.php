<?php 

    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    // указываем адрес отправителя, можно указать адрес на домене Вашего сайта
    // $fromMail = 'admin@yousite.ru';
    $fromName = 'Форма обратной связи';

    // Сюда введите Ваш email
    $emailTo = 'Radik.app@yandex.ru';
    $subject = 'Форма обратной связи!';
    $subject .= '=?utf-8?b?'. base64_encode($subject) .'?=';
    $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
    $headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

    // тело письма
    $body = "Получено письмо с сайта testsite.ru \n Имя: $name\nТелефон: $phone \n";

    //сообщение будет отправлено в случае, если поле с номером телефона не пустое
    if (strlen($phone) > 0 && strlen($name) > 0) {
        $mail = mail($emailTo, $subject, $body, $headers);
    }


?>