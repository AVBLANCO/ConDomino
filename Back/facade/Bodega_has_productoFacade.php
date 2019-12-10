<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Bodega_has_producto.php');
require_once realpath('../dao/interfaz/IBodega_has_productoDao.php');
require_once realpath('../dto/Bodega.php');
require_once realpath('../dto/Producto.php');

class Bodega_has_productoFacade {

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
   * Crea un objeto Bodega_has_producto a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param bodega_idBodega
   * @param producto_idProducto
   */
  public static function insert( $bodega_idBodega,  $producto_idProducto){
      $bodega_has_producto = new Bodega_has_producto();
      $bodega_has_producto->setBodega_idBodega($bodega_idBodega); 
      $bodega_has_producto->setProducto_idProducto($producto_idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $rtn = $bodega_has_productoDao->insert($bodega_has_producto);
     $bodega_has_productoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Bodega_has_producto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param bodega_idBodega
   * @param producto_idProducto
   * @return El objeto en base de datos o Null
   */
  public static function select($bodega_idBodega, $producto_idProducto){
      $bodega_has_producto = new Bodega_has_producto();
      $bodega_has_producto->setBodega_idBodega($bodega_idBodega); 
      $bodega_has_producto->setProducto_idProducto($producto_idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $result = $bodega_has_productoDao->select($bodega_has_producto);
     $bodega_has_productoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Bodega_has_producto  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param bodega_idBodega
   * @param producto_idProducto
   */
  public static function update($bodega_idBodega, $producto_idProducto){
      $bodega_has_producto = self::select($bodega_idBodega, $producto_idProducto);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $bodega_has_productoDao->update($bodega_has_producto);
     $bodega_has_productoDao->close();
  }

  /**
   * Elimina un objeto Bodega_has_producto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param bodega_idBodega
   * @param producto_idProducto
   */
  public static function delete($bodega_idBodega, $producto_idProducto){
      $bodega_has_producto = new Bodega_has_producto();
      $bodega_has_producto->setBodega_idBodega($bodega_idBodega); 
      $bodega_has_producto->setProducto_idProducto($producto_idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $bodega_has_productoDao->delete($bodega_has_producto);
     $bodega_has_productoDao->close();
  }

  /**
   * Lista todos los objetos Bodega_has_producto de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Bodega_has_producto en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $result = $bodega_has_productoDao->listAll();
     $bodega_has_productoDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Bodega_has_producto de la base de datos a partir de bodega_idBodega.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param bodega_idBodega
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByBodega_idBodega($bodega_idBodega){
      $bodega_has_producto = new Bodega_has_producto();
      $bodega_has_producto->setBodega_idBodega($bodega_idBodega); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $result = $bodega_has_productoDao->listByBodega_idBodega($bodega_has_producto);
     $bodega_has_productoDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Bodega_has_producto de la base de datos a partir de producto_idProducto.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param producto_idProducto
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByProducto_idProducto($producto_idProducto){
      $bodega_has_producto = new Bodega_has_producto();
      $bodega_has_producto->setProducto_idProducto($producto_idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $bodega_has_productoDao =$FactoryDao->getbodega_has_productoDao(self::getDataBaseDefault());
     $result = $bodega_has_productoDao->listByProducto_idProducto($bodega_has_producto);
     $bodega_has_productoDao->close();
     return $result;
  }


}
//That`s all folks!