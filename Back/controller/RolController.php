<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\
include_once realpath('../facade/RolFacade.php');


class RolController {

    public static function insert(){
        $idrol = strip_tags($_POST['idrol']);
        $usuarioRol = strip_tags($_POST['usuarioRol']);
        $passwordRol = strip_tags($_POST['passwordRol']);
        $descripcion = strip_tags($_POST['descripcion']);
        $Condominio_idCondominio = strip_tags($_POST['condominio_idCondominio']);
        $condominio= new Condominio();
        $condominio->setIdCondominio($Condominio_idCondominio);
        RolFacade::insert($idrol, $usuarioRol, $passwordRol, $descripcion, $condominio);
return true;
    }

    public static function listAll(){
        $list=RolFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Rol) {	
	       $rta.="{
	    \"idrol\":\"{$Rol->getidrol()}\",
	    \"usuarioRol\":\"{$Rol->getusuarioRol()}\",
	    \"passwordRol\":\"{$Rol->getpasswordRol()}\",
	    \"descripcion\":\"{$Rol->getdescripcion()}\",
	    \"condominio_idCondominio_idCondominio\":\"{$Rol->getcondominio_idCondominio()->getidCondominio()}\"
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