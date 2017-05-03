<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Imprimir</title>
  </head>
  <body>
    <form action="imprimir.php" method="post">
        Nombre: <input type="text" name="nombre">
        <br>
        <br>
        Email: <input type="text" name="email">
        <br>
        <br>
        <label>Como te entereaste de este sitio? </label><br>
        <input type="checkbox" name="pregunta">Sitio Web<br>
        <input type="checkbox" name="amigo" value="amigo">Un Amigo <br>
        <input type="checkbox" name="referido" value="referido">Referido<br>
        <br><br>
        <label>Sexo:</label><br>
        <input type="radio" name="genero" value="femenino">Femenido<br>
        <input type="radio" name="genero" value="masculino">Masculino<br>
        <input type="radio" name="genero" value="otro">Otro<br>
        <br>
        <label>Del 1 al 10 como dormiste anoche??</label>
        <select>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
        <br>
        <br>
        <input type="submit" name="enviar"><br>

        <br>
        <br>

        <?php
        echo '<prev>';
        // var_dump($_GET) . '<br>';
        // echo ($_GET["nombre"]);
        foreach ($_POST as $value) {
          print_r($value);
        }

         ?>

    </form>
  </body>
</html>
