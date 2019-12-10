<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\

include_once realpath('../dao/conexion/Conexion.php');
include_once realpath('../dao/interfaz/IFactoryDao.php');

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de ApartamentoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ApartamentoDao
     */
     public function getApartamentoDao($dbName){
        return new ApartamentoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ApartamentousuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ApartamentousuarioDao
     */
     public function getApartamentousuarioDao($dbName){
        return new ApartamentousuarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de AreacomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AreacomunDao
     */
     public function getAreacomunDao($dbName){
        return new AreacomunDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de BodegaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de BodegaDao
     */
     public function getBodegaDao($dbName){
        return new BodegaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Bodega_has_productoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Bodega_has_productoDao
     */
     public function getBodega_has_productoDao($dbName){
        return new Bodega_has_productoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CalendarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalendarioDao
     */
     public function getCalendarioDao($dbName){
        return new CalendarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CondominioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CondominioDao
     */
     public function getCondominioDao($dbName){
        return new CondominioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CuentaviviendaDao
     */
     public function getCuentaviviendaDao($dbName){
        return new CuentaviviendaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de DetalleexistenciabodegaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DetalleexistenciabodegaDao
     */
     public function getDetalleexistenciabodegaDao($dbName){
        return new DetalleexistenciabodegaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de DetallefacturaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DetallefacturaDao
     */
     public function getDetallefacturaDao($dbName){
        return new DetallefacturaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EmpleadoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EmpleadoDao
     */
     public function getEmpleadoDao($dbName){
        return new EmpleadoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Empleado_has_areacomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Empleado_has_areacomunDao
     */
     public function getEmpleado_has_areacomunDao($dbName){
        return new Empleado_has_areacomunDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Empleado_has_detallefacturaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Empleado_has_detallefacturaDao
     */
     public function getEmpleado_has_detallefacturaDao($dbName){
        return new Empleado_has_detallefacturaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EventoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EventoDao
     */
     public function getEventoDao($dbName){
        return new EventoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EventopersonaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EventopersonaDao
     */
     public function getEventopersonaDao($dbName){
        return new EventopersonaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de FacturacuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FacturacuentaviviendaDao
     */
     public function getFacturacuentaviviendaDao($dbName){
        return new FacturacuentaviviendaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de GastocomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de GastocomunDao
     */
     public function getGastocomunDao($dbName){
        return new GastocomunDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de GestiondocumentalDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de GestiondocumentalDao
     */
     public function getGestiondocumentalDao($dbName){
        return new GestiondocumentalDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de InterescuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de InterescuentaviviendaDao
     */
     public function getInterescuentaviviendaDao($dbName){
        return new InterescuentaviviendaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de PagocuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PagocuentaviviendaDao
     */
     public function getPagocuentaviviendaDao($dbName){
        return new PagocuentaviviendaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de PersonaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PersonaDao
     */
     public function getPersonaDao($dbName){
        return new PersonaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de PisoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PisoDao
     */
     public function getPisoDao($dbName){
        return new PisoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de PrestamoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PrestamoDao
     */
     public function getPrestamoDao($dbName){
        return new PrestamoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de PrestamoareacomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PrestamoareacomunDao
     */
     public function getPrestamoareacomunDao($dbName){
        return new PrestamoareacomunDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ProductoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProductoDao
     */
     public function getProductoDao($dbName){
        return new ProductoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ProveedorDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProveedorDao
     */
     public function getProveedorDao($dbName){
        return new ProveedorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de RolDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de RolDao
     */
     public function getRolDao($dbName){
        return new RolDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TipousuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipousuarioDao
     */
     public function getTipousuarioDao($dbName){
        return new TipousuarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TorreDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TorreDao
     */
     public function getTorreDao($dbName){
        return new TorreDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de UsuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public function getUsuarioDao($dbName){
        return new UsuarioDao($this->conn->obtener($dbName));
    }

}
//That`s all folks!