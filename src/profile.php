<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect('172.23.0.2', 'root', '123', 'registros') or die("No se ha podido conectar al servidor de Base de datos");

$consulta = "SELECT nombre, apellido, email, password, avatar FROM registros where email='$email'";

$resultado = $conn->query($consulta);
$fila = $resultado->fetch_row();
if (password_verify($password, $fila[3])) {
  echo "Nombre: $fila[0] - Apellidos: $fila[1] - Email: $fila[2] - Avatar:<br> <img src='$fila[4]' />";
  $resultado->close();
} else {
  header('Location: index.php?error=1');
}
