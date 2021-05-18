<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <?php
     if ($_COOKIE['patients'] == ''):
      ?>
    <h1>Авторизация</h1>
    <form action="login.php/auth.php" method="post">
        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>

        <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>

        <button class="btn btn-success" type ="submit">Войти</button>
    </form>
     <?php else:?>
         <p>Привет <?= $_COOKIE['patients'] ?>.Чтобы выйти нажмите  <a href="exit.php">здесь</a> </p>
     <?php endif; ?>
</div>
</body>
</html>