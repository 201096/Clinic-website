<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost','root','','online_clinic');

    $result = $mysql->query("SELECT * FROM `patients` WHERE `login` = '$login' AND `password` = '$password'");

    $user = $result->fetch_assoc();

    if(empty($user) or count($user) == 0){
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('patients', $user['name'], time() + 3600, "/");

    $mysql->close();
    header('Location: http://localhost:63342/Clinic-website/Web-Project%20(4)/Web-Project/Intro%20Page/Intro.html?_ijt=trd1184t0fjqro2c2f5hqp803v');
?>