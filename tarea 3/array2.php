<!DOCTYPE html>
<html>
    <head>
        <meta  charset="UTF-8" />
        <title> Array 2 </title>
</head>
<body>
    <?php
    $edades = array("Moises"=>  "33", "camila"=>"25", "samanta"=> "17"); 
    echo ( "camila tiene " . $edades["camila"]. " años. " ); 
    
    foreach ($edades as $x => $valor) {
        echo "<br>". "clave=" . $x .", valor=" . $valor;
    }
    ?>
    </body>
    </html>