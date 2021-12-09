<?php
include "app/database/database.php";

function loginSession($arr){
    $_SESSION['id'] = $arr['id'];
    $_SESSION['login'] = $arr['username'];
    $_SESSION['admin'] = $arr['admin'];

    if($_SESSION['admin']){
        header('location: ' . BASE_URL . admin/admin.php);
    }else{
    header('location: ' . BASE_URL);
    }
}

$errMsg = '';
//Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['password']);
    $passS = trim($_POST['spassword']);
    $admin = 0;

    if($login === '' || $email === '' || $passS === ''){
        $errMsg = "Не все поля заполнены!";
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
            $user = selectOne('users', ['id' => $id]);

            loginSession($user);
        }
    }
} else {
    $login = '';
    $email = '';
}

//Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-log'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    
    if($email === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if ($existence && password_verify($pass, $existence['password'])){

            loginSession($existence);


        } else {
            $errMsg = "Проверьте правильность введенных данных!";
        }
    }
}else{
    $email = '';
}

