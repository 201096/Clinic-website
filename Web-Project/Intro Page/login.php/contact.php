<?php
$name2 = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email2 = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','online_clinic');
$mysql->query("INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('$name2', '$email2', '$message')");

$mysql->close();
header('Location: http://localhost:63342/Clinic-website/Web-Project%20(4)/Web-Project/Intro%20Page/Intro.html?_ijt=8tkcfeshoi9314kk9npouf9ee4');
?>