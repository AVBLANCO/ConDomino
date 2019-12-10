<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\

include_once realpath('../dao/interfaz/ICuentaviviendaDao.php');
include_once realpath('../dto/Cuentavivienda.php');
include_once realpath('../dto/Apartamento.php');

class CuentaviviendaDao implements ICuentaviviendaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cuentavivienda en la base de datos.
     * @param cuentavivienda objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cuentavivienda){
      $idCuentaVivienda=$cuentavivienda->getIdCuentaVivienda();
$descripcionCuentaVivienda=$cuentavivienda->getDescripcionCuentaVivienda();
$saldoCuentaVivienda=$cuentavivienda->getSaldoCuentaVivienda();
$fechaCreacionCuentaVivienda=$cuentavivienda->getFechaCreacionCuentaVivienda();
$fechaActualizacionCuentaVivienda=$cuentavivienda->getFechaActualizacionCuentaVivienda();
$apartamento_idApartamento=$cuentavivienda->getApartamento_idApartamento()->getIdApartamento();

      try {
          $sql= "INSERT INTO `cuentavivienda`( `idCuentaVivienda`, `descripcionCuentaVivienda`, `saldoCuentaVivienda`, `fechaCreacionCuentaVivienda`, `fechaActualizacionCuentaVivienda`, `apartamento_idApartamento`)"
          ."VALUES ('$idCuentaVivienda','$descripcionCuentaVivienda','$saldoCuentaVivienda','$fechaCreacionCuentaVivienda','$fechaActualizacionCuentaVivienda','$apartamento_idApartamento')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cuentavivienda en la base de datos.
     * @param cuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cuentavivienda){
      $idCuentaVivienda=$cuentavivienda->getIdCuentaVivienda();

      try {
          $sql= "SELECT `idCuentaVivienda`, `descripcionCuentaVivienda`, `saldoCuentaVivienda`, `fechaCreacionCuentaVivienda`, `fechaActualizacionCuentaVivienda`, `apartamento_idApartamento`"
          ."FROM `cuentavivienda`"
          ."WHERE `idCuentaVivienda`='$idCuentaVivienda'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cuentavivienda->setIdCuentaVivienda($data[$i]['idCuentaVivienda']);
          $cuentavivienda->setDescripcionCuentaVivienda($data[$i]['descripcionCuentaVivienda']);
          $cuentavivienda->setSaldoCuentaVivienda($data[$i]['saldoCuentaVivienda']);
          $cuentavivienda->setFechaCreacionCuentaVivienda($data[$i]['fechaCreacionCuentaVivienda']);
          $cuentavivienda->setFechaActualizacionCuentaVivienda($data[$i]['fechaActualizacionCuentaVivienda']);
           $apartamento = new Apartamento();
           $apartamento->setIdApartamento($data[$i]['apartamento_idApartamento']);
           $cuentavivienda->setApartamento_idApartamento($apartamento);

          }
      return $cuentavivienda;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cuentavivienda en la base de datos.
     * @param cuentavivienda objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cuentavivienda){
      $idCuentaVivienda=$cuentavivienda->getIdCuentaVivienda();
$descripcionCuentaVivienda=$cuentavivienda->getDescripcionCuentaVivienda();
$saldoCuentaVivienda=$cuentavivienda->getSaldoCuentaVivienda();
$fechaCreacionCuentaVivienda=$cuentavivienda->getFechaCreacionCuentaVivienda();
$fechaActualizacionCuentaVivienda=$cuentavivienda->getFechaActualizacionCuentaVivienda();
$apartamento_idApartamento=$cuentavivienda->getApartamento_idApartamento()->getIdApartamento();

      try {
          $sql= "UPDATE `cuentavivienda` SET`idCuentaVivienda`='$idCuentaVivienda' ,`descripcionCuentaVivienda`='$descripcionCuentaVivienda' ,`saldoCuentaVivienda`='$saldoCuentaVivienda' ,`fechaCreacionCuentaVivienda`='$fechaCreacionCuentaVivienda' ,`fechaActualizacionCuentaVivienda`='$fechaActualizacionCuentaVivienda' ,`apartamento_idApartamento`='$apartamento_idApartamento' WHERE `idCuentaVivienda`='$idCuentaVivienda' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cuentavivienda en la base de datos.
     * @param cuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cuentavivienda){
      $idCuentaVivienda=$cuentavivienda->getIdCuentaVivienda();

      try {
          $sql ="DELETE FROM `cuentavivienda` WHERE `idCuentaVivienda`='$idCuentaVivienda'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cuentavivienda en la base de datos.
     * @return ArrayList<Cuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCuentaVivienda`, `descripcionCuentaVivienda`, `saldoCuentaVivienda`, `fechaCreacionCuentaVivienda`, `fechaActualizacionCuentaVivienda`, `apartamento_idApartamento`"
          ."FROM `cuentavivienda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cuentavivienda= new Cuentavivienda();
          $cuentavivienda->setIdCuentaVivienda($data[$i]['idCuentaVivienda']);
          $cuentavivienda->setDescripcionCuentaVivienda($data[$i]['descripcionCuentaVivienda']);
          $cuentavivienda->setSaldoCuentaVivienda($data[$i]['saldoCuentaVivienda']);
          $cuentavivienda->setFechaCreacionCuentaVivienda($data[$i]['fechaCreacionCuentaVivienda']);
          $cuentavivienda->setFechaActualizacionCuentaVivienda($data[$i]['fechaActualizacionCuentaVivienda']);
           $apartamento = new Apartamento();
           $apartamento->setIdApartamento($data[$i]['apartamento_idApartamento']);
           $cuentavivienda->setApartamento_idApartamento($apartamento);

          array_push($lista,$cuentavivienda);
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