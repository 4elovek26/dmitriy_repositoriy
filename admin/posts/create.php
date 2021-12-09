<?php
include "../../path.php";
include "../../app/database/database.php";
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
        <div class="sidebar col-3">
            <ul>
                <li>
                    <a href="">Записи</a>
                </li>
                <li>
                    <a href="">Пользователи</a>
                </li>
                <li>
                    <a href="">Категории</a>
                </li>
            </ul>
        </div>


        <div class="posts col-9">
            <div class="button row">
                <a href="create.html" class="col-2 btn btn-success">Add Post</a>
                <span class="col-1"></span>
                <a href="index.html" class="col-3 btn btn-warning">Manage Post</a>
            </div>
            <div class="row title-table">
                <h2>Добавление записей</h2>
            </div>
            <div class="row add-post">
                <form>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Содержимое записи</label>
                        <textarea class="form-control" id="content" rows="6"></textarea>
                    </div>
                    <div class="input-group col">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Сохранить запись</button>
                    </div>
                </form>
            </div>
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
