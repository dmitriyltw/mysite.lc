<?php
include 'connectdb.php';

if (!empty($_POST['login'] && $_POST['user_password'])){
    $user_password = $_POST['user_password'];
//    $hash = password_hash($user_password);
    $query = "INSERT INTO regnew (login, user_password) VALUES (:login, :user_password)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':login',$_POST['login']);
    $stmt->bindParam(':user_password',$user_password);
    if ($stmt->execute()) {
        echo 'запись создана';
    }

} else {
    echo 'заполните имя и/или фамилию';
}