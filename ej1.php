<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
    $paquetes = 0;
    $tamano = 0;
    $peso = 0;
    $zona = 0;
    $ancho = 0;
    $largo = 0;
    $alto = 0;
    $transporte = 0;
    
    $alto * $ancho * $largo = $tamano;
  
if($_SERVER['REQUEST_METHOD'] == 'POST') 
{



        if ($tamano <= 0.5) { 
        
            $precio = 50 * $tamano;
        }
            elseif ($tamano <= 1) { 
            $precio = 75 * $tamano;
            }
            else {
                $precio = 100 * $tamano;
            } 
            
        
    if($peso > 5) {
        $precio * 0.25;
    }
    elseif ($peso > 10) { 
        $precio * 0.5;
    }
    elseif ($peso > 15){
        echo "no se envia";
    }
    if ($zona = 1) {
        $zona = "Peninsula";
        echo "sin coste adicional por envio";
    }
    elseif ($zona = 2) {
        $zona = "baleares";
        if ($transporte = 1) {
            $transporte = "maritimo";
            echo "sin coste";}
            elseif ($transporte = 2) {
            $transporte = "aereo";
            echo "con coste del 10%"; }
    }
    elseif ($zona = 3) {
        $zona = "canarias";
        echo "con coste del 10%";
    }
    echo "su precio es " . $precio;
}       
    ?>
    
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="zona">ZONA:</label>
        <input type="number" id="zona" name="zona" value="">
        <label for="transporte">Transporte:</label>
        <input type="number" id="transporte" name="transporte" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>