<?php
   class obtenerusuario{
     private $id;
     private $Nombre;
     private $Usuario;
     private $Email;
     private $Descripcion;
     private $Contrasena;
     private $Perfipic;
     private $Seguidorescount;
     private $Log;
   // id
     public function getId(){
       return $this->id;
     }
     public function setId($id){
       $this->id=$id;
     }


 // Nombre
     public function getNombre(){
       return $this->Nombre;
     }
     public function setNombre($Nombre){
       $this->Nombre=$Nombre;
     }


 // Usuario
     public function getUsuario(){
       return $this->Usuario;
     }
     public function setUsuario($Usuario){
       $this->Usuario=$Usuario;
     }

 // Email
     public function getEmail(){
       return $this->Email;
     }
     public function setEmail($Email){
       $this->Email=$Email;
     }

     // Descripcion
         public function getDescripcion(){
           return $this->Descripcion;
         }
         public function setDescripcion($Descripcion){
           $this->Descripcion=$Descripcion;
         }

         // Contrasena
             public function getContrasena(){
               return $this->Contrasena;
             }
             public function setContrasena($Contrasena){
               $this->Contrasena=$Contrasena;
             }

             // Perfipic
                 public function getPerfipic(){
                   return $this->Perfipic;
                 }
                 public function setPerfipic($Perfipic){
                   $this->Perfipic=$Perfipic;
                 }

                 // Seguidorescount
                     public function getSeguidorescount(){
                       return $this->Seguidorescount;
                     }
                     public function setSeguidorescount($Seguidorescount){
                       $this->Seguidorescount=$Seguidorescount;
                     }

                     // Log
                         public function getLog(){
                           return $this->Log;
                         }
                         public function setLog($Log){
                           $this->Log=$Log;
                         }

   }

 ?>
