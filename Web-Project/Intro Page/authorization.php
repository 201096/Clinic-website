<!DOCTYPE html>
<html lang = "ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/authorization.css"
</head>

<body>
<div class="main">
    <div class="container">
        <div class="main__content">
            <div class="main__form">
                <form action="#">
                    <?php
                    if (!(isset($_COOKIE['patients']))) :
                        ?>
                        <form action="login.php/auth.php" method="post">
                            <p class="main__title">Авторизация</p>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>

                            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>

                            <input type="submit" value="Войти" class="main__btn">

                            <a href="registration.html">Don't have an account?</a>
                        </form>
                    <?php else:?>
                        <p>Привет <?= $_COOKIE['patients'] ?>.Чтобы выйти нажмите <a href="exit.php">здесь</a> </p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>