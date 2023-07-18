<?php
include_once '../src/Conexion.php';
class ViajesUtil {
    
 function listarRutas(){
   $cn=new Conexion();
   $sql="select RUTCOD, RUTNOM, pago_cho from ruta";
   $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
   $vec= array();
   while($f= mysqli_fetch_array($res)){
       $vec[]=$f;
   }
   return $vec;
 }
 
 function listarViajes($rutcod){
   $cn=new Conexion();
   $sql="select VIANRO, BUSNRO, RUTCOD, IDCOD, VIAHRS, VIAFCH, COSVIA from viaje where RUTCOD = '$rutcod'";
   $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
   $vec= array();
   while($f= mysqli_fetch_array($res)){
       $vec[]=$f;
   }
   return $vec;
 }
 
 function listarPasajeros($vianro){
   $cn=new Conexion();
   $sql="select BOLNRO, Nom_pas, Nro_asi, pago from pasajeros where VIANRO = '$vianro'";
   $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
   $vec= array();
   while($f= mysqli_fetch_array($res)){
       $vec[]=$f;
   }
   return $vec;
 }
 
 function anula($bolnro){
    $cn=new Conexion();
    $sql="delete from pasajeros where BOLNRO = '$bolnro'";
    mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
 }
 
 function registrar($vianro, $nompas, $nroasi, $tipo, $pago){
    $cn=new Conexion();
    $sql="call InsertarPasajero($vianro, $nroasi, '$nompas', '$tipo', $pago)";
    mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
 }
 
 function listarChoferes(){
    $cn=new Conexion();
    $sql="select IDCOD, CHONOM, CHOFIN, CHOCAT from chofer";
    $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
    $vec= array();
    while($f= mysqli_fetch_array($res)){
        $vec[]=$f;
    }
    return $vec;
  }
 
  function listarViajesChofer($codchof){
   $cn=new Conexion();
   $sql="select VIANRO, BUSNRO, RUTCOD, IDCOD, VIAHRS, VIAFCH, COSVIA from viaje where IDCOD = '$codchof'";
   $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
   $vec= array();
   while($f= mysqli_fetch_array($res)){
       $vec[]=$f;
   }
   return $vec;
 }

 function graficaChoferes(){
  $cn=new Conexion();
  $sql="SELECT c.CHONOM, COUNT(*) 'Numero de viajes' FROM chofer c JOIN viaje v on c.IDCOD = v.IDCOD GROUP BY c.IDCOD;";
  $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
  $vec= array();
  while($f= mysqli_fetch_array($res)){
      $vec[]=$f;
  }
  return $vec;
}

function graficaRutas(){
  $cn=new Conexion();
  $sql="SELECT r.RUTNOM, COUNT(*) 'Cantidad de boletos' FROM ruta r JOIN viaje v on r.RUTCOD = v.RUTCOD JOIN pasajeros p on p.VIANRO = v.VIANRO GROUP BY r.RUTCOD; ";
  $res= mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
  $vec= array();
  while($f= mysqli_fetch_array($res)){
      $vec[]=$f;
  }
  return $vec;
}
 
}