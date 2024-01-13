<?php

namespace Registration;

include "../core/DBConnector.php";
include "../controllers/UserController.php";

session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];
    $birth_date = $_POST['birth_date'];
    $pdo = \AniBox\Connection\Connection::get()->connect();
    $user_crud = new \AniBox\User\UserController($pdo);
    if ($user_crud->get_user($email) != -1)
    {
        $error .= 'Пользователь с такой почтой уже зарегистрирован!';
    }
    else if (strlen($password ) < 6)
    {
            $error .= 'Пароль должен содержать 6 символов.';
    }
    else if ($password != $confirm_password)
    {
        $error .= 'Пароли не совпадают.';
    }
    if (empty($error) ) {
        $id = $user_crud->registration($email, $hash_password, $full_name, $birth_date);
        $_SESSION["userid"] = $id;
        $_SESSION["email"] = $email;
    }
} else {
    $error .= "Неверный метод запроса.";
}
echo($error);
?>