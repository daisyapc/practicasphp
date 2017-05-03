<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica General I parte</title>
  </head>
  <body>
    <?php

    function calculaEdad($fn){
      // el $fn debe llegar con el formato YYYY-MM-DD
      $fn = array();
      $fecha = explode("-", $fn);
      // $diferencia_edad= 0;
      $dia_actual= date('d');
      $mes_actual = date('m');
      $anio_actual = date('Y');
            if ($fecha[0] < $anio_actual && $fecha[1] > $mes_actual) {
              $diferencia_edad = $fecha[0] - $anio_actual;
              $diferencia_edad --;
            }
            else if ($fecha[1] == $mes_actual && $fecha[2] > $mes_actual) {
              $diferencia_edad = $fecha[0] - $anio_actual;
            }
echo "Usted tiene" . " " . $diferencia_edad . " " . "años";

    }
return calculaEdad($fn);
     ?>

  </body>
</html>
