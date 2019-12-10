<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La noche está estrellada, y tiritan, azules, los astros, a lo lejos  \\
include_once realpath('../facade/CondominioFacade.php');


class CondominioController {

    public static function insert(){
        $idCondominio = strip_tags($_POST['idCondominio']);
        $nombreCondominio = strip_tags($_POST['nombreCondominio']);
        $direccionCondominio = strip_tags($_POST['direccionCondominio']);
        $telefonoCondominio = strip_tags($_POST['telefonoCondominio']);
        $rutCondominio = strip_tags($_POST['rutCondominio']);
        CondominioFacade::insert($idCondominio, $nombreCondominio, $direccionCondominio, $telefonoCondominio, $rutCondominio);
return true;
    }

    public static function listAll(){
        $list=CondominioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Condominio) {	
	       $rta.="{
	    \"idCondominio\":\"{$Condominio->getidCondominio()}\",
	    \"nombreCondominio\":\"{$Condominio->getnombreCondominio()}\",
	    \"direccionCondominio\":\"{$Condominio->getdireccionCondominio()}\",
	    \"telefonoCondominio\":\"{$Condominio->gettelefonoCondominio()}\",
	    \"rutCondominio\":\"{$Condominio->getrutCondominio()}\"
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