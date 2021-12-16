<?php
/*
 Задание 1
*/
echo $number1 = rand(1,9); echo " ";
echo $number2 = rand(1,9); echo "<br>";
echo $number1 + $number2 . "<br>";
echo $number1 - $number2 . "<br>";
echo $number1 * $number2 . "<br>";
echo $number1 / $number2 . "<br>";
var_dump($number1 > $number2 . "<br>");
echo ++$number1 . "<br>";
echo $number2-- . "<br>";
echo $number2-- . "<br>";
/*
 Задание 2
*/
$daysBeforeExam = rand(0,9);
$daysToPrepareForExam = rand(0,9);
echo "<br>" . 'Дней на подготовку к экзамену: ' . $daysToPrepareForExam . " ";
echo 'Дней до экзамена: ' . $daysBeforeExam   . "<br>";
$otvet = $daysToPrepareForExam > $daysBeforeExam ? 'Мне крышка': 'Главное - не расслаблятся';
echo $otvet . "<br>";
$otvet = $daysToPrepareForExam < $daysBeforeExam ? 'Ууу, ещё успею в дотку поиграть': 'Успею или не успею';
echo $otvet . "<br>";
$otvet = $daysToPrepareForExam == $daysBeforeExam ? 'Впритирочку': 'Либо всё плохо, либо очень плохо';
echo $otvet . "<br>";
/*
Задание 3
*/
$result = [
    'autor' => [
        'F.I.O' => 'Иванов Иван Иванович',
        'email' => 'stalkerRulit@mail.ru'
    ],
    'book' => [
        'name' => 'Тени Чернобыля',
        'email' => 'stalkerRulit@mail.ru'
    ]
];
echo $result['autor']['F.I.O'] . ' написал книгу, которая называется ' . $result['book']['name'] . "<br>";
echo 'Автор ' .$result['autor']['F.I.O'] . ' ждёт ваших отзывов, напишите ему на электронную почту  '
. $result['autor']['email']  . "<br>";
/*
Задание 4
*/
$result2 = [
    'autors' => [
        [
            'F.I.O' => 'Иванов Иван Иванович',
            'email' => 'stalkerRulit@mail.ru'
        ],
        [
            'F.I.O' => 'Сталкер Андрей Анатольевич',
            'email' => 'stalker3@mail.ru'
        ],
        ],
    'books' => [
        [
            'name' => 'Тени Чернобыля',
            'email' => 'stalkerRulit@mail.ru'
        ],
        [
            'name' => 'Свинцовый закат',
            'email' => 'stalker3@mail.ru'
        ]
        ]
];
echo "<br>".'В нашей библиотеке точно есть две книги, которые вы ищите: '
    . $result2['books'][0]['name'] . ' и ' . $result2['books'][1]['name'] . "<br><br>";

echo 'Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора '
    . $result2['autors'][0]['F.I.O'] . '(' . $result2['autors'][0]['email'].
    '). Пишите их лучше другому нашему автору - '
    . $result2['autors'][1]['F.I.O'] . '(' . $result2['autors'][1]['email'].'), мы его любим поменьше.'. "<br>";