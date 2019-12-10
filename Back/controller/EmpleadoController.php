<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  \\
include_once realpath('../facade/EmpleadoFacade.php');


class EmpleadoController {

    public static function insert(){
        $idempleado = strip_tags($_POST['idempleado']);
        $areaEmpleado = strip_tags($_POST['areaEmpleado']);
        $cantidadHorasTrabajo = strip_tags($_POST['cantidadHorasTrabajo']);
        $fechaInicioContrato = strip_tags($_POST['fechaInicioContrato']);
        $fechaFinCotrato = strip_tags($_POST['fechaFinCotrato']);
        $valorHora = strip_tags($_POST['valorHora']);
        $Persona_idpersona = strip_tags($_POST['persona_idpersona']);
        $persona= new Persona();
        $persona->setIdpersona($Persona_idpersona);
        EmpleadoFacade::insert($idempleado, $areaEmpleado, $cantidadHorasTrabajo, $fechaInicioContrato, $fechaFinCotrato, $valorHora, $persona);
return true;
    }

    public static function listAll(){
        $list=EmpleadoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Empleado) {	
	       $rta.="{
	    \"idempleado\":\"{$Empleado->getidempleado()}\",
	    \"areaEmpleado\":\"{$Empleado->getareaEmpleado()}\",
	    \"cantidadHorasTrabajo\":\"{$Empleado->getcantidadHorasTrabajo()}\",
	    \"fechaInicioContrato\":\"{$Empleado->getfechaInicioContrato()}\",
	    \"fechaFinCotrato\":\"{$Empleado->getfechaFinCotrato()}\",
	    \"valorHora\":\"{$Empleado->getvalorHora()}\",
	    \"persona_idpersona_idpersona\":\"{$Empleado->getpersona_idpersona()->getidpersona()}\"
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