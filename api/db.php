<?php

$db = "mapboxevents";
$host = "localhost";
$user = 'mysqlAdmin';
$pass = '9upnwXPyhGoBVQfZHbvod3LV';

//PDO Connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e){
    //echo "Connection failed: " . $e->getMessage();
}

function p($arr){
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
}