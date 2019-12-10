<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\

include_once realpath('../dao/interfaz/IBodega_has_productoDao.php');
include_once realpath('../dto/Bodega_has_producto.php');
include_once realpath('../dto/Bodega.php');
include_once realpath('../dto/Producto.php');

class Bodega_has_productoDao implements IBodega_has_productoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($bodega_has_producto){
      $bodega_idBodega=$bodega_has_producto->getBodega_idBodega()->getIdBodega();
$producto_idProducto=$bodega_has_producto->getProducto_idProducto()->getIdProducto();

      try {
          $sql= "INSERT INTO `bodega_has_producto`( `bodega_idBodega`, `producto_idProducto`)"
          ."VALUES ('$bodega_idBodega','$producto_idProducto')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($bodega_has_producto){
      $bodega_idBodega=$bodega_has_producto->getBodega_idBodega()->getIdBodega();
$producto_idProducto=$bodega_has_producto->getProducto_idProducto()->getIdProducto();

      try {
          $sql= "SELECT `bodega_idBodega`, `producto_idProducto`"
          ."FROM `bodega_has_producto`"
          ."WHERE `bodega_idBodega`='$bodega_idBodega' AND`producto_idProducto`='$producto_idProducto'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $bodega = new Bodega();
           $bodega->setIdBodega($data[$i]['bodega_idBodega']);
           $bodega_has_producto->setBodega_idBodega($bodega);
           $producto = new Producto();
           $producto->setIdProducto($data[$i]['producto_idProducto']);
           $bodega_has_producto->setProducto_idProducto($producto);

          }
      return $bodega_has_producto;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($bodega_has_producto){
      $bodega_idBodega=$bodega_has_producto->getBodega_idBodega()->getIdBodega();
$producto_idProducto=$bodega_has_producto->getProducto_idProducto()->getIdProducto();

      try {
          $sql= "UPDATE `bodega_has_producto` SET`bodega_idBodega`='$bodega_idBodega' ,`producto_idProducto`='$producto_idProducto' WHERE `bodega_idBodega`='$bodega_idBodega' AND `producto_idProducto`='$producto_idProducto' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($bodega_has_producto){
      $bodega_idBodega=$bodega_has_producto->getBodega_idBodega()->getIdBodega();
$producto_idProducto=$bodega_has_producto->getProducto_idProducto()->getIdProducto();

      try {
          $sql ="DELETE FROM `bodega_has_producto` WHERE `bodega_idBodega`='$bodega_idBodega' AND`producto_idProducto`='$producto_idProducto'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Bodega_has_producto en la base de datos.
     * @return ArrayList<Bodega_has_producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `bodega_idBodega`, `producto_idProducto`"
          ."FROM `bodega_has_producto`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $bodega_has_producto= new Bodega_has_producto();
           $bodega = new Bodega();
           $bodega->setIdBodega($data[$i]['bodega_idBodega']);
           $bodega_has_producto->setBodega_idBodega($bodega);
           $producto = new Producto();
           $producto->setIdProducto($data[$i]['producto_idProducto']);
           $bodega_has_producto->setProducto_idProducto($producto);

          array_push($lista,$bodega_has_producto);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Bodega_has_producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByBodega_idBodega($bodega_has_producto){
      $lista = array();
      $bodega_idBodega=$bodega_has_producto->getBodega_idBodega()->getIdBodega();

      try {
          $sql ="SELECT `bodega_idBodega`, `producto_idProducto`"
          ."FROM `bodega_has_producto`"
          ."WHERE `bodega_idBodega`='$bodega_idBodega'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $bodega_has_producto = new Bodega_has_producto();
           $bodega = new Bodega();
           $bodega->setIdBodega($data[$i]['bodega_idBodega']);
           $bodega_has_producto->setBodega_idBodega($bodega);
           $producto = new Producto();
           $producto->setIdProducto($data[$i]['producto_idProducto']);
           $bodega_has_producto->setProducto_idProducto($producto);

          array_push($lista,$bodega_has_producto);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Bodega_has_producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByProducto_idProducto($bodega_has_producto){
      $lista = array();
      $producto_idProducto=$bodega_has_producto->getProducto_idProducto()->getIdProducto();

      try {
          $sql ="SELECT `bodega_idBodega`, `producto_idProducto`"
          ."FROM `bodega_has_producto`"
          ."WHERE `producto_idProducto`='$producto_idProducto'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $bodega_has_producto = new Bodega_has_producto();
           $bodega = new Bodega();
           $bodega->setIdBodega($data[$i]['bodega_idBodega']);
           $bodega_has_producto->setBodega_idBodega($bodega);
           $producto = new Producto();
           $producto->setIdProducto($data[$i]['producto_idProducto']);
           $bodega_has_producto->setProducto_idProducto($producto);

          array_push($lista,$bodega_has_producto);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!