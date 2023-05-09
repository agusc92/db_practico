<?php 
define( 'HOST','localhost');

define('DBNAME','db_pagos');

define('USERNAME','root');

define('PASSWORD','');

define('CONN',new PDO("mysql:host=".HOST.";dbname=".DBNAME, USERNAME, PASSWORD));

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     echo "Connected to $dbname at $host successfully.";
// } catch (PDOException $pe) {
//     die("Could not connect to the database $dbname :" . $pe->getMessage());
// }
    
    

function getTareas(){
    
    
    $sentencia = CONN -> prepare("SELECT * FROM pagos");
    $sentencia ->execute();
    $tareas = $sentencia-> fetchAll(PDO::FETCH_ASSOC);

    return $tareas;
}
function llamadoPrueba(){
    
    $sentencia = CONN-> prepare("SELECT * FROM pagos");
    $sentencia -> execute();
    $result = $sentencia-> fetchAll(PDO::FETCH_GROUP|PDO::FETCH_UNIQUE|PDO::FETCH_ASSOC);

    return $result;
}

    function agregar(){
        
            $deudor = $_POST['deudor'];
            $cuota = $_POST['cuota'];
            $cuotaCapital = $_POST['cuota_capital'];
            $fecha = $_POST['fecha'];
    
            $repetido=false;
    
            $tabla = getTareas();
    
            foreach ($tabla as $fila) {
                if(in_array($_POST['deudor'],$fila)){
                    $repetido = true;
                }
                }
                if(!$repetido){
                    try{
                        conectar();
                        $sentencia = CONN -> prepare("INSERT INTO pagos ( deudor,cuota,cuota_capital,fecha_pago) VALUES ( ?,?,?,?)");
                        $sentencia ->execute([$deudor,$cuota,$cuotaCapital,$fecha]);
                        header("Location: http://localhost/db_practico/router.php");
                        
                        
                        }catch(PDOException $e){
                            echo $e;
                        }
                }else{
                    header("Location: http://localhost/db_practico/router.php?action=error");
                }
                
    }
    function eliminar($id){
        try{
            $sentencia = CONN -> prepare("DELETE FROM pagos WHERE id=?");
            $sentencia ->execute([$id]); 
            header("Location: http://localhost/db_practico/router.php");
            }catch(PDOException $e){
                echo $e;
            }
    }

    if(!empty($_POST['deudor']) && empty($_POST['id'])){
        agregar();
    }
    if(!empty($_GET['borrado'])){
        eliminar($_GET['borrado']);
    }
    
    if(!empty($_POST['id'])){
        try{
        $sentencia = CONN -> prepare("UPDATE pagos SET deudor=?,cuota=?,cuota_capital=?,fecha_pago=? WHERE id=?");
        $sentencia ->execute([$_POST['deudor'],$_POST['cuota'],$_POST['cuota_capital'],$_POST['fecha'],$_POST['id']]);
        header("Location: http://localhost/db_practico/router.php");
        }catch(PDOExeption $e){
            echo $e;
        }

    }
        
    
    

?>