<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PhotoKey</title>
    <link rel="stylesheet" href="css/headerstyle.css">
    <link rel="stylesheet" href="css/perfilstyle.css">
    <link rel="stylesheet" href="css/stylepostperf.css">
  </head>
  <body>
    <header>
        <div class="container">
            <a class="logo" href="./">
                <img src="img/instagram-logo.svg" alt="Logo">
                <img src="img/insta.png" alt="Nombre Aplicacion">
            </a>

            <nav>
              <a href="postupload.php">
                      <img src="img/add.png" alt="Add">
                  </a>
                <a href="principal.php">
                        <img src="img/compass.svg" alt="Explorar">
                    </a>
                <a href="ajustes.php">
                        <img src="img/set.png" alt="Ajustes">
                    </a>
                    <a href="operacioneslogout/logoutaction.php">
                            <img src="img/logout.png" alt="LogOut">
                        </a>

            </nav>
        </div>
    </header>

    <?php
    include_once "operacionesperfilpropio/obtenerpostes.php";
    include_once "operacionesperfilpropio/manejoperfilpropio.php";
    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $manejoperfilpropio=new manejoperfilpropio($miconexion);

      $tabla_blogs=$manejoperfilpropio->getContenidoPorLog();

      if(empty($tabla_blogs)){
        PRINT <<<HERE
        <div class="bodyer">
          <div class="contuper">
              <div class="contaier">
              <div class="containerposter">
                  <div class="containerimgposter">
                    <img src="img/is.jpg" alt="PostPic">
                  </div>
                  <div class="containerinfoposter">
                    <h4>No Nada Para Mostrar</h4>
                    <p>Nada Para Mostrar</p>
                    <p>Nada Para Mostrar</p>
                  </div>
                  <div class="containerinfo2poster">
                    <p>Nada Para Mostrar</p>
                  </div>
              </div>
            </div>
          </div>
          </div>
HERE;

      }
      else{
        foreach($tabla_blogs as $valor){
         $useruser = $valor->getUsuario();
         $namename = $valor->getNombre();
         $imgimg = $valor->getPerfipic();
         $codecode = base64_encode($imgimg);
         $seguisegui = $valor->getSeguidorescount();
         $descdesc = $valor->getDescripcion();

         PRINT <<<HERE
         <div class="bodyer">
           <div class="contuper">
               <div class="contaier">
               <div class="containerposter">
                   <div class="containerimgposter">
                     <img src="img/is.jpg" alt="PostPic">
                   </div>
                   <div class="containerinfoposter">
                     <h4>$namename</h4>
                     <p>$useruser</p>
                     <p>$seguisegui</p>
                   </div>
                   <div class="containerinfo2poster">
                     <p>$descdesc</p>
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





    include_once "operacionesperfilpropio/manejopostes.php";
    try{
      $miconexionpost=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

      $miconexionpost->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $manejopostes=new manejopostes($miconexionpost);

      $tabla_blogspost=$manejopostes->getContenidoPorUser();

      if(empty($tabla_blogspost)){
        PRINT <<<HERE
        <div class="body">
        <div class="contup">
        <div class="container">
        <div class="containerpost">
          <div class="containerinfopost">
            <h4>NO HAY POSTS DE ESTE USUARIO.</h4>
            <p>HAGA ALGUNA PUBLICACIÓN DESDE EL ICONO AÑADIR EN EL AREA SUPERIOR.</p>
          </div>
              </div>
              </div>
              </div>
              </div>
HERE;
}
      else{
        foreach($tabla_blogspost as $valor){
         $useruserpost = $valor->getUsuariopost();
         $datedatepost = $valor->getFecha();
         $imgimgpost = $valor->getImgposts();
         $codecodepost = base64_encode($imgimgpost);
         $likeslikespost = $valor->getLikescount();
         $commentcommentpost = $valor->getComentario();
         PRINT <<<HERE
          <div class="body">
          <div class="contup">
          <div class="container">
          <div class="containerpost">
            <div class="containerinfopost">
              <h4>$useruserpost</h4>
              <p>$datedatepost</p>
            </div>
              <div class="containerimgpost">

                <img src='data:image/jpeg;base64, {$codecodepost}'/>

              </div>
              <div class="containerinfo2post">
                <img src="img/like.png" alt="PostPic">
                <h2>$likeslikespost</h2>
                <p>$commentcommentpost</p>
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
