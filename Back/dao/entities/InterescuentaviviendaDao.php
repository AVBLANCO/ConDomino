<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\

include_once realpath('../dao/interfaz/IInterescuentaviviendaDao.php');
include_once realpath('../dto/Interescuentavivienda.php');
include_once realpath('../dto/Cuentavivienda.php');

class InterescuentaviviendaDao implements IInterescuentaviviendaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($interescuentavivienda){
      $idInteresCuentaVivienda=$interescuentavivienda->getIdInteresCuentaVivienda();
$fechainteresCuentaVivienda=$interescuentavivienda->getFechainteresCuentaVivienda();
$fechaHastaInteresCuentaVivienda=$interescuentavivienda->getFechaHastaInteresCuentaVivienda();
$montoInteresCuentaVivienda=$interescuentavivienda->getMontoInteresCuentaVivienda();
$observacionInteres=$interescuentavivienda->getObservacionInteres();
$fechaCreacionInteresCuentaVivienda=$interescuentavivienda->getFechaCreacionInteresCuentaVivienda();
$fechaEliminacionInteresCuentaVivienda=$interescuentavivienda->getFechaEliminacionInteresCuentaVivienda();
$fechaModificacionInteresCuentaVivienda=$interescuentavivienda->getFechaModificacionInteresCuentaVivienda();
$cuentaVivienda_idCuentaVivienda=$interescuentavivienda->getCuentaVivienda_idCuentaVivienda()->getIdCuentaVivienda();

