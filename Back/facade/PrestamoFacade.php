<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya están los patrones implementados, ahora sí viene lo chido...  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Prestamo.php');
require_once realpath('../dao/interfaz/IPrestamoDao.php');

class PrestamoFacade {

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
   * Crea un objeto Prestamo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPrestamo
   * @param descripcioPrestamo
   * @param fechaPrestamo
   */
  public static function insert( $idPrestamo,  $descripcioPrestamo,  $fechaPrestamo){
      $prestamo = new Prestamo();
      $prestamo->setIdPrestamo($idPrestamo); 
      $prestamo->setDescripcioPrestamo($descripcioPrestamo); 
      $prestamo->setFechaPrestamo($fechaPrestamo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoDao =$FactoryDao->getprestamoDao(self::getDataBaseDefault());
     $rtn = $prestamoDao->insert($prestamo);
     $prestamoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Prestamo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPrestamo
   * @return El objeto en base de datos o Null
   */
  public static function select($idPrestamo){
      $prestamo = new Prestamo();
      $prestamo->setIdPrestamo($idPrestamo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoDao =$FactoryDao->getprestamoDao(self::getDataBaseDefault());
     $result = $prestamoDao->select($prestamo);
     $prestamoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Prestamo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPrestamo
   * @param descripcioPrestamo
   * @param fechaPrestamo
   */
  public static function update($idPrestamo, $descripcioPrestamo, $fechaPrestamo){
      $prestamo = self::select($idPrestamo);
      $prestamo->setDescripcioPrestamo($descripcioPrestamo); 
      $prestamo->setFechaPrestamo($fechaPrestamo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoDao =$FactoryDao->getprestamoDao(self::getDataBaseDefault());
     $prestamoDao->update($prestamo);
     $prestamoDao->close();
  }

  /**
   * Elimina un objeto Prestamo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPrestamo
   */
  public static function delete($idPrestamo){
      $prestamo = new Prestamo();
      $prestamo->setIdPrestamo($idPrestamo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoDao =$FactoryDao->getprestamoDao(self::getDataBaseDefault());
     $prestamoDao->delete($prestamo);
     $prestamoDao->close();
  }

  /**
   * Lista todos los objetos Prestamo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Prestamo en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoDao =$FactoryDao->getprestamoDao(self::getDataBaseDefault());
     $result = $prestamoDao->listAll();
     $prestamoDao->close();
     return $result;
  }


}
//That`s all folks!