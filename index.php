<html lang="en">
<head>
    <meta charset="UTF-8">


    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<header>Добро пожаловать Гусыня</header>
<body>
<div><img src="images/gusbv.jpeg" alt="Здесь должен быть гусь" ></div>

<form id="login" class="login" action="files/login.php" method="POST">
    <h2>Авторизация</h2>
    <label for="user" class="icon-user">Логин:</label>
    <input class="user" id="user" type="text" name="login"/>

    <label for="password" class="icon-lock">Пароль:</label>
    <input class="password" id="password" type="password" name="password"/>
    <label for="remember"><input type="checkbox" id="remember" /><span class="remember"/> Запомнить меня</label>
    <input type="submit" name="submit" value="Войти" />

    <a href="files/reg.php">Зарегестрироваться</a>
    <div class="extra">
        <a href="#" class="forgetPassword">Забыл пароль</a><a href="#" class="facebook icon-facebook">Facebook</a><a href="#" class="googlePlus icon-google-plus-sign">Google+</a>
    </div>
</form>

<!--<form id="login" class="login" action="login.php" method="POST">-->
<!--    <h2>Авторизация</h2>-->
<!--    <label for="user" class="icon-user">Введите псевдоним:<br></label>-->
<!--    <input class="user" id="user" />-->
<!--    <input class="user" id="user" type="text" name="login">-->
<!--    <label for="remember"><input type="checkbox" id="remember" /><span class="remember"/> Запомнить меня</label>-->
<!--    <label for="password" class="icon-lock">Введите пароль:<br></label>-->
<!--    <input class="user" id="user" type="password" name="user_password" value="" required>-->
<!---->
<!--    <input type="submit" name="submit" value="Войти">-->
<!--    <a href="reg.php">Зарегестрироваться</a>-->
<!--</form>-->

<canvas class="blur" src="images/abstract-wallpaper-abstract-wallpapers.jpg"></canvas>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/index.js"></script>
</body>

<footer>Мой телефон</footer>
</html>