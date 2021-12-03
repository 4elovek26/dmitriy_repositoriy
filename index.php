<?php
require_once 'setting.php';

//$conn = new PDO($dsn);
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


?>

