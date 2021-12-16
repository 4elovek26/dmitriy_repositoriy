<?php

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

