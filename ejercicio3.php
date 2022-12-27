<?php
  /*En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. Si el paciente es operado
deberá además cancelar $1000 por los gastos más 20% del pago total por honorarios del doctor. Dados n días
que estuvo el paciente, escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos
hechos.*/

   $nombre = "Juan";  
   $dias = 3;  

   $hospitalizacion = $dias * 25;

   
   $operacion = true;  

   if ($operacion) {
     
      $operation = 1000;
      $total = $hospitalizacion + $operacion;
      $doctor = $total * 0.2;
      $pagofinal = $total + $doctor;
   } else {
      $pagofinal = $hospitalizacion;
   }


   
   echo "Nombre del paciente: " . $nombre . "<br>";
   echo "Número de días hospitalizado: " . $dias . "<br><br>";

   echo "Cargo por hospitalización: $" . $hospitalizacion . "<br>";

   if ($operacion) {
     
      echo "Cargo por operación: $" . $operation . "<br>";
      echo "Honorarios del doctor: $" . $doctor . "<br>";
   }

   echo "Total a pagar: $" . $pagofinal;
?>

