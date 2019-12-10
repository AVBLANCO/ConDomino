<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Lo sé porque lo sabe Fredy  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Evento.php');
require_once realpath('../dao/interfaz/IEventoDao.php');

class EventoFacade {

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
   * Crea un objeto Evento a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idevento
   * @param descripcionEvento
   * @param fechaEvento
   */
  public static function insert( $idevento,  $descripcionEvento,  $fechaEvento){
      $evento = new Evento();
      $evento->setIdevento($idevento); 
      $evento->setDescripcionEvento($descripcionEvento); 
      $evento->setFechaEvento($fechaEvento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventoDao =$FactoryDao->geteventoDao(self::getDataBaseDefault());
     $rtn = $eventoDao->insert($evento);
     $eventoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Evento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idevento
   * @return El objeto en base de datos o Null
   */
  public static function select($idevento){
      $evento = new Evento();
      $evento->setIdevento($idevento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventoDao =$FactoryDao->geteventoDao(self::getDataBaseDefault());
     $result = $eventoDao->select($evento);
     $eventoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Evento  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idevento
   * @param descripcionEvento
   * @param fechaEvento
   */
  public static function update($idevento, $descripcionEvento, $fechaEvento){
      $evento = self::select($idevento);
      $evento->setDescripcionEvento($descripcionEvento); 
      $evento->setFechaEvento($fechaEvento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventoDao =$FactoryDao->geteventoDao(self::getDataBaseDefault());
     $eventoDao->update($evento);
     $eventoDao->close();
  }

  /**
   * Elimina un objeto Evento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idevento
   */
  public static function delete($idevento){
      $evento = new Evento();
      $evento->setIdevento($idevento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventoDao =$FactoryDao->geteventoDao(self::getDataBaseDefault());
     $eventoDao->delete($evento);
     $eventoDao->close();
  }

  /**
   * Lista todos los objetos Evento de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Evento en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventoDao =$FactoryDao->geteventoDao(self::getDataBaseDefault());
     $result = $eventoDao->listAll();
     $eventoDao->close();
     return $result;
  }


}
//That`s all folks!