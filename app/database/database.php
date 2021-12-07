<?php
require('connect.php');


function test($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}

function dbCheckOnError($query){
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}

function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'" . $value .  "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
        
    }


    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckOnError($query);

    return $query->fetchAll();
}

function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'" . $value .  "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
        
    }


    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckOnError($query);

    return $query->fetch();
}

function insert($table){
    global $pdo;
    $sql = "INSERT INTO $table (admin, username, email, password) VALUES ('1', '4elovek', '4EL@mail.ru', '4elovek201095')";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckOnError($query);
}
//insert('users');

