<html>
	<head>
		<style>
			input {
				font-size: 30px;
			}
			label {
				font-size: 20px;
			}
		</style>
	</head>
	<?php
	function esUnaImagen($ext) {
		$ext = strtolower($ext);
		if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif') {
			return TRUE;
		}
		return FALSE;
	}

	function tienePesoValido($size) {

		$pesoMaximo = 90000;
		// 90 KB

		if ($size > $pesoMaximo) {
			return FALSE;
		}
		return TRUE;
	}

	if (!empty($_POST)) {

		$ext = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);

		$errores = $message = '';

		if (!esUnaImagen($ext) || !tienePesoValido($_FILES['archivo']['size'])) {
			$errores = 'La imagen es muy pesada o no tiene un formato valido';
		} else {

			$randomHash = md5(microtime().'foto');

			$archivo = dirname(__FILE__) . '/img/' . $randomHash . '.' . $ext;
			$upload = move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo);

			if ($upload) {
				$message = "Subio OK!";
				$img = $archivo;
			} else {
				$errores = "no subio";
			}
		}

	}
	?>
	<body>
		<?php if(!empty($errores) || empty($_POST)) { ?>
		<form method="post"enctype="multipart/form-data">

			<h2><?php if(!empty($errores)) { echo $errores;} ?></h2>


			<label>Imagen de perfil:</label>
			<br>
			<br>
			<input type="file" name="archivo">
			<br>
			<br>
			<input type="submit" name="enviar" value="subir archivo">
		</form>
		<?php } else { ?>
			Se subio la imagen ok
		<?php } ?>
	</body>
</html>
