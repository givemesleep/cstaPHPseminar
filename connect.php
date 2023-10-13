<?php 
    $host="localhost";
    $dbase="cstaphp";
    $uname="root";
    $password="";
    $dsn="mysql:host={$host};dbname={$dbase}";
    try {
        $con= new PDO($dsn,$uname,$password);
        //$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        // if($con){
        //     echo "Successfully connected to database";
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }





?>