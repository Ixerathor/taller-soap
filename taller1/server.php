<?php
//Incluir libreria nusoap
include_once 'lib/nusoap.php';

//Creamos un servicio web SOAP instanciando la clase NUSOAP y su metodo SOAP_SERVE
$service = new soap_server();

$ns = "urn:wsdlservice";
$service->configureWSDL("WebService", $ns);
$service->schemaTargetNamespace = $ns;

// Registramos la funcion en el servicio SOAP
$service->register("Multiplicar", array('num1' => 'xsd:integer', 'num2' => 'xsd:integer', 'num3' => 'xsd:integer'), array('return' => 'xsd:string'), $ns);

//Creamos la funcion
function Multiplicar($num1, $num2, $num3)
{
    $rmultiplicar = $num1 * $num2 * $num3;
    $r = "El resultado de la multiplicacion entre " . $num1 . " * " . $num2 . " * " . $num3 . " es: " . $rmultiplicar;
    return $r;
}

//Entrega de datos al servicio SOAP
$httpPost = file_get_contents('php://input');
$service->service($httpPost);

