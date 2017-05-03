<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JSON Ejercicio Nro 2</title>
  </head>
  <body>
    <?php
      function comprobar($archivo){
        if (file_exists($archivo) ){
        $archi1 = fopen($archivo, 'a+');
        //else{echo 'No se pudo leer el archivo';}
        fwrite($archi1,PHP_EOL . 'Hola Mundo!, testing');
        fclose($archi1);
        }
        else {
          $archi1 = fopen($archivo, 'w+');
          fwrite($archi1,'Hola Mundo!, testing');
          fclose($archi1);
        }
      }

      comprobar('text.txt');

//Ejercicio Nro. 2
      function escribir($archivo){
      $archi1 = fopen($archivo, 'a+');
      for ($i=0; $i < 101 ; $i++) {
        fwrite($archi1,PHP_EOL .'Hola Mundo!, testing');
      }
       fread($archi1,$i);
        fclose($archi1);
}
      escribir('text.txt');
/* $i= 0 while (($linea =fgets($archivo)) ! == false){ i++; echo 'linea' $i -> $linea '<br>'; fclose($archivo)}
// unlink('text.txt')




      /*$escribir = file_get_contents('text.txt');
      echo $escribir;

      function archivo2($archivo){
        $archi2= fopen($archivo,'w+');
        fwrite($archi1,PHP_EOL . 'Hola nuevamente mundo!');
        fclose($archi2);
      }
      archivo2('text2.txt');



//Ejercicio Nro. 2 c
      // function leeTodo($archivo){
        // $archi1 = fopen($archivo, 'a+');*/







     ?>


  </body>
</html>
