<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\

include_once realpath('../dao/entities/ApartamentoDao.php');
include_once realpath('../dao/entities/ApartamentousuarioDao.php');
include_once realpath('../dao/entities/AreacomunDao.php');
include_once realpath('../dao/entities/BodegaDao.php');
include_once realpath('../dao/entities/Bodega_has_productoDao.php');
include_once realpath('../dao/entities/CalendarioDao.php');
include_once realpath('../dao/entities/CondominioDao.php');
include_once realpath('../dao/entities/CuentaviviendaDao.php');
include_once realpath('../dao/entities/DetalleexistenciabodegaDao.php');
include_once realpath('../dao/entities/DetallefacturaDao.php');
include_once realpath('../dao/entities/EmpleadoDao.php');
include_once realpath('../dao/entities/Empleado_has_areacomunDao.php');
include_once realpath('../dao/entities/Empleado_has_detallefacturaDao.php');
include_once realpath('../dao/entities/EventoDao.php');
include_once realpath('../dao/entities/EventopersonaDao.php');
include_once realpath('../dao/entities/FacturacuentaviviendaDao.php');
include_once realpath('../dao/entities/GastocomunDao.php');
include_once realpath('../dao/entities/GestiondocumentalDao.php');
include_once realpath('../dao/entities/InterescuentaviviendaDao.php');
include_once realpath('../dao/entities/PagocuentaviviendaDao.php');
include_once realpath('../dao/entities/PersonaDao.php');
include_once realpath('../dao/entities/PisoDao.php');
include_once realpath('../dao/entities/PrestamoDao.php');
include_once realpath('../dao/entities/PrestamoareacomunDao.php');
include_once realpath('../dao/entities/ProductoDao.php');
include_once realpath('../dao/entities/ProveedorDao.php');
include_once realpath('../dao/entities/RolDao.php');
include_once realpath('../dao/entities/TipousuarioDao.php');
include_once realpath('../dao/entities/TorreDao.php');
include_once realpath('../dao/entities/UsuarioDao.php');


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de ApartamentoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ApartamentoDao
     */
     public function getApartamentoDao($dbName);
     /**
     * Devuelve una instancia de ApartamentousuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ApartamentousuarioDao
     */
     public function getApartamentousuarioDao($dbName);
     /**
     * Devuelve una instancia de AreacomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AreacomunDao
     */
     public function getAreacomunDao($dbName);
     /**
     * Devuelve una instancia de BodegaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de BodegaDao
     */
     public function getBodegaDao($dbName);
     /**
     * Devuelve una instancia de Bodega_has_productoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Bodega_has_productoDao
     */
     public function getBodega_has_productoDao($dbName);
     /**
     * Devuelve una instancia de CalendarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalendarioDao
     */
     public function getCalendarioDao($dbName);
     /**
     * Devuelve una instancia de CondominioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CondominioDao
     */
     public function getCondominioDao($dbName);
     /**
     * Devuelve una instancia de CuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CuentaviviendaDao
     */
     public function getCuentaviviendaDao($dbName);
     /**
     * Devuelve una instancia de DetalleexistenciabodegaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DetalleexistenciabodegaDao
     */
     public function getDetalleexistenciabodegaDao($dbName);
     /**
     * Devuelve una instancia de DetallefacturaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DetallefacturaDao
     */
     public function getDetallefacturaDao($dbName);
     /**
     * Devuelve una instancia de EmpleadoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EmpleadoDao
     */
     public function getEmpleadoDao($dbName);
     /**
     * Devuelve una instancia de Empleado_has_areacomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Empleado_has_areacomunDao
     */
     public function getEmpleado_has_areacomunDao($dbName);
     /**
     * Devuelve una instancia de Empleado_has_detallefacturaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Empleado_has_detallefacturaDao
     */
     public function getEmpleado_has_detallefacturaDao($dbName);
     /**
     * Devuelve una instancia de EventoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EventoDao
     */
     public function getEventoDao($dbName);
     /**
     * Devuelve una instancia de EventopersonaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EventopersonaDao
     */
     public function getEventopersonaDao($dbName);
     /**
     * Devuelve una instancia de FacturacuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FacturacuentaviviendaDao
     */
     public function getFacturacuentaviviendaDao($dbName);
     /**
     * Devuelve una instancia de GastocomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de GastocomunDao
     */
     public function getGastocomunDao($dbName);
     /**
     * Devuelve una instancia de GestiondocumentalDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de GestiondocumentalDao
     */
     public function getGestiondocumentalDao($dbName);
     /**
     * Devuelve una instancia de InterescuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de InterescuentaviviendaDao
     */
     public function getInterescuentaviviendaDao($dbName);
     /**
     * Devuelve una instancia de PagocuentaviviendaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PagocuentaviviendaDao
     */
     public function getPagocuentaviviendaDao($dbName);
     /**
     * Devuelve una instancia de PersonaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PersonaDao
     */
     public function getPersonaDao($dbName);
     /**
     * Devuelve una instancia de PisoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PisoDao
     */
     public function getPisoDao($dbName);
     /**
     * Devuelve una instancia de PrestamoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PrestamoDao
     */
     public function getPrestamoDao($dbName);
     /**
     * Devuelve una instancia de PrestamoareacomunDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PrestamoareacomunDao
     */
     public function getPrestamoareacomunDao($dbName);
     /**
     * Devuelve una instancia de ProductoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProductoDao
     */
     public function getProductoDao($dbName);
     /**
     * Devuelve una instancia de ProveedorDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProveedorDao
     */
     public function getProveedorDao($dbName);
     /**
     * Devuelve una instancia de RolDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de RolDao
     */
     public function getRolDao($dbName);
     /**
     * Devuelve una instancia de TipousuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipousuarioDao
     */
     public function getTipousuarioDao($dbName);
     /**
     * Devuelve una instancia de TorreDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TorreDao
     */
     public function getTorreDao($dbName);
     /**
     * Devuelve una instancia de UsuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public function getUsuarioDao($dbName);

}
//That`s all folks!