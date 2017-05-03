<?php
session_start();
if (!empty($_SESSION['contador'])) {
  echo $_SESSION['contador'];
}

 ?>
