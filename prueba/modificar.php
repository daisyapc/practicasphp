<?php
session_start();
if (!empty($_POST['reiniciar'])) {
  $_SESSION['contador']=0;
}
if (!empty($_POST['Incrementar'])) {
  $_SESSION['contador']++;
}
 ?>

<form method="post">
  <input type="submit" name="" value="reiniciar">
</form>
<form method="post">
  <input type="submit" name="" value="Incrementer">
</form>
