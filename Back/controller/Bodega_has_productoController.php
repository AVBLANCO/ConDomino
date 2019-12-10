<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Sólo relájate y deja que alguien más lo haga  \\
include_once realpath('../facade/Bodega_has_productoFacade.php');


class Bodega_has_productoController {

    public static function insert(){
        $Bodega_idBodega = strip_tags($_POST['bodega_idBodega']);
        $bodega= new Bodega();
        $bodega->setIdBodega($Bodega_idBodega);
        $Producto_idProducto = strip_tags($_POST['producto_idProducto']);
        $producto= new Producto();
        $producto->setIdProducto($Producto_idProducto);
        Bodega_has_productoFacade::insert($bodega, $producto);
return true;
    }

    public static function listAll(){
        $list=Bodega_has_productoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Bodega_has_producto) {	
	       $rta.="{
	    \"bodega_idBodega_idBodega\":\"{$Bodega_has_producto->getbodega_idBodega()->getidBodega()}\",
	    \"producto_idProducto_idProducto\":\"{$Bodega_has_producto->getproducto_idProducto()->getidProducto()}\"
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