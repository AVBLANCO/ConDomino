<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\

include_once realpath('../dao/interfaz/IDetallefacturaDao.php');
include_once realpath('../dto/Detallefactura.php');

class DetallefacturaDao implements IDetallefacturaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($detallefactura){
      $iddetalleFactura=$detallefactura->getIddetalleFactura();
$valorDetalle=$detallefactura->getValorDetalle();
$descripcionDetalle=$detallefactura->getDescripcionDetalle();

      try {
          $sql= "INSERT INTO `detallefactura`( `iddetalleFactura`, `valorDetalle`, `descripcionDetalle`)"
          ."VALUES ('$iddetalleFactura','$valorDetalle','$descripcionDetalle')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($detallefactura){
      $iddetalleFactura=$detallefactura->getIddetalleFactura();

      try {
          $sql= "SELECT `iddetalleFactura`, `valorDetalle`, `descripcionDetalle`"
          ."FROM `detallefactura`"
          ."WHERE `iddetalleFactura`='$iddetalleFactura'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $detallefactura->setIddetalleFactura($data[$i]['iddetalleFactura']);
          $detallefactura->setValorDetalle($data[$i]['valorDetalle']);
          $detallefactura->setDescripcionDetalle($data[$i]['descripcionDetalle']);

          }
      return $detallefactura;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($detallefactura){
      $iddetalleFactura=$detallefactura->getIddetalleFactura();
$valorDetalle=$detallefactura->getValorDetalle();
$descripcionDetalle=$detallefactura->getDescripcionDetalle();

      try {
          $sql= "UPDATE `detallefactura` SET`iddetalleFactura`='$iddetalleFactura' ,`valorDetalle`='$valorDetalle' ,`descripcionDetalle`='$descripcionDetalle' WHERE `iddetalleFactura`='$iddetalleFactura' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($detallefactura){
      $iddetalleFactura=$detallefactura->getIddetalleFactura();

      try {
          $sql ="DELETE FROM `detallefactura` WHERE `iddetalleFactura`='$iddetalleFactura'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Detallefactura en la base de datos.
     * @return ArrayList<Detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `iddetalleFactura`, `valorDetalle`, `descripcionDetalle`"
          ."FROM `detallefactura`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $detallefactura= new Detallefactura();
          $detallefactura->setIddetalleFactura($data[$i]['iddetalleFactura']);
          $detallefactura->setValorDetalle($data[$i]['valorDetalle']);
          $detallefactura->setDescripcionDetalle($data[$i]['descripcionDetalle']);

          array_push($lista,$detallefactura);
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