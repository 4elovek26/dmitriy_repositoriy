<?php
include "app/database/database.php";


$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['password']);
    $passS = trim($_POST['spassword']);
    $admin = 0;

    if($login === '' || $email === '' || $passS === ''){
        $errMsg = "Не все поля заполнены";
    } elseif(mb_strlen($login, 'UTF8') < 3 ){
        $errMsg = "Логин должен быть более 2-ух символов!";
    } elseif($passF !== $passS) {
        $errMsg = "Пароли в обеих полях должны соответствовать!";
    } 
    else {  
        $existence = selectOne('users', ['email' => $email]);
        if (isset($existence['email']) != NULL){
            $errMsg = "Пользователь с такой почтой уже существует!";   
        } else {
        $post = [
                'username' => $login,
                'email' => $email,
                'password' => password_hash($passS, PASSWORD_DEFAULT),
                'admin' => $admin
                ];
            $id = insert('users', $post);
            $errMsg = "Пользователь "."<strong>". $login . "</strong>". " успешно зарегестрирован!"; 
        }
    }
} else {
    $login = '';
    $email = '';
}






/* 
    $last_row = selectOne('users', ['id' => $id]); */

