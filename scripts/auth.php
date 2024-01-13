<?php

namespace Registration;

include "../core/DBConnector.php";
include "../controllers/UserController.php";

session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pdo = \AniBox\Connection\Connection::get()->connect();
    $user_crud = new \AniBox\User\UserController($pdo);
    $row = $user_crud->get_user($email);
    if ($row == -1)
    {
        $error .= 'Пользователь с такой почтой не зарегистрирован!';
    }
    else if (password_verify($password, $row['password']))
    {
        $_SESSION["userid"] = $row['id']; 
        $_SESSION["email"] = $row['email']; 
    }
    else
    {
        $error .= 'Неправильный пароль!';
    }
} else {
    $error .= "Неверный метод запроса.";
}
echo($error);
?>