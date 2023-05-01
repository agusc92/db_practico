<?php
    function mostrarHead(){
        echo'
                        <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="../styles/style.css">
                    <title>Document</title>
                </head>
                <body>
        ';
    }

    function mostrarHeader(){
        echo'
                <header>
                    <div>
                        <h1>
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

?>