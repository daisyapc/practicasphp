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
	<body>
		<form action="bajar.php" method="post"enctype="multipart/form-data">

			<label>Elegir archivo:</label>
			<br>
			<br>
			<input type="file" name="archivo">
			<br>
			<br>
			<input type="submit" name="enviar" value="subir archivo">
		</form>
	</body>
</html>
