<?php
include "../../app/database/database.php";
require_once "../../path.php";

$errMsg = '';
$topicsAll = selectAll('topics');

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === ''){
        $errMsg = "Не все поля заполнены!";
    } elseif(mb_strlen($name, 'UTF8') < 3 ) {
        $errMsg = "Категория должна быть более 2-ух символов";
    }else {
        $existence = selectOne('topics', ['name' => $name]);
        if (isset($existence['name']) != NULL){
            $errMsg = "Такая категория уже существует!";
        } else {
            $topic = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('topics', $topic);
            $topic = selectOne('topics', ['id' => $id]);
            echo BASE_URL;
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }
} else {
    $name ='';
    $description = '';
}

