<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La noche está estrellada, y tiritan, azules, los astros, a lo lejos  \\
include_once realpath('../facade/ProveedorFacade.php');


class ProveedorController {

    public static function insert(){
        $idProveedor = strip_tags($_POST['idProveedor']);
        $rutProveedor = strip_tags($_POST['rutProveedor']);
        $formaDePagoProveedor = strip_tags($_POST['formaDePagoProveedor']);
        $telefonoProveedor = strip_tags($_POST['telefonoProveedor']);
        $correoProveedor = strip_tags($_POST['correoProveedor']);
        $direccionProveedor = strip_tags($_POST['direccionProveedor']);
        $fechaCreacionProveedor = strip_tags($_POST['fechaCreacionProveedor']);
        $Producto_idProducto = strip_tags($_POST['producto_idProducto']);
        $producto= new Producto();
        $producto->setIdProducto($Producto_idProducto);
        ProveedorFacade::insert($idProveedor, $rutProveedor, $formaDePagoProveedor, $telefonoProveedor, $correoProveedor, $direccionProveedor, $fechaCreacionProveedor, $producto);
return true;
    }

    public static function listAll(){
        $list=ProveedorFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Proveedor) {	
	       $rta.="{
	    \"idProveedor\":\"{$Proveedor->getidProveedor()}\",
	    \"rutProveedor\":\"{$Proveedor->getrutProveedor()}\",
	    \"formaDePagoProveedor\":\"{$Proveedor->getformaDePagoProveedor()}\",
	    \"telefonoProveedor\":\"{$Proveedor->gettelefonoProveedor()}\",
	    \"correoProveedor\":\"{$Proveedor->getcorreoProveedor()}\",
	    \"direccionProveedor\":\"{$Proveedor->getdireccionProveedor()}\",
	    \"fechaCreacionProveedor\":\"{$Proveedor->getfechaCreacionProveedor()}\",
	    \"producto_idProducto_idProducto\":\"{$Proveedor->getproducto_idProducto()->getidProducto()}\"
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