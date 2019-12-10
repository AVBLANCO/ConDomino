<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Empleado_has_detallefactura.php');
require_once realpath('../dao/interfaz/IEmpleado_has_detallefacturaDao.php');
require_once realpath('../dto/Empleado.php');
require_once realpath('../dto/Detallefactura.php');

class Empleado_has_detallefacturaFacade {

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
   * Crea un objeto Empleado_has_detallefactura a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param detalleFactura_iddetalleFactura
   */
  public static function insert( $empleado_idempleado,  $detalleFactura_iddetalleFactura){
      $empleado_has_detallefactura = new Empleado_has_detallefactura();
      $empleado_has_detallefactura->setEmpleado_idempleado($empleado_idempleado); 
      $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $rtn = $empleado_has_detallefacturaDao->insert($empleado_has_detallefactura);
     $empleado_has_detallefacturaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Empleado_has_detallefactura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param detalleFactura_iddetalleFactura
   * @return El objeto en base de datos o Null
   */
  public static function select($empleado_idempleado, $detalleFactura_iddetalleFactura){
      $empleado_has_detallefactura = new Empleado_has_detallefactura();
      $empleado_has_detallefactura->setEmpleado_idempleado($empleado_idempleado); 
      $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $result = $empleado_has_detallefacturaDao->select($empleado_has_detallefactura);
     $empleado_has_detallefacturaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Empleado_has_detallefactura  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param detalleFactura_iddetalleFactura
   */
  public static function update($empleado_idempleado, $detalleFactura_iddetalleFactura){
      $empleado_has_detallefactura = self::select($empleado_idempleado, $detalleFactura_iddetalleFactura);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $empleado_has_detallefacturaDao->update($empleado_has_detallefactura);
     $empleado_has_detallefacturaDao->close();
  }

  /**
   * Elimina un objeto Empleado_has_detallefactura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @param detalleFactura_iddetalleFactura
   */
  public static function delete($empleado_idempleado, $detalleFactura_iddetalleFactura){
      $empleado_has_detallefactura = new Empleado_has_detallefactura();
      $empleado_has_detallefactura->setEmpleado_idempleado($empleado_idempleado); 
      $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $empleado_has_detallefacturaDao->delete($empleado_has_detallefactura);
     $empleado_has_detallefacturaDao->close();
  }

  /**
   * Lista todos los objetos Empleado_has_detallefactura de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Empleado_has_detallefactura en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $result = $empleado_has_detallefacturaDao->listAll();
     $empleado_has_detallefacturaDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Empleado_has_detallefactura de la base de datos a partir de empleado_idempleado.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param empleado_idempleado
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByEmpleado_idempleado($empleado_idempleado){
      $empleado_has_detallefactura = new Empleado_has_detallefactura();
      $empleado_has_detallefactura->setEmpleado_idempleado($empleado_idempleado); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $result = $empleado_has_detallefacturaDao->listByEmpleado_idempleado($empleado_has_detallefactura);
     $empleado_has_detallefacturaDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Empleado_has_detallefactura de la base de datos a partir de detalleFactura_iddetalleFactura.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param detalleFactura_iddetalleFactura
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura){
      $empleado_has_detallefactura = new Empleado_has_detallefactura();
      $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleado_has_detallefacturaDao =$FactoryDao->getempleado_has_detallefacturaDao(self::getDataBaseDefault());
     $result = $empleado_has_detallefacturaDao->listByDetalleFactura_iddetalleFactura($empleado_has_detallefactura);
     $empleado_has_detallefacturaDao->close();
     return $result;
  }


}
//That`s all folks!