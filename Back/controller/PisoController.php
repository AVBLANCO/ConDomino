<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Yo tengo un sueño. El sueño de que mis hijos vivan en un mundo con un único lenguaje de programación.  \\
include_once realpath('../facade/PisoFacade.php');


class PisoController {

    public static function insert(){
        $idPiso = strip_tags($_POST['idPiso']);
        $descripcionPiso = strip_tags($_POST['descripcionPiso']);
        $Torre_idTorre = strip_tags($_POST['torre_idTorre']);
        $torre= new Torre();
        $torre->setIdTorre($Torre_idTorre);
        PisoFacade::insert($idPiso, $descripcionPiso, $torre);
return true;
    }

    public static function listAll(){
        $list=PisoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Piso) {	
	       $rta.="{
	    \"idPiso\":\"{$Piso->getidPiso()}\",
	    \"descripcionPiso\":\"{$Piso->getdescripcionPiso()}\",
	    \"torre_idTorre_idTorre\":\"{$Piso->gettorre_idTorre()->getidTorre()}\"
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