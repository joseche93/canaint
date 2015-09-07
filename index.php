<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultas</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<section class="consulta">
		<div class="container">
			<label class="label" for="fraccion" id="fraccion">Fracción</label>
			<input class="campo" type="text" id="fraccion" name="fraccion">	
		</div>		
		<div class="container">
			<label class="label" for="capitulo">Capítulo</label>
			<input class="campo" type="text" id="capitulo" name="capitulo">
		</div>
		<div class="container">
			<label class="label" for="partida">Partida</label>
			<input class="campo" type="text" id="partida" name="partida">
		</div>
		<div class="container">
			<label class="label" for="subpartida">Subpartida</label>
			<input class="campo" type="text" id="subpartida" name="subpartida">
		</div>
		<div class="container">
			<label class="label" for="arancel">Arancel</label>
			<input class="campo" type="text" id="arancel" name="arancel">
		</div>	
		<div>
			<label class="label" for="PE">Precio Estimado</label>		
			<input class="campo" type="text" id="PE" name="PE">
		</div>
		<input type="submit" name="importacion" id="importacion" class="boton" value="Importaciones">
		<input type="submit" class="boton" value="Importaciones Subv">
		<input type="submit" class="boton" value="Importaciones no Subv">
		<input type="submit" class="boton" value="Importaciones por PO">
		<input type="submit" class="boton" value="Importaciones por PO Subv">
		<input type="submit" class="boton" value="Importaciones por PO no Subv">
		<input type="submit" class="boton" value="Promedio de Importaciones Subv">
		<input type="submit" class="boton" value="Importaciones por PO no Subv">
		<input type="submit" class="boton" value="Promedio de Importaciones Subv">
		<input type="submit" class="boton" value="Precio promedio de Importaciones">
	</section>
	<section id="contenido"></section>
	<script src="lib/jquery/dist/jquery.min.js"></script>
	<script src="js/consultas.js"></script>
</body>
</html>