<pre>
<?php

// Циклы для данных в массивах

// 1. Создайте массив скучных игрушек - $boringToys. Создайте в нем случайное количество элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000
$boringToys = [];
$n = 1;
for($i = 0; $i < rand(1,10); $i++){
    $boringToys[] = [
      'name'=>'Игрушка ' . $n,
      'price'=>rand(100,1000)
    ];
    $n += 1;
}
var_dump($boringToys);

// Дан массив $cars. Состоящий из трех машин со следующими данными: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
$cars = [
    [
        'name' => 'Мерседес',
        'price' => 10000,
        'colors' => [],
    ],
    [
        'name' => 'BMW',
        'price' => 9999,
        'colors' => [],
    ],
    [
        'name' => 'Автобус',
        'price' => 20000,
        'colors' => [],
    ],
];


// 2. Посчитайте и выведите стоимость стоимость всех машин
$allCarsSum = 0;
foreach ($cars as $key => $value){
    $allCarsSum = $allCarsSum + $value['price'];
}
echo $allCarsSum;

echo "<br>";
// 3. Для каждой машины заполните поле colors. В этом поле должны хранится все возможные варианты цветов для этой машины, при чем для каждого этого цвета, есть своя надбавка к стоимости (разная для разных машин)
// Создайте массив colors с цветами доступными для каждой машины. И случайным образом выберите из этого массива по 3 цвета для каждой машины. Эти цвета добавьте в массив $cars в поле colors. Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
// Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности.
$colors = ['red', 'blue', 'black', 'pink', 'yellow', 'white', 'grey', 'brown'];
foreach($cars as $key => $value){
    $oneColor = $colors[rand(0,7)];

    for($i=0; $i<3; $i++) {
        $oneColor = $colors[rand(0,7)];
        $cars[$key]['colors'][] = [
            'color' => $oneColor,
            'upPrice' => rand(1000, 3000)
        ];
    }

}

/*

// 4. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде:
// "Купите автомобиль {} цвета {} всего за: {} руб"
// вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете.
?>
</pre>
