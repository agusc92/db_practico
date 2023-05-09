<?php
    function mostrarHead(){
        echo'
                        <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="styles/style.css">
                    
                    <title>Document</title>
                </head>
                <body>
        ';
    }

    function mostrarHeader(){
        echo'
                <header class="row">
                    <div class="col">
                        <h1 >
                            Negocio de agus
                        </h1>
                    </div>
                </header>
            <main>
        ';
    }
    function mostrarFooter(){
        echo'
                </main>
                <footer>

                </footer>

                
            </body>
            </html>        
        ';
    }
    function mostrarFormulario(){
        echo '
        <form action="db_connect.php" method="post">
            <h3>formulario agregar</h3>
            <div>
                <label for="deudor">ingrese nombre</label>
                <input type="text" id="deudor" name="deudor" placeholder="pepito">
            </div>

            <div>
                <label for="cuota">ingrese numero de cuota</label>
                <input type="number" id="cuota" name="cuota" placeholder="ingrese un numero">
            </div>

            <div>
                <label for="cuota_capital">ingrese nombre</label>
                <input type="number" id="cuota_capital" name="cuota_capital" placeholder="ingrese un monto">
            </div>

            <div>
                <label for="fecha">ingrese fecha de pago</label>
                <input type="date" id="fecha" name="fecha">
            </div>

            <button type="submit">aceptar</button>
        </form>
        
        ';
    }
    function mostrarFormularioEditar($get){
        echo '
        <form action="db_connect.php" method="post">
            <h3>formulario agregar</h3>
            <div>
                <label for="deudor">ingrese nombre</label>
                <input type="text" id="deudor" name="deudor" placeholder="pepito" value="'.$get['deudor'].'">
            </div>

            <div>
                <label for="cuota">ingrese numero de cuota</label>
                <input type="number" id="cuota" name="cuota" placeholder="ingrese un numero" value="'.$get['cuota'].'">
            </div>

            <div>
                <label for="cuota_capital">ingrese nombre</label>
                <input type="number" id="cuota_capital" name="cuota_capital" placeholder="ingrese un monto" value="'.$get['cuota_capital'].'">
            </div>

            <div>
                <label for="fecha">ingrese fecha de pago</label>
                <input type="date" id="fecha" name="fecha" value="'.$get['fecha'].'">
            </div>
            <div>
            <label for="id">id</label>
            <input type="text" id="id" name="id" value="'.$get['editar'].'" readonly>
            </div>
            <button type="submit">aceptar</button>
        </form>
        
        ';
    }
?>