<?php

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];

$title = 'Библиотека программиста';

$red = (bool) rand(0, 1);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="page">
<?php if($red): ?>
    <h1 class="red"><?=$title?></h1>
<?php else: ?>
    <h1><?=$title?></h1>
<?php endif; ?>
<div>Авторов на портале: <?=count($library['authors'])?></div>
<!-- Выведите все книги -->
<p class="nechet">Книга <b><?=$library['books'][0]['title']; ?></b> , ее написал <?=$library['books'][0]['author']; ?>
    <?=$library['authors']['martin_robert@example.com']['birthYear']; ?> (<a href="#"><?=$library['authors']['martin_robert@example.com']['email']; ?></a>)</p>
<p>Книга <b><?=$library['books'][1]['title']; ?></b>, ее написал <?=$library['books'][1]['author']; ?>
    <?=$library['authors']['john_makkormik@example.com']['birthYear']; ?> (<a href="#"><?=$library['authors']['john_makkormik@example.com']['email']; ?></a> )</p>
<p class="nechet">Книга <b><?=$library['books'][2]['title']; ?></b>, ее написал <?=$library['books'][2]['author']; ?>
    <?=$library['authors']['martin_robert@example.com']['birthYear']; ?> (<a href="#"><?=$library['authors']['martin_robert@example.com']['email']; ?></a> )</p>
<p>Книга <b><?=$library['books'][3]['title']; ?></b>, ее написал <?=$library['books'][3]['author']; ?>
    <?=$library['authors']['martin_fauler@example.com']['birthYear']; ?> (<a href="#"><?=$library['authors']['martin_fauler@example.com']['email']; ?></a> )</p>
</div>
</body>
</html>
