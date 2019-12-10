<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ͡~ ͜ʖ ͡°)  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Areacomun.php');
require_once realpath('../dao/interfaz/IAreacomunDao.php');
require_once realpath('../dto/Condominio.php');

class AreacomunFacade {

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
   * Crea un objeto Areacomun a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAreaComun
   * @param detalleAreaComun
   * @param costoAreaComun
   * @param condominio_idCondominio
   * @param estadoAreaComun
   */
  public static function insert( $idAreaComun,  $detalleAreaComun,  $costoAreaComun,  $condominio_idCondominio,  $estadoAreaComun){
      $areacomun = new Areacomun();
      $areacomun->setIdAreaComun($idAreaComun); 
      $areacomun->setDetalleAreaComun($detalleAreaComun); 
      $areacomun->setCostoAreaComun($costoAreaComun); 
      $areacomun->setCondominio_idCondominio($condominio_idCondominio); 
      $areacomun->setEstadoAreaComun($estadoAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $areacomunDao =$FactoryDao->getareacomunDao(self::getDataBaseDefault());
     $rtn = $areacomunDao->insert($areacomun);
     $areacomunDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Areacomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAreaComun
   * @return El objeto en base de datos o Null
   */
  public static function select($idAreaComun){
      $areacomun = new Areacomun();
      $areacomun->setIdAreaComun($idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $areacomunDao =$FactoryDao->getareacomunDao(self::getDataBaseDefault());
     $result = $areacomunDao->select($areacomun);
     $areacomunDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Areacomun  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAreaComun
   * @param detalleAreaComun
   * @param costoAreaComun
   * @param condominio_idCondominio
   * @param estadoAreaComun
   */
  public static function update($idAreaComun, $detalleAreaComun, $costoAreaComun, $condominio_idCondominio, $estadoAreaComun){
      $areacomun = self::select($idAreaComun);
      $areacomun->setDetalleAreaComun($detalleAreaComun); 
      $areacomun->setCostoAreaComun($costoAreaComun); 
      $areacomun->setCondominio_idCondominio($condominio_idCondominio); 
      $areacomun->setEstadoAreaComun($estadoAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $areacomunDao =$FactoryDao->getareacomunDao(self::getDataBaseDefault());
     $areacomunDao->update($areacomun);
     $areacomunDao->close();
  }

  /**
   * Elimina un objeto Areacomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idAreaComun
   */
  public static function delete($idAreaComun){
      $areacomun = new Areacomun();
      $areacomun->setIdAreaComun($idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $areacomunDao =$FactoryDao->getareacomunDao(self::getDataBaseDefault());
     $areacomunDao->delete($areacomun);
     $areacomunDao->close();
  }

  /**
   * Lista todos los objetos Areacomun de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Areacomun en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $areacomunDao =$FactoryDao->getareacomunDao(self::getDataBaseDefault());
     $result = $areacomunDao->listAll();
     $areacomunDao->close();
     return $result;
  }


}
//That`s all folks!