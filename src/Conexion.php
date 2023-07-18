<?php

class Conexion {
   private $cn=null;
   function conecta(){
      if($this->cn==null){
       $this->cn= mysqli_connect ("localhost", "root","","bdviajes"); 
      }
       return $this->cn;
   }
   function desconecta(){
       if ($this->cn != null) {
            mysqli_close($this->cn);
        }
    }
   
}

