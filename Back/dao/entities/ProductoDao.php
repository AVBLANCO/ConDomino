<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si mi madre entendiera mi código, estaría orgullosa  \\

include_once realpath('../dao/interfaz/IProductoDao.php');
include_once realpath('../dto/Producto.php');

class ProductoDao implements IProductoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Producto en la base de datos.
     * @param producto objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($producto){
      $idProducto=$producto->getIdProducto();
$nombreProducto=$producto->getNombreProducto();
$precioProducto=$producto->getPrecioProducto();
$descripcionProducto=$producto->getDescripcionProducto();
$fechaCompraPoducto=$producto->getFechaCompraPoducto();

      try {
          $sql= "INSERT INTO `producto`( `idProducto`, `nombreProducto`, `precioProducto`, `descripcionProducto`, `fechaCompraPoducto`)"
          ."VALUES ('$idProducto','$nombreProducto','$precioProducto','$descripcionProducto','$fechaCompraPoducto')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Producto en la base de datos.
     * @param producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($producto){
      $idProducto=$producto->getIdProducto();

      try {
          $sql= "SELECT `idProducto`, `nombreProducto`, `precioProducto`, `descripcionProducto`, `fechaCompraPoducto`"
          ."FROM `producto`"
          ."WHERE `idProducto`='$idProducto'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $producto->setIdProducto($data[$i]['idProducto']);
          $producto->setNombreProducto($data[$i]['nombreProducto']);
          $producto->setPrecioProducto($data[$i]['precioProducto']);
          $producto->setDescripcionProducto($data[$i]['descripcionProducto']);
          $producto->setFechaCompraPoducto($data[$i]['fechaCompraPoducto']);

          }
      return $producto;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Producto en la base de datos.
     * @param producto objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($producto){
      $idProducto=$producto->getIdProducto();
$nombreProducto=$producto->getNombreProducto();
$precioProducto=$producto->getPrecioProducto();
$descripcionProducto=$producto->getDescripcionProducto();
$fechaCompraPoducto=$producto->getFechaCompraPoducto();

      try {
          $sql= "UPDATE `producto` SET`idProducto`='$idProducto' ,`nombreProducto`='$nombreProducto' ,`precioProducto`='$precioProducto' ,`descripcionProducto`='$descripcionProducto' ,`fechaCompraPoducto`='$fechaCompraPoducto' WHERE `idProducto`='$idProducto' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Producto en la base de datos.
     * @param producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($producto){
      $idProducto=$producto->getIdProducto();

      try {
          $sql ="DELETE FROM `producto` WHERE `idProducto`='$idProducto'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Producto en la base de datos.
     * @return ArrayList<Producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idProducto`, `nombreProducto`, `precioProducto`, `descripcionProducto`, `fechaCompraPoducto`"
          ."FROM `producto`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $producto= new Producto();
          $producto->setIdProducto($data[$i]['idProducto']);
          $producto->setNombreProducto($data[$i]['nombreProducto']);
          $producto->setPrecioProducto($data[$i]['precioProducto']);
          $producto->setDescripcionProducto($data[$i]['descripcionProducto']);
          $producto->setFechaCompraPoducto($data[$i]['fechaCompraPoducto']);

          array_push($lista,$producto);
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