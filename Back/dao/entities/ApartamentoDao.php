<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    A vote for Bart is a vote for Anarchy!  \\

include_once realpath('../dao/interfaz/IApartamentoDao.php');
include_once realpath('../dto/Apartamento.php');
include_once realpath('../dto/Piso.php');

class ApartamentoDao implements IApartamentoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Apartamento en la base de datos.
     * @param apartamento objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($apartamento){
      $idApartamento=$apartamento->getIdApartamento();
$descripcionApartamento=$apartamento->getDescripcionApartamento();
$piso_idPiso=$apartamento->getPiso_idPiso()->getIdPiso();

      try {
          $sql= "INSERT INTO `apartamento`( `idApartamento`, `descripcionApartamento`, `piso_idPiso`)"
          ."VALUES ('$idApartamento','$descripcionApartamento','$piso_idPiso')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Apartamento en la base de datos.
     * @param apartamento objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($apartamento){
      $idApartamento=$apartamento->getIdApartamento();

      try {
          $sql= "SELECT `idApartamento`, `descripcionApartamento`, `piso_idPiso`"
          ."FROM `apartamento`"
          ."WHERE `idApartamento`='$idApartamento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $apartamento->setIdApartamento($data[$i]['idApartamento']);
          $apartamento->setDescripcionApartamento($data[$i]['descripcionApartamento']);
           $piso = new Piso();
           $piso->setIdPiso($data[$i]['piso_idPiso']);
           $apartamento->setPiso_idPiso($piso);

          }
      return $apartamento;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Apartamento en la base de datos.
     * @param apartamento objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($apartamento){
      $idApartamento=$apartamento->getIdApartamento();
$descripcionApartamento=$apartamento->getDescripcionApartamento();
$piso_idPiso=$apartamento->getPiso_idPiso()->getIdPiso();

      try {
          $sql= "UPDATE `apartamento` SET`idApartamento`='$idApartamento' ,`descripcionApartamento`='$descripcionApartamento' ,`piso_idPiso`='$piso_idPiso' WHERE `idApartamento`='$idApartamento' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Apartamento en la base de datos.
     * @param apartamento objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($apartamento){
      $idApartamento=$apartamento->getIdApartamento();

      try {
          $sql ="DELETE FROM `apartamento` WHERE `idApartamento`='$idApartamento'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Apartamento en la base de datos.
     * @return ArrayList<Apartamento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idApartamento`, `descripcionApartamento`, `piso_idPiso`"
          ."FROM `apartamento`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $apartamento= new Apartamento();
          $apartamento->setIdApartamento($data[$i]['idApartamento']);
          $apartamento->setDescripcionApartamento($data[$i]['descripcionApartamento']);
           $piso = new Piso();
           $piso->setIdPiso($data[$i]['piso_idPiso']);
           $apartamento->setPiso_idPiso($piso);

          array_push($lista,$apartamento);
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