<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si he visto más lejos es porque estoy sentado sobre los hombros de gigantes.  \\
include_once realpath('../facade/PrestamoareacomunFacade.php');


class PrestamoareacomunController {

    public static function insert(){
        $Prestamo_idPrestamo = strip_tags($_POST['prestamo_idPrestamo']);
        $prestamo= new Prestamo();
        $prestamo->setIdPrestamo($Prestamo_idPrestamo);
        $Areacomun_idAreaComun = strip_tags($_POST['areaComun_idAreaComun']);
        $areacomun= new Areacomun();
        $areacomun->setIdAreaComun($Areacomun_idAreaComun);
        $fechaPestamoAreaComun = strip_tags($_POST['fechaPestamoAreaComun']);
        $descripcionPrestamoAreaComun = strip_tags($_POST['descripcionPrestamoAreaComun']);
        PrestamoareacomunFacade::insert($prestamo, $areacomun, $fechaPestamoAreaComun, $descripcionPrestamoAreaComun);
return true;
    }

    public static function listAll(){
        $list=PrestamoareacomunFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Prestamoareacomun) {	
	       $rta.="{
	    \"prestamo_idPrestamo_idPrestamo\":\"{$Prestamoareacomun->getprestamo_idPrestamo()->getidPrestamo()}\",
	    \"areaComun_idAreaComun_idAreaComun\":\"{$Prestamoareacomun->getareaComun_idAreaComun()->getidAreaComun()}\",
	    \"fechaPestamoAreaComun\":\"{$Prestamoareacomun->getfechaPestamoAreaComun()}\",
	    \"descripcionPrestamoAreaComun\":\"{$Prestamoareacomun->getdescripcionPrestamoAreaComun()}\"
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