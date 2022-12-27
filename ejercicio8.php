<!-- HTML form to input vehicle model and price -->
<form method="post">
  <label for="modelo">Modelo:</label><br>
  <input type="text" id="modelo" name="modelo"><br>
  <label for="precio">Precio:</label><br>
  <input type="text" id="precio" name="precio"><br><br>
  <input type="submit" value="Calculate">
</form> 

<?php
 $precio = 0;
 $modelo ='';
 $descuento =0;
 $precio_final =0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  $modelo = $_POST['modelo'];
  $precio = $_POST['precio'];
  
  
  switch (isset($modelo)) {
    case 'volkswagen':
      $descuento = 0.08;
      break;
    case 'toyota':
        $descuento  = 0.09;
      break;
    case 'hyundai':
        $descuento  = 0.06;
      break;
    case 'mazda':
        $descuento  = 0.05;
      break;
    default:
    $descuento  = 0;
      break;
  }

  $precio_final = $precio - ($precio * $descuento);

  echo "Precio Final: $" . number_format($precio_final, 2);
}
?>
