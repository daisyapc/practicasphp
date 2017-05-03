<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        echo date("Y-M-D").'<br>';

        $numEntero = 9;
        var_dump($numEntero);
        echo '<br>'.$numEntero;

        $numDecimal= 2.5;
        var_dump($numDecimal);
        echo '<br>'.$numDecimal;
        echo "<br>";

        $cadenaUno= "S";
        var_dump($cadenaUno);
        echo '<br>'.$cadenaUno;

        $cadenaSimple = 'L';
        var_dump($cadenaSimple);
        echo '<br>'.$cadenaSimple;

        $cadenaLarga= "Fascinante";
        var_dump($cadenaLarga);
        echo '<br>'.$cadenaLarga;

        $cadenaMedia='Impresionante';
        var_dump($cadenaMedia);
        echo '<br>'.$cadenaMedia;

        echo'<br>';
        echo "El numero es $numEntero";
        echo "$cadenaLarga"."$numDecimal";

        echo'<br>';
        $uno = "Tres";
        $dos = "tristes";
        $tres = "tigres";
        $cuatro = "comian";
        $cinco = "trigo";
        $seis = "en";
        $siete = "un";
        $ocho = "trigal";
echo'<br>';
echo "Tres
 $dos
  tigres
   $cuatro
    trigo
     $seis
      un
       $ocho
       ";
echo'<br>';
$variable01= true;
$variable02= false;
$variable03= 0;
$variable04= 1;
$variable05= 6;
$variable06= '';
$variable07= 3;
$variable08= true;
$variable09= 'false';
$variable10= 'null';

function tipoDato ($varN)
{
  if ( $varN == true )
  {
    echo 'el valor' . $varN . 'es verdadero.';
  }
  else{
    echo 'el valor' . $varN . 'es falso.';
  }

}
tipoDato($variable03);

echo'<br>';

$miArray[0]= "Tigre";
$miArray[1]= "Leon";
$miArray[2]= "Elefante";
$miArray[3]= "Serpiente";
$miArray[4]= "Mono";
echo '<prev>';
var_dump ($miArray);

/*ejercicios clase 2*/
echo'<br>';
echo'<br>';
$numeroUno = 100;
$numeroDos = 45;
  if ($numeroDos > $numeroUno){
    $N = $numeroDos;
    echo "$N es mayor";
  }
  else {
    $N=$numeroUno;
    echo "$N es mayor que el segundo";
  }

    echo'<br>';
    echo'<br>';
      $varAleatorio = rand(1,5);
        if ($varAleatorio == 3 || $varAleatorio == 5){
          echo "El Numero Aleatorio es $varAleatorio";
        }

      echo'<br>';
      echo'<br>';
      if ($varAleatorio == 5){
        echo "La Variable NO es 3";
      }
      else{
        echo "La Variable es $varAleatorio";
      }
/*Ejerciocio 4*/
echo'<br>';
echo'<br>';
    $aleatorio = rand(1,100);
      if ($aleatorio > 50) {
        echo "El numero aleatorio es mayor de 50";
      }
      else{
        echo "El Numero es menor de 50";
      }
/*Ejerciocio 5*/
      echo'<br>';
      echo'<br>';
          $aleatorio2 = rand(0,100);
            if ($aleatorio2> 50 and $aleatorio2 % 2) {
              echo "El numero pasa la condicion";
            }
            else{
              echo "El Numero NO pasa la condicion";
            }
/*Ejerciocio 6 terminarlo
            echo'<br>';
            echo'<br>';
              $edad = 35,
              $casado = true;
              $sexo= 'Femenino';
              if ($edad > 18 ||) {
                # code...
              }*/






/*Ejerciocio 7*/
echo'<br>';
echo'<br>';

            $sexo= 'Masculino';
            switch ($sexo) {
              case "Femenino":
                echo "Bienvenido Chica";
              break;
              case "Masculino":
                echo "Bienvenido Chico";
              break;
              case "Otro":
                echo "Bienvenido";
              break;
            }
/*Ejercicio de la Clase 3*/
/*Ejercicio 1*/
echo'<br>';
echo'<br>';
      $random= rand(0,100);
      for ($i=1; $i < 101; $i++) {
        echo "$i". '<br>';
      }
/*ejercicio 3*/
      for ($i=1; $i < 10; $i++) {
        echo $i ."x 2=>". $i*2 .'<br>';
      }





       ?>

  </body>
</html>
Hola Mundo!, testingHola Mundo!, testing