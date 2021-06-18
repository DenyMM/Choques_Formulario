<?php  
 
   $server  = "localhost";
   $user  = "root";
   $pass  = "";
   $db    = "choques";

   $conexion = new mysqli($server, $user, $pass, $db); 

   if($conexion->connect_errno) {
       die("La conexion no se logro" . $conexion->connect_errno);
   }else {
    echo "";
}

?> 