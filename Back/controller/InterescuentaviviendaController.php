<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Soy la sonrisa burlona y vengativa de Jack  \\
include_once realpath('../facade/InterescuentaviviendaFacade.php');


class InterescuentaviviendaController {

    public static function insert(){
        $idInteresCuentaVivienda = strip_tags($_POST['idInteresCuentaVivienda']);
        $fechainteresCuentaVivienda = strip_tags($_POST['fechainteresCuentaVivienda']);
        $fechaHastaInteresCuentaVivienda = strip_tags($_POST['fechaHastaInteresCuentaVivienda']);
        $montoInteresCuentaVivienda = strip_tags($_POST['montoInteresCuentaVivienda']);
        $observacionInteres = strip_tags($_POST['observacionInteres']);
        $fechaCreacionInteresCuentaVivienda = strip_tags($_POST['fechaCreacionInteresCuentaVivienda']);
        $fechaEliminacionInteresCuentaVivienda = strip_tags($_POST['fechaEliminacionInteresCuentaVivienda']);
        $fechaModificacionInteresCuentaVivienda = strip_tags($_POST['fechaModificacionInteresCuentaVivienda']);
        $Cuentavivienda_idCuentaVivienda = strip_tags($_POST['cuentaVivienda_idCuentaVivienda']);
        $cuentavivienda= new Cuentavivienda();
        $cuentavivienda->setIdCuentaVivienda($Cuentavivienda_idCuentaVivienda);
        InterescuentaviviendaFacade::insert($idInteresCuentaVivienda, $fechainteresCuentaVivienda, $fechaHastaInteresCuentaVivienda, $montoInteresCuentaVivienda, $observacionInteres, $fechaCreacionInteresCuentaVivienda, $fechaEliminacionInteresCuentaVivienda, $fechaModificacionInteresCuentaVivienda, $cuentavivienda);
return true;
    }

    public static function listAll(){
        $list=InterescuentaviviendaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Interescuentavivienda) {	
	       $rta.="{
	    \"idInteresCuentaVivienda\":\"{$Interescuentavivienda->getidInteresCuentaVivienda()}\",
	    \"fechainteresCuentaVivienda\":\"{$Interescuentavivienda->getfechainteresCuentaVivienda()}\",
	    \"fechaHastaInteresCuentaVivienda\":\"{$Interescuentavivienda->getfechaHastaInteresCuentaVivienda()}\",
	    \"montoInteresCuentaVivienda\":\"{$Interescuentavivienda->getmontoInteresCuentaVivienda()}\",
	    \"observacionInteres\":\"{$Interescuentavivienda->getobservacionInteres()}\",
	    \"fechaCreacionInteresCuentaVivienda\":\"{$Interescuentavivienda->getfechaCreacionInteresCuentaVivienda()}\",
	    \"fechaEliminacionInteresCuentaVivienda\":\"{$Interescuentavivienda->getfechaEliminacionInteresCuentaVivienda()}\",
	    \"fechaModificacionInteresCuentaVivienda\":\"{$Interescuentavivienda->getfechaModificacionInteresCuentaVivienda()}\",
	    \"cuentaVivienda_idCuentaVivienda_idCuentaVivienda\":\"{$Interescuentavivienda->getcuentaVivienda_idCuentaVivienda()->getidCuentaVivienda()}\"
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