<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\
include_once realpath('../facade/FacturacuentaviviendaFacade.php');


class FacturacuentaviviendaController {

    public static function insert(){
        $idfacturaCuentaVivienda = strip_tags($_POST['idfacturaCuentaVivienda']);
        $desccripcinFacturaCuentaVivienda = strip_tags($_POST['desccripcinFacturaCuentaVivienda']);
        $fechaCreacionFacturaCuentaVivienda = strip_tags($_POST['fechaCreacionFacturaCuentaVivienda']);
        $fechaPagoFacturaCuentaVivienda = strip_tags($_POST['fechaPagoFacturaCuentaVivienda']);
        $montoFacturaCuentaVivienda = strip_tags($_POST['montoFacturaCuentaVivienda']);
        $medioPagoFacturaCuentaVivienda = strip_tags($_POST['medioPagoFacturaCuentaVivienda']);
        $Cuentavivienda_idCuentaVivienda = strip_tags($_POST['cuentaVivienda_idCuentaVivienda']);
        $cuentavivienda= new Cuentavivienda();
        $cuentavivienda->setIdCuentaVivienda($Cuentavivienda_idCuentaVivienda);
        $estadoFacturaCuentaVivienda = strip_tags($_POST['estadoFacturaCuentaVivienda']);
        $Detallefactura_iddetalleFactura = strip_tags($_POST['detalleFactura_iddetalleFactura']);
        $detallefactura= new Detallefactura();
        $detallefactura->setIddetalleFactura($Detallefactura_iddetalleFactura);
        FacturacuentaviviendaFacade::insert($idfacturaCuentaVivienda, $desccripcinFacturaCuentaVivienda, $fechaCreacionFacturaCuentaVivienda, $fechaPagoFacturaCuentaVivienda, $montoFacturaCuentaVivienda, $medioPagoFacturaCuentaVivienda, $cuentavivienda, $estadoFacturaCuentaVivienda, $detallefactura);
return true;
    }

    public static function listAll(){
        $list=FacturacuentaviviendaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Facturacuentavivienda) {	
	       $rta.="{
	    \"idfacturaCuentaVivienda\":\"{$Facturacuentavivienda->getidfacturaCuentaVivienda()}\",
	    \"desccripcinFacturaCuentaVivienda\":\"{$Facturacuentavivienda->getdesccripcinFacturaCuentaVivienda()}\",
	    \"fechaCreacionFacturaCuentaVivienda\":\"{$Facturacuentavivienda->getfechaCreacionFacturaCuentaVivienda()}\",
	    \"fechaPagoFacturaCuentaVivienda\":\"{$Facturacuentavivienda->getfechaPagoFacturaCuentaVivienda()}\",
	    \"montoFacturaCuentaVivienda\":\"{$Facturacuentavivienda->getmontoFacturaCuentaVivienda()}\",
	    \"medioPagoFacturaCuentaVivienda\":\"{$Facturacuentavivienda->getmedioPagoFacturaCuentaVivienda()}\",
	    \"cuentaVivienda_idCuentaVivienda_idCuentaVivienda\":\"{$Facturacuentavivienda->getcuentaVivienda_idCuentaVivienda()->getidCuentaVivienda()}\",
	    \"estadoFacturaCuentaVivienda\":\"{$Facturacuentavivienda->getestadoFacturaCuentaVivienda()}\",
	    \"detalleFactura_iddetalleFactura_iddetalleFactura\":\"{$Facturacuentavivienda->getdetalleFactura_iddetalleFactura()->getiddetalleFactura()}\"
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