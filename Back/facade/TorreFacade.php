<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Dispongo de doce horas de adelanto, puedo de decárselas a ella  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Torre.php');
require_once realpath('../dao/interfaz/ITorreDao.php');
require_once realpath('../dto/Condominio.php');

class TorreFacade {

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
   * Crea un objeto Torre a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   * @param descripcionTorre
   * @param condominio_idCondominio
   */
  public static function insert( $idTorre,  $descripcionTorre,  $condominio_idCondominio){
      $torre = new Torre();
      $torre->setIdTorre($idTorre); 
      $torre->setDescripcionTorre($descripcionTorre); 
      $torre->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $torreDao =$FactoryDao->gettorreDao(self::getDataBaseDefault());
     $rtn = $torreDao->insert($torre);
     $torreDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Torre de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   * @return El objeto en base de datos o Null
   */
  public static function select($idTorre){
      $torre = new Torre();
      $torre->setIdTorre($idTorre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $torreDao =$FactoryDao->gettorreDao(self::getDataBaseDefault());
     $result = $torreDao->select($torre);
     $torreDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Torre  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   * @param descripcionTorre
   * @param condominio_idCondominio
   */
  public static function update($idTorre, $descripcionTorre, $condominio_idCondominio){
      $torre = self::select($idTorre);
      $torre->setDescripcionTorre($descripcionTorre); 
      $torre->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $torreDao =$FactoryDao->gettorreDao(self::getDataBaseDefault());
     $torreDao->update($torre);
     $torreDao->close();
  }

  /**
   * Elimina un objeto Torre de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   */
  public static function delete($idTorre){
      $torre = new Torre();
      $torre->setIdTorre($idTorre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $torreDao =$FactoryDao->gettorreDao(self::getDataBaseDefault());
     $torreDao->delete($torre);
     $torreDao->close();
  }

  /**
   * Lista todos los objetos Torre de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Torre en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $torreDao =$FactoryDao->gettorreDao(self::getDataBaseDefault());
     $result = $torreDao->listAll();
     $torreDao->close();
     return $result;
  }


}
//That`s all folks!