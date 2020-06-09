<?php



	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "bd_usuarios";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

//declaracion de variables
$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$fecha= $_POST["fecha"];
$id= $_POST["ID"];
$password = $_POST["password"];
$domicilio = $_POST["domicilio"];
$country = $_POST["country"];
$cp = $_POST["cp"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];

if($nombre != "" and filter_var ($email, FILTER_VALIDATE_EMAIL) {
	//Inserta valores en cada columna correspondiente
	$sql = "INSERT INTO usuarios (NOMBRE, APELLIDOS, FECHA, ID, CIUDAD, CANUM, CP, NTEL, EMAIL, PASSWORD)
	VALUES ('$nombre', '$apellidos', '$fecha', '$id', '$country', '$domicilio', '$cp', '$telefono', '$email', '$password')";
	if(mysqli_query($sql, $conexion);
  if (mysqli_query($sql, $conexion)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
}

mysqli_close( $conexion );
?>