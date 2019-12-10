<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\
include_once realpath('../facade/GastocomunFacade.php');


class GastocomunController {

    public static function insert(){
        $idGastoComun = strip_tags($_POST['idGastoComun']);
        $observacionGasto = strip_tags($_POST['observacionGasto']);
        $costoTotalGasto = strip_tags($_POST['costoTotalGasto']);
        $Calendario_idCalendario = strip_tags($_POST['calendario_idCalendario']);
        $calendario= new Calendario();
        $calendario->setIdCalendario($Calendario_idCalendario);
        $fechaInicioCancelacionGastoComun = strip_tags($_POST['fechaInicioCancelacionGastoComun']);
        $fechaFinCancelacionGastoComun = strip_tags($_POST['fechaFinCancelacionGastoComun']);
        $estadoGastoComun = strip_tags($_POST['estadoGastoComun']);
        $fechaCreacionGastoComun = strip_tags($_POST['fechaCreacionGastoComun']);
        $Condominio_idCondominio = strip_tags($_POST['condominio_idCondominio']);
        $condominio= new Condominio();
        $condominio->setIdCondominio($Condominio_idCondominio);
        GastocomunFacade::insert($idGastoComun, $observacionGasto, $costoTotalGasto, $calendario, $fechaInicioCancelacionGastoComun, $fechaFinCancelacionGastoComun, $estadoGastoComun, $fechaCreacionGastoComun, $condominio);
return true;
    }

    public static function listAll(){
        $list=GastocomunFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Gastocomun) {	
	       $rta.="{
	    \"idGastoComun\":\"{$Gastocomun->getidGastoComun()}\",
	    \"observacionGasto\":\"{$Gastocomun->getobservacionGasto()}\",
	    \"costoTotalGasto\":\"{$Gastocomun->getcostoTotalGasto()}\",
	    \"calendario_idCalendario_idCalendario\":\"{$Gastocomun->getcalendario_idCalendario()->getidCalendario()}\",
	    \"fechaInicioCancelacionGastoComun\":\"{$Gastocomun->getfechaInicioCancelacionGastoComun()}\",
	    \"fechaFinCancelacionGastoComun\":\"{$Gastocomun->getfechaFinCancelacionGastoComun()}\",
	    \"estadoGastoComun\":\"{$Gastocomun->getestadoGastoComun()}\",
	    \"fechaCreacionGastoComun\":\"{$Gastocomun->getfechaCreacionGastoComun()}\",
	    \"condominio_idCondominio_idCondominio\":\"{$Gastocomun->getcondominio_idCondominio()->getidCondominio()}\"
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