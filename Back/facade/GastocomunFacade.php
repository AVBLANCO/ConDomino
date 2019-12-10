<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Gastocomun.php');
require_once realpath('../dao/interfaz/IGastocomunDao.php');
require_once realpath('../dto/Calendario.php');
require_once realpath('../dto/Condominio.php');

class GastocomunFacade {

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
   * Crea un objeto Gastocomun a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGastoComun
   * @param observacionGasto
   * @param costoTotalGasto
   * @param calendario_idCalendario
   * @param fechaInicioCancelacionGastoComun
   * @param fechaFinCancelacionGastoComun
   * @param estadoGastoComun
   * @param fechaCreacionGastoComun
   * @param condominio_idCondominio
   */
  public static function insert( $idGastoComun,  $observacionGasto,  $costoTotalGasto,  $calendario_idCalendario,  $fechaInicioCancelacionGastoComun,  $fechaFinCancelacionGastoComun,  $estadoGastoComun,  $fechaCreacionGastoComun,  $condominio_idCondominio){
      $gastocomun = new Gastocomun();
      $gastocomun->setIdGastoComun($idGastoComun); 
      $gastocomun->setObservacionGasto($observacionGasto); 
      $gastocomun->setCostoTotalGasto($costoTotalGasto); 
      $gastocomun->setCalendario_idCalendario($calendario_idCalendario); 
      $gastocomun->setFechaInicioCancelacionGastoComun($fechaInicioCancelacionGastoComun); 
      $gastocomun->setFechaFinCancelacionGastoComun($fechaFinCancelacionGastoComun); 
      $gastocomun->setEstadoGastoComun($estadoGastoComun); 
      $gastocomun->setFechaCreacionGastoComun($fechaCreacionGastoComun); 
      $gastocomun->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gastocomunDao =$FactoryDao->getgastocomunDao(self::getDataBaseDefault());
     $rtn = $gastocomunDao->insert($gastocomun);
     $gastocomunDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Gastocomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGastoComun
   * @return El objeto en base de datos o Null
   */
  public static function select($idGastoComun){
      $gastocomun = new Gastocomun();
      $gastocomun->setIdGastoComun($idGastoComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gastocomunDao =$FactoryDao->getgastocomunDao(self::getDataBaseDefault());
     $result = $gastocomunDao->select($gastocomun);
     $gastocomunDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Gastocomun  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGastoComun
   * @param observacionGasto
   * @param costoTotalGasto
   * @param calendario_idCalendario
   * @param fechaInicioCancelacionGastoComun
   * @param fechaFinCancelacionGastoComun
   * @param estadoGastoComun
   * @param fechaCreacionGastoComun
   * @param condominio_idCondominio
   */
  public static function update($idGastoComun, $observacionGasto, $costoTotalGasto, $calendario_idCalendario, $fechaInicioCancelacionGastoComun, $fechaFinCancelacionGastoComun, $estadoGastoComun, $fechaCreacionGastoComun, $condominio_idCondominio){
      $gastocomun = self::select($idGastoComun);
      $gastocomun->setObservacionGasto($observacionGasto); 
      $gastocomun->setCostoTotalGasto($costoTotalGasto); 
      $gastocomun->setCalendario_idCalendario($calendario_idCalendario); 
      $gastocomun->setFechaInicioCancelacionGastoComun($fechaInicioCancelacionGastoComun); 
      $gastocomun->setFechaFinCancelacionGastoComun($fechaFinCancelacionGastoComun); 
      $gastocomun->setEstadoGastoComun($estadoGastoComun); 
      $gastocomun->setFechaCreacionGastoComun($fechaCreacionGastoComun); 
      $gastocomun->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gastocomunDao =$FactoryDao->getgastocomunDao(self::getDataBaseDefault());
     $gastocomunDao->update($gastocomun);
     $gastocomunDao->close();
  }

  /**
   * Elimina un objeto Gastocomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idGastoComun
   */
  public static function delete($idGastoComun){
      $gastocomun = new Gastocomun();
      $gastocomun->setIdGastoComun($idGastoComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gastocomunDao =$FactoryDao->getgastocomunDao(self::getDataBaseDefault());
     $gastocomunDao->delete($gastocomun);
     $gastocomunDao->close();
  }

  /**
   * Lista todos los objetos Gastocomun de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Gastocomun en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $gastocomunDao =$FactoryDao->getgastocomunDao(self::getDataBaseDefault());
     $result = $gastocomunDao->listAll();
     $gastocomunDao->close();
     return $result;
  }


}
//That`s all folks!