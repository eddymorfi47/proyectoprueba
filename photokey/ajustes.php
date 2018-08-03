<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Photokey</title>
    <link rel="stylesheet" href="css/outside.css">
    <link rel="stylesheet" href="css/headerstyle.css">
  </head>
  <body>
    <header>
        <div class="container">
            <a class="logo" href="./">
                <img src="img/instagram-logo.svg" alt="Logo">
                <img src="img/insta.png" alt="Nombre Aplicacion">
            </a>

            <nav>
                <a href="./">
                        <img src="img/compass.svg" alt="Explorar">
                    </a>
                <a href="./">
                        <img src="img/set.png" alt="Ajustes">
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
                <textarea type="text" class="form-input" name="comentario" cols="40" rows="5" placeholder="Nueva Descripción" ></textarea>
                <input type="text" class="form-input" name="user" placeholder="Nuevo Email" >
                <input type="text" class="form-input" name="user" placeholder="Antigüa Contraseña" required >
                <input type="text" class="form-input" name="user" placeholder="Nueva Contraseña" >
            </div>
            <input type="submit" class="btn btn-blue" value="Guardar">
        </form>
    </div>

</div>
  </body>
</html>
