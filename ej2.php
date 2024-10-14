<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
    $numero = 0;
    $resultado = 0;
    if (isset($_POST['num'])){
        $numero = $_POST['num'];
    }

    
    for ($i=$numero; $i >= 1 ; $i-- )
    if($i % 2 == 0) {
        echo $i. "es par <br>";
        $i / 2 == $resultado;

    } else {
        echo $i. "es impar <br>";
    }
        
    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>