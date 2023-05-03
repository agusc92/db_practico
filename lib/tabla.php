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
                    foreach($fila as $valor){
                        echo"<td >$valor</td>";
                    }


                    echo'</tr>';
                }

            echo    '</tbody>
            </table>
        
        
        ';

    }
    
        
        
    ?>