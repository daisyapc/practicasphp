<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Calcular edad PHP</title>
  </head>
  <body>
    <form action="practicaGeneral1.php" method="post">
      <label>Dia</label>
      <select name="dia">
        <?php
        for ($i=1; $i < 32; $i++) {
          echo "<option value='". $i ."'>" . $i ."</option>";
        }
         ?>
      </select>
      <br><br>

      <label>Mes</label>
        <select name="mes">
          <?php
              for ($i=1; $i < 13 ; $i++) {
                echo "<option value='". $i ."'>" . $i ."</option>";
              }
           ?>
        </select>
        <br><br>

      <label>Año</label>
        <select name="anio">
          <?php
              for ($i=date('Y'); $i > 1900 ; $i--) {
                echo "<option value='". $i ."'>" . $i ."</option>";
              }
           ?>

        </select>
      <br><br>
        <input type="submit" name="Enviar" value="Enviar">

    </form>
  </body>
</html>
