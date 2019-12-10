<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que Anarchy se generó a sí mismo?  \\
include_once realpath('../facade/BodegaFacade.php');


class BodegaController {

    public static function insert(){
        $idBodega = strip_tags($_POST['idBodega']);
        $descripcionBodega = strip_tags($_POST['descripcionBodega']);
        $Detalleexistenciabodega_idDetalleExistencia = strip_tags($_POST['detalleExistenciaBodega_idDetalleExistencia']);
        $detalleexistenciabodega= new Detalleexistenciabodega();
        $detalleexistenciabodega->setIdDetalleExistencia($Detalleexistenciabodega_idDetalleExistencia);
        BodegaFacade::insert($idBodega, $descripcionBodega, $detalleexistenciabodega);
return true;
    }

    public static function listAll(){
        $list=BodegaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Bodega) {	
	       $rta.="{
	    \"idBodega\":\"{$Bodega->getidBodega()}\",
	    \"descripcionBodega\":\"{$Bodega->getdescripcionBodega()}\",
	    \"detalleExistenciaBodega_idDetalleExistencia_idDetalleExistencia\":\"{$Bodega->getdetalleExistenciaBodega_idDetalleExistencia()->getidDetalleExistencia()}\"
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