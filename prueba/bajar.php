<?php

$nombre = str_replace(" ","_",$_FILES['archivo']['name']);
$destino = dirname(__FILE__) . '/subidos/' . $nombre;

if(file_exists($destino)) {
	echo "ya existe";
} else {

$upload = move_uploaded_file($_FILES['archivo']['tmp_name'],$destino);
}
if($upload) {
?>
<a href="<?php echo '/subidos/' . $nombre?>" download >Descargar archivo</a>
<?php
} else {
echo "no se pudo subir";
}
?>
