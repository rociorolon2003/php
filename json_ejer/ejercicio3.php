<?php
//ej: localhost/webservices/ejercicio3.php?peso=75&estatura=183
//definimos con header el tipo de documento (JSON)
header("Content-Type:application/json");

$peso = $_GET['peso']?? null; 
$estatura = $_GET['estatura']?? null;


//validamos las variables
if(!empty($peso) && !empty($estatura))
{ 
    //convertimos cm en m 
    $estatura = $estatura / 100;

    //formula peso(KG)/talla(m2)
    $imc = $peso / ($estatura * $estatura);

    //redondeo a dos decimales
    $imc= round($imc, 2);

    //entregamos respuestas
    respuesta(200, "ok" , $imc); 
}
else
{ 
    //entregamos respuesta
    respuesta(200, "datos no validos" , null); 
 }
   
 //funcion que crea la respuesta, con estado, msj de estados y datos
    function respuesta($estado, $mensaje_estado, $datos)
 { 

//cabecera resuesta
header("HTPP/1.1 $estado $mensaje_estado");
//rellenamos array con estado, msj y datos
$respuesta['estado'] = $estado;
$respuesta['mensaje_estado']= $mensaje_estado;
$respuesta['datos'] = $datos;

//codif en json
$respuesta_json= json_encode($respuesta);

//pintamos el contenido d json
    echo $respuesta_json;
 }
 ?> 