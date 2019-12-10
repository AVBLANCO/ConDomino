<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que Anarchy se generó a sí mismo?  \\
include_once realpath('../facade/EventoFacade.php');


class EventoController {

    public static function insert(){
        $idevento = strip_tags($_POST['idevento']);
        $descripcionEvento = strip_tags($_POST['descripcionEvento']);
        $fechaEvento = strip_tags($_POST['fechaEvento']);
        EventoFacade::insert($idevento, $descripcionEvento, $fechaEvento);
return true;
    }

    public static function listAll(){
        $list=EventoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Evento) {	
	       $rta.="{
	    \"idevento\":\"{$Evento->getidevento()}\",
	    \"descripcionEvento\":\"{$Evento->getdescripcionEvento()}\",
	    \"fechaEvento\":\"{$Evento->getfechaEvento()}\"
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