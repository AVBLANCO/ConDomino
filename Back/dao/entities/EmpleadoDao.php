<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\

include_once realpath('../dao/interfaz/IEmpleadoDao.php');
include_once realpath('../dto/Empleado.php');
include_once realpath('../dto/Persona.php');

class EmpleadoDao implements IEmpleadoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Empleado en la base de datos.
     * @param empleado objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empleado){
      $idempleado=$empleado->getIdempleado();
$areaEmpleado=$empleado->getAreaEmpleado();
$cantidadHorasTrabajo=$empleado->getCantidadHorasTrabajo();
$fechaInicioContrato=$empleado->getFechaInicioContrato();
$fechaFinCotrato=$empleado->getFechaFinCotrato();
$valorHora=$empleado->getValorHora();
$persona_idpersona=$empleado->getPersona_idpersona()->getIdpersona();

      try {
          $sql= "INSERT INTO `empleado`( `idempleado`, `areaEmpleado`, `cantidadHorasTrabajo`, `fechaInicioContrato`, `fechaFinCotrato`, `valorHora`, `persona_idpersona`)"
          ."VALUES ('$idempleado','$areaEmpleado','$cantidadHorasTrabajo','$fechaInicioContrato','$fechaFinCotrato','$valorHora','$persona_idpersona')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado en la base de datos.
     * @param empleado objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empleado){
      $idempleado=$empleado->getIdempleado();

      try {
          $sql= "SELECT `idempleado`, `areaEmpleado`, `cantidadHorasTrabajo`, `fechaInicioContrato`, `fechaFinCotrato`, `valorHora`, `persona_idpersona`"
          ."FROM `empleado`"
          ."WHERE `idempleado`='$idempleado'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empleado->setIdempleado($data[$i]['idempleado']);
          $empleado->setAreaEmpleado($data[$i]['areaEmpleado']);
          $empleado->setCantidadHorasTrabajo($data[$i]['cantidadHorasTrabajo']);
          $empleado->setFechaInicioContrato($data[$i]['fechaInicioContrato']);
          $empleado->setFechaFinCotrato($data[$i]['fechaFinCotrato']);
          $empleado->setValorHora($data[$i]['valorHora']);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $empleado->setPersona_idpersona($persona);

          }
      return $empleado;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Empleado en la base de datos.
     * @param empleado objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empleado){
      $idempleado=$empleado->getIdempleado();
$areaEmpleado=$empleado->getAreaEmpleado();
$cantidadHorasTrabajo=$empleado->getCantidadHorasTrabajo();
$fechaInicioContrato=$empleado->getFechaInicioContrato();
$fechaFinCotrato=$empleado->getFechaFinCotrato();
$valorHora=$empleado->getValorHora();
$persona_idpersona=$empleado->getPersona_idpersona()->getIdpersona();

      try {
          $sql= "UPDATE `empleado` SET`idempleado`='$idempleado' ,`areaEmpleado`='$areaEmpleado' ,`cantidadHorasTrabajo`='$cantidadHorasTrabajo' ,`fechaInicioContrato`='$fechaInicioContrato' ,`fechaFinCotrato`='$fechaFinCotrato' ,`valorHora`='$valorHora' ,`persona_idpersona`='$persona_idpersona' WHERE `idempleado`='$idempleado' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Empleado en la base de datos.
     * @param empleado objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empleado){
      $idempleado=$empleado->getIdempleado();

      try {
          $sql ="DELETE FROM `empleado` WHERE `idempleado`='$idempleado'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado en la base de datos.
     * @return ArrayList<Empleado> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idempleado`, `areaEmpleado`, `cantidadHorasTrabajo`, `fechaInicioContrato`, `fechaFinCotrato`, `valorHora`, `persona_idpersona`"
          ."FROM `empleado`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $empleado= new Empleado();
          $empleado->setIdempleado($data[$i]['idempleado']);
          $empleado->setAreaEmpleado($data[$i]['areaEmpleado']);
          $empleado->setCantidadHorasTrabajo($data[$i]['cantidadHorasTrabajo']);
          $empleado->setFechaInicioContrato($data[$i]['fechaInicioContrato']);
          $empleado->setFechaFinCotrato($data[$i]['fechaFinCotrato']);
          $empleado->setValorHora($data[$i]['valorHora']);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $empleado->setPersona_idpersona($persona);

          array_push($lista,$empleado);
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