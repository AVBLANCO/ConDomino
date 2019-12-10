<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
include_once realpath('../facade/TorreFacade.php');


class TorreController {

    public static function insert(){
        $idTorre = strip_tags($_POST['idTorre']);
        $descripcionTorre = strip_tags($_POST['descripcionTorre']);
        $Condominio_idCondominio = strip_tags($_POST['condominio_idCondominio']);
        $condominio= new Condominio();
        $condominio->setIdCondominio($Condominio_idCondominio);
        TorreFacade::insert($idTorre, $descripcionTorre, $condominio);
return true;
    }

    public static function listAll(){
        $list=TorreFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Torre) {	
	       $rta.="{
	    \"idTorre\":\"{$Torre->getidTorre()}\",
	    \"descripcionTorre\":\"{$Torre->getdescripcionTorre()}\",
	    \"condominio_idCondominio_idCondominio\":\"{$Torre->getcondominio_idCondominio()->getidCondominio()}\"
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