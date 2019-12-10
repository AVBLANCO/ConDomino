<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿No es más sencillo hacer todo en el Main?  \\

include_once realpath('../dao/interfaz/IEmpleado_has_areacomunDao.php');
include_once realpath('../dto/Empleado_has_areacomun.php');
include_once realpath('../dto/Empleado.php');
include_once realpath('../dto/Areacomun.php');

class Empleado_has_areacomunDao implements IEmpleado_has_areacomunDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Empleado_has_areacomun en la base de datos.
     * @param empleado_has_areacomun objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empleado_has_areacomun){
      $empleado_idempleado=$empleado_has_areacomun->getEmpleado_idempleado()->getIdempleado();
$areaComun_idAreaComun=$empleado_has_areacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql= "INSERT INTO `empleado_has_areacomun`( `empleado_idempleado`, `areaComun_idAreaComun`)"
          ."VALUES ('$empleado_idempleado','$areaComun_idAreaComun')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado_has_areacomun en la base de datos.
     * @param empleado_has_areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empleado_has_areacomun){
      $empleado_idempleado=$empleado_has_areacomun->getEmpleado_idempleado()->getIdempleado();
$areaComun_idAreaComun=$empleado_has_areacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql= "SELECT `empleado_idempleado`, `areaComun_idAreaComun`"
          ."FROM `empleado_has_areacomun`"
          ."WHERE `empleado_idempleado`='$empleado_idempleado' AND`areaComun_idAreaComun`='$areaComun_idAreaComun'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_areacomun->setEmpleado_idempleado($empleado);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $empleado_has_areacomun->setAreaComun_idAreaComun($areacomun);

          }
      return $empleado_has_areacomun;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Empleado_has_areacomun en la base de datos.
     * @param empleado_has_areacomun objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empleado_has_areacomun){
      $empleado_idempleado=$empleado_has_areacomun->getEmpleado_idempleado()->getIdempleado();
$areaComun_idAreaComun=$empleado_has_areacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql= "UPDATE `empleado_has_areacomun` SET`empleado_idempleado`='$empleado_idempleado' ,`areaComun_idAreaComun`='$areaComun_idAreaComun' WHERE `empleado_idempleado`='$empleado_idempleado' AND `areaComun_idAreaComun`='$areaComun_idAreaComun' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Empleado_has_areacomun en la base de datos.
     * @param empleado_has_areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empleado_has_areacomun){
      $empleado_idempleado=$empleado_has_areacomun->getEmpleado_idempleado()->getIdempleado();
$areaComun_idAreaComun=$empleado_has_areacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql ="DELETE FROM `empleado_has_areacomun` WHERE `empleado_idempleado`='$empleado_idempleado' AND`areaComun_idAreaComun`='$areaComun_idAreaComun'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado_has_areacomun en la base de datos.
     * @return ArrayList<Empleado_has_areacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `empleado_idempleado`, `areaComun_idAreaComun`"
          ."FROM `empleado_has_areacomun`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $empleado_has_areacomun= new Empleado_has_areacomun();
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_areacomun->setEmpleado_idempleado($empleado);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $empleado_has_areacomun->setAreaComun_idAreaComun($areacomun);

          array_push($lista,$empleado_has_areacomun);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Empleado_has_areacomun en la base de datos.
     * @param empleado_has_areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Empleado_has_areacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEmpleado_idempleado($empleado_has_areacomun){
      $lista = array();
      $empleado_idempleado=$empleado_has_areacomun->getEmpleado_idempleado()->getIdempleado();

      try {
          $sql ="SELECT `empleado_idempleado`, `areaComun_idAreaComun`"
          ."FROM `empleado_has_areacomun`"
          ."WHERE `empleado_idempleado`='$empleado_idempleado'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empleado_has_areacomun = new Empleado_has_areacomun();
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_areacomun->setEmpleado_idempleado($empleado);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $empleado_has_areacomun->setAreaComun_idAreaComun($areacomun);

          array_push($lista,$empleado_has_areacomun);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Empleado_has_areacomun en la base de datos.
     * @param empleado_has_areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Empleado_has_areacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByAreaComun_idAreaComun($empleado_has_areacomun){
      $lista = array();
      $areaComun_idAreaComun=$empleado_has_areacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql ="SELECT `empleado_idempleado`, `areaComun_idAreaComun`"
          ."FROM `empleado_has_areacomun`"
          ."WHERE `areaComun_idAreaComun`='$areaComun_idAreaComun'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empleado_has_areacomun = new Empleado_has_areacomun();
           $empleado = new Empleado();
           $empleado->setIdempleado($data[$i]['empleado_idempleado']);
           $empleado_has_areacomun->setEmpleado_idempleado($empleado);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $empleado_has_areacomun->setAreaComun_idAreaComun($areacomun);

          array_push($lista,$empleado_has_areacomun);
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