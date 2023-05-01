<?php
    function mostrarThead($tabla){
        echo'
            <h2>Tabla de pagos</h2>
            <table>
                <thead>
                <tr>
            ';
            foreach($tabla[0] as $campo => $valor){
                echo "<td>$campo</td>";
            }

                echo '</tr>
                        </thead>';
            

    }
    function mostrarTbody($tabla){
        echo'
                <tbody>';
                foreach ($tabla as $fila) {
                    echo'<tr>';
                    foreach($fila as $valor){
                        echo"<td>$valor</td>";
                    }


                    echo'</tr>';
                }

            echo    '</tbody>
            </table>
        
        
        ';

    }
    
        
        
    ?>