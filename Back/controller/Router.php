<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora tú puedes ser el tipo con el látigo  \\
include_once realpath('ApartamentoController.php');
include_once realpath('ApartamentousuarioController.php');
include_once realpath('AreacomunController.php');
include_once realpath('BodegaController.php');
include_once realpath('Bodega_has_productoController.php');
include_once realpath('CalendarioController.php');
include_once realpath('CondominioController.php');
include_once realpath('CuentaviviendaController.php');
include_once realpath('DetalleexistenciabodegaController.php');
include_once realpath('DetallefacturaController.php');
include_once realpath('EmpleadoController.php');
include_once realpath('Empleado_has_areacomunController.php');
include_once realpath('Empleado_has_detallefacturaController.php');
include_once realpath('EventoController.php');
include_once realpath('EventopersonaController.php');
include_once realpath('FacturacuentaviviendaController.php');
include_once realpath('GastocomunController.php');
include_once realpath('GestiondocumentalController.php');
include_once realpath('InterescuentaviviendaController.php');
include_once realpath('PagocuentaviviendaController.php');
include_once realpath('PersonaController.php');
include_once realpath('PisoController.php');
include_once realpath('PrestamoController.php');
include_once realpath('PrestamoareacomunController.php');
include_once realpath('ProductoController.php');
include_once realpath('ProveedorController.php');
include_once realpath('RolController.php');
include_once realpath('TipousuarioController.php');
include_once realpath('TorreController.php');
include_once realpath('UsuarioController.php');

