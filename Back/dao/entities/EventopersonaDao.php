<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\

include_once realpath('../dao/interfaz/IEventopersonaDao.php');
include_once realpath('../dto/Eventopersona.php');
include_once realpath('../dto/Evento.php');
include_once realpath('../dto/Persona.php');
include_once realpath('../dto/Condominio.php');

class EventopersonaDao implements IEventopersonaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($eventopersona){
      $evento_idevento=$eventopersona->getEvento_idevento()->getIdevento();
$persona_idpersona=$eventopersona->getPersona_idpersona()->getIdpersona();
$condominio_idCondominio=$eventopersona->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "INSERT INTO `eventopersona`( `evento_idevento`, `persona_idpersona`, `condominio_idCondominio`)"
          ."VALUES ('$evento_idevento','$persona_idpersona','$condominio_idCondominio')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($eventopersona){
      $evento_idevento=$eventopersona->getEvento_idevento()->getIdevento();
$persona_idpersona=$eventopersona->getPersona_idpersona()->getIdpersona();

      try {
          $sql= "SELECT `evento_idevento`, `persona_idpersona`, `condominio_idCondominio`"
          ."FROM `eventopersona`"
          ."WHERE `evento_idevento`='$evento_idevento' AND`persona_idpersona`='$persona_idpersona'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $evento = new Evento();
           $evento->setIdevento($data[$i]['evento_idevento']);
           $eventopersona->setEvento_idevento($evento);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $eventopersona->setPersona_idpersona($persona);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $eventopersona->setCondominio_idCondominio($condominio);

          }
      return $eventopersona;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($eventopersona){
      $evento_idevento=$eventopersona->getEvento_idevento()->getIdevento();
$persona_idpersona=$eventopersona->getPersona_idpersona()->getIdpersona();
$condominio_idCondominio=$eventopersona->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "UPDATE `eventopersona` SET`evento_idevento`='$evento_idevento' ,`persona_idpersona`='$persona_idpersona' ,`condominio_idCondominio`='$condominio_idCondominio' WHERE `evento_idevento`='$evento_idevento' AND `persona_idpersona`='$persona_idpersona' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($eventopersona){
      $evento_idevento=$eventopersona->getEvento_idevento()->getIdevento();
$persona_idpersona=$eventopersona->getPersona_idpersona()->getIdpersona();

      try {
          $sql ="DELETE FROM `eventopersona` WHERE `evento_idevento`='$evento_idevento' AND`persona_idpersona`='$persona_idpersona'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Eventopersona en la base de datos.
     * @return ArrayList<Eventopersona> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `evento_idevento`, `persona_idpersona`, `condominio_idCondominio`"
          ."FROM `eventopersona`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $eventopersona= new Eventopersona();
           $evento = new Evento();
           $evento->setIdevento($data[$i]['evento_idevento']);
           $eventopersona->setEvento_idevento($evento);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $eventopersona->setPersona_idpersona($persona);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $eventopersona->setCondominio_idCondominio($condominio);

          array_push($lista,$eventopersona);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Eventopersona> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEvento_idevento($eventopersona){
      $lista = array();
      $evento_idevento=$eventopersona->getEvento_idevento()->getIdevento();

      try {
          $sql ="SELECT `evento_idevento`, `persona_idpersona`, `condominio_idCondominio`"
          ."FROM `eventopersona`"
          ."WHERE `evento_idevento`='$evento_idevento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $eventopersona = new Eventopersona();
           $evento = new Evento();
           $evento->setIdevento($data[$i]['evento_idevento']);
           $eventopersona->setEvento_idevento($evento);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $eventopersona->setPersona_idpersona($persona);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $eventopersona->setCondominio_idCondominio($condominio);

          array_push($lista,$eventopersona);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Eventopersona> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPersona_idpersona($eventopersona){
      $lista = array();
      $persona_idpersona=$eventopersona->getPersona_idpersona()->getIdpersona();

      try {
          $sql ="SELECT `evento_idevento`, `persona_idpersona`, `condominio_idCondominio`"
          ."FROM `eventopersona`"
          ."WHERE `persona_idpersona`='$persona_idpersona'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $eventopersona = new Eventopersona();
           $evento = new Evento();
           $evento->setIdevento($data[$i]['evento_idevento']);
           $eventopersona->setEvento_idevento($evento);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $eventopersona->setPersona_idpersona($persona);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $eventopersona->setCondominio_idCondominio($condominio);

          array_push($lista,$eventopersona);
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