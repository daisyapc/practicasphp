<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicios clase 2 PHP</title>
  </head>
  <body>
    <?php
    /*ejercicios 1 clase 2 PHP*/
        echo '<h2>' . "Ejercicio Nro 1 Clase Nro2" . '</h2>';
        $var1= 20;
        $var2= 45;
        if($var1 > $var2){
          echo "Numero Mayor es:" . $N = $var1;
        }
        else{
          echo "Numero Mayor es el segundo:" . $N = $var2;
        }
        echo '<br>';

      /*ejercicios 2 clase 2 PHP*/
          echo '<h2>' . "Ejercicio Nro 2 Clase Nro2" . '</h2>';
          $mayor = rand(1,5);
          if($mayor == 3 || $mayor == 5 ){
            echo "El Numero se encuentra dentro de las especificaciones es" . " " . $mayor;
          }
          else {
            echo "Numero fuera de rango";
          }

      /*ejercicios 3 clase 2 PHP*/
              echo '<h2>' . "Ejercicio Nro 3 Clase Nro2" . '</h2>';
              if($mayor <> 3){
                echo "El Numero NO es 3";
              }
              else{
                echo "El Numero es:" . $mayor;
              }


      /*ejercicios 4 clase 2 PHP*/
                echo '<h2>' . "Ejercicio Nro 4 Clase Nro2" . '</h2>';
                $mayorq = rand(1,100);
                if($mayorq > 50){
                  echo "El numero es mayor a 50";
                }
                else{
                  echo "El numero es menor a 50";
                }

        /*ejercicios 5 clase 2 PHP*/
                echo '<h2>' . "Ejercicio Nro 5 Clase Nro2" . '</h2>';
                $mayorPar = rand(0,100);
                if( $mayorPar > 50 && $mayorPar % 2){
                  echo "El Numero es mayor de 50 y es par";
                }
                elseif ($mayorPar == 0 ){
                      echo "El Numero es 0";
                }else
                    echo "El Numero No pasa la condicion";

        /*ejercicios 6 clase 2 PHP*/
                echo '<h2>' . "Ejercicio Nro 6 Clase Nro2" . '</h2>';
                $edad = 20;
                $casado = true;
                $sexo = "Femenino";
                if ($edad > 18 && !$casado){
                  echo "Bienvenido";
                }
                elseif ($sexo == "Otro"){
                  echo "Bienvenido";
                }
                else{
                  echo "No cumple requisitos";
                }

        /*ejercicios 7 clase 2 PHP*/
                echo '<h2>' . "Ejercicio Nro 7 Clase Nro2" . '</h2>';
                $cantidadDeAlumnos = 100;
                if($cantidadDeAlumnos){
                  echo "true";
                }
                else{
                  echo "false";
                }
        /*ejercicios 8 clase 2 PHP*/
               echo '<h2>' . "Ejercicio Nro 8 Clase Nro2" . '</h2>';
                if ($i = 1){
                echo "true";
                }
                else{
                echo "false";
                }

       /*ejercicios 9 clase 2 PHP if ternario no se como resolver*/
                echo '<h2>' . "Ejercicio Nro 9 Clase Nro2" . '</h2>';
                $numero = rand(1,100);
                echo ($numero % 2 == 0) ? "El Numero Par": "No cumple";

      /*ejercicios 10 clase 2 PHP*/
                echo '<h2>' . "Ejercicio Nro 10 Clase Nro2" . '</h2>';
                switch ($i = rand(1,5)) {
                  case '1':
                    echo "La Variable es" . " " . "$i";
                    break;
                    case '2':
                      echo "La Variable es" . " " . "$i";
                      break;
                      case '3':
                        echo "La Variable es" . " " . "$i";
                        break;
                        case '4':
                          echo "La Variable es" . " " . "$i";
                          break;
                          case '5':
                            echo "La Variable es" . " " . "$i";
                            break;
                }

        /*ejercicios 11 clase 2 PHP*/
                echo '<h2>' . "Ejercicio Nro 11 Clase Nro2" . '</h2>';
                $a= 1;
                $b= 5;
                switch ($i = rand($a,$b)) {
                  case '1':
                  echo "La Variable es" . " " . "$i";
                  break;
                  case '2':
                  echo "La Variable es" . " " . "$i";
                  break;
                  default:
                  echo "La Variable no es 1 ni 2 es el numero:" . " " . "$i";
                }
          /*ejercicios 12 clase 2 PHP*/
                        echo '<h2>' . "Ejercicio Nro 12 Clase Nro2" . '</h2>';
                echo ($a<=>$b);




     ?>

  </body>
</html>
