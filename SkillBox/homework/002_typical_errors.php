<?php
// Исправьте типовые ошибки

// 1. Использование констант вместо строк
define('TODAY_IS_MONDAY', false);

// 2. Указание констант вместо ключей в ассоциативных массивах 
$data  = [
    'FIRST_KEY' => 1,
];
echo $data['FIRST_KEY'];

// 3. Использование переменных, которые еще не объявлены
$x = rand(1, 4);
$a = '';
if ($x > 2) {
    $a = 0;
}
echo $a;

// 4. Переопределение значений в суперглобальных переменных

if ($_GET['show_info'] == 'y' || $x > 2) {
    echo 'done';
}

// 5. Попытка обрамить условием большую часть html кода, чем это нужно
if ($x > 2) {?>
<div class="some-div-class">
    <a href="#" class="some-a-class">На главную</a>
</div>
<?php } else {?>
<div class="some-div-class">
    <a href="#" class="some-a-class">О компании</a>
</div>
<?php }

// 6. Вывод тегов оператором echo
if ($x > 2) {
    echo 'Hello World';
}

// 7. Ошибки, связанные с применением bool
$value = (bool) rand(0, 1);
if ($value) {
    echo '>';
}

// 8. Ошибки, связанные с применением bool
if ($x > 2) {
    $result = true;
}

// 9 Занесение в переменную одного типа значения другого типа
$a = true;
if ($x > 2) {
    $a = (int) 0;
} else {
    $a = 'ok';
}
