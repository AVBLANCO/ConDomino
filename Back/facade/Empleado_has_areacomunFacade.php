<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Y pensar que Anarchy está hecho en código espagueti...  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Empleado_has_areacomun.php');
require_once realpath('../dao/interfaz/IEmpleado_has_areacomunDao.php');
require_once realpath('../dto/Empleado.php');
require_once realpath('../dto/Areacomun.php');

class Empleado_has_areacomunFacade {

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
   * Crea un objeto Empleado_has_areacomun a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param areaComun_idAreaComun
   */
  public static function insert( $empleado_idempleado,  $areaComun_idAreaComun){
      $empleado_has_areacomun = new Empleado_has_areacomun();
      $empleado_has_areacomun->setEmpleado_idempleado($empleado_idempleado); 
      $empleado_has_areacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $rtn = $empleado_has_areacomunDao->insert($empleado_has_areacomun);
     $empleado_has_areacomunDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Empleado_has_areacomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param areaComun_idAreaComun
   * @return El objeto en base de datos o Null
   */
  public static function select($empleado_idempleado, $areaComun_idAreaComun){
      $empleado_has_areacomun = new Empleado_has_areacomun();
      $empleado_has_areacomun->setEmpleado_idempleado($empleado_idempleado); 
      $empleado_has_areacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $result = $empleado_has_areacomunDao->select($empleado_has_areacomun);
     $empleado_has_areacomunDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Empleado_has_areacomun  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param areaComun_idAreaComun
   */
  public static function update($empleado_idempleado, $areaComun_idAreaComun){
      $empleado_has_areacomun = self::select($empleado_idempleado, $areaComun_idAreaComun);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $empleado_has_areacomunDao->update($empleado_has_areacomun);
     $empleado_has_areacomunDao->close();
  }

  /**
   * Elimina un objeto Empleado_has_areacomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param areaComun_idAreaComun
   */
  public static function delete($empleado_idempleado, $areaComun_idAreaComun){
      $empleado_has_areacomun = new Empleado_has_areacomun();
      $empleado_has_areacomun->setEmpleado_idempleado($empleado_idempleado); 
      $empleado_has_areacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $empleado_has_areacomunDao->delete($empleado_has_areacomun);
     $empleado_has_areacomunDao->close();
  }

  /**
   * Lista todos los objetos Empleado_has_areacomun de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Empleado_has_areacomun en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $result = $empleado_has_areacomunDao->listAll();
     $empleado_has_areacomunDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Empleado_has_areacomun de la base de datos a partir de empleado_idempleado.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByEmpleado_idempleado($empleado_idempleado){
      $empleado_has_areacomun = new Empleado_has_areacomun();
      $empleado_has_areacomun->setEmpleado_idempleado($empleado_idempleado); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $result = $empleado_has_areacomunDao->listByEmpleado_idempleado($empleado_has_areacomun);
     $empleado_has_areacomunDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Empleado_has_areacomun de la base de datos a partir de areaComun_idAreaComun.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param areaComun_idAreaComun
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByAreaComun_idAreaComun($areaComun_idAreaComun){
      $empleado_has_areacomun = new Empleado_has_areacomun();
      $empleado_has_areacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_areacomunDao =$FactoryDao->getempleado_has_areacomunDao(self::getDataBaseDefault());
     $result = $empleado_has_areacomunDao->listByAreaComun_idAreaComun($empleado_has_areacomun);
     $empleado_has_areacomunDao->close();
     return $result;
  }


}
//That`s all folks!