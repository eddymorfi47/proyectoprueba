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
    <header>
        <div class="container">
            <a class="logo" href="index.php">
                <img src="img/instagram-logo.svg" alt="Logo">
                <img src="img/insta.png" alt="Nombre Aplicacion">
            </a>

            <nav>
                <a href="index.php">
                        <img src="img/compass.svg" alt="Explorar">
                    </a>
                <a href="perfil.php">
                        <img src="img/user.svg" alt="Perfil">
                    </a>

            </nav>
        </div>
    </header>
    <div class="container">
    <div class="card">
        <span class="logo">
            <img src="img/insta.png" alt="Instafeed picture">
        </span>
        <form action="operacionessavepost/insertarpost.php" method="POST" enctype='multipart/form-data'>
          <div class="pu">
            <fieldset>
              <input type="file" name="picture" id="picture" />
            </fieldset>
          </div>
            <div class="ta">
                  <textarea type="text" class="form-input" name="comentario" cols="40" rows="5" placeholder="Comentario" required></textarea>
            </div>
            <input type="submit" class="btn btn-blue" value="Publicar">
        </form>
    </div>

</div>
  </body>
</html>
