<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Interescuentavivienda.php');
require_once realpath('../dao/interfaz/IInterescuentaviviendaDao.php');
require_once realpath('../dto/Cuentavivienda.php');

class InterescuentaviviendaFacade {

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
   * Crea un objeto Interescuentavivienda a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idInteresCuentaVivienda
   * @param fechainteresCuentaVivienda
   * @param fechaHastaInteresCuentaVivienda
   * @param montoInteresCuentaVivienda
   * @param observacionInteres
   * @param fechaCreacionInteresCuentaVivienda
   * @param fechaEliminacionInteresCuentaVivienda
   * @param fechaModificacionInteresCuentaVivienda
   * @param cuentaVivienda_idCuentaVivienda
   */
  public static function insert( $idInteresCuentaVivienda,  $fechainteresCuentaVivienda,  $fechaHastaInteresCuentaVivienda,  $montoInteresCuentaVivienda,  $observacionInteres,  $fechaCreacionInteresCuentaVivienda,  $fechaEliminacionInteresCuentaVivienda,  $fechaModificacionInteresCuentaVivienda,  $cuentaVivienda_idCuentaVivienda){
      $interescuentavivienda = new Interescuentavivienda();
      $interescuentavivienda->setIdInteresCuentaVivienda($idInteresCuentaVivienda); 
      $interescuentavivienda->setFechainteresCuentaVivienda($fechainteresCuentaVivienda); 
      $interescuentavivienda->setFechaHastaInteresCuentaVivienda($fechaHastaInteresCuentaVivienda); 
      $interescuentavivienda->setMontoInteresCuentaVivienda($montoInteresCuentaVivienda); 
      $interescuentavivienda->setObservacionInteres($observacionInteres); 
      $interescuentavivienda->setFechaCreacionInteresCuentaVivienda($fechaCreacionInteresCuentaVivienda); 
      $interescuentavivienda->setFechaEliminacionInteresCuentaVivienda($fechaEliminacionInteresCuentaVivienda); 
      $interescuentavivienda->setFechaModificacionInteresCuentaVivienda($fechaModificacionInteresCuentaVivienda); 
      $interescuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentaVivienda_idCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $interescuentaviviendaDao =$FactoryDao->getinterescuentaviviendaDao(self::getDataBaseDefault());
     $rtn = $interescuentaviviendaDao->insert($interescuentavivienda);
     $interescuentaviviendaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Interescuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idInteresCuentaVivienda
   * @return El objeto en base de datos o Null
   */
  public static function select($idInteresCuentaVivienda){
      $interescuentavivienda = new Interescuentavivienda();
      $interescuentavivienda->setIdInteresCuentaVivienda($idInteresCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $interescuentaviviendaDao =$FactoryDao->getinterescuentaviviendaDao(self::getDataBaseDefault());
     $result = $interescuentaviviendaDao->select($interescuentavivienda);
     $interescuentaviviendaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Interescuentavivienda  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idInteresCuentaVivienda
   * @param fechainteresCuentaVivienda
   * @param fechaHastaInteresCuentaVivienda
   * @param montoInteresCuentaVivienda
   * @param observacionInteres
   * @param fechaCreacionInteresCuentaVivienda
   * @param fechaEliminacionInteresCuentaVivienda
   * @param fechaModificacionInteresCuentaVivienda
   * @param cuentaVivienda_idCuentaVivienda
   */
  public static function update($idInteresCuentaVivienda, $fechainteresCuentaVivienda, $fechaHastaInteresCuentaVivienda, $montoInteresCuentaVivienda, $observacionInteres, $fechaCreacionInteresCuentaVivienda, $fechaEliminacionInteresCuentaVivienda, $fechaModificacionInteresCuentaVivienda, $cuentaVivienda_idCuentaVivienda){
      $interescuentavivienda = self::select($idInteresCuentaVivienda);
      $interescuentavivienda->setFechainteresCuentaVivienda($fechainteresCuentaVivienda); 
      $interescuentavivienda->setFechaHastaInteresCuentaVivienda($fechaHastaInteresCuentaVivienda); 
      $interescuentavivienda->setMontoInteresCuentaVivienda($montoInteresCuentaVivienda); 
      $interescuentavivienda->setObservacionInteres($observacionInteres); 
      $interescuentavivienda->setFechaCreacionInteresCuentaVivienda($fechaCreacionInteresCuentaVivienda); 
      $interescuentavivienda->setFechaEliminacionInteresCuentaVivienda($fechaEliminacionInteresCuentaVivienda); 
      $interescuentavivienda->setFechaModificacionInteresCuentaVivienda($fechaModificacionInteresCuentaVivienda); 
      $interescuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentaVivienda_idCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $interescuentaviviendaDao =$FactoryDao->getinterescuentaviviendaDao(self::getDataBaseDefault());
     $interescuentaviviendaDao->update($interescuentavivienda);
     $interescuentaviviendaDao->close();
  }

  /**
   * Elimina un objeto Interescuentavivienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idInteresCuentaVivienda
   */
  public static function delete($idInteresCuentaVivienda){
      $interescuentavivienda = new Interescuentavivienda();
      $interescuentavivienda->setIdInteresCuentaVivienda($idInteresCuentaVivienda); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $interescuentaviviendaDao =$FactoryDao->getinterescuentaviviendaDao(self::getDataBaseDefault());
     $interescuentaviviendaDao->delete($interescuentavivienda);
     $interescuentaviviendaDao->close();
  }

  /**
   * Lista todos los objetos Interescuentavivienda de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Interescuentavivienda en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $interescuentaviviendaDao =$FactoryDao->getinterescuentaviviendaDao(self::getDataBaseDefault());
     $result = $interescuentaviviendaDao->listAll();
     $interescuentaviviendaDao->close();
     return $result;
  }


}
//That`s all folks!