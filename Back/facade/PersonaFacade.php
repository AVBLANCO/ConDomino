<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Proletarios del mundo ¡Uníos!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Persona.php');
require_once realpath('../dao/interfaz/IPersonaDao.php');

class PersonaFacade {

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
   * Crea un objeto Persona a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpersona
   * @param nombrePersonal
   * @param nacionalidadPersona
   * @param fechaNacimientoPersona
   * @param telefonoPersona
   * @param correoPersona
   */
  public static function insert( $idpersona,  $nombrePersonal,  $nacionalidadPersona,  $fechaNacimientoPersona,  $telefonoPersona,  $correoPersona){
      $persona = new Persona();
      $persona->setIdpersona($idpersona); 
      $persona->setNombrePersonal($nombrePersonal); 
      $persona->setNacionalidadPersona($nacionalidadPersona); 
      $persona->setFechaNacimientoPersona($fechaNacimientoPersona); 
      $persona->setTelefonoPersona($telefonoPersona); 
      $persona->setCorreoPersona($correoPersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $personaDao =$FactoryDao->getpersonaDao(self::getDataBaseDefault());
     $rtn = $personaDao->insert($persona);
     $personaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Persona de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpersona
   * @return El objeto en base de datos o Null
   */
  public static function select($idpersona){
      $persona = new Persona();
      $persona->setIdpersona($idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $personaDao =$FactoryDao->getpersonaDao(self::getDataBaseDefault());
     $result = $personaDao->select($persona);
     $personaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Persona  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpersona
   * @param nombrePersonal
   * @param nacionalidadPersona
   * @param fechaNacimientoPersona
   * @param telefonoPersona
   * @param correoPersona
   */
  public static function update($idpersona, $nombrePersonal, $nacionalidadPersona, $fechaNacimientoPersona, $telefonoPersona, $correoPersona){
      $persona = self::select($idpersona);
      $persona->setNombrePersonal($nombrePersonal); 
      $persona->setNacionalidadPersona($nacionalidadPersona); 
      $persona->setFechaNacimientoPersona($fechaNacimientoPersona); 
      $persona->setTelefonoPersona($telefonoPersona); 
      $persona->setCorreoPersona($correoPersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $personaDao =$FactoryDao->getpersonaDao(self::getDataBaseDefault());
     $personaDao->update($persona);
     $personaDao->close();
  }

  /**
   * Elimina un objeto Persona de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpersona
   */
  public static function delete($idpersona){
      $persona = new Persona();
      $persona->setIdpersona($idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $personaDao =$FactoryDao->getpersonaDao(self::getDataBaseDefault());
     $personaDao->delete($persona);
     $personaDao->close();
  }

  /**
   * Lista todos los objetos Persona de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Persona en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $personaDao =$FactoryDao->getpersonaDao(self::getDataBaseDefault());
     $result = $personaDao->listAll();
     $personaDao->close();
     return $result;
  }


}
//That`s all folks!