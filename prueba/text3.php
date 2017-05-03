<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicios clase 3 PHP</title>
  </head>
  <body>
    <?php
    /*ejercicios 1 clase 3 PHP*/
        echo '<h2>' . "Ejercicio Nro 1 Clase Nro 3" . '</h2>';
         for ($i=0; $i < 101 ; $i++) {
           echo $i . '<br>';
         }

   /*ejercicios 2 clase 3 PHP*/
         echo '<h2>' . "Ejercicio Nro 2 Clase Nro 3" . '</h2>';

         for ($i= 0; $i < rand(0,100)  ; $i++) {
         echo $i . '<br>';
              }
    /*ejercicios 3 clase 3 PHP Tabla de multiplicar del 2*/
         echo '<h2>' . "Ejercicio Nro 3 Clase Nro 3" . '</h2>';
          $tabla= 2;
          $resultado= 0;
         for ($i= 0 ; $i < 11 ; $i++ ) {
           echo "$i" . "X" . "2" . "=" . " " . $resultado = $i * $tabla . '<br>';
         }
    /*ejercicios 4 clase 3 PHP */
         echo '<h2>' . "Ejercicio Nro 4 Clase Nro 3" . '</h2>';
         $acumulador = 0;
        //  $moneda= rand(0,1);
         $contador = 0;
         while ($acumulador < 5) {
           $contador++;

           $moneda= rand(0,1);
           if ($moneda == 1) {
              $acumulador = $acumulador + 1;
           }
          //  echo "Tiro" . "$vueltas" .  "para llegar a " . "$resultado";
          echo "Vuelta Nro" . " " . $contador . '<br>';
          echo "Resultado" . " " . $acumulador . '<br>';

         }
         echo "Realizo" . " " . "$contador" . " " . "Tiros" . " " . "para llegar a " . " " . "$acumulador";

    /*ejercicios 5 clase 3 PHP igual al anterior usando un do/while*/
         echo '<h2>' . "Ejercicio Nro 5 Clase Nro 3" . '</h2>';

    /*ejercicios 6 clase 3 PHP Array*/
         echo '<h2>' . "Ejercicio Nro 6 Clase Nro 3" . '</h2>';

         $nombre = array('Danasha', 'Ivanna', 'Gilbert', 'Andreina', 'Gabriel');
         for ($i=0; $i < count($nombre) ; $i++) {
           echo "Posicion Nro." . "$i" . " " . $nombre[$i] . '<br>';
         }
         echo '<h2>' . "Ejercicio Nro 6 Clase Nro 3 con While" . '</h2>';

         $arrayNombres = 0;
         while ($arrayNombres < count($nombre)) {

           echo  "Posicion Nro." . "$arrayNombres" . " " . $nombre[$arrayNombres] . '<br>';
            $arrayNombres++;
         }


     /*ejercicios 7 clase 3 PHP Array*/
         echo '<h2>' . "Ejercicio Nro 7 Clase Nro 3" . '</h2>';
         $numeros = array($n1 = rand(1,10), $n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10),$n1 = rand(1,10));
         for ($i=0; $i < count($numeros) ; $i++) {
              // $aleatorio= rand(1,10);
              echo $numeros[$i] . '<br>';
              if ($numeros[$i] == 5) {
                  echo "Se consiguio un Nro 5";
                  break;
              }
         }
     /*ejercicios 7 clase 3 PHP Array*/
         echo '<h2>' . "Ejercicio Nro 7 Clase Nro 3 con While" . '</h2>';
           $limite = 0;
         while ($limite < count($numeros)) {
           echo $numeros[$limite] . '<br>' ;
           if ($numeros[$limite] == 5) {
             echo "Se consiguio un Numero 5";
          break;
           }
           $limite++;
         }

    /*ejercicios 8 clase 3 PHP Array*/
         echo '<h2>' . "Ejercicio Nro 8 Clase Nro 3 En Proceso..." . '</h2>';
          /*$letras = array(range('a','o'));

          for ($index= 0; $index < $value ; $index++) {
            echo $letras[$index];
          }*/

    /*ejercicios 9 y 10 clase 3 PHP Array*/
         echo '<h2>' . "Ejercicio Nro 9 y 10 Clase Nro 3" . '</h2>';
         $mascota= array("Animal" => "Perro", "Edad" => "2", "Altura" => "0,60", "Nombre" => "Azabache");
          foreach ($mascota as $key => $value) {
            echo $key . "=" .$value . '<br>';
          }

    /*ejercicios 11 clase 3 PHP Array*/
         echo '<h2>' . "Ejercicio Nro 11 Clase Nro 3" . '</h2>';

         $ceu = array("Italia" => "Roma","Luxembourg"=>"Luxembourg","Belgica"=>"bruselas","Dinamarca"=>"Copenhagen","Finlandia"=>"Hesinki","Francia"=>"Paris","Slovakia"=>"Bratislava","Eslovenia"=>"Ljubijana","Alemania"=>"Berlin","Gracia"=>"Athenas","Irlanda"=>"Dublin","Holanda"=>"Amsterdam","Portugal"=>"Lisbon","España"=>"Madrid","Suecia"=>"Stockholm","Reino Unido"=>"London","Chipre"=>"Nicocia","Lithuania"=>"Vilnius","Republica Checa"=>"Prague","Estonia"=>"Tallin","Hungria"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valleta","Austria"=>"Vienna","Polonia"=>"Warsaw");
         asort($ceu);
         foreach ($ceu as $key => $value) {
           echo "La capital de" . " " . $key . " " . "es" . " " . $value . '<br>';
         }

    /*ejercicios 12 clase 3 PHP Array*/
          echo '<h2>' . "Ejercicio Nro 12 Clase Nro 3" . '</h2>';
          $pais = array("Argentina"=>["Buenos Aires","Cordoba","Santa Fe"],
                        "Brasil"=>["Brasilia","Rio de Janeiro","Sao Pablo"],
                        "Colombia"=>["Cartagena","Bogota","Barranquilla"],
                        "Francia"=>["Paris","Nate","Lyon"],
                        "Italia"=>["Roma","Milan","Venecia"],
                        "Alemania"=>["Munich","Berlin","FranKfurt"]);

          foreach ($pais as $key => $value) {
            echo "Las ciudades de:" . $key . " " . "son" . '<br>';
              foreach ($value as $value) { /*implode("/",$value)*/
                echo $value;
              }
              }


    /*ejercicios 13 clase 3 PHP Array*/
                    echo '<h2>' . "Ejercicio Nro 13 Clase Nro 3" . '</h2>';
                    $pais = array("Argentina"=>[["Buenos Aires","Cordoba","Santa Fe"],"Es Americano" => true],
                                  "Brasil"=>[["Brasilia","Rio de Janeiro","Sao Pablo"],"Es Americano" => true],
                                  "Colombia"=>[["Cartagena","Bogota","Barranquilla"],"Es Americano" => true],
                                  "Francia"=>[["Paris","Nate","Lyon"],"Es Americano" => false],
                                  "Italia"=>[["Roma","Milan","Venecia"],"Es Americano" => false],
                                  "Alemania"=>[["Munich","Berlin","FranKfurt"],"Es Americano" => false]);
                    foreach ($pais as $key => $value) {
                      echo "Las ciudades de:" . $key . " " . "son" . '<br>';
                      foreach ($value as $value) {
                        if (is_array($value)) {
                          foreach ($value as $c) {
                            echo  $c . ",";
                          }
                        }else {
                          $value = ($value == 1 ? 'Si' : 'No');
                          echo "Es Americano: " . $value;
                        }
                      }
                      echo '<br>';
                    }
     ?>

  </body>
</html>
