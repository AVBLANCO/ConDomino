<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Únicamente cuando se pierde todo somos libres para actuar.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Detallefactura.php');
require_once realpath('../dao/interfaz/IDetallefacturaDao.php');

class DetallefacturaFacade {

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
   * Crea un objeto Detallefactura a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param iddetalleFactura
   * @param valorDetalle
   * @param descripcionDetalle
   */
  public static function insert( $iddetalleFactura,  $valorDetalle,  $descripcionDetalle){
      $detallefactura = new Detallefactura();
      $detallefactura->setIddetalleFactura($iddetalleFactura); 
      $detallefactura->setValorDetalle($valorDetalle); 
      $detallefactura->setDescripcionDetalle($descripcionDetalle); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detallefacturaDao =$FactoryDao->getdetallefacturaDao(self::getDataBaseDefault());
     $rtn = $detallefacturaDao->insert($detallefactura);
     $detallefacturaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Detallefactura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param iddetalleFactura
   * @return El objeto en base de datos o Null
   */
  public static function select($iddetalleFactura){
      $detallefactura = new Detallefactura();
      $detallefactura->setIddetalleFactura($iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detallefacturaDao =$FactoryDao->getdetallefacturaDao(self::getDataBaseDefault());
     $result = $detallefacturaDao->select($detallefactura);
     $detallefacturaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Detallefactura  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param iddetalleFactura
   * @param valorDetalle
   * @param descripcionDetalle
   */
  public static function update($iddetalleFactura, $valorDetalle, $descripcionDetalle){
      $detallefactura = self::select($iddetalleFactura);
      $detallefactura->setValorDetalle($valorDetalle); 
      $detallefactura->setDescripcionDetalle($descripcionDetalle); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detallefacturaDao =$FactoryDao->getdetallefacturaDao(self::getDataBaseDefault());
     $detallefacturaDao->update($detallefactura);
     $detallefacturaDao->close();
  }

  /**
   * Elimina un objeto Detallefactura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param iddetalleFactura
   */
  public static function delete($iddetalleFactura){
      $detallefactura = new Detallefactura();
      $detallefactura->setIddetalleFactura($iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detallefacturaDao =$FactoryDao->getdetallefacturaDao(self::getDataBaseDefault());
     $detallefacturaDao->delete($detallefactura);
     $detallefacturaDao->close();
  }

  /**
   * Lista todos los objetos Detallefactura de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Detallefactura en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detallefacturaDao =$FactoryDao->getdetallefacturaDao(self::getDataBaseDefault());
     $result = $detallefacturaDao->listAll();
     $detallefacturaDao->close();
     return $result;
  }


}
//That`s all folks!