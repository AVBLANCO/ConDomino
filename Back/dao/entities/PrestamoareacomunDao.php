<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    404 Frase no encontrada  \\

include_once realpath('../dao/interfaz/IPrestamoareacomunDao.php');
include_once realpath('../dto/Prestamoareacomun.php');
include_once realpath('../dto/Prestamo.php');
include_once realpath('../dto/Areacomun.php');

class PrestamoareacomunDao implements IPrestamoareacomunDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($prestamoareacomun){
      $prestamo_idPrestamo=$prestamoareacomun->getPrestamo_idPrestamo()->getIdPrestamo();
$areaComun_idAreaComun=$prestamoareacomun->getAreaComun_idAreaComun()->getIdAreaComun();
$fechaPestamoAreaComun=$prestamoareacomun->getFechaPestamoAreaComun();
$descripcionPrestamoAreaComun=$prestamoareacomun->getDescripcionPrestamoAreaComun();

      try {
          $sql= "INSERT INTO `prestamoareacomun`( `prestamo_idPrestamo`, `areaComun_idAreaComun`, `fechaPestamoAreaComun`, `descripcionPrestamoAreaComun`)"
          ."VALUES ('$prestamo_idPrestamo','$areaComun_idAreaComun','$fechaPestamoAreaComun','$descripcionPrestamoAreaComun')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($prestamoareacomun){
      $prestamo_idPrestamo=$prestamoareacomun->getPrestamo_idPrestamo()->getIdPrestamo();
$areaComun_idAreaComun=$prestamoareacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql= "SELECT `prestamo_idPrestamo`, `areaComun_idAreaComun`, `fechaPestamoAreaComun`, `descripcionPrestamoAreaComun`"
          ."FROM `prestamoareacomun`"
          ."WHERE `prestamo_idPrestamo`='$prestamo_idPrestamo' AND`areaComun_idAreaComun`='$areaComun_idAreaComun'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $prestamo = new Prestamo();
           $prestamo->setIdPrestamo($data[$i]['prestamo_idPrestamo']);
           $prestamoareacomun->setPrestamo_idPrestamo($prestamo);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $prestamoareacomun->setAreaComun_idAreaComun($areacomun);
          $prestamoareacomun->setFechaPestamoAreaComun($data[$i]['fechaPestamoAreaComun']);
          $prestamoareacomun->setDescripcionPrestamoAreaComun($data[$i]['descripcionPrestamoAreaComun']);

          }
      return $prestamoareacomun;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($prestamoareacomun){
      $prestamo_idPrestamo=$prestamoareacomun->getPrestamo_idPrestamo()->getIdPrestamo();
$areaComun_idAreaComun=$prestamoareacomun->getAreaComun_idAreaComun()->getIdAreaComun();
$fechaPestamoAreaComun=$prestamoareacomun->getFechaPestamoAreaComun();
$descripcionPrestamoAreaComun=$prestamoareacomun->getDescripcionPrestamoAreaComun();

      try {
          $sql= "UPDATE `prestamoareacomun` SET`prestamo_idPrestamo`='$prestamo_idPrestamo' ,`areaComun_idAreaComun`='$areaComun_idAreaComun' ,`fechaPestamoAreaComun`='$fechaPestamoAreaComun' ,`descripcionPrestamoAreaComun`='$descripcionPrestamoAreaComun' WHERE `prestamo_idPrestamo`='$prestamo_idPrestamo' AND `areaComun_idAreaComun`='$areaComun_idAreaComun' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($prestamoareacomun){
      $prestamo_idPrestamo=$prestamoareacomun->getPrestamo_idPrestamo()->getIdPrestamo();
$areaComun_idAreaComun=$prestamoareacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql ="DELETE FROM `prestamoareacomun` WHERE `prestamo_idPrestamo`='$prestamo_idPrestamo' AND`areaComun_idAreaComun`='$areaComun_idAreaComun'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Prestamoareacomun en la base de datos.
     * @return ArrayList<Prestamoareacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `prestamo_idPrestamo`, `areaComun_idAreaComun`, `fechaPestamoAreaComun`, `descripcionPrestamoAreaComun`"
          ."FROM `prestamoareacomun`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $prestamoareacomun= new Prestamoareacomun();
           $prestamo = new Prestamo();
           $prestamo->setIdPrestamo($data[$i]['prestamo_idPrestamo']);
           $prestamoareacomun->setPrestamo_idPrestamo($prestamo);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $prestamoareacomun->setAreaComun_idAreaComun($areacomun);
          $prestamoareacomun->setFechaPestamoAreaComun($data[$i]['fechaPestamoAreaComun']);
          $prestamoareacomun->setDescripcionPrestamoAreaComun($data[$i]['descripcionPrestamoAreaComun']);

          array_push($lista,$prestamoareacomun);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Prestamoareacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPrestamo_idPrestamo($prestamoareacomun){
      $lista = array();
      $prestamo_idPrestamo=$prestamoareacomun->getPrestamo_idPrestamo()->getIdPrestamo();

      try {
          $sql ="SELECT `prestamo_idPrestamo`, `areaComun_idAreaComun`, `fechaPestamoAreaComun`, `descripcionPrestamoAreaComun`"
          ."FROM `prestamoareacomun`"
          ."WHERE `prestamo_idPrestamo`='$prestamo_idPrestamo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $prestamoareacomun = new Prestamoareacomun();
           $prestamo = new Prestamo();
           $prestamo->setIdPrestamo($data[$i]['prestamo_idPrestamo']);
           $prestamoareacomun->setPrestamo_idPrestamo($prestamo);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $prestamoareacomun->setAreaComun_idAreaComun($areacomun);
          $prestamoareacomun->setFechaPestamoAreaComun($data[$i]['fechaPestamoAreaComun']);
          $prestamoareacomun->setDescripcionPrestamoAreaComun($data[$i]['descripcionPrestamoAreaComun']);

          array_push($lista,$prestamoareacomun);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Prestamoareacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByAreaComun_idAreaComun($prestamoareacomun){
      $lista = array();
      $areaComun_idAreaComun=$prestamoareacomun->getAreaComun_idAreaComun()->getIdAreaComun();

      try {
          $sql ="SELECT `prestamo_idPrestamo`, `areaComun_idAreaComun`, `fechaPestamoAreaComun`, `descripcionPrestamoAreaComun`"
          ."FROM `prestamoareacomun`"
          ."WHERE `areaComun_idAreaComun`='$areaComun_idAreaComun'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $prestamoareacomun = new Prestamoareacomun();
           $prestamo = new Prestamo();
           $prestamo->setIdPrestamo($data[$i]['prestamo_idPrestamo']);
           $prestamoareacomun->setPrestamo_idPrestamo($prestamo);
           $areacomun = new Areacomun();
           $areacomun->setIdAreaComun($data[$i]['areaComun_idAreaComun']);
           $prestamoareacomun->setAreaComun_idAreaComun($areacomun);
          $prestamoareacomun->setFechaPestamoAreaComun($data[$i]['fechaPestamoAreaComun']);
          $prestamoareacomun->setDescripcionPrestamoAreaComun($data[$i]['descripcionPrestamoAreaComun']);

          array_push($lista,$prestamoareacomun);
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