<?php
include_once './ViajesUtil.php';
$obj=new ViajesUtil();
$vianro = $_REQUEST['vianro'];
$rutcod = $_REQUEST['rutcod'];
$nompas = $_REQUEST['nombre'];
$apepas = $_REQUEST['apellido'];
$nroasi = $_REQUEST['nroasi'];
$tipo = $_REQUEST['tipopasaj'];
$pago = $_REQUEST['pago'];

switch ($tipo){
    case 'N':{
        $pagofin = $pago*0.5;
        break;
    }
    case 'E':{
        $pagofin = $pago*0.7;
        break;
    }
    case 'A':{
        $pagofin = $pago;
        break;
    }
    default:{
        $pagofin = $pago;
        break;
    }
}

$nomb = $nompas.", ".$apepas;

$obj->registrar($vianro, $nomb, $nroasi, $tipo, $pagofin);

header("Location:../src/viajes-pasajeros.php?rutcod=$rutcod&vianro=$vianro");