<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\
include_once realpath('../facade/PersonaFacade.php');


class PersonaController {

    public static function insert(){
        $idpersona = strip_tags($_POST['idpersona']);
        $nombrePersonal = strip_tags($_POST['nombrePersonal']);
        $nacionalidadPersona = strip_tags($_POST['nacionalidadPersona']);
        $fechaNacimientoPersona = strip_tags($_POST['fechaNacimientoPersona']);
        $telefonoPersona = strip_tags($_POST['telefonoPersona']);
        $correoPersona = strip_tags($_POST['correoPersona']);
        PersonaFacade::insert($idpersona, $nombrePersonal, $nacionalidadPersona, $fechaNacimientoPersona, $telefonoPersona, $correoPersona);
return true;
    }

    public static function listAll(){
        $list=PersonaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Persona) {	
	       $rta.="{
	    \"idpersona\":\"{$Persona->getidpersona()}\",
	    \"nombrePersonal\":\"{$Persona->getnombrePersonal()}\",
	    \"nacionalidadPersona\":\"{$Persona->getnacionalidadPersona()}\",
	    \"fechaNacimientoPersona\":\"{$Persona->getfechaNacimientoPersona()}\",
	    \"telefonoPersona\":\"{$Persona->gettelefonoPersona()}\",
	    \"correoPersona\":\"{$Persona->getcorreoPersona()}\"
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