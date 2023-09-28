<html>
    <head>
        <title>Una calculadora simple</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['m'])){
            $mensaje = $_REQUEST['m'];
            echo $mensaje;
        }
    
    ?>
    <form action="operar2.php" method="post">
        ingrese primer valor:
        <input type="text" name="valor1">
        <br>
        ingrese el segundo valor:
        <input type="text" name="valor2">
        <br>
        <select name="operacion">
            <option value="suma">sumar</option>
            <option value="resta">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
</select>
<br>
<input type="submit" name="calcular">
</form>
</body>
</html>