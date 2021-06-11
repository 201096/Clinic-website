<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/authorization.css"
</head>

<body>
<div class="main">
    <div class="container">
        <div class="main__content">
            <div class="main__form">
                <?php
                if (!(isset($_COOKIE['patients']))) :
                    ?>
                    <form action="login.php/authorization.php" method="post">
                        <p class="main__title">Авторизация</p><br>

                        <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>

                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>

                        <button type ="submit" class="main__btn">Sign in</button><br>

                        <a href="registration.html" class="main__hyperlink">Don't have an account?</a>
                    </form>
                <?php else:?>
                    <p>Привет <?= $_COOKIE['patients'] ?>.Чтобы выйти нажмите <a href="login.php/exit.php">здесь</a> </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<footer class="Info">
    <img class="Footer_logo" src="Contact%20Page/LOGO.png" alt="logo">
    <img class="GPS" src="Contact%20Page/GPS.png" alt="GPS">
    <h3 class="Address">Nur-Sultan</h3>
    <h3 class="Address_info">Kabanbay Batyr Road</h3>
    <img class="EMAIL" src="Contact%20Page/EMAIL.png" alt="email">
    <h3 class="EMAIL_head">Email</h3>
    <h3 class="EMAIL_INFO">201432@astanait.edu.kz</h3>
    <img class="Iphone" src="Contact%20Page/Iphone.png" alt="iphone">
    <h3 class="Iphone_head">Phone</h3>
    <h3 class="Iphone_INFO">87784897006</h3>
</footer>

</body>
</html>