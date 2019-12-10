<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Pagocuentavivienda.php');
require_once realpath('../dao/interfaz/IPagocuentaviviendaDao.php');
require_once realpath('../dto/Facturacuentavivienda.php');

class PagocuentaviviendaFacade {

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
   * Crea un objeto Pagocuentavivienda a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpagoCuentaVivienda
   * @param detallePagoCuentaVivienda
   * @param fechaPagoFactura
   * @param facturaCuentaVivienda_idfacturaCuentaVivienda
   */
  public static function insert( $idpagoCuentaVivienda,  $detallePagoCuentaVivienda,  $fechaPagoFactura,  $facturaCuentaVivienda_idfacturaCuentaVivienda){
      $pagocuentavivienda = new Pagocuentavivienda();
      $pagocuentavivienda->setIdpagoCuentaVivienda($idpagoCuentaVivienda); 
      $pagocuentavivienda->setDetallePagoCuentaVivienda($detallePagoCuentaVivienda); 
      $pagocuentavivienda->setFechaPagoFactura($fechaPagoFactura); 
      $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturaCuentaVivienda_idfacturaCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $rtn = $pagocuentaviviendaDao->insert($pagocuentavivienda);
     $pagocuentaviviendaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Pagocuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpagoCuentaVivienda
   * @param facturaCuentaVivienda_idfacturaCuentaVivienda
   * @return El objeto en base de datos o Null
   */
  public static function select($idpagoCuentaVivienda, $facturaCuentaVivienda_idfacturaCuentaVivienda){
      $pagocuentavivienda = new Pagocuentavivienda();
      $pagocuentavivienda->setIdpagoCuentaVivienda($idpagoCuentaVivienda); 
      $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturaCuentaVivienda_idfacturaCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $result = $pagocuentaviviendaDao->select($pagocuentavivienda);
     $pagocuentaviviendaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Pagocuentavivienda  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpagoCuentaVivienda
   * @param detallePagoCuentaVivienda
   * @param fechaPagoFactura
   * @param facturaCuentaVivienda_idfacturaCuentaVivienda
   */
  public static function update($idpagoCuentaVivienda, $detallePagoCuentaVivienda, $fechaPagoFactura, $facturaCuentaVivienda_idfacturaCuentaVivienda){
      $pagocuentavivienda = self::select($idpagoCuentaVivienda, $facturaCuentaVivienda_idfacturaCuentaVivienda);
      $pagocuentavivienda->setDetallePagoCuentaVivienda($detallePagoCuentaVivienda); 
      $pagocuentavivienda->setFechaPagoFactura($fechaPagoFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $pagocuentaviviendaDao->update($pagocuentavivienda);
     $pagocuentaviviendaDao->close();
  }

  /**
   * Elimina un objeto Pagocuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpagoCuentaVivienda
   * @param facturaCuentaVivienda_idfacturaCuentaVivienda
   */
  public static function delete($idpagoCuentaVivienda, $facturaCuentaVivienda_idfacturaCuentaVivienda){
      $pagocuentavivienda = new Pagocuentavivienda();
      $pagocuentavivienda->setIdpagoCuentaVivienda($idpagoCuentaVivienda); 
      $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturaCuentaVivienda_idfacturaCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $pagocuentaviviendaDao->delete($pagocuentavivienda);
     $pagocuentaviviendaDao->close();
  }

  /**
   * Lista todos los objetos Pagocuentavivienda de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Pagocuentavivienda en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $result = $pagocuentaviviendaDao->listAll();
     $pagocuentaviviendaDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Pagocuentavivienda de la base de datos a partir de idpagoCuentaVivienda.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpagoCuentaVivienda
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdpagoCuentaVivienda($idpagoCuentaVivienda){
      $pagocuentavivienda = new Pagocuentavivienda();
      $pagocuentavivienda->setIdpagoCuentaVivienda($idpagoCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $result = $pagocuentaviviendaDao->listByIdpagoCuentaVivienda($pagocuentavivienda);
     $pagocuentaviviendaDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Pagocuentavivienda de la base de datos a partir de facturaCuentaVivienda_idfacturaCuentaVivienda.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param facturaCuentaVivienda_idfacturaCuentaVivienda
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByFacturaCuentaVivienda_idfacturaCuentaVivienda($facturaCuentaVivienda_idfacturaCuentaVivienda){
      $pagocuentavivienda = new Pagocuentavivienda();
      $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturaCuentaVivienda_idfacturaCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pagocuentaviviendaDao =$FactoryDao->getpagocuentaviviendaDao(self::getDataBaseDefault());
     $result = $pagocuentaviviendaDao->listByFacturaCuentaVivienda_idfacturaCuentaVivienda($pagocuentavivienda);
     $pagocuentaviviendaDao->close();
     return $result;
  }


}
//That`s all folks!