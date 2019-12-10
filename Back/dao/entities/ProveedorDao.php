<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El coronel necesitó setenta y cinco años -los setenta y cinco años de su vida, minuto a minuto- para llegar a ese instante. Se sintió puro, explícito, invencible, en el momento de responder:  \\

include_once realpath('../dao/interfaz/IProveedorDao.php');
include_once realpath('../dto/Proveedor.php');
include_once realpath('../dto/Producto.php');

class ProveedorDao implements IProveedorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Proveedor en la base de datos.
     * @param proveedor objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($proveedor){
      $idProveedor=$proveedor->getIdProveedor();
$rutProveedor=$proveedor->getRutProveedor();
$formaDePagoProveedor=$proveedor->getFormaDePagoProveedor();
$telefonoProveedor=$proveedor->getTelefonoProveedor();
$correoProveedor=$proveedor->getCorreoProveedor();
$direccionProveedor=$proveedor->getDireccionProveedor();
$fechaCreacionProveedor=$proveedor->getFechaCreacionProveedor();
$producto_idProducto=$proveedor->getProducto_idProducto()->getIdProducto();

      try {
          $sql= "INSERT INTO `proveedor`( `idProveedor`, `rutProveedor`, `formaDePagoProveedor`, `telefonoProveedor`, `correoProveedor`, `direccionProveedor`, `fechaCreacionProveedor`, `producto_idProducto`)"
          ."VALUES ('$idProveedor','$rutProveedor','$formaDePagoProveedor','$telefonoProveedor','$correoProveedor','$direccionProveedor','$fechaCreacionProveedor','$producto_idProducto')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Proveedor en la base de datos.
     * @param proveedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($proveedor){
      $idProveedor=$proveedor->getIdProveedor();

      try {
          $sql= "SELECT `idProveedor`, `rutProveedor`, `formaDePagoProveedor`, `telefonoProveedor`, `correoProveedor`, `direccionProveedor`, `fechaCreacionProveedor`, `producto_idProducto`"
          ."FROM `proveedor`"
          ."WHERE `idProveedor`='$idProveedor'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $proveedor->setIdProveedor($data[$i]['idProveedor']);
          $proveedor->setRutProveedor($data[$i]['rutProveedor']);
          $proveedor->setFormaDePagoProveedor($data[$i]['formaDePagoProveedor']);
          $proveedor->setTelefonoProveedor($data[$i]['telefonoProveedor']);
          $proveedor->setCorreoProveedor($data[$i]['correoProveedor']);
          $proveedor->setDireccionProveedor($data[$i]['direccionProveedor']);
          $proveedor->setFechaCreacionProveedor($data[$i]['fechaCreacionProveedor']);
           $producto = new Producto();
           $producto->setIdProducto($data[$i]['producto_idProducto']);
           $proveedor->setProducto_idProducto($producto);

          }
      return $proveedor;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Proveedor en la base de datos.
     * @param proveedor objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($proveedor){
      $idProveedor=$proveedor->getIdProveedor();
$rutProveedor=$proveedor->getRutProveedor();
$formaDePagoProveedor=$proveedor->getFormaDePagoProveedor();
$telefonoProveedor=$proveedor->getTelefonoProveedor();
$correoProveedor=$proveedor->getCorreoProveedor();
$direccionProveedor=$proveedor->getDireccionProveedor();
$fechaCreacionProveedor=$proveedor->getFechaCreacionProveedor();
$producto_idProducto=$proveedor->getProducto_idProducto()->getIdProducto();

      try {
          $sql= "UPDATE `proveedor` SET`idProveedor`='$idProveedor' ,`rutProveedor`='$rutProveedor' ,`formaDePagoProveedor`='$formaDePagoProveedor' ,`telefonoProveedor`='$telefonoProveedor' ,`correoProveedor`='$correoProveedor' ,`direccionProveedor`='$direccionProveedor' ,`fechaCreacionProveedor`='$fechaCreacionProveedor' ,`producto_idProducto`='$producto_idProducto' WHERE `idProveedor`='$idProveedor' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Proveedor en la base de datos.
     * @param proveedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($proveedor){
      $idProveedor=$proveedor->getIdProveedor();

      try {
          $sql ="DELETE FROM `proveedor` WHERE `idProveedor`='$idProveedor'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Proveedor en la base de datos.
     * @return ArrayList<Proveedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idProveedor`, `rutProveedor`, `formaDePagoProveedor`, `telefonoProveedor`, `correoProveedor`, `direccionProveedor`, `fechaCreacionProveedor`, `producto_idProducto`"
          ."FROM `proveedor`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $proveedor= new Proveedor();
          $proveedor->setIdProveedor($data[$i]['idProveedor']);
          $proveedor->setRutProveedor($data[$i]['rutProveedor']);
          $proveedor->setFormaDePagoProveedor($data[$i]['formaDePagoProveedor']);
          $proveedor->setTelefonoProveedor($data[$i]['telefonoProveedor']);
          $proveedor->setCorreoProveedor($data[$i]['correoProveedor']);
          $proveedor->setDireccionProveedor($data[$i]['direccionProveedor']);
          $proveedor->setFechaCreacionProveedor($data[$i]['fechaCreacionProveedor']);
           $producto = new Producto();
           $producto->setIdProducto($data[$i]['producto_idProducto']);
           $proveedor->setProducto_idProducto($producto);

          array_push($lista,$proveedor);
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