<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PhotoKey</title>
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
            <p>Regístrate para ver fotos y vídeos de tus amigos.</p>
            <form action="operacionesreg/registroaction.php" method="POST" novalidate>
                <input type="text" class="form-input" name="username" value="" placeholder="Nombre de Usuario" required >
                <input type="text" class="form-input" name="name" value="" placeholder="Nombre Completo" required >
                <input type="email" class="form-input" name="email"  value="" placeholder="Correo Electronico" required >
                <input type="password" class="form-input" name="password" placeholder="Contraseña" required >
                <input type="password" class="form-input" name="password2" placeholder="Repetir Contraseña" required >
                <input type="submit" class="btn btn-blue" value="Entrar">
            </form>

        </div>

        <div class="card">
            <p>¿Tienes una cuenta? <a href="login.php">Entrar</a> </p>
        </div>
    </div>
  </body>
</html>
