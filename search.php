<?php
    include "path.php";
    include "app/controllers/posts.php"
?> 
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icon awesome-->
    <script src="https://kit.fontawesome.com/fe653f44dd.js" crossorigin="anonymous"></script>
    <!-- Custom Styling-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <title>My site</title>
  </head>
  <body>
<!--Шапка сайта-->
<?php include("app/include/header.php");?> 



<!--блок мейн-->
<div class="container">
  <div class="content row">
      <div class = "main-content col-12">
        <h2>Результаты поиска</h2>
        <?php foreach ($postsAdm as $post): ?>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src=<?=BASE_URL . 'image/posts/' . $post['img']; ?> alt="<?=$post['title']; ?>" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#"><?=substr($post['title'], 0, 80) . '...'; ?></a>
            </h3>
            <i class="far fa-user"><?=$post['username']; ?></i>
            <i class="far fa-calendar"><?=$post['created_date']; ?></i>
            <p class="preview-text">
                <?=mb_substr($post['content'], 0, 55, 'UTF-8'). '...'; ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>




<!--footer-->
<?php include("app/include/footer.php");?> 


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
