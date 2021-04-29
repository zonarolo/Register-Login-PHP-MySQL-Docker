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

  <title>Login</title>
</head>

<body>

  <?php if (isset($_GET['error']) && $_GET['error'] == 1) : ?>

    <div class="container media">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Contraseña incorrecta.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>

  <?php endif; ?>

  <h3 class="text-center m-5">Login</h3>
  <form name="formulario-sesion" class="media" action="profile.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" name="email" autofocus>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Recordarme</label>
    </div>
    <div class="mb-3 text-center"><button type="submit" class="btn btn-primary btn-lg text-center">INICIAR SESION</button></div>
    <div class="m-5 text-center">
      <a href="index.php" class="btn btn-secondary text-center btn-sm">Login</a>
      <a href="register.php" class="btn btn-secondary text-center btn-sm">Registro</a>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>