$ruta = strip_tags($_POST['ruta']);
    	$rtn = "";
    	switch ($ruta) {
           case 'ApartamentoInsert':
    			$rtn = ApartamentoController::insert();
    			break;
    		case 'ApartamentoList':
    			$rtn = ApartamentoController::listAll();
    			break;
           case 'ApartamentousuarioInsert':
    			$rtn = ApartamentousuarioController::insert();
    			break;
    		case 'ApartamentousuarioList':
    			$rtn = ApartamentousuarioController::listAll();
    			break;
           case 'AreacomunInsert':
    			$rtn = AreacomunController::insert();
    			break;
    		case 'AreacomunList':
    			$rtn = AreacomunController::listAll();
    			break;
           case 'BodegaInsert':
    			$rtn = BodegaController::insert();
    			break;
    		case 'BodegaList':
    			$rtn = BodegaController::listAll();
    			break;
           case 'Bodega_has_productoInsert':
    			$rtn = Bodega_has_productoController::insert();
    			break;
    		case 'Bodega_has_productoList':
    			$rtn = Bodega_has_productoController::listAll();
    			break;
           case 'CalendarioInsert':
    			$rtn = CalendarioController::insert();
    			break;
    		case 'CalendarioList':
    			$rtn = CalendarioController::listAll();
    			break;
           case 'CondominioInsert':
    			$rtn = CondominioController::insert();
    			break;
    		case 'CondominioList':
    			$rtn = CondominioController::listAll();
    			break;
           case 'CuentaviviendaInsert':
    			$rtn = CuentaviviendaController::insert();
    			break;
    		case 'CuentaviviendaList':
    			$rtn = CuentaviviendaController::listAll();
    			break;
           case 'DetalleexistenciabodegaInsert':
    			$rtn = DetalleexistenciabodegaController::insert();
    			break;
    		case 'DetalleexistenciabodegaList':
    			$rtn = DetalleexistenciabodegaController::listAll();
    			break;
           case 'DetallefacturaInsert':
    			$rtn = DetallefacturaController::insert();
    			break;
    		case 'DetallefacturaList':
    			$rtn = DetallefacturaController::listAll();
    			break;
           case 'EmpleadoInsert':
    			$rtn = EmpleadoController::insert();
    			break;
    		case 'EmpleadoList':
    			$rtn = EmpleadoController::listAll();
    			break;
           case 'Empleado_has_areacomunInsert':
    			$rtn = Empleado_has_areacomunController::insert();
    			break;
    		case 'Empleado_has_areacomunList':
    			$rtn = Empleado_has_areacomunController::listAll();
    			break;
           case 'Empleado_has_detallefacturaInsert':
    			$rtn = Empleado_has_detallefacturaController::insert();
    			break;
    		case 'Empleado_has_detallefacturaList':
    			$rtn = Empleado_has_detallefacturaController::listAll();
    			break;
           case 'EventoInsert':
    			$rtn = EventoController::insert();
    			break;
    		case 'EventoList':
    			$rtn = EventoController::listAll();
    			break;
           case 'EventopersonaInsert':
    			$rtn = EventopersonaController::insert();
    			break;
    		case 'EventopersonaList':
    			$rtn = EventopersonaController::listAll();
    			break;
           case 'FacturacuentaviviendaInsert':
    			$rtn = FacturacuentaviviendaController::insert();
    			break;
    		case 'FacturacuentaviviendaList':
    			$rtn = FacturacuentaviviendaController::listAll();
    			break;
           case 'GastocomunInsert':
    			$rtn = GastocomunController::insert();
    			break;
    		case 'GastocomunList':
    			$rtn = GastocomunController::listAll();
    			break;
           case 'GestiondocumentalInsert':
    			$rtn = GestiondocumentalController::insert();
    			break;
    		case 'GestiondocumentalList':
    			$rtn = GestiondocumentalController::listAll();
    			break;
           case 'InterescuentaviviendaInsert':
    			$rtn = InterescuentaviviendaController::insert();
    			break;
    		case 'InterescuentaviviendaList':
    			$rtn = InterescuentaviviendaController::listAll();
    			break;
           case 'PagocuentaviviendaInsert':
    			$rtn = PagocuentaviviendaController::insert();
    			break;
    		case 'PagocuentaviviendaList':
    			$rtn = PagocuentaviviendaController::listAll();
    			break;
           case 'PersonaInsert':
    			$rtn = PersonaController::insert();
    			break;
    		case 'PersonaList':
    			$rtn = PersonaController::listAll();
    			break;
           case 'PisoInsert':
    			$rtn = PisoController::insert();
    			break;
    		case 'PisoList':
    			$rtn = PisoController::listAll();
    			break;
           case 'PrestamoInsert':
    			$rtn = PrestamoController::insert();
    			break;
    		case 'PrestamoList':
    			$rtn = PrestamoController::listAll();
    			break;
           case 'PrestamoareacomunInsert':
    			$rtn = PrestamoareacomunController::insert();
    			break;
    		case 'PrestamoareacomunList':
    			$rtn = PrestamoareacomunController::listAll();
    			break;
           case 'ProductoInsert':
    			$rtn = ProductoController::insert();
    			break;
    		case 'ProductoList':
    			$rtn = ProductoController::listAll();
    			break;
           case 'ProveedorInsert':
    			$rtn = ProveedorController::insert();
    			break;
    		case 'ProveedorList':
    			$rtn = ProveedorController::listAll();
    			break;
           case 'RolInsert':
    			$rtn = RolController::insert();
    			break;
    		case 'RolList':
    			$rtn = RolController::listAll();
    			break;
           case 'TipousuarioInsert':
    			$rtn = TipousuarioController::insert();
    			break;
    		case 'TipousuarioList':
    			$rtn = TipousuarioController::listAll();
    			break;
           case 'TorreInsert':
    			$rtn = TorreController::insert();
    			break;
    		case 'TorreList':
    			$rtn = TorreController::listAll();
    			break;
           case 'UsuarioInsert':
    			$rtn = UsuarioController::insert();
    			break;
    		case 'UsuarioList':
    			$rtn = UsuarioController::listAll();
    			break;
    		default:
    			$rtn="404 Ruta no encontrada.";
    			break;
    	}

echo $rtn;

//That`s all folks!