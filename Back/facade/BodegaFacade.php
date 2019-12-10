<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Le he dedicado más tiempo a las frases que al software interno  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Bodega.php');
require_once realpath('../dao/interfaz/IBodegaDao.php');
require_once realpath('../dto/Detalleexistenciabodega.php');

class BodegaFacade {

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
   * Crea un objeto Bodega a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idBodega
   * @param descripcionBodega
   * @param detalleExistenciaBodega_idDetalleExistencia
   */
  public static function insert( $idBodega,  $descripcionBodega,  $detalleExistenciaBodega_idDetalleExistencia){
      $bodega = new Bodega();
      $bodega->setIdBodega($idBodega); 
      $bodega->setDescripcionBodega($descripcionBodega); 
      $bodega->setDetalleExistenciaBodega_idDetalleExistencia($detalleExistenciaBodega_idDetalleExistencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodegaDao =$FactoryDao->getbodegaDao(self::getDataBaseDefault());
     $rtn = $bodegaDao->insert($bodega);
     $bodegaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Bodega de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idBodega
   * @return El objeto en base de datos o Null
   */
  public static function select($idBodega){
      $bodega = new Bodega();
      $bodega->setIdBodega($idBodega); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodegaDao =$FactoryDao->getbodegaDao(self::getDataBaseDefault());
     $result = $bodegaDao->select($bodega);
     $bodegaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Bodega  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idBodega
   * @param descripcionBodega
   * @param detalleExistenciaBodega_idDetalleExistencia
   */
  public static function update($idBodega, $descripcionBodega, $detalleExistenciaBodega_idDetalleExistencia){
      $bodega = self::select($idBodega);
      $bodega->setDescripcionBodega($descripcionBodega); 
      $bodega->setDetalleExistenciaBodega_idDetalleExistencia($detalleExistenciaBodega_idDetalleExistencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodegaDao =$FactoryDao->getbodegaDao(self::getDataBaseDefault());
     $bodegaDao->update($bodega);
     $bodegaDao->close();
  }

  /**
   * Elimina un objeto Bodega de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idBodega
   */
  public static function delete($idBodega){
      $bodega = new Bodega();
      $bodega->setIdBodega($idBodega); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodegaDao =$FactoryDao->getbodegaDao(self::getDataBaseDefault());
     $bodegaDao->delete($bodega);
     $bodegaDao->close();
  }

  /**
   * Lista todos los objetos Bodega de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Bodega en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodegaDao =$FactoryDao->getbodegaDao(self::getDataBaseDefault());
     $result = $bodegaDao->listAll();
     $bodegaDao->close();
     return $result;
  }


}
//That`s all folks!