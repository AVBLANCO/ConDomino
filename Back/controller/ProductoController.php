<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tenemos trabajos que odiamos para comprar cosas que no necesitamos.  \\
include_once realpath('../facade/ProductoFacade.php');


class ProductoController {

    public static function insert(){
        $idProducto = strip_tags($_POST['idProducto']);
        $nombreProducto = strip_tags($_POST['nombreProducto']);
        $precioProducto = strip_tags($_POST['precioProducto']);
        $descripcionProducto = strip_tags($_POST['descripcionProducto']);
        $fechaCompraPoducto = strip_tags($_POST['fechaCompraPoducto']);
        ProductoFacade::insert($idProducto, $nombreProducto, $precioProducto, $descripcionProducto, $fechaCompraPoducto);
return true;
    }

    public static function listAll(){
        $list=ProductoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Producto) {	
	       $rta.="{
	    \"idProducto\":\"{$Producto->getidProducto()}\",
	    \"nombreProducto\":\"{$Producto->getnombreProducto()}\",
	    \"precioProducto\":\"{$Producto->getprecioProducto()}\",
	    \"descripcionProducto\":\"{$Producto->getdescripcionProducto()}\",
	    \"fechaCompraPoducto\":\"{$Producto->getfechaCompraPoducto()}\"
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