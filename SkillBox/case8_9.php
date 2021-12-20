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
echo "[$minKey] = $min";
