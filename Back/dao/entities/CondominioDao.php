<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\

include_once realpath('../dao/interfaz/ICondominioDao.php');
include_once realpath('../dto/Condominio.php');

class CondominioDao implements ICondominioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Condominio en la base de datos.
     * @param condominio objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($condominio){
      $idCondominio=$condominio->getIdCondominio();
$nombreCondominio=$condominio->getNombreCondominio();
$direccionCondominio=$condominio->getDireccionCondominio();
$telefonoCondominio=$condominio->getTelefonoCondominio();
$rutCondominio=$condominio->getRutCondominio();

      try {
          $sql= "INSERT INTO `condominio`( `idCondominio`, `nombreCondominio`, `direccionCondominio`, `telefonoCondominio`, `rutCondominio`)"
          ."VALUES ('$idCondominio','$nombreCondominio','$direccionCondominio','$telefonoCondominio','$rutCondominio')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Condominio en la base de datos.
     * @param condominio objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($condominio){
      $idCondominio=$condominio->getIdCondominio();

      try {
          $sql= "SELECT `idCondominio`, `nombreCondominio`, `direccionCondominio`, `telefonoCondominio`, `rutCondominio`"
          ."FROM `condominio`"
          ."WHERE `idCondominio`='$idCondominio'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $condominio->setIdCondominio($data[$i]['idCondominio']);
          $condominio->setNombreCondominio($data[$i]['nombreCondominio']);
          $condominio->setDireccionCondominio($data[$i]['direccionCondominio']);
          $condominio->setTelefonoCondominio($data[$i]['telefonoCondominio']);
          $condominio->setRutCondominio($data[$i]['rutCondominio']);

          }
      return $condominio;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Condominio en la base de datos.
     * @param condominio objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($condominio){
      $idCondominio=$condominio->getIdCondominio();
$nombreCondominio=$condominio->getNombreCondominio();
$direccionCondominio=$condominio->getDireccionCondominio();
$telefonoCondominio=$condominio->getTelefonoCondominio();
$rutCondominio=$condominio->getRutCondominio();

      try {
          $sql= "UPDATE `condominio` SET`idCondominio`='$idCondominio' ,`nombreCondominio`='$nombreCondominio' ,`direccionCondominio`='$direccionCondominio' ,`telefonoCondominio`='$telefonoCondominio' ,`rutCondominio`='$rutCondominio' WHERE `idCondominio`='$idCondominio' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Condominio en la base de datos.
     * @param condominio objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($condominio){
      $idCondominio=$condominio->getIdCondominio();

      try {
          $sql ="DELETE FROM `condominio` WHERE `idCondominio`='$idCondominio'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Condominio en la base de datos.
     * @return ArrayList<Condominio> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCondominio`, `nombreCondominio`, `direccionCondominio`, `telefonoCondominio`, `rutCondominio`"
          ."FROM `condominio`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $condominio= new Condominio();
          $condominio->setIdCondominio($data[$i]['idCondominio']);
          $condominio->setNombreCondominio($data[$i]['nombreCondominio']);
          $condominio->setDireccionCondominio($data[$i]['direccionCondominio']);
          $condominio->setTelefonoCondominio($data[$i]['telefonoCondominio']);
          $condominio->setRutCondominio($data[$i]['rutCondominio']);

          array_push($lista,$condominio);
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