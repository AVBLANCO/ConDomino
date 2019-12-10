<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si crees que las mujeres son difíciles, no conoces Anarchy  \\

include_once realpath('../dao/interfaz/IPisoDao.php');
include_once realpath('../dto/Piso.php');
include_once realpath('../dto/Torre.php');

class PisoDao implements IPisoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Piso en la base de datos.
     * @param piso objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($piso){
      $idPiso=$piso->getIdPiso();
$descripcionPiso=$piso->getDescripcionPiso();
$torre_idTorre=$piso->getTorre_idTorre()->getIdTorre();

      try {
          $sql= "INSERT INTO `piso`( `idPiso`, `descripcionPiso`, `torre_idTorre`)"
          ."VALUES ('$idPiso','$descripcionPiso','$torre_idTorre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Piso en la base de datos.
     * @param piso objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($piso){
      $idPiso=$piso->getIdPiso();

      try {
          $sql= "SELECT `idPiso`, `descripcionPiso`, `torre_idTorre`"
          ."FROM `piso`"
          ."WHERE `idPiso`='$idPiso'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $piso->setIdPiso($data[$i]['idPiso']);
          $piso->setDescripcionPiso($data[$i]['descripcionPiso']);
           $torre = new Torre();
           $torre->setIdTorre($data[$i]['torre_idTorre']);
           $piso->setTorre_idTorre($torre);

          }
      return $piso;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Piso en la base de datos.
     * @param piso objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($piso){
      $idPiso=$piso->getIdPiso();
$descripcionPiso=$piso->getDescripcionPiso();
$torre_idTorre=$piso->getTorre_idTorre()->getIdTorre();

      try {
          $sql= "UPDATE `piso` SET`idPiso`='$idPiso' ,`descripcionPiso`='$descripcionPiso' ,`torre_idTorre`='$torre_idTorre' WHERE `idPiso`='$idPiso' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Piso en la base de datos.
     * @param piso objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($piso){
      $idPiso=$piso->getIdPiso();

      try {
          $sql ="DELETE FROM `piso` WHERE `idPiso`='$idPiso'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Piso en la base de datos.
     * @return ArrayList<Piso> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idPiso`, `descripcionPiso`, `torre_idTorre`"
          ."FROM `piso`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $piso= new Piso();
          $piso->setIdPiso($data[$i]['idPiso']);
          $piso->setDescripcionPiso($data[$i]['descripcionPiso']);
           $torre = new Torre();
           $torre->setIdTorre($data[$i]['torre_idTorre']);
           $piso->setTorre_idTorre($torre);

          array_push($lista,$piso);
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