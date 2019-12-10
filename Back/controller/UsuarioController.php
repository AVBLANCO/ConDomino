<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\
include_once realpath('../facade/UsuarioFacade.php');


class UsuarioController {

    public static function insert(){
        $idUsuario = strip_tags($_POST['idUsuario']);
        $Persona_idpersona = strip_tags($_POST['persona_idpersona']);
        $persona= new Persona();
        $persona->setIdpersona($Persona_idpersona);
        $estadoUsuario = strip_tags($_POST['estadoUsuario']);
        $passwordUsuario = strip_tags($_POST['passwordUsuario']);
        $Tipousuario_idTipoUsuario = strip_tags($_POST['tipoUsuario_idTipoUsuario']);
        $tipousuario= new Tipousuario();
        $tipousuario->setIdTipoUsuario($Tipousuario_idTipoUsuario);
        $Condominio_idCondominio = strip_tags($_POST['condominio_idCondominio']);
        $condominio= new Condominio();
        $condominio->setIdCondominio($Condominio_idCondominio);
        UsuarioFacade::insert($idUsuario, $persona, $estadoUsuario, $passwordUsuario, $tipousuario, $condominio);
return true;
    }

    public static function listAll(){
        $list=UsuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Usuario) {	
	       $rta.="{
	    \"idUsuario\":\"{$Usuario->getidUsuario()}\",
	    \"persona_idpersona_idpersona\":\"{$Usuario->getpersona_idpersona()->getidpersona()}\",
	    \"estadoUsuario\":\"{$Usuario->getestadoUsuario()}\",
	    \"passwordUsuario\":\"{$Usuario->getpasswordUsuario()}\",
	    \"tipoUsuario_idTipoUsuario_idTipoUsuario\":\"{$Usuario->gettipoUsuario_idTipoUsuario()->getidTipoUsuario()}\",
	    \"condominio_idCondominio_idCondominio\":\"{$Usuario->getcondominio_idCondominio()->getidCondominio()}\"
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