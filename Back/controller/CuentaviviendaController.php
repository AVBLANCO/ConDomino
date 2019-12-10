<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    NEVERMORE  \\
include_once realpath('../facade/CuentaviviendaFacade.php');


class CuentaviviendaController {

    public static function insert(){
        $idCuentaVivienda = strip_tags($_POST['idCuentaVivienda']);
        $descripcionCuentaVivienda = strip_tags($_POST['descripcionCuentaVivienda']);
        $saldoCuentaVivienda = strip_tags($_POST['saldoCuentaVivienda']);
        $fechaCreacionCuentaVivienda = strip_tags($_POST['fechaCreacionCuentaVivienda']);
        $fechaActualizacionCuentaVivienda = strip_tags($_POST['fechaActualizacionCuentaVivienda']);
        $Apartamento_idApartamento = strip_tags($_POST['apartamento_idApartamento']);
        $apartamento= new Apartamento();
        $apartamento->setIdApartamento($Apartamento_idApartamento);
        CuentaviviendaFacade::insert($idCuentaVivienda, $descripcionCuentaVivienda, $saldoCuentaVivienda, $fechaCreacionCuentaVivienda, $fechaActualizacionCuentaVivienda, $apartamento);
return true;
    }

    public static function listAll(){
        $list=CuentaviviendaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Cuentavivienda) {	
	       $rta.="{
	    \"idCuentaVivienda\":\"{$Cuentavivienda->getidCuentaVivienda()}\",
	    \"descripcionCuentaVivienda\":\"{$Cuentavivienda->getdescripcionCuentaVivienda()}\",
	    \"saldoCuentaVivienda\":\"{$Cuentavivienda->getsaldoCuentaVivienda()}\",
	    \"fechaCreacionCuentaVivienda\":\"{$Cuentavivienda->getfechaCreacionCuentaVivienda()}\",
	    \"fechaActualizacionCuentaVivienda\":\"{$Cuentavivienda->getfechaActualizacionCuentaVivienda()}\",
	    \"apartamento_idApartamento_idApartamento\":\"{$Cuentavivienda->getapartamento_idApartamento()->getidApartamento()}\"
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