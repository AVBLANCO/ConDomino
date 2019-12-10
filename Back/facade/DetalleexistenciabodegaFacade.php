<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Detalleexistenciabodega.php');
require_once realpath('../dao/interfaz/IDetalleexistenciabodegaDao.php');

class DetalleexistenciabodegaFacade {

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
   * Crea un objeto Detalleexistenciabodega a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDetalleExistencia
   * @param unidadesExistencia
   * @param descipcionExistenciaBodega
   * @param fechaModificacionExistenciaBodega
   */
  public static function insert( $idDetalleExistencia,  $unidadesExistencia,  $descipcionExistenciaBodega,  $fechaModificacionExistenciaBodega){
      $detalleexistenciabodega = new Detalleexistenciabodega();
      $detalleexistenciabodega->setIdDetalleExistencia($idDetalleExistencia); 
      $detalleexistenciabodega->setUnidadesExistencia($unidadesExistencia); 
      $detalleexistenciabodega->setDescipcionExistenciaBodega($descipcionExistenciaBodega); 
      $detalleexistenciabodega->setFechaModificacionExistenciaBodega($fechaModificacionExistenciaBodega); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detalleexistenciabodegaDao =$FactoryDao->getdetalleexistenciabodegaDao(self::getDataBaseDefault());
     $rtn = $detalleexistenciabodegaDao->insert($detalleexistenciabodega);
     $detalleexistenciabodegaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Detalleexistenciabodega de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDetalleExistencia
   * @return El objeto en base de datos o Null
   */
  public static function select($idDetalleExistencia){
      $detalleexistenciabodega = new Detalleexistenciabodega();
      $detalleexistenciabodega->setIdDetalleExistencia($idDetalleExistencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detalleexistenciabodegaDao =$FactoryDao->getdetalleexistenciabodegaDao(self::getDataBaseDefault());
     $result = $detalleexistenciabodegaDao->select($detalleexistenciabodega);
     $detalleexistenciabodegaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Detalleexistenciabodega  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDetalleExistencia
   * @param unidadesExistencia
   * @param descipcionExistenciaBodega
   * @param fechaModificacionExistenciaBodega
   */
  public static function update($idDetalleExistencia, $unidadesExistencia, $descipcionExistenciaBodega, $fechaModificacionExistenciaBodega){
      $detalleexistenciabodega = self::select($idDetalleExistencia);
      $detalleexistenciabodega->setUnidadesExistencia($unidadesExistencia); 
      $detalleexistenciabodega->setDescipcionExistenciaBodega($descipcionExistenciaBodega); 
      $detalleexistenciabodega->setFechaModificacionExistenciaBodega($fechaModificacionExistenciaBodega); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detalleexistenciabodegaDao =$FactoryDao->getdetalleexistenciabodegaDao(self::getDataBaseDefault());
     $detalleexistenciabodegaDao->update($detalleexistenciabodega);
     $detalleexistenciabodegaDao->close();
  }

  /**
   * Elimina un objeto Detalleexistenciabodega de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDetalleExistencia
   */
  public static function delete($idDetalleExistencia){
      $detalleexistenciabodega = new Detalleexistenciabodega();
      $detalleexistenciabodega->setIdDetalleExistencia($idDetalleExistencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detalleexistenciabodegaDao =$FactoryDao->getdetalleexistenciabodegaDao(self::getDataBaseDefault());
     $detalleexistenciabodegaDao->delete($detalleexistenciabodega);
     $detalleexistenciabodegaDao->close();
  }

  /**
   * Lista todos los objetos Detalleexistenciabodega de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Detalleexistenciabodega en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $detalleexistenciabodegaDao =$FactoryDao->getdetalleexistenciabodegaDao(self::getDataBaseDefault());
     $result = $detalleexistenciabodegaDao->listAll();
     $detalleexistenciabodegaDao->close();
     return $result;
  }


}
//That`s all folks!