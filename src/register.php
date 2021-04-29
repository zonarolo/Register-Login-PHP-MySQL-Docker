<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
    .media {
      max-width: 50%;
      margin: 1rem auto;
    }
  </style>

  <title>Register</title>
</head>

<body>

  <?php if (isset($_GET['error']) && $_GET['error'] == 1) : ?>

    <div class="container media">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Las contraseñas deben ser iguales.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>

  <?php endif; ?>

  <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>

    <div class="container media">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Te has registrado correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>

  <?php endif; ?>

  <form name="formulario" class="media text-center" action="filedb.php" method="post" enctype="multipart/form-data">
    <h3 class="text-center m-5">Verificacion de datos</h3>
    <div class="mb-3">
      <input type="nombre" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
    </div>
    <div class="mb-3">
      <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword1" name="password1" placeholder="Password">
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword2" name="password2" placeholder="Repetir Password">
    </div>
    <div class="mb-3 text-center">
      <input type="file" class="form-control" name="file">
    </div>

    <button type="submit" class="btn btn-primary btn-lg text-center">REGISTRO</button>
    <div class="m-5 text-center">
      <a href="index.php" class="btn btn-secondary text-center btn-sm">Login</a>
      <a href="register.php" class="btn btn-secondary text-center btn-sm">Registro</a>
    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>