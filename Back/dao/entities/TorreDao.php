<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  \\

include_once realpath('../dao/interfaz/ITorreDao.php');
include_once realpath('../dto/Torre.php');
include_once realpath('../dto/Condominio.php');

class TorreDao implements ITorreDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Torre en la base de datos.
     * @param torre objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($torre){
      $idTorre=$torre->getIdTorre();
$descripcionTorre=$torre->getDescripcionTorre();
$condominio_idCondominio=$torre->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "INSERT INTO `torre`( `idTorre`, `descripcionTorre`, `condominio_idCondominio`)"
          ."VALUES ('$idTorre','$descripcionTorre','$condominio_idCondominio')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Torre en la base de datos.
     * @param torre objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($torre){
      $idTorre=$torre->getIdTorre();

      try {
          $sql= "SELECT `idTorre`, `descripcionTorre`, `condominio_idCondominio`"
          ."FROM `torre`"
          ."WHERE `idTorre`='$idTorre'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $torre->setIdTorre($data[$i]['idTorre']);
          $torre->setDescripcionTorre($data[$i]['descripcionTorre']);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $torre->setCondominio_idCondominio($condominio);

          }
      return $torre;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Torre en la base de datos.
     * @param torre objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($torre){
      $idTorre=$torre->getIdTorre();
$descripcionTorre=$torre->getDescripcionTorre();
$condominio_idCondominio=$torre->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "UPDATE `torre` SET`idTorre`='$idTorre' ,`descripcionTorre`='$descripcionTorre' ,`condominio_idCondominio`='$condominio_idCondominio' WHERE `idTorre`='$idTorre' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Torre en la base de datos.
     * @param torre objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($torre){
      $idTorre=$torre->getIdTorre();

      try {
          $sql ="DELETE FROM `torre` WHERE `idTorre`='$idTorre'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Torre en la base de datos.
     * @return ArrayList<Torre> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idTorre`, `descripcionTorre`, `condominio_idCondominio`"
          ."FROM `torre`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $torre= new Torre();
          $torre->setIdTorre($data[$i]['idTorre']);
          $torre->setDescripcionTorre($data[$i]['descripcionTorre']);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $torre->setCondominio_idCondominio($condominio);

          array_push($lista,$torre);
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