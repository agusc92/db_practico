<?php
    require_once 'db_connect.php';
    require_once 'lib/tabla.php';
    require_once 'lib/estructura_pagina.php';

    //tabla completa guardada en una constatnte
    define('TAREAS',getTareas());

    //impresion de prueba para PDO
    print_r(llamadoPrueba());
    
    mostrarHead();
    mostrarHeader();
    mostrarThead(TAREAS);
    mostrarTbody(TAREAS);
    if(!empty($_GET['action'])){
        errorPagos();
    }
    if(!empty($_GET['editar'])){
        mostrarFormularioEditar($_GET);
     }else{
        mostrarFormulario();
     }
    
    mostrarFooter();

?>