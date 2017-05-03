<?php
    // $numeroMagico= 10;
    /*ejercicios 1 clase 4 PHP Funciones*/
        //  echo '<h2>' . "Ejercicio Nro 1 Clase Nro 4 Funcion Mayor()" . '</h2>';
// mayor(10,5,3);
    function mayor($a,$b,$c){
      // $a= 4; $b= 5; $c= 3;
      if ($a > $b && $a > $c) {
        // echo "El numero mayor es" . "=" . " " . $a;
        return $a;
      }
      elseif ($b > $a && $b > $c) {
        // echo "El numero mayor es" . "=" . " " . $b;
        return $b;
      }
      else {
        // echo "El numero mayor es" . "=" . " " . $c;
        return $c;
      }
    }
    // print_r ($totalmayor= mayor(10,5,4));





    // echo '<h2>' . "Funcion Tabla()" . '</h2>';

     function tabla($baset,$limite){

        for ($i=$baset; $i <= $limite ; $i++) {
          $secuencia[]= $i;
          // $baset++;
        }
        return $secuencia;
  echo "El numero base es" . " " . "$baset" . " " . "y el nro Limite es" . " " . "$limite" . '<br>';

      }
      /*$tablaFinal = tabla(20, 50);
       foreach ($tablaFinal as $value ) {
         echo $value;
       }*/

  // echo '<h2>' . "Compracion numero mayor con Numero Magico" . '</h2>';

      /*function mayor($a,$b,$c=''){
        if ($c=='') {
        global $numeroMagico;
        $c= $numeroMagico;
        }
        if ($a > $b && $a > $c) {
          return "El numero mayor es" . "=" . " " . $a;
        }
        elseif ($b > $a && $b > $c) {
          return "El numero mayor es" . "=" . " " . $b;
        }
        else {
          return "El numero mayor es" . "=" . " " . $c;
        }
      }
      // mayor(8,3);
     ?>*/
