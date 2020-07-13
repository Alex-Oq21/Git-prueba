<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>&nbsp;</p>
    <form action="" name="form1" method="post">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operaciones"></label>
            <select name="operacion" id="operacion">
                <option> Suma </option>
                <option> Resta </option>
                <option> Multiplicacion </option>
                <option> División </option>
                <option> Módulo </option>
                <option> Incrementar </option>
                <option> Decrementar </option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>
    <p>&nbsp;</p>
    <?php 
        include("Calculadora.php");

        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            calcular($operacion);
            }
            if(! strcmp("Incrementar", $calculo)){
            
                global $numero1;
                $numero1++;
                $resultado=$numero1;
                echo"El resultado es $resultado";
            }
            if(! strcmp("Decrementar",$calculo)){
                
                global $numero1;
                $numero1--;
                $resultado=$numero1;
                echo"El resultado es ".$resultado;
            }
    ?>
</body>
</html>