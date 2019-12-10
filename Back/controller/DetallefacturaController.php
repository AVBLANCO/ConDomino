<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\
include_once realpath('../facade/DetallefacturaFacade.php');


class DetallefacturaController {

    public static function insert(){
        $iddetalleFactura = strip_tags($_POST['iddetalleFactura']);
        $valorDetalle = strip_tags($_POST['valorDetalle']);
        $descripcionDetalle = strip_tags($_POST['descripcionDetalle']);
        DetallefacturaFacade::insert($iddetalleFactura, $valorDetalle, $descripcionDetalle);
return true;
    }

    public static function listAll(){
        $list=DetallefacturaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Detallefactura) {	
	       $rta.="{
	    \"iddetalleFactura\":\"{$Detallefactura->getiddetalleFactura()}\",
	    \"valorDetalle\":\"{$Detallefactura->getvalorDetalle()}\",
	    \"descripcionDetalle\":\"{$Detallefactura->getdescripcionDetalle()}\"
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