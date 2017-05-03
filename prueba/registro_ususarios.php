<?php
if ($_POST) {
  //echo $_POST['name'];
  // echo '<pre>';
  print_r($_POST);
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de Usuarios</title>
  </head>
  <body>
    <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h1>Registro de Usuarios</h1><br>
    <label for="name">Nombre</label><br>
    <input type="text" name="name" placeholder="Ingresar Nombre y Apellido" value="<?=$_POST['name'];?>"><br>
    <label for="edad">Edad</label><br>
    <input type="text" name="edad" placeholder="Ingresar edad" value="<?=$_POST['edad'];?>"><br>
    <label for="sexo">Sexo</label><br>
    <input type="radio" name="sexo" value="femenino" <?php if ($_POST['sexo']=="femenino") { echo 'checked';}?>>Femenino<br>
    <input type="radio" name="sexo" value="masculino" <?php if ($_POST['sexo']=="masculino") { echo 'checked';}?>>Masculino<br>
    <input type="radio" name="sexo" value="otro" <?php if ($_POST['sexo']=="otro") { echo 'checked';}?>>Otro<br>
    <label for="country">Pais de Origen</label>
    <select class="country" name="country" >
      <?php
      $country = array('Argentina','Uruguay','Chile','Venezuela','Colombia','Mexico');
      foreach ($country as $value) {
        echo "<option value='". $value."'" ;
        if ($_POST['country'] == $value) {
          echo "selected";
        }
        echo ">" . $value ."</option>";
      }
       ?>
    </select>
    <br>
    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="tucorreo@tucorreo.com" value="<?=$_POST['email'];?>"><br>
    <label for="password">Contraseña</label><br>
    <input type="password" name="password" placeholder="Ingresar contraseña">
    <br>
    <br>
    <button type="submit" name="enviar">Enviar</button>

    </form>
    <?php
      echo '<pre>';
     ?>
  </body>
</html>
