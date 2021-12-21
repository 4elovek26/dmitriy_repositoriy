<?php

// Функции empty и isset
// Результат каждой проверки выведите с помощью функции var_dump()

// 1. Проверьте существует ли переменная $a и не пустая ли она $a
$a = 0;
var_dump(empty($d));
var_dump(isset($d));

//второе задание
$url = "/some/path/to/page/ <br>";
echo trim($url, '/');
$line = "Good news, everyone.";
echo strpos($line, ",");
echo "<br>";
echo substr($line, strpos($line, ",")+1, -1);
echo "<br>";
echo str_replace([".", ",", " "], ["", "", "-"], $line);

// 2. Проверьте существует ли переменная $b и не пустая ли она $b
$b = false;


// 3. Проверьте существует ли переменная $c и не пустая ли она $c
$c = null;


// 4. Проверьте существует ли переменная $d и не пустая ли она $d
$d = [];


// 5. Проверьте каждый элемент массива $items существует ли он и не пустой ли он
$items = [
    [],
    1,
    null,
    'Привет',
    ''
];

//сортировка Пузырьком
$data = [];
for ($i = 0; $i < 10; $i++){
    $data[] = rand(0, 9);
}
/*
echo "<br>" . implode(" ", $data) . "<br>";

for ($i = 0; $i <count($data); $i++){
    for ($j = $i +1; $j < count($data); $j++){
        if ($data[$j] < $data[$i]) {
            $tmp = $data[$j];
            $data[$j] = $data[$i];
            $data[$i] = $tmp;
        }
    }
}

echo implode(" ", $data) . "<br>";
*/
//сортировка min\max

echo "<br>" . implode(" ", $data) . "<br>";

for ($i = 0; $i <count($data); $i++){
    $k = $i;


    for ($j = $i +1; $j < count($data); $j++){
        if ($data[$k] > $data[$j]) {
            $tmp = $data[$j];
            $data[$j] = $data[$k];
            $data[$k] = $tmp;
        }
    }
}

echo implode(" ", $data) . "<br>";

//task1
$task1string = "Student, hello!";
$countKey = str_split($task1string);;
$count = array_fill_keys($countKey, 0);

foreach ($count as $key => $value){
    for($i=0; $i<strlen($task1string); $i++){
        $bukva = substr($task1string, $i, 1);

        if ($key == $bukva){
            $count[$key] += 1;
        }
    }
}

var_dump($count);
//task2
$countTask2 = [];
for ($i = 0; $i<10; $i++){
    $countTask2[] = rand(0, 100);
}
$min = 111;
$minKey = 11;
foreach ($countTask2 as $key => $value){
    if ($min > $value){
        $min = $value;
        $minKey = $key;
    }
}
echo $value;

var_dump($countTask2);
echo "[$minKey] = $min <br><br>";
//task3
$arrayTask3 = [];
$rand = rand(3,20);
for ($i = 0; $i<$rand; $i++){
    $arrayTask3[] = rand(0,10);
}

var_dump($arrayTask3);
$arrayTask3Sum = 0;
for($i=0; $i<count($arrayTask3); $i+=2){
    $arrayTask3Sum += $arrayTask3[$i];
}
echo $arrayTask3Sum . "<br>";
//task4
$studentCount = rand(1, 1000000);
$ostatok = $studentCount % 10;
switch($studentCount){
    case $studentCount == 1:
        echo "На учёбе $studentCount студент";
        break;
    case $studentCount == 2:
    case $studentCount == 3:
    case $studentCount == 4:
        echo "На учёбе $studentCount студента";
        break;
    case $ostatok == 0:
    case $ostatok == 1:
    case $ostatok == 2:
    case $ostatok == 3:
    case $ostatok == 4:
    case $ostatok == 5:
    case $ostatok == 6:
    case $ostatok == 7:
    case $ostatok == 8:
    case $ostatok == 9:
        echo "На учёбе $studentCount студентов";
        break;
}
