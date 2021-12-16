<?php
    include BASE_PATH."/app/database/database.php";
$errMsg = '';
$topicsAll = selectAll('topics');

//Добавление категории
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


//Редактирование категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $topicOne = selectOne('topics', ['id' => $id]);
    $id = $topicOne['id'];
    $name = $topicOne['name'];
    $description = $topicOne['description'];
}


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 3) {
        $errMsg = "Категория должна быть более 2-ух символов";
    } else {

            $topic = [
                'name' => $name,
                'description' => $description
            ];
            $id = $_POST['id'];
            $topic_id = update('topics', $id, $topic);
            header('location: ' . BASE_URL . 'admin/posts/index.php');
        }
}

//Удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('topics', ['id' => $id]);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}