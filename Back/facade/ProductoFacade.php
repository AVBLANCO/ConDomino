<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Producto.php');
require_once realpath('../dao/interfaz/IProductoDao.php');

class ProductoFacade {

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
   * Crea un objeto Producto a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProducto
   * @param nombreProducto
   * @param precioProducto
   * @param descripcionProducto
   * @param fechaCompraPoducto
   */
  public static function insert( $idProducto,  $nombreProducto,  $precioProducto,  $descripcionProducto,  $fechaCompraPoducto){
      $producto = new Producto();
      $producto->setIdProducto($idProducto); 
      $producto->setNombreProducto($nombreProducto); 
      $producto->setPrecioProducto($precioProducto); 
      $producto->setDescripcionProducto($descripcionProducto); 
      $producto->setFechaCompraPoducto($fechaCompraPoducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $rtn = $productoDao->insert($producto);
     $productoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Producto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProducto
   * @return El objeto en base de datos o Null
   */
  public static function select($idProducto){
      $producto = new Producto();
      $producto->setIdProducto($idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $result = $productoDao->select($producto);
     $productoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Producto  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProducto
   * @param nombreProducto
   * @param precioProducto
   * @param descripcionProducto
   * @param fechaCompraPoducto
   */
  public static function update($idProducto, $nombreProducto, $precioProducto, $descripcionProducto, $fechaCompraPoducto){
      $producto = self::select($idProducto);
      $producto->setNombreProducto($nombreProducto); 
      $producto->setPrecioProducto($precioProducto); 
      $producto->setDescripcionProducto($descripcionProducto); 
      $producto->setFechaCompraPoducto($fechaCompraPoducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $productoDao->update($producto);
     $productoDao->close();
  }

  /**
   * Elimina un objeto Producto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProducto
   */
  public static function delete($idProducto){
      $producto = new Producto();
      $producto->setIdProducto($idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $productoDao->delete($producto);
     $productoDao->close();
  }

  /**
   * Lista todos los objetos Producto de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Producto en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $result = $productoDao->listAll();
     $productoDao->close();
     return $result;
  }


}
//That`s all folks!