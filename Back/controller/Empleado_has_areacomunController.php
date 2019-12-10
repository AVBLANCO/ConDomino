<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Puedes sugerirnos frases nuevas, se nos están acabando ( u.u)  \\
include_once realpath('../facade/Empleado_has_areacomunFacade.php');


class Empleado_has_areacomunController {

    public static function insert(){
        $Empleado_idempleado = strip_tags($_POST['empleado_idempleado']);
        $empleado= new Empleado();
        $empleado->setIdempleado($Empleado_idempleado);
        $Areacomun_idAreaComun = strip_tags($_POST['areaComun_idAreaComun']);
        $areacomun= new Areacomun();
        $areacomun->setIdAreaComun($Areacomun_idAreaComun);
        Empleado_has_areacomunFacade::insert($empleado, $areacomun);
return true;
    }

    public static function listAll(){
        $list=Empleado_has_areacomunFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Empleado_has_areacomun) {	
	       $rta.="{
	    \"empleado_idempleado_idempleado\":\"{$Empleado_has_areacomun->getempleado_idempleado()->getidempleado()}\",
	    \"areaComun_idAreaComun_idAreaComun\":\"{$Empleado_has_areacomun->getareaComun_idAreaComun()->getidAreaComun()}\"
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