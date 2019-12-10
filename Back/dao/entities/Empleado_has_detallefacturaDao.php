<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\

include_once realpath('../dao/interfaz/IEmpleado_has_detallefacturaDao.php');
include_once realpath('../dto/Empleado_has_detallefactura.php');
include_once realpath('../dto/Empleado.php');
include_once realpath('../dto/Detallefactura.php');

class Empleado_has_detallefacturaDao implements IEmpleado_has_detallefacturaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empleado_has_detallefactura){
      $empleado_idempleado=$empleado_has_detallefactura->getEmpleado_idempleado()->getIdempleado();
$detalleFactura_iddetalleFactura=$empleado_has_detallefactura->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql= "INSERT INTO `empleado_has_detallefactura`( `empleado_idempleado`, `detalleFactura_iddetalleFactura`)"
          ."VALUES ('$empleado_idempleado','$detalleFactura_iddetalleFactura')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empleado_has_detallefactura){
      $empleado_idempleado=$empleado_has_detallefactura->getEmpleado_idempleado()->getIdempleado();
$detalleFactura_iddetalleFactura=$empleado_has_detallefactura->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql= "SELECT `empleado_idempleado`, `detalleFactura_iddetalleFactura`"
          ."FROM `empleado_has_detallefactura`"
          ."WHERE `empleado_idempleado`='$empleado_idempleado' AND`detalleFactura_iddetalleFactura`='$detalleFactura_iddetalleFactura'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_detallefactura->setEmpleado_idempleado($empleado);
           $detallefactura = new Detallefactura();
           $detallefactura->setIddetalleFactura($data[$i]['detalleFactura_iddetalleFactura']);
           $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detallefactura);

          }
      return $empleado_has_detallefactura;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empleado_has_detallefactura){
      $empleado_idempleado=$empleado_has_detallefactura->getEmpleado_idempleado()->getIdempleado();
$detalleFactura_iddetalleFactura=$empleado_has_detallefactura->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql= "UPDATE `empleado_has_detallefactura` SET`empleado_idempleado`='$empleado_idempleado' ,`detalleFactura_iddetalleFactura`='$detalleFactura_iddetalleFactura' WHERE `empleado_idempleado`='$empleado_idempleado' AND `detalleFactura_iddetalleFactura`='$detalleFactura_iddetalleFactura' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empleado_has_detallefactura){
      $empleado_idempleado=$empleado_has_detallefactura->getEmpleado_idempleado()->getIdempleado();
$detalleFactura_iddetalleFactura=$empleado_has_detallefactura->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql ="DELETE FROM `empleado_has_detallefactura` WHERE `empleado_idempleado`='$empleado_idempleado' AND`detalleFactura_iddetalleFactura`='$detalleFactura_iddetalleFactura'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado_has_detallefactura en la base de datos.
     * @return ArrayList<Empleado_has_detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `empleado_idempleado`, `detalleFactura_iddetalleFactura`"
          ."FROM `empleado_has_detallefactura`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $empleado_has_detallefactura= new Empleado_has_detallefactura();
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_detallefactura->setEmpleado_idempleado($empleado);
           $detallefactura = new Detallefactura();
           $detallefactura->setIddetalleFactura($data[$i]['detalleFactura_iddetalleFactura']);
           $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detallefactura);

          array_push($lista,$empleado_has_detallefactura);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Empleado_has_detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEmpleado_idempleado($empleado_has_detallefactura){
      $lista = array();
      $empleado_idempleado=$empleado_has_detallefactura->getEmpleado_idempleado()->getIdempleado();

      try {
          $sql ="SELECT `empleado_idempleado`, `detalleFactura_iddetalleFactura`"
          ."FROM `empleado_has_detallefactura`"
          ."WHERE `empleado_idempleado`='$empleado_idempleado'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empleado_has_detallefactura = new Empleado_has_detallefactura();
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_detallefactura->setEmpleado_idempleado($empleado);
           $detallefactura = new Detallefactura();
           $detallefactura->setIddetalleFactura($data[$i]['detalleFactura_iddetalleFactura']);
           $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detallefactura);

          array_push($lista,$empleado_has_detallefactura);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Empleado_has_detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByDetalleFactura_iddetalleFactura($empleado_has_detallefactura){
      $lista = array();
      $detalleFactura_iddetalleFactura=$empleado_has_detallefactura->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql ="SELECT `empleado_idempleado`, `detalleFactura_iddetalleFactura`"
          ."FROM `empleado_has_detallefactura`"
          ."WHERE `detalleFactura_iddetalleFactura`='$detalleFactura_iddetalleFactura'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empleado_has_detallefactura = new Empleado_has_detallefactura();
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_detallefactura->setEmpleado_idempleado($empleado);
           $detallefactura = new Detallefactura();
           $detallefactura->setIddetalleFactura($data[$i]['detalleFactura_iddetalleFactura']);
           $empleado_has_detallefactura->setDetalleFactura_iddetalleFactura($detallefactura);

          array_push($lista,$empleado_has_detallefactura);
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