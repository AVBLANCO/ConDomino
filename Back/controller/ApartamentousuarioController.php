<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\
include_once realpath('../facade/ApartamentousuarioFacade.php');


class ApartamentousuarioController {

    public static function insert(){
        $Apartamento_idApartamento = strip_tags($_POST['apartamento_idApartamento']);
        $apartamento= new Apartamento();
        $apartamento->setIdApartamento($Apartamento_idApartamento);
        $Usuario_idUsuario = strip_tags($_POST['usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $observacionesApartamentoUsuario = strip_tags($_POST['observacionesApartamentoUsuario']);
        $creacionApartamentoUsuario = strip_tags($_POST['creacionApartamentoUsuario']);
        ApartamentousuarioFacade::insert($apartamento, $usuario, $observacionesApartamentoUsuario, $creacionApartamentoUsuario);
return true;
    }

    public static function listAll(){
        $list=ApartamentousuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Apartamentousuario) {	
	       $rta.="{
	    \"apartamento_idApartamento_idApartamento\":\"{$Apartamentousuario->getapartamento_idApartamento()->getidApartamento()}\",
	    \"usuario_idUsuario_idUsuario\":\"{$Apartamentousuario->getusuario_idUsuario()->getidUsuario()}\",
	    \"observacionesApartamentoUsuario\":\"{$Apartamentousuario->getobservacionesApartamentoUsuario()}\",
	    \"creacionApartamentoUsuario\":\"{$Apartamentousuario->getcreacionApartamentoUsuario()}\"
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