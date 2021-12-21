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
/*

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Урок по Html и CSS</title>
</head>
<body>
    <div>
        div- блочный тег
        <p>p- тоже блочный текст</p>
        <p>
            <b> Жирный текст</b>
            <i> курсив</i>
        </p>
        <span> строчный тег</span>
        <a href="#"> ссылка</a>
        <ul>
            <li>
                ul - блочный тег
                li- элементы списка
            </li>
        </ul>
        <hr>
        рисует полоску
        <table border="1">
            <tr colspan = "2">
                table-таблица
            </tr>
            <tr>
                <td>
                    tr-тег строки
                </td>
                <td>
                    td - тег ячейки в строке
                </td>
            </tr>
        </table>
        <img src="url картинки">
        <form action="" method="post">
            <label> form - блочный элемент для создания веб-формы
                action - url, на который форма будет отправлена
                method - способ, на который форма отправляется
                <input type="text" name="" value="Pole 1">
                <input type="submit" value="Pole 2">
            </label>
        </form>
        <script type="javascript" src="..."></script>
    </div>
</body>
</html> -->





p {}
div {}

#first {}
#person {}

.title {} <!-- селектор для классов -->
.product-item {}

[type=text]{} <!-- селектор для элементов, у которых есть атрибут -->
[attr1="value1"]{}

p.red {} <!-- селектор для элементов, у которых есть одновременно несколько атрибутов -->
.item .first {}
input[type=text]{}

ul li p{} <!-- селектор для элементов, у которых есть одновременно несколько ВЛОЖЕННЫХ атрибутов -->
.item .item {}
div >span {} <!-- селектор для элементА, у которых есть одновременно несколько ВЛОЖЕННЫХ атрибутов, следующих друг за другом -->
 */




error_reporting(E_ALL);
ini_set('display_errors', true);

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

//функции для работы с переменными, массивами, мат.функции
empty($var); //- проверяет, определена ли переменная и отлично ли её значение от false

$arr = [
    'key1' => 'value1',
    'key2' => 'value2'
];
array_pop($arr); // извлекает последний элемент массива
array_shift($arr); //извлекает первый элемент массива

array_push($arr[], 'value2'); //добавляет элемент в конец массива
array_unshift($arr, 'value1'); // добавляет элемент в начало массива

array_keys($arr); // выводит все ключи массива
array_values($arr); //выводит все значения массива
in_array('value1', $arr); //проверяет, есть ли значение и возвращает true/false
array_key_exists('key1', $arr); //проверяет, есть ли ключ и возвращает true/false
array_unique($arr); // оставляет только уникальные значения

floor(3.54135); //возвращает наиболее близкую целую часть числа: 3
floor(-3.54135); // -4
ceil(3.55); //противоположность floor
round(3.2374572, 2); // округление, 3.24

pow(4,2); //возведение 4 во 2 степень, аналогично 4**2
//строками, датой\временем

$string = "Hello, World";
explode(" ", $string); //разбивает строку при встрече разделителя $arr = ["Hello," "World"]
implode(" ", $arr); //противоположность explode
md5($string); //возвращает хеш строки
str_split($string); //разбивает строку на элементы и заносит в массив ["H", "e", "l", "l"...];

/*
Струкрура протокола HTTP
1. Стартовая строка - определяет тип сообщения
    -Метод: определяет операцию, которую нужно осуществить с указанным ресурсом
        GET - запрос содержимого ресурса
        POST - передача пользовательких данных ресурсу
        DELETE, HEAD, PUT, OPTIONS и тд.
    -URL: путь до ресурса на веб-сервер
    -Версия: используемая версия протокола
POST/ example/index.php?param=value HTTP/1.1
2. Заголовки(в дальнейшем З) - характеризует тело сообщения, параметры передачи и прочее
    Основные З - должны включаться в любое сообщение клиента
    З запроса - исп. в запросах клиента
    З ответа - исп. для ответов от сервера
    З сущности - сопровождают каждую сущность сообщения
3. Тело сообщения - данные сообщения
*/




