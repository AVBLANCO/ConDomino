<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\

include_once realpath('../dao/interfaz/IEventoDao.php');
include_once realpath('../dto/Evento.php');

class EventoDao implements IEventoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Evento en la base de datos.
     * @param evento objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($evento){
      $idevento=$evento->getIdevento();
$descripcionEvento=$evento->getDescripcionEvento();
$fechaEvento=$evento->getFechaEvento();

      try {
          $sql= "INSERT INTO `evento`( `idevento`, `descripcionEvento`, `fechaEvento`)"
          ."VALUES ('$idevento','$descripcionEvento','$fechaEvento')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Evento en la base de datos.
     * @param evento objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($evento){
      $idevento=$evento->getIdevento();

      try {
          $sql= "SELECT `idevento`, `descripcionEvento`, `fechaEvento`"
          ."FROM `evento`"
          ."WHERE `idevento`='$idevento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $evento->setIdevento($data[$i]['idevento']);
          $evento->setDescripcionEvento($data[$i]['descripcionEvento']);
          $evento->setFechaEvento($data[$i]['fechaEvento']);

          }
      return $evento;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Evento en la base de datos.
     * @param evento objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($evento){
      $idevento=$evento->getIdevento();
$descripcionEvento=$evento->getDescripcionEvento();
$fechaEvento=$evento->getFechaEvento();

      try {
          $sql= "UPDATE `evento` SET`idevento`='$idevento' ,`descripcionEvento`='$descripcionEvento' ,`fechaEvento`='$fechaEvento' WHERE `idevento`='$idevento' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Evento en la base de datos.
     * @param evento objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($evento){
      $idevento=$evento->getIdevento();

      try {
          $sql ="DELETE FROM `evento` WHERE `idevento`='$idevento'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Evento en la base de datos.
     * @return ArrayList<Evento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idevento`, `descripcionEvento`, `fechaEvento`"
          ."FROM `evento`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $evento= new Evento();
          $evento->setIdevento($data[$i]['idevento']);
          $evento->setDescripcionEvento($data[$i]['descripcionEvento']);
          $evento->setFechaEvento($data[$i]['fechaEvento']);

          array_push($lista,$evento);
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