<?php

// 1. Выведите числа от 0 до 9
for ($i = 0; $i < 10; $i++){
    echo "$i ";
}
echo "<br>";

// 2. Выведите 10 случайных чисел от 1 до 10
for ($i = 0; $i < 10; $i++){
    echo rand(1, 10) . " ";
}


// 3. Создайте массив $items из 10 случайных целых значений от 0 до 9
$items = [];
for ($i = 0; $i <10; $i++){
    $items[] = rand(0,9);
}
var_dump($items);


// 4. Добавляйте случайные целые числа от 1 до 9 в массив $numbers до тех пор, пока сумма всех элементов этого массива меньше 100
// А затем выведите сколько числе всего в массиве: "Длинна массива numbers = {}"
$numbers = [];
while(count($numbers) < 100){
    $numbers[] = rand(1,9);
}
echo "<br>". count($numbers) . "<br>";
echo array_sum($numbers) . "<br>";

// 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
// Выведите следующие строки (как всегда вместо {} подставив нужные значения):
// Общая сумма массива numbers = {}
// Из нее часть, которая приходится на четные числа = {}
// И часть из нечетных чисел = {}
$chet = 0;
$nechet = 0;
foreach($numbers as $value){
    if($value % 2 == 0){
        $chet = $chet +$value;
    }else{
            $nechet = $nechet + $value;
        }
    }
echo 'Общая сумма массива numbers = '. array_sum($numbers) . "<br>";
echo 'з нее часть, которая приходится на четные числа = '. $chet . "<br>";
echo 'И часть из нечетных чисел = '. $nechet . "<br>";

