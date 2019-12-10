<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡¡Bienvenido al mundo del mañana!!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Facturacuentavivienda.php');
require_once realpath('../dao/interfaz/IFacturacuentaviviendaDao.php');
require_once realpath('../dto/Cuentavivienda.php');
require_once realpath('../dto/Detallefactura.php');

class FacturacuentaviviendaFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Facturacuentavivienda a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfacturaCuentaVivienda
   * @param desccripcinFacturaCuentaVivienda
   * @param fechaCreacionFacturaCuentaVivienda
   * @param fechaPagoFacturaCuentaVivienda
   * @param montoFacturaCuentaVivienda
   * @param medioPagoFacturaCuentaVivienda
   * @param cuentaVivienda_idCuentaVivienda
   * @param estadoFacturaCuentaVivienda
   * @param detalleFactura_iddetalleFactura
   */
  public static function insert( $idfacturaCuentaVivienda,  $desccripcinFacturaCuentaVivienda,  $fechaCreacionFacturaCuentaVivienda,  $fechaPagoFacturaCuentaVivienda,  $montoFacturaCuentaVivienda,  $medioPagoFacturaCuentaVivienda,  $cuentaVivienda_idCuentaVivienda,  $estadoFacturaCuentaVivienda,  $detalleFactura_iddetalleFactura){
      $facturacuentavivienda = new Facturacuentavivienda();
      $facturacuentavivienda->setIdfacturaCuentaVivienda($idfacturaCuentaVivienda); 
      $facturacuentavivienda->setDesccripcinFacturaCuentaVivienda($desccripcinFacturaCuentaVivienda); 
      $facturacuentavivienda->setFechaCreacionFacturaCuentaVivienda($fechaCreacionFacturaCuentaVivienda); 
      $facturacuentavivienda->setFechaPagoFacturaCuentaVivienda($fechaPagoFacturaCuentaVivienda); 
      $facturacuentavivienda->setMontoFacturaCuentaVivienda($montoFacturaCuentaVivienda); 
      $facturacuentavivienda->setMedioPagoFacturaCuentaVivienda($medioPagoFacturaCuentaVivienda); 
      $facturacuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentaVivienda_idCuentaVivienda); 
      $facturacuentavivienda->setEstadoFacturaCuentaVivienda($estadoFacturaCuentaVivienda); 
      $facturacuentavivienda->setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturacuentaviviendaDao =$FactoryDao->getfacturacuentaviviendaDao(self::getDataBaseDefault());
     $rtn = $facturacuentaviviendaDao->insert($facturacuentavivienda);
     $facturacuentaviviendaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Facturacuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfacturaCuentaVivienda
   * @return El objeto en base de datos o Null
   */
  public static function select($idfacturaCuentaVivienda){
      $facturacuentavivienda = new Facturacuentavivienda();
      $facturacuentavivienda->setIdfacturaCuentaVivienda($idfacturaCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturacuentaviviendaDao =$FactoryDao->getfacturacuentaviviendaDao(self::getDataBaseDefault());
     $result = $facturacuentaviviendaDao->select($facturacuentavivienda);
     $facturacuentaviviendaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Facturacuentavivienda  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfacturaCuentaVivienda
   * @param desccripcinFacturaCuentaVivienda
   * @param fechaCreacionFacturaCuentaVivienda
   * @param fechaPagoFacturaCuentaVivienda
   * @param montoFacturaCuentaVivienda
   * @param medioPagoFacturaCuentaVivienda
   * @param cuentaVivienda_idCuentaVivienda
   * @param estadoFacturaCuentaVivienda
   * @param detalleFactura_iddetalleFactura
   */
  public static function update($idfacturaCuentaVivienda, $desccripcinFacturaCuentaVivienda, $fechaCreacionFacturaCuentaVivienda, $fechaPagoFacturaCuentaVivienda, $montoFacturaCuentaVivienda, $medioPagoFacturaCuentaVivienda, $cuentaVivienda_idCuentaVivienda, $estadoFacturaCuentaVivienda, $detalleFactura_iddetalleFactura){
      $facturacuentavivienda = self::select($idfacturaCuentaVivienda);
      $facturacuentavivienda->setDesccripcinFacturaCuentaVivienda($desccripcinFacturaCuentaVivienda); 
      $facturacuentavivienda->setFechaCreacionFacturaCuentaVivienda($fechaCreacionFacturaCuentaVivienda); 
      $facturacuentavivienda->setFechaPagoFacturaCuentaVivienda($fechaPagoFacturaCuentaVivienda); 
      $facturacuentavivienda->setMontoFacturaCuentaVivienda($montoFacturaCuentaVivienda); 
      $facturacuentavivienda->setMedioPagoFacturaCuentaVivienda($medioPagoFacturaCuentaVivienda); 
      $facturacuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentaVivienda_idCuentaVivienda); 
      $facturacuentavivienda->setEstadoFacturaCuentaVivienda($estadoFacturaCuentaVivienda); 
      $facturacuentavivienda->setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturacuentaviviendaDao =$FactoryDao->getfacturacuentaviviendaDao(self::getDataBaseDefault());
     $facturacuentaviviendaDao->update($facturacuentavivienda);
     $facturacuentaviviendaDao->close();
  }

  /**
   * Elimina un objeto Facturacuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idfacturaCuentaVivienda
   */
  public static function delete($idfacturaCuentaVivienda){
      $facturacuentavivienda = new Facturacuentavivienda();
      $facturacuentavivienda->setIdfacturaCuentaVivienda($idfacturaCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturacuentaviviendaDao =$FactoryDao->getfacturacuentaviviendaDao(self::getDataBaseDefault());
     $facturacuentaviviendaDao->delete($facturacuentavivienda);
     $facturacuentaviviendaDao->close();
  }

  /**
   * Lista todos los objetos Facturacuentavivienda de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Facturacuentavivienda en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $facturacuentaviviendaDao =$FactoryDao->getfacturacuentaviviendaDao(self::getDataBaseDefault());
     $result = $facturacuentaviviendaDao->listAll();
     $facturacuentaviviendaDao->close();
     return $result;
  }


}
//That`s all folks!