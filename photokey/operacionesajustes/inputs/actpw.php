<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Photokey</title>
    <link rel="stylesheet" href="../../css/outside.css">
    <link rel="stylesheet" href="../../css/headerstyle.css">
    <script src="../../custom.js"></script>
  </head>
  <body onload="nobackbutton();">
    <header>
        <div class="container">
            <a class="logo" href="../../index.php">
                <img src="../../img/instagram-logo.svg" alt="Logo">
                <img src="../../img/insta.png" alt="Nombre Aplicacion">
            </a>

            <nav>
                <a href="../../index.php">
                        <img src="../../img/compass.svg" alt="Explorar">
                    </a>
                    <a href="../../ajustes.php">
                            <img src="../../img/set.png" alt="Ajustes">
                        </a>
                    <a href="../../perfil.php">
                            <img src="../../img/user.svg" alt="Perfil">
                        </a>

            </nav>
        </div>
    </header>
    <div class="container">
    <div class="card">
        <span class="logo">
            <img src="../../img/insta.png" alt="Instafeed picture">
        </span>
        <form action="../actionpw.php" method="POST" enctype='multipart/form-data'>

            <div class="ta">
                <input type="password" class="form-input" name="pw" placeholder="Antigua Contraseña." required >
                <input type="password" class="form-input" name="pwnew" placeholder="Nueva Contraseña." required >
            </div>
            <input type="submit" class="btn btn-blue" value="Guardar">
        </form>
    </div>

</div>
  </body>
</html>
