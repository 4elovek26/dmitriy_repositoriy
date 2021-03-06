<?php include("path.php");?> 
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
      <div class = "main-content col-md-9 col-12">
        <h2>Заголовок какой-то статьи</h2>

        <div class="single_post row">
          <div class="img col-12">
            <img src="image/image3.png" class="img-thumbnail" alt="">
          </div>
          <div class="info">
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Dec 6, 2021</i>
          </div>
          <div class="single_post_text col-12">
            <h3>Заголовок</h3>
            <p>
                <a href="#">Новый год</a>– это самый любимый праздник большинства взрослых и детей, ведь в ночь с 31 декабря на 1 января (а в большинстве стран начало года приходится именно на эти числа) случаются самые настоящие чудеса!
            </p>
            <p>
                С нетерпением, волнением и радостью люди ждут наступления торжественной ночи. Подготовка к празднику начинается заранее, и к концу декабря уже вовсю сверкают огнями улицы городов, а в каждом доме стоит наряженная елка.
            </p>
            <p>
                Праздничная атмосфера царит повсюду: в домах, магазинах, ресторанах.
            </p>
            <p>
                Приятная новогодняя суета охватывает всех без исключения. Люди ходят по магазинам в поисках подарков для своих друзей и родных, выбирают самые красивые наряды и продумывают меню праздничного стола.
            </p>
            <p>
                Дальше мы расскажем подробнее об этом празднике, а также поговорим о том, что нужно сделать для создания той самой сказочной атмосферы, которой славится Новый Год.
            </p>
          </div>
        </div>

      </div>

      <!--sidebar-->
      <div class="sidebar col-md-3 col-12">

        <div class="section search">
          <h3>Поиск</h3>
          <form action="/" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
          </form>
        </div>

        <div class="section topics">
          <h3>Категории</h3>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>
  </div>
</div>

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
