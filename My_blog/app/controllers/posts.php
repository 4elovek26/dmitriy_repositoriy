<?php
include BASE_PATH."/app/database/database.php";

$errMsg = [];
$imgName = '';
$topicsAll = selectAll('topics');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');
//Добавление поста
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){

    if(!empty($_FILES['image']['name'])){
        $imgName = time() . "_" . $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileType = $_FILES['image']['type'];
        $destination =  ROOT_PATH . "/image/posts/" . $imgName;

        if (strpos($fileType, 'image') === false) {
            array_push($errMsg, "Подгружаемый файл не является изображением");
        }

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result){
            $_POST['img'] = $imgName;
        }else{
            array_push($errMsg, "Ошибка загрузки изображения на сервер");
        }
    }else{
        array_push($errMsg, "Ошибка получения картинки");
    }

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);


    if($title === '' || $content === '' || $topic === '' ){
        array_push($errMsg, "Не все поля заполнены!");
    } elseif(mb_strlen($title, 'UTF8') < 7 ) {
        array_push($errMsg, "Название статьи должно быть более 6-и символов");
    }else {
            $post = [
                'id_user' => $_SESSION['id'],
                'title' => $title,
                'content' => $content,
                'img' => $imgName,
                'status' => 1,
                'id_topic' => $topic
            ];


            $NewPost = insert('posts', $post);
            $NewPost = selectOne('posts', ['id' => $NewPost]);
            header('location: ' . BASE_URL . 'admin/posts/index.php');


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
        array_push($errMsg, "Название статьи должно быть более 6-и символов");
    } else {

        $topic = [
            'name' => $name,
            'description' => $description
        ];
        $id = $_POST['id'];
        $topic_id = update('topics', $id, $topic);
        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }
}

//Удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('topics', ['id' => $id]);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}
