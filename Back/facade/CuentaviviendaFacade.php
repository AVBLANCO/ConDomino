<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un generador de código no basta. Ahora debo inventar también un generador de frases tontas  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Cuentavivienda.php');
require_once realpath('../dao/interfaz/ICuentaviviendaDao.php');
require_once realpath('../dto/Apartamento.php');

class CuentaviviendaFacade {

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
   * Crea un objeto Cuentavivienda a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCuentaVivienda
   * @param descripcionCuentaVivienda
   * @param saldoCuentaVivienda
   * @param fechaCreacionCuentaVivienda
   * @param fechaActualizacionCuentaVivienda
   * @param apartamento_idApartamento
   */
  public static function insert( $idCuentaVivienda,  $descripcionCuentaVivienda,  $saldoCuentaVivienda,  $fechaCreacionCuentaVivienda,  $fechaActualizacionCuentaVivienda,  $apartamento_idApartamento){
      $cuentavivienda = new Cuentavivienda();
      $cuentavivienda->setIdCuentaVivienda($idCuentaVivienda); 
      $cuentavivienda->setDescripcionCuentaVivienda($descripcionCuentaVivienda); 
      $cuentavivienda->setSaldoCuentaVivienda($saldoCuentaVivienda); 
      $cuentavivienda->setFechaCreacionCuentaVivienda($fechaCreacionCuentaVivienda); 
      $cuentavivienda->setFechaActualizacionCuentaVivienda($fechaActualizacionCuentaVivienda); 
      $cuentavivienda->setApartamento_idApartamento($apartamento_idApartamento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cuentaviviendaDao =$FactoryDao->getcuentaviviendaDao(self::getDataBaseDefault());
     $rtn = $cuentaviviendaDao->insert($cuentavivienda);
     $cuentaviviendaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCuentaVivienda
   * @return El objeto en base de datos o Null
   */
  public static function select($idCuentaVivienda){
      $cuentavivienda = new Cuentavivienda();
      $cuentavivienda->setIdCuentaVivienda($idCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cuentaviviendaDao =$FactoryDao->getcuentaviviendaDao(self::getDataBaseDefault());
     $result = $cuentaviviendaDao->select($cuentavivienda);
     $cuentaviviendaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cuentavivienda  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCuentaVivienda
   * @param descripcionCuentaVivienda
   * @param saldoCuentaVivienda
   * @param fechaCreacionCuentaVivienda
   * @param fechaActualizacionCuentaVivienda
   * @param apartamento_idApartamento
   */
  public static function update($idCuentaVivienda, $descripcionCuentaVivienda, $saldoCuentaVivienda, $fechaCreacionCuentaVivienda, $fechaActualizacionCuentaVivienda, $apartamento_idApartamento){
      $cuentavivienda = self::select($idCuentaVivienda);
      $cuentavivienda->setDescripcionCuentaVivienda($descripcionCuentaVivienda); 
      $cuentavivienda->setSaldoCuentaVivienda($saldoCuentaVivienda); 
      $cuentavivienda->setFechaCreacionCuentaVivienda($fechaCreacionCuentaVivienda); 
      $cuentavivienda->setFechaActualizacionCuentaVivienda($fechaActualizacionCuentaVivienda); 
      $cuentavivienda->setApartamento_idApartamento($apartamento_idApartamento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cuentaviviendaDao =$FactoryDao->getcuentaviviendaDao(self::getDataBaseDefault());
     $cuentaviviendaDao->update($cuentavivienda);
     $cuentaviviendaDao->close();
  }

  /**
   * Elimina un objeto Cuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCuentaVivienda
   */
  public static function delete($idCuentaVivienda){
      $cuentavivienda = new Cuentavivienda();
      $cuentavivienda->setIdCuentaVivienda($idCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cuentaviviendaDao =$FactoryDao->getcuentaviviendaDao(self::getDataBaseDefault());
     $cuentaviviendaDao->delete($cuentavivienda);
     $cuentaviviendaDao->close();
  }

  /**
   * Lista todos los objetos Cuentavivienda de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cuentavivienda en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cuentaviviendaDao =$FactoryDao->getcuentaviviendaDao(self::getDataBaseDefault());
     $result = $cuentaviviendaDao->listAll();
     $cuentaviviendaDao->close();
     return $result;
  }


}
//That`s all folks!