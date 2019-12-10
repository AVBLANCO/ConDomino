<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Todos los animales son iguales, pero algunos animales son más iguales que otros  \\

include_once realpath('../dao/interfaz/IDetalleexistenciabodegaDao.php');
include_once realpath('../dto/Detalleexistenciabodega.php');

class DetalleexistenciabodegaDao implements IDetalleexistenciabodegaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($detalleexistenciabodega){
      $idDetalleExistencia=$detalleexistenciabodega->getIdDetalleExistencia();
$unidadesExistencia=$detalleexistenciabodega->getUnidadesExistencia();
$descipcionExistenciaBodega=$detalleexistenciabodega->getDescipcionExistenciaBodega();
$fechaModificacionExistenciaBodega=$detalleexistenciabodega->getFechaModificacionExistenciaBodega();

      try {
          $sql= "INSERT INTO `detalleexistenciabodega`( `idDetalleExistencia`, `unidadesExistencia`, `descipcionExistenciaBodega`, `fechaModificacionExistenciaBodega`)"
          ."VALUES ('$idDetalleExistencia','$unidadesExistencia','$descipcionExistenciaBodega','$fechaModificacionExistenciaBodega')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($detalleexistenciabodega){
      $idDetalleExistencia=$detalleexistenciabodega->getIdDetalleExistencia();

      try {
          $sql= "SELECT `idDetalleExistencia`, `unidadesExistencia`, `descipcionExistenciaBodega`, `fechaModificacionExistenciaBodega`"
          ."FROM `detalleexistenciabodega`"
          ."WHERE `idDetalleExistencia`='$idDetalleExistencia'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $detalleexistenciabodega->setIdDetalleExistencia($data[$i]['idDetalleExistencia']);
          $detalleexistenciabodega->setUnidadesExistencia($data[$i]['unidadesExistencia']);
          $detalleexistenciabodega->setDescipcionExistenciaBodega($data[$i]['descipcionExistenciaBodega']);
          $detalleexistenciabodega->setFechaModificacionExistenciaBodega($data[$i]['fechaModificacionExistenciaBodega']);

          }
      return $detalleexistenciabodega;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($detalleexistenciabodega){
      $idDetalleExistencia=$detalleexistenciabodega->getIdDetalleExistencia();
$unidadesExistencia=$detalleexistenciabodega->getUnidadesExistencia();
$descipcionExistenciaBodega=$detalleexistenciabodega->getDescipcionExistenciaBodega();
$fechaModificacionExistenciaBodega=$detalleexistenciabodega->getFechaModificacionExistenciaBodega();

      try {
          $sql= "UPDATE `detalleexistenciabodega` SET`idDetalleExistencia`='$idDetalleExistencia' ,`unidadesExistencia`='$unidadesExistencia' ,`descipcionExistenciaBodega`='$descipcionExistenciaBodega' ,`fechaModificacionExistenciaBodega`='$fechaModificacionExistenciaBodega' WHERE `idDetalleExistencia`='$idDetalleExistencia' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($detalleexistenciabodega){
      $idDetalleExistencia=$detalleexistenciabodega->getIdDetalleExistencia();

      try {
          $sql ="DELETE FROM `detalleexistenciabodega` WHERE `idDetalleExistencia`='$idDetalleExistencia'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Detalleexistenciabodega en la base de datos.
     * @return ArrayList<Detalleexistenciabodega> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idDetalleExistencia`, `unidadesExistencia`, `descipcionExistenciaBodega`, `fechaModificacionExistenciaBodega`"
          ."FROM `detalleexistenciabodega`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $detalleexistenciabodega= new Detalleexistenciabodega();
          $detalleexistenciabodega->setIdDetalleExistencia($data[$i]['idDetalleExistencia']);
          $detalleexistenciabodega->setUnidadesExistencia($data[$i]['unidadesExistencia']);
          $detalleexistenciabodega->setDescipcionExistenciaBodega($data[$i]['descipcionExistenciaBodega']);
          $detalleexistenciabodega->setFechaModificacionExistenciaBodega($data[$i]['fechaModificacionExistenciaBodega']);

          array_push($lista,$detalleexistenciabodega);
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