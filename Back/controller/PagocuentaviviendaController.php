<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya están los patrones implementados, ahora sí viene lo chido...  \\
include_once realpath('../facade/PagocuentaviviendaFacade.php');


class PagocuentaviviendaController {

    public static function insert(){
        $idpagoCuentaVivienda = strip_tags($_POST['idpagoCuentaVivienda']);
        $detallePagoCuentaVivienda = strip_tags($_POST['detallePagoCuentaVivienda']);
        $fechaPagoFactura = strip_tags($_POST['fechaPagoFactura']);
        $Facturacuentavivienda_idfacturaCuentaVivienda = strip_tags($_POST['facturaCuentaVivienda_idfacturaCuentaVivienda']);
        $facturacuentavivienda= new Facturacuentavivienda();
        $facturacuentavivienda->setIdfacturaCuentaVivienda($Facturacuentavivienda_idfacturaCuentaVivienda);
        PagocuentaviviendaFacade::insert($idpagoCuentaVivienda, $detallePagoCuentaVivienda, $fechaPagoFactura, $facturacuentavivienda);
return true;
    }

    public static function listAll(){
        $list=PagocuentaviviendaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Pagocuentavivienda) {	
	       $rta.="{
	    \"idpagoCuentaVivienda\":\"{$Pagocuentavivienda->getidpagoCuentaVivienda()}\",
	    \"detallePagoCuentaVivienda\":\"{$Pagocuentavivienda->getdetallePagoCuentaVivienda()}\",
	    \"fechaPagoFactura\":\"{$Pagocuentavivienda->getfechaPagoFactura()}\",
	    \"facturaCuentaVivienda_idfacturaCuentaVivienda_idfacturaCuentaVivienda\":\"{$Pagocuentavivienda->getfacturaCuentaVivienda_idfacturaCuentaVivienda()->getidfacturaCuentaVivienda()}\"
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