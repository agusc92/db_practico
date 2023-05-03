<?php 
define( 'HOST','localhost');
$host = 'localhost';
define('DBNAME','db_pagos');
$dbname = 'db_pagos';
define('USERNAME','root');
$username = 'root';
define('PASSWORD','');
$password = '';

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     echo "Connected to $dbname at $host successfully.";
// } catch (PDOException $pe) {
//     die("Could not connect to the database $dbname :" . $pe->getMessage());
// }

function getTareas(){
    $host = 'localhost';
    $dbname = 'db_pagos';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USERNAME, PASSWORD);
    $sentencia = $conn -> prepare("SELECT * FROM pagos");
    $sentencia ->execute();
    $tareas = $sentencia-> fetchAll(PDO::FETCH_ASSOC);

    return $tareas;
}
function llamadoPrueba(){
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USERNAME, PASSWORD);
    $sentencia = $conn -> prepare("SELECT * FROM pagos");
    $sentencia -> execute();
    $result = $sentencia-> fetchAll(PDO::FETCH_GROUP|PDO::FETCH_UNIQUE|PDO::FETCH_ASSOC);

    return $result;
}
?>