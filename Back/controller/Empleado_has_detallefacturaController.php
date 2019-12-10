<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Proletarios del mundo ¡Uníos!  \\
include_once realpath('../facade/Empleado_has_detallefacturaFacade.php');


class Empleado_has_detallefacturaController {

    public static function insert(){
        $Empleado_idempleado = strip_tags($_POST['empleado_idempleado']);
        $empleado= new Empleado();
        $empleado->setIdempleado($Empleado_idempleado);
        $Detallefactura_iddetalleFactura = strip_tags($_POST['detalleFactura_iddetalleFactura']);
        $detallefactura= new Detallefactura();
        $detallefactura->setIddetalleFactura($Detallefactura_iddetalleFactura);
        Empleado_has_detallefacturaFacade::insert($empleado, $detallefactura);
return true;
    }

    public static function listAll(){
        $list=Empleado_has_detallefacturaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Empleado_has_detallefactura) {	
	       $rta.="{
	    \"empleado_idempleado_idempleado\":\"{$Empleado_has_detallefactura->getempleado_idempleado()->getidempleado()}\",
	    \"detalleFactura_iddetalleFactura_iddetalleFactura\":\"{$Empleado_has_detallefactura->getdetalleFactura_iddetalleFactura()->getiddetalleFactura()}\"
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