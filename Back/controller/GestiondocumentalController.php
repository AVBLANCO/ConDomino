<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  \\
include_once realpath('../facade/GestiondocumentalFacade.php');


class GestiondocumentalController {

    public static function insert(){
        $idGestionDocumental = strip_tags($_POST['idGestionDocumental']);
        $descripcionGestionDoc = strip_tags($_POST['descripcionGestionDoc']);
        GestiondocumentalFacade::insert($idGestionDocumental, $descripcionGestionDoc);
return true;
    }

    public static function listAll(){
        $list=GestiondocumentalFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Gestiondocumental) {	
	       $rta.="{
	    \"idGestionDocumental\":\"{$Gestiondocumental->getidGestionDocumental()}\",
	    \"descripcionGestionDoc\":\"{$Gestiondocumental->getdescripcionGestionDoc()}\"
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