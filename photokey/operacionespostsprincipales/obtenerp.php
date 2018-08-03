<?php
   class obtenerp{
     private $id;
     private $Usuariopost;
     private $Comentario;
     private $Imgposts;
     private $Fecha;
     private $LikesCount;
   // id
     public function getId(){
       return $this->id;
     }
     public function setId($id){
       $this->id=$id;
     }


 // Usuariopost
     public function getUsuariopost(){
       return $this->Usuariopost;
     }
     public function setUsuariopost($Usuariopost){
       $this->Usuariopost=$Usuariopost;
     }


 // Comentario
     public function getComentario(){
       return $this->Comentario;
     }
     public function setComentario($Comentario){
       $this->Comentario=$Comentario;
     }

 // Imgpost
     public function getImgposts(){
       return $this->Imgposts;
     }
     public function setImgposts($Imgposts){
       $this->Imgposts=$Imgposts;
     }

     // Fecha
         public function getFecha(){
           return $this->Fecha;
         }
         public function setFecha($Fecha){
           $this->Fecha=$Fecha;
         }

     // Likescount
         public function getLikescount(){
           return $this->Likescount;
         }
         public function setLikescount($Likescount){
           $this->Likescount=$Likescount;
         }



   }

 ?>
