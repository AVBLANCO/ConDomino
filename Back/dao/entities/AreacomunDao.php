<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Lolita, luz de mi vida, fuego de mis entrañas. Pecado mío, alma mía.  \\

include_once realpath('../dao/interfaz/IAreacomunDao.php');
include_once realpath('../dto/Areacomun.php');
include_once realpath('../dto/Condominio.php');

class AreacomunDao implements IAreacomunDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Areacomun en la base de datos.
     * @param areacomun objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($areacomun){
      $idAreaComun=$areacomun->getIdAreaComun();
$detalleAreaComun=$areacomun->getDetalleAreaComun();
$costoAreaComun=$areacomun->getCostoAreaComun();
$condominio_idCondominio=$areacomun->getCondominio_idCondominio()->getIdCondominio();
$estadoAreaComun=$areacomun->getEstadoAreaComun();

      try {
          $sql= "INSERT INTO `areacomun`( `idAreaComun`, `detalleAreaComun`, `costoAreaComun`, `condominio_idCondominio`, `estadoAreaComun`)"
          ."VALUES ('$idAreaComun','$detalleAreaComun','$costoAreaComun','$condominio_idCondominio','$estadoAreaComun')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Areacomun en la base de datos.
     * @param areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($areacomun){
      $idAreaComun=$areacomun->getIdAreaComun();

      try {
          $sql= "SELECT `idAreaComun`, `detalleAreaComun`, `costoAreaComun`, `condominio_idCondominio`, `estadoAreaComun`"
          ."FROM `areacomun`"
          ."WHERE `idAreaComun`='$idAreaComun'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $areacomun->setIdAreaComun($data[$i]['idAreaComun']);
          $areacomun->setDetalleAreaComun($data[$i]['detalleAreaComun']);
          $areacomun->setCostoAreaComun($data[$i]['costoAreaComun']);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $areacomun->setCondominio_idCondominio($condominio);
          $areacomun->setEstadoAreaComun($data[$i]['estadoAreaComun']);

          }
      return $areacomun;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Areacomun en la base de datos.
     * @param areacomun objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($areacomun){
      $idAreaComun=$areacomun->getIdAreaComun();
$detalleAreaComun=$areacomun->getDetalleAreaComun();
$costoAreaComun=$areacomun->getCostoAreaComun();
$condominio_idCondominio=$areacomun->getCondominio_idCondominio()->getIdCondominio();
$estadoAreaComun=$areacomun->getEstadoAreaComun();

      try {
          $sql= "UPDATE `areacomun` SET`idAreaComun`='$idAreaComun' ,`detalleAreaComun`='$detalleAreaComun' ,`costoAreaComun`='$costoAreaComun' ,`condominio_idCondominio`='$condominio_idCondominio' ,`estadoAreaComun`='$estadoAreaComun' WHERE `idAreaComun`='$idAreaComun' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Areacomun en la base de datos.
     * @param areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($areacomun){
      $idAreaComun=$areacomun->getIdAreaComun();

      try {
          $sql ="DELETE FROM `areacomun` WHERE `idAreaComun`='$idAreaComun'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Areacomun en la base de datos.
     * @return ArrayList<Areacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idAreaComun`, `detalleAreaComun`, `costoAreaComun`, `condominio_idCondominio`, `estadoAreaComun`"
          ."FROM `areacomun`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $areacomun= new Areacomun();
          $areacomun->setIdAreaComun($data[$i]['idAreaComun']);
          $areacomun->setDetalleAreaComun($data[$i]['detalleAreaComun']);
          $areacomun->setCostoAreaComun($data[$i]['costoAreaComun']);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $areacomun->setCondominio_idCondominio($condominio);
          $areacomun->setEstadoAreaComun($data[$i]['estadoAreaComun']);

          array_push($lista,$areacomun);
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