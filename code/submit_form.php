<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Некорректный email");
    }

    $to = "exaple@mail.ru";
    $subject = "Новое сообщение с сайта";
    $body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Спасибо! Ваше сообщение отправлено</h2>";
    } else {
        echo "<h2>Не удалось отправить сообщение!</h2>";
    }
} else {
    echo "Недопустимый метод запроса!";
}
?>