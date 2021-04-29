<?php
$name = $_POST['nombre'];
$lastname = $_POST['apellidos'];
$email = $_POST['email'];

$options = [
  'cost' => 12,
];

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 === $password2) {

  $realPassword = password_hash($password1, PASSWORD_BCRYPT, $options);

  $ip = "172.23.0.2";
  $username = "root";
  $password = "123";
  $db = "registros";

  if (!is_dir('images')) {
    mkdir('images');
  }

  move_uploaded_file($_FILES['file']['tmp_name'], './images/' . $_FILES['file']['name']);

  $ruta = './images/' . $_FILES['file']['name'];

  $conn = mysqli_connect($ip, $username, $password, $db) or die("No se ha podido conectar al servidor de Base de datos");

  $sql = "INSERT INTO registros (nombre, apellido, email, password, avatar) VALUES ('$name','$lastname','$email','$realPassword','$ruta')";

  if (mysqli_query($conn, $sql)) {
    header('Location: register.php?success=1');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
} else {
  header('Location: register.php?error=1');
}
