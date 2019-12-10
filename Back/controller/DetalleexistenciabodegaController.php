<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tenemos trabajos que odiamos para comprar cosas que no necesitamos.  \\
include_once realpath('../facade/DetalleexistenciabodegaFacade.php');


class DetalleexistenciabodegaController {

    public static function insert(){
        $idDetalleExistencia = strip_tags($_POST['idDetalleExistencia']);
        $unidadesExistencia = strip_tags($_POST['unidadesExistencia']);
        $descipcionExistenciaBodega = strip_tags($_POST['descipcionExistenciaBodega']);
        $fechaModificacionExistenciaBodega = strip_tags($_POST['fechaModificacionExistenciaBodega']);
        DetalleexistenciabodegaFacade::insert($idDetalleExistencia, $unidadesExistencia, $descipcionExistenciaBodega, $fechaModificacionExistenciaBodega);
return true;
    }

    public static function listAll(){
        $list=DetalleexistenciabodegaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Detalleexistenciabodega) {	
	       $rta.="{
	    \"idDetalleExistencia\":\"{$Detalleexistenciabodega->getidDetalleExistencia()}\",
	    \"unidadesExistencia\":\"{$Detalleexistenciabodega->getunidadesExistencia()}\",
	    \"descipcionExistenciaBodega\":\"{$Detalleexistenciabodega->getdescipcionExistenciaBodega()}\",
	    \"fechaModificacionExistenciaBodega\":\"{$Detalleexistenciabodega->getfechaModificacionExistenciaBodega()}\"
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