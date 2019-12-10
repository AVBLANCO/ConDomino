<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    404 Frase no encontrada  \\
include_once realpath('../facade/CalendarioFacade.php');


class CalendarioController {

    public static function insert(){
        $idCalendario = strip_tags($_POST['idCalendario']);
        $mesCalendario = strip_tags($_POST['mesCalendario']);
        $anioCalendario = strip_tags($_POST['anioCalendario']);
        $diaCalendario = strip_tags($_POST['diaCalendario']);
        CalendarioFacade::insert($idCalendario, $mesCalendario, $anioCalendario, $diaCalendario);
return true;
    }

    public static function listAll(){
        $list=CalendarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Calendario) {	
	       $rta.="{
	    \"idCalendario\":\"{$Calendario->getidCalendario()}\",
	    \"mesCalendario\":\"{$Calendario->getmesCalendario()}\",
	    \"anioCalendario\":\"{$Calendario->getanioCalendario()}\",
	    \"diaCalendario\":\"{$Calendario->getdiaCalendario()}\"
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