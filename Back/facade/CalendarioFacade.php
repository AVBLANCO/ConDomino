<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Calendario.php');
require_once realpath('../dao/interfaz/ICalendarioDao.php');

class CalendarioFacade {

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
   * Crea un objeto Calendario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCalendario
   * @param mesCalendario
   * @param anioCalendario
   * @param diaCalendario
   */
  public static function insert( $idCalendario,  $mesCalendario,  $anioCalendario,  $diaCalendario){
      $calendario = new Calendario();
      $calendario->setIdCalendario($idCalendario); 
      $calendario->setMesCalendario($mesCalendario); 
      $calendario->setAnioCalendario($anioCalendario); 
      $calendario->setDiaCalendario($diaCalendario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calendarioDao =$FactoryDao->getcalendarioDao(self::getDataBaseDefault());
     $rtn = $calendarioDao->insert($calendario);
     $calendarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Calendario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCalendario
   * @return El objeto en base de datos o Null
   */
  public static function select($idCalendario){
      $calendario = new Calendario();
      $calendario->setIdCalendario($idCalendario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calendarioDao =$FactoryDao->getcalendarioDao(self::getDataBaseDefault());
     $result = $calendarioDao->select($calendario);
     $calendarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Calendario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCalendario
   * @param mesCalendario
   * @param anioCalendario
   * @param diaCalendario
   */
  public static function update($idCalendario, $mesCalendario, $anioCalendario, $diaCalendario){
      $calendario = self::select($idCalendario);
      $calendario->setMesCalendario($mesCalendario); 
      $calendario->setAnioCalendario($anioCalendario); 
      $calendario->setDiaCalendario($diaCalendario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calendarioDao =$FactoryDao->getcalendarioDao(self::getDataBaseDefault());
     $calendarioDao->update($calendario);
     $calendarioDao->close();
  }

  /**
   * Elimina un objeto Calendario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCalendario
   */
  public static function delete($idCalendario){
      $calendario = new Calendario();
      $calendario->setIdCalendario($idCalendario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calendarioDao =$FactoryDao->getcalendarioDao(self::getDataBaseDefault());
     $calendarioDao->delete($calendario);
     $calendarioDao->close();
  }

  /**
   * Lista todos los objetos Calendario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Calendario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calendarioDao =$FactoryDao->getcalendarioDao(self::getDataBaseDefault());
     $result = $calendarioDao->listAll();
     $calendarioDao->close();
     return $result;
  }


}
//That`s all folks!