<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si crees que las mujeres son difíciles, no conoces Anarchy  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Eventopersona.php');
require_once realpath('../dao/interfaz/IEventopersonaDao.php');
require_once realpath('../dto/Evento.php');
require_once realpath('../dto/Persona.php');
require_once realpath('../dto/Condominio.php');

class EventopersonaFacade {

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
   * Crea un objeto Eventopersona a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param evento_idevento
   * @param persona_idpersona
   * @param condominio_idCondominio
   */
  public static function insert( $evento_idevento,  $persona_idpersona,  $condominio_idCondominio){
      $eventopersona = new Eventopersona();
      $eventopersona->setEvento_idevento($evento_idevento); 
      $eventopersona->setPersona_idpersona($persona_idpersona); 
      $eventopersona->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $rtn = $eventopersonaDao->insert($eventopersona);
     $eventopersonaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Eventopersona de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param evento_idevento
   * @param persona_idpersona
   * @return El objeto en base de datos o Null
   */
  public static function select($evento_idevento, $persona_idpersona){
      $eventopersona = new Eventopersona();
      $eventopersona->setEvento_idevento($evento_idevento); 
      $eventopersona->setPersona_idpersona($persona_idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $result = $eventopersonaDao->select($eventopersona);
     $eventopersonaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Eventopersona  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param evento_idevento
   * @param persona_idpersona
   * @param condominio_idCondominio
   */
  public static function update($evento_idevento, $persona_idpersona, $condominio_idCondominio){
      $eventopersona = self::select($evento_idevento, $persona_idpersona);
      $eventopersona->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $eventopersonaDao->update($eventopersona);
     $eventopersonaDao->close();
  }

  /**
   * Elimina un objeto Eventopersona de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param evento_idevento
   * @param persona_idpersona
   */
  public static function delete($evento_idevento, $persona_idpersona){
      $eventopersona = new Eventopersona();
      $eventopersona->setEvento_idevento($evento_idevento); 
      $eventopersona->setPersona_idpersona($persona_idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $eventopersonaDao->delete($eventopersona);
     $eventopersonaDao->close();
  }

  /**
   * Lista todos los objetos Eventopersona de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Eventopersona en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $result = $eventopersonaDao->listAll();
     $eventopersonaDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Eventopersona de la base de datos a partir de evento_idevento.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param evento_idevento
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByEvento_idevento($evento_idevento){
      $eventopersona = new Eventopersona();
      $eventopersona->setEvento_idevento($evento_idevento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $result = $eventopersonaDao->listByEvento_idevento($eventopersona);
     $eventopersonaDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Eventopersona de la base de datos a partir de persona_idpersona.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param persona_idpersona
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByPersona_idpersona($persona_idpersona){
      $eventopersona = new Eventopersona();
      $eventopersona->setPersona_idpersona($persona_idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $eventopersonaDao =$FactoryDao->geteventopersonaDao(self::getDataBaseDefault());
     $result = $eventopersonaDao->listByPersona_idpersona($eventopersona);
     $eventopersonaDao->close();
     return $result;
  }


}
//That`s all folks!