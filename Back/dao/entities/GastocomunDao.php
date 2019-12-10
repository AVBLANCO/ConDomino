<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\

include_once realpath('../dao/interfaz/IGastocomunDao.php');
include_once realpath('../dto/Gastocomun.php');
include_once realpath('../dto/Calendario.php');
include_once realpath('../dto/Condominio.php');

class GastocomunDao implements IGastocomunDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Gastocomun en la base de datos.
     * @param gastocomun objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($gastocomun){
      $idGastoComun=$gastocomun->getIdGastoComun();
$observacionGasto=$gastocomun->getObservacionGasto();
$costoTotalGasto=$gastocomun->getCostoTotalGasto();
$calendario_idCalendario=$gastocomun->getCalendario_idCalendario()->getIdCalendario();
$fechaInicioCancelacionGastoComun=$gastocomun->getFechaInicioCancelacionGastoComun();
$fechaFinCancelacionGastoComun=$gastocomun->getFechaFinCancelacionGastoComun();
$estadoGastoComun=$gastocomun->getEstadoGastoComun();
$fechaCreacionGastoComun=$gastocomun->getFechaCreacionGastoComun();
$condominio_idCondominio=$gastocomun->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "INSERT INTO `gastocomun`( `idGastoComun`, `observacionGasto`, `costoTotalGasto`, `calendario_idCalendario`, `fechaInicioCancelacionGastoComun`, `fechaFinCancelacionGastoComun`, `estadoGastoComun`, `fechaCreacionGastoComun`, `condominio_idCondominio`)"
          ."VALUES ('$idGastoComun','$observacionGasto','$costoTotalGasto','$calendario_idCalendario','$fechaInicioCancelacionGastoComun','$fechaFinCancelacionGastoComun','$estadoGastoComun','$fechaCreacionGastoComun','$condominio_idCondominio')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Gastocomun en la base de datos.
     * @param gastocomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($gastocomun){
      $idGastoComun=$gastocomun->getIdGastoComun();

      try {
          $sql= "SELECT `idGastoComun`, `observacionGasto`, `costoTotalGasto`, `calendario_idCalendario`, `fechaInicioCancelacionGastoComun`, `fechaFinCancelacionGastoComun`, `estadoGastoComun`, `fechaCreacionGastoComun`, `condominio_idCondominio`"
          ."FROM `gastocomun`"
          ."WHERE `idGastoComun`='$idGastoComun'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $gastocomun->setIdGastoComun($data[$i]['idGastoComun']);
          $gastocomun->setObservacionGasto($data[$i]['observacionGasto']);
          $gastocomun->setCostoTotalGasto($data[$i]['costoTotalGasto']);
           $calendario = new Calendario();
           $calendario->setIdCalendario($data[$i]['calendario_idCalendario']);
           $gastocomun->setCalendario_idCalendario($calendario);
          $gastocomun->setFechaInicioCancelacionGastoComun($data[$i]['fechaInicioCancelacionGastoComun']);
          $gastocomun->setFechaFinCancelacionGastoComun($data[$i]['fechaFinCancelacionGastoComun']);
          $gastocomun->setEstadoGastoComun($data[$i]['estadoGastoComun']);
          $gastocomun->setFechaCreacionGastoComun($data[$i]['fechaCreacionGastoComun']);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $gastocomun->setCondominio_idCondominio($condominio);

          }
      return $gastocomun;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Gastocomun en la base de datos.
     * @param gastocomun objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($gastocomun){
      $idGastoComun=$gastocomun->getIdGastoComun();
$observacionGasto=$gastocomun->getObservacionGasto();
$costoTotalGasto=$gastocomun->getCostoTotalGasto();
$calendario_idCalendario=$gastocomun->getCalendario_idCalendario()->getIdCalendario();
$fechaInicioCancelacionGastoComun=$gastocomun->getFechaInicioCancelacionGastoComun();
$fechaFinCancelacionGastoComun=$gastocomun->getFechaFinCancelacionGastoComun();
$estadoGastoComun=$gastocomun->getEstadoGastoComun();
$fechaCreacionGastoComun=$gastocomun->getFechaCreacionGastoComun();
$condominio_idCondominio=$gastocomun->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "UPDATE `gastocomun` SET`idGastoComun`='$idGastoComun' ,`observacionGasto`='$observacionGasto' ,`costoTotalGasto`='$costoTotalGasto' ,`calendario_idCalendario`='$calendario_idCalendario' ,`fechaInicioCancelacionGastoComun`='$fechaInicioCancelacionGastoComun' ,`fechaFinCancelacionGastoComun`='$fechaFinCancelacionGastoComun' ,`estadoGastoComun`='$estadoGastoComun' ,`fechaCreacionGastoComun`='$fechaCreacionGastoComun' ,`condominio_idCondominio`='$condominio_idCondominio' WHERE `idGastoComun`='$idGastoComun' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Gastocomun en la base de datos.
     * @param gastocomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($gastocomun){
      $idGastoComun=$gastocomun->getIdGastoComun();

      try {
          $sql ="DELETE FROM `gastocomun` WHERE `idGastoComun`='$idGastoComun'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Gastocomun en la base de datos.
     * @return ArrayList<Gastocomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idGastoComun`, `observacionGasto`, `costoTotalGasto`, `calendario_idCalendario`, `fechaInicioCancelacionGastoComun`, `fechaFinCancelacionGastoComun`, `estadoGastoComun`, `fechaCreacionGastoComun`, `condominio_idCondominio`"
          ."FROM `gastocomun`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $gastocomun= new Gastocomun();
          $gastocomun->setIdGastoComun($data[$i]['idGastoComun']);
          $gastocomun->setObservacionGasto($data[$i]['observacionGasto']);
          $gastocomun->setCostoTotalGasto($data[$i]['costoTotalGasto']);
           $calendario = new Calendario();
           $calendario->setIdCalendario($data[$i]['calendario_idCalendario']);
           $gastocomun->setCalendario_idCalendario($calendario);
          $gastocomun->setFechaInicioCancelacionGastoComun($data[$i]['fechaInicioCancelacionGastoComun']);
          $gastocomun->setFechaFinCancelacionGastoComun($data[$i]['fechaFinCancelacionGastoComun']);
          $gastocomun->setEstadoGastoComun($data[$i]['estadoGastoComun']);
          $gastocomun->setFechaCreacionGastoComun($data[$i]['fechaCreacionGastoComun']);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $gastocomun->setCondominio_idCondominio($condominio);

          array_push($lista,$gastocomun);
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