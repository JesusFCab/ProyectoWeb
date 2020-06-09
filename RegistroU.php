<?php



   // Datos de la base de datos
   $usuario = "root";
   $password = "";
   $servidor = "localhost";
   $basededatos = "bd_usuarios";
// Create connection

// creación de la conexión a la base de datos con mysql_connect()
   $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
mysqli_select_db($conexion, $basededatos) or die('No se pudo seleccionar la base de datos'. mysqli_error());

// Check connection

if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
//declaracion de variables
$nombre = $_POST["Nombre"]; 
$apellidos= $_POST["lastname"];
$fecha= $_POST["bday"];
$id= $_POST["ID"];
$password = $_POST["password"];
$domicilio = $_POST["domicilio"];
$country = $_POST["country"];
$cp = $_POST["cp"];
$telefono = $_POST["telefono"];
$email = $_POST["emailaddress"];


$sql = "INSERT INTO usuarios (NOMBRE, APELLIDOS, FECHA, ID, CIUDAD, CANUM, CP, NTEL, EMAIL, PASSWORD)
   VALUES ('$nombre', '$apellidos', '$fecha', '$id', '$country', '$domicilio', '$cp', '$telefono', '$email', '$password')";
   

if ($conexion->query($sql)==TRUE) {
      echo "<script>window.location='Form.html'</script>";

} else {
      echo "Error: " . $sql . "<br>" . $conexion->error;
}
$conexion->close();

?>