<?php
include "../../path.php";
include "../../app/controllers/topics.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icon awesome-->
    <script src="https://kit.fontawesome.com/fe653f44dd.js" crossorigin="anonymous"></script>
    <!-- Custom Styling-->
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My site</title>
</head>
<body>
<!--Шапка сайта-->
<?php include("../../app/include/header-admin.php");?>
<div class="container">
    <div class="row">
        <?php include "../../app/include/sidebal-admin.php"; ?>


        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/topics/create.php"; ?>" class="col-2 btn btn-success">Добавить</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/topics/index.php"; ?>" class="col-3 btn btn-warning">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Управление категориями</h2>
                <div class="col-1">ID</div>
                <div class="col-5">Название</div>
                <div class="col-4">Управление</div>
            </div>
            <?php foreach($topicsAll as $key => $topic): ?>
            <div class="row post">
                <div class="id col-1"><?=$key +1; ?></div>
                <div class="title col-5"><?=$topic['name']; ?></div>
                <div class="red col-2"><a href="edit.php?id=<?=$topic['id']; ?>">edit</a></div>
                <div class="del col-2"><a href="edit.php?del_id=<?=$topic['id']; ?>">delete</a></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!--footer-->
<?php include("../../app/include/footer.php");?>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
