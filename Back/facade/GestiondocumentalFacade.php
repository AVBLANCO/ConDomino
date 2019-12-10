<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Gestiondocumental.php');
require_once realpath('../dao/interfaz/IGestiondocumentalDao.php');

class GestiondocumentalFacade {

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
   * Crea un objeto Gestiondocumental a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGestionDocumental
   * @param descripcionGestionDoc
   */
  public static function insert( $idGestionDocumental,  $descripcionGestionDoc){
      $gestiondocumental = new Gestiondocumental();
      $gestiondocumental->setIdGestionDocumental($idGestionDocumental); 
      $gestiondocumental->setDescripcionGestionDoc($descripcionGestionDoc); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gestiondocumentalDao =$FactoryDao->getgestiondocumentalDao(self::getDataBaseDefault());
     $rtn = $gestiondocumentalDao->insert($gestiondocumental);
     $gestiondocumentalDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Gestiondocumental de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGestionDocumental
   * @return El objeto en base de datos o Null
   */
  public static function select($idGestionDocumental){
      $gestiondocumental = new Gestiondocumental();
      $gestiondocumental->setIdGestionDocumental($idGestionDocumental); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gestiondocumentalDao =$FactoryDao->getgestiondocumentalDao(self::getDataBaseDefault());
     $result = $gestiondocumentalDao->select($gestiondocumental);
     $gestiondocumentalDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Gestiondocumental  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGestionDocumental
   * @param descripcionGestionDoc
   */
  public static function update($idGestionDocumental, $descripcionGestionDoc){
      $gestiondocumental = self::select($idGestionDocumental);
      $gestiondocumental->setDescripcionGestionDoc($descripcionGestionDoc); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gestiondocumentalDao =$FactoryDao->getgestiondocumentalDao(self::getDataBaseDefault());
     $gestiondocumentalDao->update($gestiondocumental);
     $gestiondocumentalDao->close();
  }

  /**
   * Elimina un objeto Gestiondocumental de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGestionDocumental
   */
  public static function delete($idGestionDocumental){
      $gestiondocumental = new Gestiondocumental();
      $gestiondocumental->setIdGestionDocumental($idGestionDocumental); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gestiondocumentalDao =$FactoryDao->getgestiondocumentalDao(self::getDataBaseDefault());
     $gestiondocumentalDao->delete($gestiondocumental);
     $gestiondocumentalDao->close();
  }

  /**
   * Lista todos los objetos Gestiondocumental de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Gestiondocumental en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gestiondocumentalDao =$FactoryDao->getgestiondocumentalDao(self::getDataBaseDefault());
     $result = $gestiondocumentalDao->listAll();
     $gestiondocumentalDao->close();
     return $result;
  }


}
//That`s all folks!