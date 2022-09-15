<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("residencia_db",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombre_s = $_POST['nombre_s'];
	$apellido_pa = $_POST['apellido_pa'];
  $apellido_ma = $_POST['apellido_ma'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$rev_contraseña = $_POST['rev_contraseña'];

	//Obtiene la longitus de un string
	$req = (strlen($nombre_s)*strlen($apellido_pa)*strlen($apellido_ma)*strlen($correo)*strlen($contraseña)*strlen($rev_contraseña)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($contraseña != $rev_contraseña) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($contraseña);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombre_s','$apellido_pa','$apellido_ma','$correo','$contraseña')",$link) or die("<h2>Error de guardando de datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="i-registro.html";
		</script>
	'


?>