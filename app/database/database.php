<?php

session_start();
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

function insert($table, $params){
    global $pdo;

    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){   
        $value = "'" . $value .  "'";
        if($i === 0){
        $coll = $coll."$key";
        $mask = $mask . $value;     
        }else{
            $coll = $coll.", "."$key";
            $mask = $mask . ", " . $value;
        }  
        $i++;
    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";


    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckOnError($query);
    return $pdo->lastInsertId();
}


function update($table, $id, $params){
    global $pdo;

    $i = 0;
    $mask = '';
    foreach ($params as $key => $value){   
        $value = "'" . $value .  "'";
        if($i === 0){
        $mask = $mask . "$key = $value";     
        }else{
            $mask = $mask . ", $key = $value";
        }  
        $i++;
    }

    $sql = "Update $table SET $mask where id = $id";

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckOnError($query);   
}

function delete($table, $params){
    global $pdo;
    $sql = "DELETE FROM $table where ";
    $i = 0;
    $mask = '';
    foreach ($params as $key => $value){   
        $value = "'" . $value .  "'";
        if($i === 0){
        $sql = $sql . "$key = $value";     
        }else{
            $sql = $sql . " AND $key = $value";
        }  
        $i++;
    }

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckOnError($query);   
}
//Выборка записей с автором в админку
function selectAllFromPostsWithUsers($table1, $table2){
    global $pdo;
    $sql = "SELECT t1.id, t1.title, t1.img, t1.content,
                t1.status, t1.id_topic, t2.username,
                t1.created_date FROM $table1 as t1 JOIN $table2 as t2 
                ON t1.id_user = t2.id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckOnError($query);
    return $query->fetchAll();
}



