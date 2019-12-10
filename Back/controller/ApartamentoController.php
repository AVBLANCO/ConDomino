<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El coronel necesitó setenta y cinco años -los setenta y cinco años de su vida, minuto a minuto- para llegar a ese instante. Se sintió puro, explícito, invencible, en el momento de responder:  \\
include_once realpath('../facade/ApartamentoFacade.php');


class ApartamentoController {

    public static function insert(){
        $idApartamento = strip_tags($_POST['idApartamento']);
        $descripcionApartamento = strip_tags($_POST['descripcionApartamento']);
        $Piso_idPiso = strip_tags($_POST['piso_idPiso']);
        $piso= new Piso();
        $piso->setIdPiso($Piso_idPiso);
        ApartamentoFacade::insert($idApartamento, $descripcionApartamento, $piso);
return true;
    }

    public static function listAll(){
        $list=ApartamentoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Apartamento) {	
	       $rta.="{
	    \"idApartamento\":\"{$Apartamento->getidApartamento()}\",
	    \"descripcionApartamento\":\"{$Apartamento->getdescripcionApartamento()}\",
	    \"piso_idPiso_idPiso\":\"{$Apartamento->getpiso_idPiso()->getidPiso()}\"
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