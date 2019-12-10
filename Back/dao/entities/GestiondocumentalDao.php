<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\

include_once realpath('../dao/interfaz/IGestiondocumentalDao.php');
include_once realpath('../dto/Gestiondocumental.php');

class GestiondocumentalDao implements IGestiondocumentalDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($gestiondocumental){
      $idGestionDocumental=$gestiondocumental->getIdGestionDocumental();
$descripcionGestionDoc=$gestiondocumental->getDescripcionGestionDoc();

      try {
          $sql= "INSERT INTO `gestiondocumental`( `idGestionDocumental`, `descripcionGestionDoc`)"
          ."VALUES ('$idGestionDocumental','$descripcionGestionDoc')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($gestiondocumental){
      $idGestionDocumental=$gestiondocumental->getIdGestionDocumental();

      try {
          $sql= "SELECT `idGestionDocumental`, `descripcionGestionDoc`"
          ."FROM `gestiondocumental`"
          ."WHERE `idGestionDocumental`='$idGestionDocumental'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $gestiondocumental->setIdGestionDocumental($data[$i]['idGestionDocumental']);
          $gestiondocumental->setDescripcionGestionDoc($data[$i]['descripcionGestionDoc']);

          }
      return $gestiondocumental;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($gestiondocumental){
      $idGestionDocumental=$gestiondocumental->getIdGestionDocumental();
$descripcionGestionDoc=$gestiondocumental->getDescripcionGestionDoc();

      try {
          $sql= "UPDATE `gestiondocumental` SET`idGestionDocumental`='$idGestionDocumental' ,`descripcionGestionDoc`='$descripcionGestionDoc' WHERE `idGestionDocumental`='$idGestionDocumental' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($gestiondocumental){
      $idGestionDocumental=$gestiondocumental->getIdGestionDocumental();

      try {
          $sql ="DELETE FROM `gestiondocumental` WHERE `idGestionDocumental`='$idGestionDocumental'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Gestiondocumental en la base de datos.
     * @return ArrayList<Gestiondocumental> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idGestionDocumental`, `descripcionGestionDoc`"
          ."FROM `gestiondocumental`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $gestiondocumental= new Gestiondocumental();
          $gestiondocumental->setIdGestionDocumental($data[$i]['idGestionDocumental']);
          $gestiondocumental->setDescripcionGestionDoc($data[$i]['descripcionGestionDoc']);

          array_push($lista,$gestiondocumental);
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