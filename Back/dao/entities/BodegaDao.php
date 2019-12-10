<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\

include_once realpath('../dao/interfaz/IBodegaDao.php');
include_once realpath('../dto/Bodega.php');
include_once realpath('../dto/Detalleexistenciabodega.php');

class BodegaDao implements IBodegaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Bodega en la base de datos.
     * @param bodega objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($bodega){
      $idBodega=$bodega->getIdBodega();
$descripcionBodega=$bodega->getDescripcionBodega();
$detalleExistenciaBodega_idDetalleExistencia=$bodega->getDetalleExistenciaBodega_idDetalleExistencia()->getIdDetalleExistencia();

      try {
          $sql= "INSERT INTO `bodega`( `idBodega`, `descripcionBodega`, `detalleExistenciaBodega_idDetalleExistencia`)"
          ."VALUES ('$idBodega','$descripcionBodega','$detalleExistenciaBodega_idDetalleExistencia')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Bodega en la base de datos.
     * @param bodega objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($bodega){
      $idBodega=$bodega->getIdBodega();

      try {
          $sql= "SELECT `idBodega`, `descripcionBodega`, `detalleExistenciaBodega_idDetalleExistencia`"
          ."FROM `bodega`"
          ."WHERE `idBodega`='$idBodega'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $bodega->setIdBodega($data[$i]['idBodega']);
          $bodega->setDescripcionBodega($data[$i]['descripcionBodega']);
           $detalleexistenciabodega = new Detalleexistenciabodega();
           $detalleexistenciabodega->setIdDetalleExistencia($data[$i]['detalleExistenciaBodega_idDetalleExistencia']);
           $bodega->setDetalleExistenciaBodega_idDetalleExistencia($detalleexistenciabodega);

          }
      return $bodega;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Bodega en la base de datos.
     * @param bodega objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($bodega){
      $idBodega=$bodega->getIdBodega();
$descripcionBodega=$bodega->getDescripcionBodega();
$detalleExistenciaBodega_idDetalleExistencia=$bodega->getDetalleExistenciaBodega_idDetalleExistencia()->getIdDetalleExistencia();

      try {
          $sql= "UPDATE `bodega` SET`idBodega`='$idBodega' ,`descripcionBodega`='$descripcionBodega' ,`detalleExistenciaBodega_idDetalleExistencia`='$detalleExistenciaBodega_idDetalleExistencia' WHERE `idBodega`='$idBodega' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Bodega en la base de datos.
     * @param bodega objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($bodega){
      $idBodega=$bodega->getIdBodega();

      try {
          $sql ="DELETE FROM `bodega` WHERE `idBodega`='$idBodega'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Bodega en la base de datos.
     * @return ArrayList<Bodega> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idBodega`, `descripcionBodega`, `detalleExistenciaBodega_idDetalleExistencia`"
          ."FROM `bodega`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $bodega= new Bodega();
          $bodega->setIdBodega($data[$i]['idBodega']);
          $bodega->setDescripcionBodega($data[$i]['descripcionBodega']);
           $detalleexistenciabodega = new Detalleexistenciabodega();
           $detalleexistenciabodega->setIdDetalleExistencia($data[$i]['detalleExistenciaBodega_idDetalleExistencia']);
           $bodega->setDetalleExistenciaBodega_idDetalleExistencia($detalleexistenciabodega);

          array_push($lista,$bodega);
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