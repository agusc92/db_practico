<?php
    function mostrarThead($tabla){
        echo'
            <h2>Tabla de pagos</h2>
            <table>
                <thead>
                <tr>
            ';
            //harcodeo una posicion en el array para acceder a los titulos de las columnas
            foreach($tabla[0] as $campo => $valor){
                echo "<th >$campo</th>";
            }

                echo '</tr>
                        </thead>';
            

    }
    function mostrarTbody($tabla){
        echo'
                <tbody>';
                //doble forheach para crear las filas y cada una de sus celdas
                foreach ($tabla as $fila) {
                    echo'<tr>';
                    foreach($fila as $clave =>$valor){
                        echo"<td >$valor</td>";
                    }
                    echo "<td><a href='http://localhost/db_practico/db_connect.php?borrado=$fila[id]'>borrar pago</a></td>";

                    echo "<td><a href='http://localhost/db_practico/router.php?editar=$fila[id]&deudor=$fila[deudor]&cuota=$fila[cuota]&cuota_capital=$fila[cuota_capital]&fecha=$fila[fecha_pago]'>editar pago</a></td>";

                    echo'</tr>';
                }

            echo    '</tbody>
            </table>
        
        
        ';

    }
    
        function errorPagos(){
            echo '<div>pago repetido</div>';
        }
        
    ?>