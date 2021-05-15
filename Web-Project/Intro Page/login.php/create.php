<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$date = filter_var(trim($_POST['date']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

if (mb_strlen($name)<3 || mb_strlen($name)>100)
{
    echo "Недопустимая длина имени";
    exit;
}

else if (mb_strlen($login)<5 || mb_strlen($login)>100)
{
    echo "Недопустимая длина логина";
    exit;
}

else if (mb_strlen($password)<2 || mb_strlen($password)>32)
{
    echo "Недопустимая длина пароля(от 2 до 32 символов)";
    exit;
}

$mysql = new mysqli('localhost','root','','online_clinic');
$mysql->query("INSERT INTO `patients` (`name`, `date`, `email`, `login`, `password`) VALUES ('$name', '$date', '$email', '$login', '$password')");

$mysql->close();
header('location: /' );
?>