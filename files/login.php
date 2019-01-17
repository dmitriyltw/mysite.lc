<?php
include 'connectdb.php';

session_start();

if (!isset($_SESSION['login'])) {
    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $user_password = $_POST['user_password'];
        if (!empty($login && $user_password)) {
            $query = "SELECT login,user_password FROM regnew WHERE login=? and user_password=?";
            $stmt = $dbh->prepare($query);

            $stmt->execute([$login,$user_password]);
            $result = $stmt->fetchAll();
            if ($result != null){
                header('location: editprofile.php');
                echo 'Поздавляем вы зашли на сайт:';
            } else {
                echo 'dibil';
            }

        }
    }
}