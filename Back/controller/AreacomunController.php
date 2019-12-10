<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\
include_once realpath('../facade/AreacomunFacade.php');


class AreacomunController {

    public static function insert(){
        $idAreaComun = strip_tags($_POST['idAreaComun']);
        $detalleAreaComun = strip_tags($_POST['detalleAreaComun']);
        $costoAreaComun = strip_tags($_POST['costoAreaComun']);
        $Condominio_idCondominio = strip_tags($_POST['condominio_idCondominio']);
        $condominio= new Condominio();
        $condominio->setIdCondominio($Condominio_idCondominio);
        $estadoAreaComun = strip_tags($_POST['estadoAreaComun']);
        AreacomunFacade::insert($idAreaComun, $detalleAreaComun, $costoAreaComun, $condominio, $estadoAreaComun);
return true;
    }

    public static function listAll(){
        $list=AreacomunFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Areacomun) {	
	       $rta.="{
	    \"idAreaComun\":\"{$Areacomun->getidAreaComun()}\",
	    \"detalleAreaComun\":\"{$Areacomun->getdetalleAreaComun()}\",
	    \"costoAreaComun\":\"{$Areacomun->getcostoAreaComun()}\",
	    \"condominio_idCondominio_idCondominio\":\"{$Areacomun->getcondominio_idCondominio()->getidCondominio()}\",
	    \"estadoAreaComun\":\"{$Areacomun->getestadoAreaComun()}\"
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