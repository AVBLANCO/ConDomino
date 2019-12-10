<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Proveedor.php');
require_once realpath('../dao/interfaz/IProveedorDao.php');
require_once realpath('../dto/Producto.php');

class ProveedorFacade {

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
   * Crea un objeto Proveedor a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedor
   * @param rutProveedor
   * @param formaDePagoProveedor
   * @param telefonoProveedor
   * @param correoProveedor
   * @param direccionProveedor
   * @param fechaCreacionProveedor
   * @param producto_idProducto
   */
  public static function insert( $idProveedor,  $rutProveedor,  $formaDePagoProveedor,  $telefonoProveedor,  $correoProveedor,  $direccionProveedor,  $fechaCreacionProveedor,  $producto_idProducto){
      $proveedor = new Proveedor();
      $proveedor->setIdProveedor($idProveedor); 
      $proveedor->setRutProveedor($rutProveedor); 
      $proveedor->setFormaDePagoProveedor($formaDePagoProveedor); 
      $proveedor->setTelefonoProveedor($telefonoProveedor); 
      $proveedor->setCorreoProveedor($correoProveedor); 
      $proveedor->setDireccionProveedor($direccionProveedor); 
      $proveedor->setFechaCreacionProveedor($fechaCreacionProveedor); 
      $proveedor->setProducto_idProducto($producto_idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedorDao =$FactoryDao->getproveedorDao(self::getDataBaseDefault());
     $rtn = $proveedorDao->insert($proveedor);
     $proveedorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Proveedor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedor
   * @return El objeto en base de datos o Null
   */
  public static function select($idProveedor){
      $proveedor = new Proveedor();
      $proveedor->setIdProveedor($idProveedor); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedorDao =$FactoryDao->getproveedorDao(self::getDataBaseDefault());
     $result = $proveedorDao->select($proveedor);
     $proveedorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Proveedor  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedor
   * @param rutProveedor
   * @param formaDePagoProveedor
   * @param telefonoProveedor
   * @param correoProveedor
   * @param direccionProveedor
   * @param fechaCreacionProveedor
   * @param producto_idProducto
   */
  public static function update($idProveedor, $rutProveedor, $formaDePagoProveedor, $telefonoProveedor, $correoProveedor, $direccionProveedor, $fechaCreacionProveedor, $producto_idProducto){
      $proveedor = self::select($idProveedor);
      $proveedor->setRutProveedor($rutProveedor); 
      $proveedor->setFormaDePagoProveedor($formaDePagoProveedor); 
      $proveedor->setTelefonoProveedor($telefonoProveedor); 
      $proveedor->setCorreoProveedor($correoProveedor); 
      $proveedor->setDireccionProveedor($direccionProveedor); 
      $proveedor->setFechaCreacionProveedor($fechaCreacionProveedor); 
      $proveedor->setProducto_idProducto($producto_idProducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedorDao =$FactoryDao->getproveedorDao(self::getDataBaseDefault());
     $proveedorDao->update($proveedor);
     $proveedorDao->close();
  }

  /**
   * Elimina un objeto Proveedor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedor
   */
  public static function delete($idProveedor){
      $proveedor = new Proveedor();
      $proveedor->setIdProveedor($idProveedor); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedorDao =$FactoryDao->getproveedorDao(self::getDataBaseDefault());
     $proveedorDao->delete($proveedor);
     $proveedorDao->close();
  }

  /**
   * Lista todos los objetos Proveedor de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Proveedor en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedorDao =$FactoryDao->getproveedorDao(self::getDataBaseDefault());
     $result = $proveedorDao->listAll();
     $proveedorDao->close();
     return $result;
  }


}
//That`s all folks!