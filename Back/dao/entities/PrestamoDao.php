<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿No es más sencillo hacer todo en el Main?  \\

include_once realpath('../dao/interfaz/IPrestamoDao.php');
include_once realpath('../dto/Prestamo.php');

class PrestamoDao implements IPrestamoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Prestamo en la base de datos.
     * @param prestamo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($prestamo){
      $idPrestamo=$prestamo->getIdPrestamo();
$descripcioPrestamo=$prestamo->getDescripcioPrestamo();
$fechaPrestamo=$prestamo->getFechaPrestamo();

      try {
          $sql= "INSERT INTO `prestamo`( `idPrestamo`, `descripcioPrestamo`, `fechaPrestamo`)"
          ."VALUES ('$idPrestamo','$descripcioPrestamo','$fechaPrestamo')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Prestamo en la base de datos.
     * @param prestamo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($prestamo){
      $idPrestamo=$prestamo->getIdPrestamo();

      try {
          $sql= "SELECT `idPrestamo`, `descripcioPrestamo`, `fechaPrestamo`"
          ."FROM `prestamo`"
          ."WHERE `idPrestamo`='$idPrestamo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $prestamo->setIdPrestamo($data[$i]['idPrestamo']);
          $prestamo->setDescripcioPrestamo($data[$i]['descripcioPrestamo']);
          $prestamo->setFechaPrestamo($data[$i]['fechaPrestamo']);

          }
      return $prestamo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Prestamo en la base de datos.
     * @param prestamo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($prestamo){
      $idPrestamo=$prestamo->getIdPrestamo();
$descripcioPrestamo=$prestamo->getDescripcioPrestamo();
$fechaPrestamo=$prestamo->getFechaPrestamo();

      try {
          $sql= "UPDATE `prestamo` SET`idPrestamo`='$idPrestamo' ,`descripcioPrestamo`='$descripcioPrestamo' ,`fechaPrestamo`='$fechaPrestamo' WHERE `idPrestamo`='$idPrestamo' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Prestamo en la base de datos.
     * @param prestamo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($prestamo){
      $idPrestamo=$prestamo->getIdPrestamo();

      try {
          $sql ="DELETE FROM `prestamo` WHERE `idPrestamo`='$idPrestamo'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Prestamo en la base de datos.
     * @return ArrayList<Prestamo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idPrestamo`, `descripcioPrestamo`, `fechaPrestamo`"
          ."FROM `prestamo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $prestamo= new Prestamo();
          $prestamo->setIdPrestamo($data[$i]['idPrestamo']);
          $prestamo->setDescripcioPrestamo($data[$i]['descripcioPrestamo']);
          $prestamo->setFechaPrestamo($data[$i]['fechaPrestamo']);

          array_push($lista,$prestamo);
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