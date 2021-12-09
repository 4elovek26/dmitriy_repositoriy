<?php
/*
$host = 'localhost';
$db = 'test';
$username = 'postgres';
$password = '4elovek201095';
$dsn = "host={$host}, dbname={$db}, user={$username}, password={$password}";
подключение через pg_connect
$conn = pg_connect("host={$host} port=5432 dbname={$db} user={$username} password={$password}");
if($conn){
    echo "Connected to the <strong>$db</strong> database successfully! <br>";
}

$name = "Dimon";
$result = pg_query($conn, "Select * from Users");
$rows = pg_num_rows($result);

for ($i = 0; $i < $rows; $i++) {
    pg_result_seek($result, $i);
    $onerow = pg_fetch_assoc($result);
    echo 'Id: ' . $onerow['id_user'] . ' ';
    echo 'Name : ' . $onerow['name'] . '<br>';
}

$test_query = pg_prepare($conn, "test_q", "Select * from users where name = $1");
$test_query = pg_execute ($conn, "test_q", array($name));
$rows = pg_num_rows($test_query);
for ($i = 0; $i < $rows; $i++) {
    pg_result_seek($test_query, $i);
    $onerow = pg_fetch_assoc($test_query);
    echo 'Id: ' . $onerow['id_user'] . ' ';
    echo 'Name : ' . $onerow['name'] . '<br>';
}


pg_close($conn);
для примера, потом удалить*/
$driver = 'pgsql';
$host = 'localhost';
$db_name = 'test';
$db_user = 'postgres';
$db_pass = '4elovek201095';
$port = '5432';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO(
         "$driver:host=$host;port=$port;dbname=$db_name;", $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("Ошибка подключения к базе данных");
}

