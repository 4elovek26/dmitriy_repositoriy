<?php
/*
CONST_NAME
__FILE__ путь до файла от корня
__LINE__ номер строчки кода, на котором вызвалась
__DIR__ путь к папке
__FUNCTION__ название функции...
__CLASS__
__METHOD__
__NAMESPASE__

global array's
$_GET
$_POST
$_FILES
$_COOKIES
$_REQUEST = $_GET + $_POST
$_SESSION
$_SERVER
$GLOBALS['ключ'] = значение

Логические операторы сравнения
&& - 'и' возвращает true, когда оба(и более) оператора true $a && $b $$ ...
|| - 'или'
xor - 'исключающее или' false xor false = false; true xor true = false; true xor false = true;
Побитовые операторы decbin($a) перевод в двоичную систему счисления
& 'и'
| 'или'
^ 'исключающее или'
~ 'не'
Сокращённые формы вывода
$a = 10;
$a  += 5; $a = 15;
    -=
    *=
    /=
    %=
    .=
Тернарный оператор
$a = true;
$b = $a ? 'в переменной $a хранится значение true' : 'Ну или значение false'; $b = 'в переменной $a хранится значение true';
$b = $a ?: 'Ну или значение вот это значение'; $b = true;
$b = $a ??: 'Ну или значение вот это значение'; $b = true;
$b = $takoiPeremennoiNet ??: 'Ну или значение вот это значение'; $b = 'Ну или значение вот это значение';
*/

$a = 7;
$b = 10;

echo $a % $b;
var_dump($a === $b);
if ($a > 5 && $a <= $b) {
    $a *= $a;
    echo $a;
}elseif($a == 30) {
    echo 'Тут какая-то тайна! ';
    echo $a;
}else{
    echo 'Я в дотку ';
    echo $a;
}
$what = 'Тетрадь';
switch ($what) {
    case "Яблоко":
    case "Апельсин":
        echo " Фрукт";
        break;
    case "Картошка":
        echo " Овощ";
        break;
    case "Тетрадь":
        echo " Дерево";
        break;
}
echo "<br><br><br>";
$i = 0;
//если условие ложно, цикл не выполнится ни разу
while ($i < 10){
    echo "$i ";
    $i++;
}
echo "<br><br><br>";
//если условие ложно, цикл выполнится 1 раз
do {
    echo "$i ";
    $i++;
}while($i < 20);
echo "<br><br><br>";
//цикл со счётчиком for
for($i = 0; $i<10; $i++){
    if ($i % 2 == 0){
        echo "$i ";
    }
}
echo "<br><br><br>";
//цикл для перебора массивов foreach
$a = [1,2,"Три", 'ключ' => 1.5];
foreach($a as $key => $value){
    echo $key . ' => ' .$value . ', ';
}





