<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PhotoKey</title>
    <link rel="stylesheet" href="css/style.css">
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
            <form class="formsearch" action="principalsearch.php" method="post">
              <input class="form-input" type="search" name="palabrabus" placeholder="Buscar Usuario">
				      <input type="submit" name="btn_enviar" id="btn_enviar" value="Buscar" class="btnsend"></td></tr>
            </form>
            <nav>

                <a href="perfil.php">
                        <img src="img/user.svg" alt="Perfil">
                    </a>
            </nav>
        </div>
    </header>

    <?php
    include_once "operacionespostsprincipales/manejop.php";
    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $manejop=new manejop($miconexion);

      $tabla_blog=$manejop->getContenidoPorFecha();

      if(empty($tabla_blog)){
        PRINT <<<HERE
        <div class="body">
        <div class="contup">
        <div class="container">
        <div class="containerpost">
          <div class="containerinfopost">
            <h4>NO HAY POSTS</h4>

          </div>
              </div>
              </div>
              </div>
              </div>
HERE;

      }
      else{
        foreach($tabla_blog as $valor){
         $useruser = $valor->getUsuariopost();
         $datedate = $valor->getFecha();
         $imgimg = $valor->getImgposts();
         $codecode = base64_encode($imgimg);
         $likeslikes = $valor->getLikescount();
         $commentcomment = $valor->getComentario();

         PRINT <<<HERE
          <div class="body">
          <div class="contup">
          <div class="container">
          <div class="containerpost">
            <div class="containerinfopost">
              <a href="perfilindiv.php?variable=$useruser&variable2=$useruser">$useruser</a>
              <p>$datedate</p>
            </div>
              <div class="containerimgpost">

                <img src='data:image/jpeg;base64, {$codecode}'/>

              </div>
              <div class="containerinfo2post">
              <a href="operacioneslikes/actionlikes.php?variable=$useruser&variable2=$likeslikes">
                      <img src="img/like.png" alt="PostPic">
                  </a>

                <h2>$likeslikes Toques al Post.</h2>
                <p>$commentcomment</p>
                </div>
                </div>
                </div>
                </div>
                </div>
HERE;


       }

      }


    }
    catch(Exception $e){
      die("Error:" . $e->getMessage());
    }




    ?>

  </body>
</html>
