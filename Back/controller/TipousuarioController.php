<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\
include_once realpath('../facade/TipousuarioFacade.php');


class TipousuarioController {

    public static function insert(){
        $idTipoUsuario = strip_tags($_POST['idTipoUsuario']);
        $descripcionTipoUsuario = strip_tags($_POST['descripcionTipoUsuario']);
        TipousuarioFacade::insert($idTipoUsuario, $descripcionTipoUsuario);
return true;
    }

    public static function listAll(){
        $list=TipousuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Tipousuario) {	
	       $rta.="{
	    \"idTipoUsuario\":\"{$Tipousuario->getidTipoUsuario()}\",
	    \"descripcionTipoUsuario\":\"{$Tipousuario->getdescripcionTipoUsuario()}\"
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