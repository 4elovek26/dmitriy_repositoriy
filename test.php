<?php


if ($argc != 2) {
    echo "Использование: php hello.php [name].\n";
}
$name = $argv[1];
echo "Привет, мир! <br>";


$raw = '22. 12. 2005';
$start = \DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('d/m/Y') . "<br>";

$end = clone $start;
$end->add(new \DateInterval('P1M6D'));

$diff = $end->diff($start);
echo 'Difference: ' . $diff->format('%m месяц, %d дней (total: %a дней)') . "\n";
echo "<br>";
if ($start < $end) {
    echo "Начальная дата раньше конечной! <br>";
}

$periodInterval = \DateInterval::createFromDateString('first thursday');
$periodInterval = new \DatePeriod($start, $periodInterval, $end, \DatePeriod::EXCLUDE_START_DATE);
foreach ($periodInterval as $date) {
    echo $date->format('d/m/Y'). ' '."<br>";
}


$passwordHash = password_hash('4elovek', PASSWORD_DEFAULT);

IF (password_verify('4elovеk', $passwordHash)){
    echo "Правильный пароль <br>";
    echo $passwordHash."<br>";
} else {
    echo "Неправильный пароль <br>";
    echo $passwordHash."<br>";
}


