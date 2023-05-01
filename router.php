<?php
    require_once 'db_connect.php';
    require_once 'lib/tabla.php';
    require_once 'lib/estructura_pagina.php';
    define('TAREAS',getTareas());
    print_r(llamadoPrueba());
    
    mostrarHead();
    mostrarHeader();
    mostrarThead(TAREAS);
    mostrarTbody(TAREAS);
    mostrarFooter();

?>