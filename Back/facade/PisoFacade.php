<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Estadistas informan que una linea de código equivale a un sorbo de café  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Piso.php');
require_once realpath('../dao/interfaz/IPisoDao.php');
require_once realpath('../dto/Torre.php');

class PisoFacade {

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
   * Crea un objeto Piso a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPiso
   * @param descripcionPiso
   * @param torre_idTorre
   */
  public static function insert( $idPiso,  $descripcionPiso,  $torre_idTorre){
      $piso = new Piso();
      $piso->setIdPiso($idPiso); 
      $piso->setDescripcionPiso($descripcionPiso); 
      $piso->setTorre_idTorre($torre_idTorre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pisoDao =$FactoryDao->getpisoDao(self::getDataBaseDefault());
     $rtn = $pisoDao->insert($piso);
     $pisoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Piso de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPiso
   * @return El objeto en base de datos o Null
   */
  public static function select($idPiso){
      $piso = new Piso();
      $piso->setIdPiso($idPiso); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pisoDao =$FactoryDao->getpisoDao(self::getDataBaseDefault());
     $result = $pisoDao->select($piso);
     $pisoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Piso  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPiso
   * @param descripcionPiso
   * @param torre_idTorre
   */
  public static function update($idPiso, $descripcionPiso, $torre_idTorre){
      $piso = self::select($idPiso);
      $piso->setDescripcionPiso($descripcionPiso); 
      $piso->setTorre_idTorre($torre_idTorre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pisoDao =$FactoryDao->getpisoDao(self::getDataBaseDefault());
     $pisoDao->update($piso);
     $pisoDao->close();
  }

  /**
   * Elimina un objeto Piso de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPiso
   */
  public static function delete($idPiso){
      $piso = new Piso();
      $piso->setIdPiso($idPiso); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pisoDao =$FactoryDao->getpisoDao(self::getDataBaseDefault());
     $pisoDao->delete($piso);
     $pisoDao->close();
  }

  /**
   * Lista todos los objetos Piso de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Piso en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pisoDao =$FactoryDao->getpisoDao(self::getDataBaseDefault());
     $result = $pisoDao->listAll();
     $pisoDao->close();
     return $result;
  }


}
//That`s all folks!