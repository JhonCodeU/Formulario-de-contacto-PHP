<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Contacto</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	<h1>Formulario de contacto</h1>
	
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
	<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

	<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

		<?php if(!empty($errores)): ?>
			<div class="alert error">
				<?php echo $errores; ?>
			</div>
		<?php elseif($enviado): ?>
			<div class="alert success">
				<p>Enviado Correctamente</p>
			</div>
		<?php endif ?>

	<input type="submit" value="Enviar Correo" name="submit" class="btn btn-primary">
	</form>
	</div>
</body>
</html>