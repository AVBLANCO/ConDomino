<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\
include_once realpath('../facade/PrestamoFacade.php');


class PrestamoController {

    public static function insert(){
        $idPrestamo = strip_tags($_POST['idPrestamo']);
        $descripcioPrestamo = strip_tags($_POST['descripcioPrestamo']);
        $fechaPrestamo = strip_tags($_POST['fechaPrestamo']);
        PrestamoFacade::insert($idPrestamo, $descripcioPrestamo, $fechaPrestamo);
return true;
    }

    public static function listAll(){
        $list=PrestamoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Prestamo) {	
	       $rta.="{
	    \"idPrestamo\":\"{$Prestamo->getidPrestamo()}\",
	    \"descripcioPrestamo\":\"{$Prestamo->getdescripcioPrestamo()}\",
	    \"fechaPrestamo\":\"{$Prestamo->getfechaPrestamo()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!