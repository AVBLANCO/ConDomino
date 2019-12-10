<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\
include_once realpath('../facade/EventopersonaFacade.php');


class EventopersonaController {

    public static function insert(){
        $Evento_idevento = strip_tags($_POST['evento_idevento']);
        $evento= new Evento();
        $evento->setIdevento($Evento_idevento);
        $Persona_idpersona = strip_tags($_POST['persona_idpersona']);
        $persona= new Persona();
        $persona->setIdpersona($Persona_idpersona);
        $Condominio_idCondominio = strip_tags($_POST['condominio_idCondominio']);
        $condominio= new Condominio();
        $condominio->setIdCondominio($Condominio_idCondominio);
        EventopersonaFacade::insert($evento, $persona, $condominio);
return true;
    }

    public static function listAll(){
        $list=EventopersonaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Eventopersona) {	
	       $rta.="{
	    \"evento_idevento_idevento\":\"{$Eventopersona->getevento_idevento()->getidevento()}\",
	    \"persona_idpersona_idpersona\":\"{$Eventopersona->getpersona_idpersona()->getidpersona()}\",
	    \"condominio_idCondominio_idCondominio\":\"{$Eventopersona->getcondominio_idCondominio()->getidCondominio()}\"
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