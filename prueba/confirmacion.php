<?php

// print_r($_POST);


if (!$_POST) {
  header('Location:http://localhost/prueba/registro_ususarios.php');
}
else{
  echo "Muchas Gracias por Registarte" . '<br>';
$nombre= $_POST['name'];
$edad= $_POST['edad'];
$email= $_POST['email'];
$sexo= $_POST['sexo'];
$pais=$_POST['country'];

echo "Tu Nombre Completo es:" . $nombre . '<br>';
echo "Has indicado que tienes" . $edad . "años" . '<br>';
echo "Hemos registrado tu email" . $email . '<br>';
echo "De Sexo" . $sexo . '<br>';
echo "Originario de:" . $pais . '<br>';

echo "Gracias!!!";
}


 ?>
