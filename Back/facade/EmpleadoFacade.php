<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Y pensar que Anarchy está hecho en código espagueti...  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Empleado.php');
require_once realpath('../dao/interfaz/IEmpleadoDao.php');
require_once realpath('../dto/Persona.php');

class EmpleadoFacade {

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
   * Crea un objeto Empleado a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idempleado
   * @param areaEmpleado
   * @param cantidadHorasTrabajo
   * @param fechaInicioContrato
   * @param fechaFinCotrato
   * @param valorHora
   * @param persona_idpersona
   */
  public static function insert( $idempleado,  $areaEmpleado,  $cantidadHorasTrabajo,  $fechaInicioContrato,  $fechaFinCotrato,  $valorHora,  $persona_idpersona){
      $empleado = new Empleado();
      $empleado->setIdempleado($idempleado); 
      $empleado->setAreaEmpleado($areaEmpleado); 
      $empleado->setCantidadHorasTrabajo($cantidadHorasTrabajo); 
      $empleado->setFechaInicioContrato($fechaInicioContrato); 
      $empleado->setFechaFinCotrato($fechaFinCotrato); 
      $empleado->setValorHora($valorHora); 
      $empleado->setPersona_idpersona($persona_idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $rtn = $empleadoDao->insert($empleado);
     $empleadoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Empleado de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idempleado
   * @return El objeto en base de datos o Null
   */
  public static function select($idempleado){
      $empleado = new Empleado();
      $empleado->setIdempleado($idempleado); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $result = $empleadoDao->select($empleado);
     $empleadoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Empleado  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idempleado
   * @param areaEmpleado
   * @param cantidadHorasTrabajo
   * @param fechaInicioContrato
   * @param fechaFinCotrato
   * @param valorHora
   * @param persona_idpersona
   */
  public static function update($idempleado, $areaEmpleado, $cantidadHorasTrabajo, $fechaInicioContrato, $fechaFinCotrato, $valorHora, $persona_idpersona){
      $empleado = self::select($idempleado);
      $empleado->setAreaEmpleado($areaEmpleado); 
      $empleado->setCantidadHorasTrabajo($cantidadHorasTrabajo); 
      $empleado->setFechaInicioContrato($fechaInicioContrato); 
      $empleado->setFechaFinCotrato($fechaFinCotrato); 
      $empleado->setValorHora($valorHora); 
      $empleado->setPersona_idpersona($persona_idpersona); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $empleadoDao->update($empleado);
     $empleadoDao->close();
  }

  /**
   * Elimina un objeto Empleado de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idempleado
   */
  public static function delete($idempleado){
      $empleado = new Empleado();
      $empleado->setIdempleado($idempleado); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $empleadoDao->delete($empleado);
     $empleadoDao->close();
  }

  /**
   * Lista todos los objetos Empleado de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Empleado en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $result = $empleadoDao->listAll();
     $empleadoDao->close();
     return $result;
  }


}
//That`s all folks!