<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Prestamoareacomun.php');
require_once realpath('../dao/interfaz/IPrestamoareacomunDao.php');
require_once realpath('../dto/Prestamo.php');
require_once realpath('../dto/Areacomun.php');

class PrestamoareacomunFacade {

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
   * Crea un objeto Prestamoareacomun a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param prestamo_idPrestamo
   * @param areaComun_idAreaComun
   * @param fechaPestamoAreaComun
   * @param descripcionPrestamoAreaComun
   */
  public static function insert( $prestamo_idPrestamo,  $areaComun_idAreaComun,  $fechaPestamoAreaComun,  $descripcionPrestamoAreaComun){
      $prestamoareacomun = new Prestamoareacomun();
      $prestamoareacomun->setPrestamo_idPrestamo($prestamo_idPrestamo); 
      $prestamoareacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 
      $prestamoareacomun->setFechaPestamoAreaComun($fechaPestamoAreaComun); 
      $prestamoareacomun->setDescripcionPrestamoAreaComun($descripcionPrestamoAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $rtn = $prestamoareacomunDao->insert($prestamoareacomun);
     $prestamoareacomunDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Prestamoareacomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param prestamo_idPrestamo
   * @param areaComun_idAreaComun
   * @return El objeto en base de datos o Null
   */
  public static function select($prestamo_idPrestamo, $areaComun_idAreaComun){
      $prestamoareacomun = new Prestamoareacomun();
      $prestamoareacomun->setPrestamo_idPrestamo($prestamo_idPrestamo); 
      $prestamoareacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $result = $prestamoareacomunDao->select($prestamoareacomun);
     $prestamoareacomunDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Prestamoareacomun  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param prestamo_idPrestamo
   * @param areaComun_idAreaComun
   * @param fechaPestamoAreaComun
   * @param descripcionPrestamoAreaComun
   */
  public static function update($prestamo_idPrestamo, $areaComun_idAreaComun, $fechaPestamoAreaComun, $descripcionPrestamoAreaComun){
      $prestamoareacomun = self::select($prestamo_idPrestamo, $areaComun_idAreaComun);
      $prestamoareacomun->setFechaPestamoAreaComun($fechaPestamoAreaComun); 
      $prestamoareacomun->setDescripcionPrestamoAreaComun($descripcionPrestamoAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $prestamoareacomunDao->update($prestamoareacomun);
     $prestamoareacomunDao->close();
  }

  /**
   * Elimina un objeto Prestamoareacomun de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param prestamo_idPrestamo
   * @param areaComun_idAreaComun
   */
  public static function delete($prestamo_idPrestamo, $areaComun_idAreaComun){
      $prestamoareacomun = new Prestamoareacomun();
      $prestamoareacomun->setPrestamo_idPrestamo($prestamo_idPrestamo); 
      $prestamoareacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $prestamoareacomunDao->delete($prestamoareacomun);
     $prestamoareacomunDao->close();
  }

  /**
   * Lista todos los objetos Prestamoareacomun de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Prestamoareacomun en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $result = $prestamoareacomunDao->listAll();
     $prestamoareacomunDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Prestamoareacomun de la base de datos a partir de prestamo_idPrestamo.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param prestamo_idPrestamo
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByPrestamo_idPrestamo($prestamo_idPrestamo){
      $prestamoareacomun = new Prestamoareacomun();
      $prestamoareacomun->setPrestamo_idPrestamo($prestamo_idPrestamo); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $result = $prestamoareacomunDao->listByPrestamo_idPrestamo($prestamoareacomun);
     $prestamoareacomunDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Prestamoareacomun de la base de datos a partir de areaComun_idAreaComun.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param areaComun_idAreaComun
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByAreaComun_idAreaComun($areaComun_idAreaComun){
      $prestamoareacomun = new Prestamoareacomun();
      $prestamoareacomun->setAreaComun_idAreaComun($areaComun_idAreaComun); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $prestamoareacomunDao =$FactoryDao->getprestamoareacomunDao(self::getDataBaseDefault());
     $result = $prestamoareacomunDao->listByAreaComun_idAreaComun($prestamoareacomun);
     $prestamoareacomunDao->close();
     return $result;
  }


}
//That`s all folks!