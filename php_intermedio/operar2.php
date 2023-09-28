<?php
if(isset($_REQUEST)) {
    $operacion=$_REQUEST['operacion'];
    $valor_1= $_REQUEST['valor1'];
    $valor_2= $_REQUEST['valor2'];
    validar_numero($valor_1);
    validar_numero($valor_2);
    calcular($valor_1, $valor_2, $operacion);
}
?>

<?php
function  validar_numero($x){
    if ($x=="" || $x == NULL){
        $m = "Campos vacíos";
        header('location:ejercicio1_funcion.php?m='.$m);
        exit();
    }
}

function calcular($x, $y, $O){
    if ($O=='suma'){
       echo  $x+$y;
    }elseif ($O=='resta'){
      echo $x-$y;
    }
}