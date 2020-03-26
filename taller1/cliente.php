<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/css/estilos.css">
    <title>MULTIPLICAR</title>
</head>
<body>
    <header>
        <h2>Integrantes:</h2>
        <h3>Anthony Barahona Villamil</h3>
    </header>


    <section>
        <p>SI DESEA CAMBIAR LOS OPERADORES, EDITAR VALORES EN CLIENTE.PHP</p>

        <container>

            <!-- INICIO segmento correspondiente al cliente.php -->

            <?php

            /*  Integrantes:
            ANTHONY BARAHONA VILLAMIL
            */

            //Incluir libreria NUSOAP
            require_once('lib/nusoap.php');

            //Creamos un nuevo cliente SOAP, designando los parametros que requiere la funcion del servidor
            $cliente = new nusoap_client('http://localhost/taller1/server.php', false);

            $num1 = 23;
            $num2 = 5;
            $num3 = 16;
            $parametros = array('num1'=>$num1,'num2'=>$num2,'num3'=>$num3);

            //Se llama la funcion 'Multiplicar' de server.php
            $r = $cliente->call('Multiplicar', $parametros);
            print_r($r);

            ?>

            <!-- FIN segmento correspondiente al cliente.php -->        

        </container>
    </section>
</body>
</html>
