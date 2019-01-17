<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Регистрация нового гуся</h1>
<body>
<form action="save_user.php" method="post">
    <img src="../image/gusb.jpeg" align="right" hspace="345">
    <p>
    <label>Придумай свой логин:<br></label>
    <input type="text" name="login" value="">
    </p>
    <p>
    <label>Запиши пароль:<br></label>
    <input type="password" name="user_password" value="">
    </p>
    <input type="submit" name="submit" value="Зарегать гуся">
</form>
</body>
</html>