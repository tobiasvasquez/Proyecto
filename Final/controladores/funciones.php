<?php

 function validar($datos){
  $errores = [];
  $nombre = trim($datos["nombre"]);
  $email = trim($datos["email"]);
  $contrasenia = trim($datos["contrasenia"]);
  $contrasenia2 = trim($datos["contrasenia2"]);

   if ($nombre == ""){
     $errores ["nombre"] = "- Este campo no lo podes dejar vacío... ";
   }if (empty($email)){
    $errores ["email"] = "- Este campo no lo podes dejar vacío... ";
  }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
   $errores["email"] = "- Email inválido...";
 }
  if (empty($contrasenia)){
    $errores["contrasenia"] = "- Este campo no lo podes dejar vacío... ";
  }elseif (strlen($contrasenia) < 6) {
    $errores["contrasenia"] = "- La Contraseña debe tener como mínimo 6 caracteres";
  }
if (empty($contrasenia2)){
  $errores["contrasenia2"] = "- Este campo no lo podes dejar vacío... ";
}elseif($contrasenia != $contrasenia2){
    $errores["contrasenia2"] = "- Deben coincidir las dos contraseñas";
  }
   return $errores;
 }
 ?>