      try {
          $sql= "INSERT INTO `interescuentavivienda`( `idInteresCuentaVivienda`, `fechainteresCuentaVivienda`, `fechaHastaInteresCuentaVivienda`, `montoInteresCuentaVivienda`, `observacionInteres`, `fechaCreacionInteresCuentaVivienda`, `fechaEliminacionInteresCuentaVivienda`, `fechaModificacionInteresCuentaVivienda`, `cuentaVivienda_idCuentaVivienda`)"
          ."VALUES ('$idInteresCuentaVivienda','$fechainteresCuentaVivienda','$fechaHastaInteresCuentaVivienda','$montoInteresCuentaVivienda','$observacionInteres','$fechaCreacionInteresCuentaVivienda','$fechaEliminacionInteresCuentaVivienda','$fechaModificacionInteresCuentaVivienda','$cuentaVivienda_idCuentaVivienda')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($interescuentavivienda){
      $idInteresCuentaVivienda=$interescuentavivienda->getIdInteresCuentaVivienda();

      try {
          $sql= "SELECT `idInteresCuentaVivienda`, `fechainteresCuentaVivienda`, `fechaHastaInteresCuentaVivienda`, `montoInteresCuentaVivienda`, `observacionInteres`, `fechaCreacionInteresCuentaVivienda`, `fechaEliminacionInteresCuentaVivienda`, `fechaModificacionInteresCuentaVivienda`, `cuentaVivienda_idCuentaVivienda`"
          ."FROM `interescuentavivienda`"
          ."WHERE `idInteresCuentaVivienda`='$idInteresCuentaVivienda'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $interescuentavivienda->setIdInteresCuentaVivienda($data[$i]['idInteresCuentaVivienda']);
          $interescuentavivienda->setFechainteresCuentaVivienda($data[$i]['fechainteresCuentaVivienda']);
          $interescuentavivienda->setFechaHastaInteresCuentaVivienda($data[$i]['fechaHastaInteresCuentaVivienda']);
          $interescuentavivienda->setMontoInteresCuentaVivienda($data[$i]['montoInteresCuentaVivienda']);
          $interescuentavivienda->setObservacionInteres($data[$i]['observacionInteres']);
          $interescuentavivienda->setFechaCreacionInteresCuentaVivienda($data[$i]['fechaCreacionInteresCuentaVivienda']);
          $interescuentavivienda->setFechaEliminacionInteresCuentaVivienda($data[$i]['fechaEliminacionInteresCuentaVivienda']);
          $interescuentavivienda->setFechaModificacionInteresCuentaVivienda($data[$i]['fechaModificacionInteresCuentaVivienda']);
           $cuentavivienda = new Cuentavivienda();
           $cuentavivienda->setIdCuentaVivienda($data[$i]['cuentaVivienda_idCuentaVivienda']);
           $interescuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentavivienda);

          }
      return $interescuentavivienda;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($interescuentavivienda){
      $idInteresCuentaVivienda=$interescuentavivienda->getIdInteresCuentaVivienda();
$fechainteresCuentaVivienda=$interescuentavivienda->getFechainteresCuentaVivienda();
$fechaHastaInteresCuentaVivienda=$interescuentavivienda->getFechaHastaInteresCuentaVivienda();
$montoInteresCuentaVivienda=$interescuentavivienda->getMontoInteresCuentaVivienda();
$observacionInteres=$interescuentavivienda->getObservacionInteres();
$fechaCreacionInteresCuentaVivienda=$interescuentavivienda->getFechaCreacionInteresCuentaVivienda();
$fechaEliminacionInteresCuentaVivienda=$interescuentavivienda->getFechaEliminacionInteresCuentaVivienda();
$fechaModificacionInteresCuentaVivienda=$interescuentavivienda->getFechaModificacionInteresCuentaVivienda();
$cuentaVivienda_idCuentaVivienda=$interescuentavivienda->getCuentaVivienda_idCuentaVivienda()->getIdCuentaVivienda();

      try {
          $sql= "UPDATE `interescuentavivienda` SET`idInteresCuentaVivienda`='$idInteresCuentaVivienda' ,`fechainteresCuentaVivienda`='$fechainteresCuentaVivienda' ,`fechaHastaInteresCuentaVivienda`='$fechaHastaInteresCuentaVivienda' ,`montoInteresCuentaVivienda`='$montoInteresCuentaVivienda' ,`observacionInteres`='$observacionInteres' ,`fechaCreacionInteresCuentaVivienda`='$fechaCreacionInteresCuentaVivienda' ,`fechaEliminacionInteresCuentaVivienda`='$fechaEliminacionInteresCuentaVivienda' ,`fechaModificacionInteresCuentaVivienda`='$fechaModificacionInteresCuentaVivienda' ,`cuentaVivienda_idCuentaVivienda`='$cuentaVivienda_idCuentaVivienda' WHERE `idInteresCuentaVivienda`='$idInteresCuentaVivienda' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($interescuentavivienda){
      $idInteresCuentaVivienda=$interescuentavivienda->getIdInteresCuentaVivienda();

      try {
          $sql ="DELETE FROM `interescuentavivienda` WHERE `idInteresCuentaVivienda`='$idInteresCuentaVivienda'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Interescuentavivienda en la base de datos.
     * @return ArrayList<Interescuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idInteresCuentaVivienda`, `fechainteresCuentaVivienda`, `fechaHastaInteresCuentaVivienda`, `montoInteresCuentaVivienda`, `observacionInteres`, `fechaCreacionInteresCuentaVivienda`, `fechaEliminacionInteresCuentaVivienda`, `fechaModificacionInteresCuentaVivienda`, `cuentaVivienda_idCuentaVivienda`"
          ."FROM `interescuentavivienda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $interescuentavivienda= new Interescuentavivienda();
          $interescuentavivienda->setIdInteresCuentaVivienda($data[$i]['idInteresCuentaVivienda']);
          $interescuentavivienda->setFechainteresCuentaVivienda($data[$i]['fechainteresCuentaVivienda']);
          $interescuentavivienda->setFechaHastaInteresCuentaVivienda($data[$i]['fechaHastaInteresCuentaVivienda']);
          $interescuentavivienda->setMontoInteresCuentaVivienda($data[$i]['montoInteresCuentaVivienda']);
          $interescuentavivienda->setObservacionInteres($data[$i]['observacionInteres']);
          $interescuentavivienda->setFechaCreacionInteresCuentaVivienda($data[$i]['fechaCreacionInteresCuentaVivienda']);
          $interescuentavivienda->setFechaEliminacionInteresCuentaVivienda($data[$i]['fechaEliminacionInteresCuentaVivienda']);
          $interescuentavivienda->setFechaModificacionInteresCuentaVivienda($data[$i]['fechaModificacionInteresCuentaVivienda']);
           $cuentavivienda = new Cuentavivienda();
           $cuentavivienda->setIdCuentaVivienda($data[$i]['cuentaVivienda_idCuentaVivienda']);
           $interescuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentavivienda);

          array_push($lista,$interescuentavivienda);
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