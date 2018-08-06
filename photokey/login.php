<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Photokey</title>
    <link rel="stylesheet" href="css/outside.css">
    <link rel="stylesheet" href="css/headerstyle.css">
    <script src="custom.js"></script>
  </head>
  <body onload="nobackbutton();">
    <div class="container">
    <div class="card">
        <span class="logo">
            <img src="img/insta.png" alt="Instafeed picture">
        </span>
        <form action="operacioneslogin/loginaction.php" method="POST" >
            <input type="text" class="form-input" name="user" placeholder="Usuario" required >
            <input type="password" class="form-input" name="password" placeholder="Contraseña" required >
            <input type="submit" class="btn btn-blue" value="Entrar">
        </form>
    </div>

    <div class="card">
        <p>¿No tienes cuenta? <a href="registro.php">Registrate</a> </p>
    </div>
</div>
  </body>
</html>
