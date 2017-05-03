<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicios clase 1 PHP</title>
  </head>
  <body>
    <?php
    echo '<h2>' . "Ejercicio Nro 1" . '</h2>';
    /*ejercicios 1 clase 1 PHP*/
        $entero = 9;
        echo "El numero entero es:" . $entero . '<br>';
        var_dump($entero) ;
        echo '<br>';

        $decimal = 2.5;
        echo "El numero decimal es:" . $decimal . '<br>';
        var_dump($decimal);
        echo '<br>';

        $caracter1 = 'S' ;
        echo "La Letra es:" . $caracter1 . '<br>';
        var_dump($caracter1);
        echo '<br>';

        $caracter2 = "M" ;
        echo "La Letra es:" . $caracter2 . '<br>';
        var_dump($caracter2);
        echo '<br>';

        $simple = 'Madrecita' ;
        echo "La Palabra es:" . $simple . '<br>';
        var_dump($simple);
        echo '<br>';

        $doble = "Vampirescos" ;
        echo "La Palabra es:" . $doble . '<br>';
        var_dump($doble);
        echo '<br>';


    /*ejercicios 2 clase 1 PHP*/
        echo '<h2>' . "Ejercicio Nro 2" . '</h2>';
        // echo '<br>';
        $uno = "Tres";
        $dos = "tristes";
        $tres = "tigres";
        $cuatro = "comian";
        $cinco = "trigo";
        $seis = "en";
        $siete = "un";
        $ocho = "trigal";
        echo "\"$uno" . " " . "$dos" . " " . "$tres" . " " . "$cuatro" . " " . "$cinco" . " " . "$seis" . " " . "$siete" . " " . "$ocho\"";
        echo '<br>';
        // No se puede asignar un numero como nombre de un variable

      /*ejercicios 3 clase 1 PHP*/
        echo '<h2>' . "Ejercicio Nro 3" . '</h2>';
        $varaible01 = true;
        $varaible02 = false;
        $varaible03 = 0;
        $varaible04 = 1;
        $varaible05 = 6;
        $varaible06 = '';
        $varaible07 = "3";
        $varaible08 = "true";
        $varaible09 = 'false';
        $varaible10 = null;
        function tipoDato($varN) {
          if ( $varN == true ){
          echo 'el valor' . $varN . 'es verdadero.';
          }
          else{
          echo 'el valor' . $varN . 'es falso.';
          }
        }
          tipoDato($varaible01);
          echo '<br>';

    /*ejercicios 4 clase 1 PHP*/
        echo '<h2>' . "Ejercicio Nro 4" . '</h2>';
        $animales = array("Turpial", "Leon", "Mono", "Lapa", "Murcielago", "Mariposa", "Anaconda");
        var_dump($animales);
        echo '<br>';
        echo "Me gustan los Animales:" . '<br>' . $animales[0] . '<br>' . $animales[1] . '<br>' . $animales[2] . '<br>' . $animales[3] . '<br>' . $animales[4] . '<br>' . $animales[5] . '<br>' . $animales[6];
        echo '<br>';

    /*ejercicios 5 clase 1 PHP*/
        echo '<h2>' . "Ejercicio Nro 5" . '</h2>';
        $auto = array('Dueño' => 'Danasha', 'Marca' => 'Kia', 'Modelo' => 'Rio', 'Color' => 'Rojo', 'Año' =>'2007');
        // array_unshift($auto, 'Dueño' => 'Danasha');
        var_dump($auto);
        echo '<br>';
        echo "El Dueño es:" . " " . "$auto[Dueño]";
        echo '<br>';

    /*ejercicios 6 clase 1 PHP*/
        echo '<h2>' . "Ejercicio Nro 6" . '</h2>';
        echo "La suma entre el entero y el decimal es:" . " " . ($decimal + $entero);
        echo '<br>';
        echo "La resta entre el entero y el decimal es:" . " " . ($decimal - $entero);
        echo '<br>';
        echo "La division entre el entero y el decimal es:" . " " . ($entero / $decimal);
        echo '<br>';
        echo "La mutiplicacion entre el entero y el decimal es:" . " " . ($entero * $decimal);
        echo "Resultado final es:" . " " . ($resultado = ((($entero*2) + $decimal) / $entero));
        echo '<br>';

    /*ejercicios 7 clase 1 PHP*/
            echo '<h2>' . "Ejercicio Nro 7" . '</h2>';
            $var1 = "Hola";
            $var2 = "Mundo";
            echo "$var1" . " " . " $var2";
            echo '<br>';
            echo "$var1" , " " . "Que bueno esta PHP";



    ?>


  </body>
</html>
