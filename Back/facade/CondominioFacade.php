<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No se fije en el corte de cabello, soy mucho muy rico  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Condominio.php');
require_once realpath('../dao/interfaz/ICondominioDao.php');

class CondominioFacade {

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
   * Crea un objeto Condominio a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCondominio
   * @param nombreCondominio
   * @param direccionCondominio
   * @param telefonoCondominio
   * @param rutCondominio
   */
  public static function insert( $idCondominio,  $nombreCondominio,  $direccionCondominio,  $telefonoCondominio,  $rutCondominio){
      $condominio = new Condominio();
      $condominio->setIdCondominio($idCondominio); 
      $condominio->setNombreCondominio($nombreCondominio); 
      $condominio->setDireccionCondominio($direccionCondominio); 
      $condominio->setTelefonoCondominio($telefonoCondominio); 
      $condominio->setRutCondominio($rutCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $condominioDao =$FactoryDao->getcondominioDao(self::getDataBaseDefault());
     $rtn = $condominioDao->insert($condominio);
     $condominioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Condominio de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCondominio
   * @return El objeto en base de datos o Null
   */
  public static function select($idCondominio){
      $condominio = new Condominio();
      $condominio->setIdCondominio($idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $condominioDao =$FactoryDao->getcondominioDao(self::getDataBaseDefault());
     $result = $condominioDao->select($condominio);
     $condominioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Condominio  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCondominio
   * @param nombreCondominio
   * @param direccionCondominio
   * @param telefonoCondominio
   * @param rutCondominio
   */
  public static function update($idCondominio, $nombreCondominio, $direccionCondominio, $telefonoCondominio, $rutCondominio){
      $condominio = self::select($idCondominio);
      $condominio->setNombreCondominio($nombreCondominio); 
      $condominio->setDireccionCondominio($direccionCondominio); 
      $condominio->setTelefonoCondominio($telefonoCondominio); 
      $condominio->setRutCondominio($rutCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $condominioDao =$FactoryDao->getcondominioDao(self::getDataBaseDefault());
     $condominioDao->update($condominio);
     $condominioDao->close();
  }

  /**
   * Elimina un objeto Condominio de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCondominio
   */
  public static function delete($idCondominio){
      $condominio = new Condominio();
      $condominio->setIdCondominio($idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $condominioDao =$FactoryDao->getcondominioDao(self::getDataBaseDefault());
     $condominioDao->delete($condominio);
     $condominioDao->close();
  }

  /**
   * Lista todos los objetos Condominio de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Condominio en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $condominioDao =$FactoryDao->getcondominioDao(self::getDataBaseDefault());
     $result = $condominioDao->listAll();
     $condominioDao->close();
     return $result;
  }


}
//That`s all folks!