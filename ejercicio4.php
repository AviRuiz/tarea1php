<?php
/*En un supermercado se hace una promoción mediante la cual el cliente obtiene un descuento dependiendo de
un número que escoge al azar. Si el número escogido es menor a 74 el descuento es del 15% sobre el total de la
compra y si es mayor o igual a 74 es de 20%. Obtener cuánto dinero se le descuenta y el pago final.*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $total = $_POST['total'];
    $numero = $_POST['number'];

    if ($numero < 74) {
      $descuento = $total * 0.15;
      $precio_final = $total - $descuento;
    } else {
      $descuento = $total * 0.2;
      $precio_final = $total - $descuento;
    }

    echo "<p>Descuento: $descuento</p>";
    echo "<p>Precio Final: $precio_final</p>";
  }
?>
 
<html>
<head>
  <title>Calcular Descuento</title>
</head>
<body>
  <h1>Calcular Descunto</h1>
  <form method="post">
    <label for="total">Total:</label><br>
    <input type="text" id="total" name="total"><br>
    <label for="numero">Numero:</label><br>
    <input type="text" id="numero" name="numero"><br><br>
    <input type="submit" value="Calcular">
  </form> 

  
    
</body>
</html>

