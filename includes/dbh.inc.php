<?php

$host = 'localhost';
$bdname ='mydata';
$bdusername = 'root';
$dbpassword = '';



try{
    $pdo = new PDO("mysql:host=$host;dbname=$bdname", $bdusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die ("Connection failed: " .$e->getMessage());
}


