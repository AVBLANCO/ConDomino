<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\

include_once realpath('../dao/interfaz/IPagocuentaviviendaDao.php');
include_once realpath('../dto/Pagocuentavivienda.php');
include_once realpath('../dto/Facturacuentavivienda.php');

class PagocuentaviviendaDao implements IPagocuentaviviendaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($pagocuentavivienda){
      $idpagoCuentaVivienda=$pagocuentavivienda->getIdpagoCuentaVivienda();
$detallePagoCuentaVivienda=$pagocuentavivienda->getDetallePagoCuentaVivienda();
$fechaPagoFactura=$pagocuentavivienda->getFechaPagoFactura();
$facturaCuentaVivienda_idfacturaCuentaVivienda=$pagocuentavivienda->getFacturaCuentaVivienda_idfacturaCuentaVivienda()->getIdfacturaCuentaVivienda();

      try {
          $sql= "INSERT INTO `pagocuentavivienda`( `idpagoCuentaVivienda`, `detallePagoCuentaVivienda`, `fechaPagoFactura`, `facturaCuentaVivienda_idfacturaCuentaVivienda`)"
          ."VALUES ('$idpagoCuentaVivienda','$detallePagoCuentaVivienda','$fechaPagoFactura','$facturaCuentaVivienda_idfacturaCuentaVivienda')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($pagocuentavivienda){
      $idpagoCuentaVivienda=$pagocuentavivienda->getIdpagoCuentaVivienda();
$facturaCuentaVivienda_idfacturaCuentaVivienda=$pagocuentavivienda->getFacturaCuentaVivienda_idfacturaCuentaVivienda()->getIdfacturaCuentaVivienda();

      try {
          $sql= "SELECT `idpagoCuentaVivienda`, `detallePagoCuentaVivienda`, `fechaPagoFactura`, `facturaCuentaVivienda_idfacturaCuentaVivienda`"
          ."FROM `pagocuentavivienda`"
          ."WHERE `idpagoCuentaVivienda`='$idpagoCuentaVivienda' AND`facturaCuentaVivienda_idfacturaCuentaVivienda`='$facturaCuentaVivienda_idfacturaCuentaVivienda'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $pagocuentavivienda->setIdpagoCuentaVivienda($data[$i]['idpagoCuentaVivienda']);
          $pagocuentavivienda->setDetallePagoCuentaVivienda($data[$i]['detallePagoCuentaVivienda']);
          $pagocuentavivienda->setFechaPagoFactura($data[$i]['fechaPagoFactura']);
           $facturacuentavivienda = new Facturacuentavivienda();
           $facturacuentavivienda->setIdfacturaCuentaVivienda($data[$i]['facturaCuentaVivienda_idfacturaCuentaVivienda']);
           $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturacuentavivienda);

          }
      return $pagocuentavivienda;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($pagocuentavivienda){
      $idpagoCuentaVivienda=$pagocuentavivienda->getIdpagoCuentaVivienda();
$detallePagoCuentaVivienda=$pagocuentavivienda->getDetallePagoCuentaVivienda();
$fechaPagoFactura=$pagocuentavivienda->getFechaPagoFactura();
$facturaCuentaVivienda_idfacturaCuentaVivienda=$pagocuentavivienda->getFacturaCuentaVivienda_idfacturaCuentaVivienda()->getIdfacturaCuentaVivienda();

      try {
          $sql= "UPDATE `pagocuentavivienda` SET`idpagoCuentaVivienda`='$idpagoCuentaVivienda' ,`detallePagoCuentaVivienda`='$detallePagoCuentaVivienda' ,`fechaPagoFactura`='$fechaPagoFactura' ,`facturaCuentaVivienda_idfacturaCuentaVivienda`='$facturaCuentaVivienda_idfacturaCuentaVivienda' WHERE `idpagoCuentaVivienda`='$idpagoCuentaVivienda' AND `facturaCuentaVivienda_idfacturaCuentaVivienda`='$facturaCuentaVivienda_idfacturaCuentaVivienda' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($pagocuentavivienda){
      $idpagoCuentaVivienda=$pagocuentavivienda->getIdpagoCuentaVivienda();
$facturaCuentaVivienda_idfacturaCuentaVivienda=$pagocuentavivienda->getFacturaCuentaVivienda_idfacturaCuentaVivienda()->getIdfacturaCuentaVivienda();

      try {
          $sql ="DELETE FROM `pagocuentavivienda` WHERE `idpagoCuentaVivienda`='$idpagoCuentaVivienda' AND`facturaCuentaVivienda_idfacturaCuentaVivienda`='$facturaCuentaVivienda_idfacturaCuentaVivienda'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Pagocuentavivienda en la base de datos.
     * @return ArrayList<Pagocuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idpagoCuentaVivienda`, `detallePagoCuentaVivienda`, `fechaPagoFactura`, `facturaCuentaVivienda_idfacturaCuentaVivienda`"
          ."FROM `pagocuentavivienda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $pagocuentavivienda= new Pagocuentavivienda();
          $pagocuentavivienda->setIdpagoCuentaVivienda($data[$i]['idpagoCuentaVivienda']);
          $pagocuentavivienda->setDetallePagoCuentaVivienda($data[$i]['detallePagoCuentaVivienda']);
          $pagocuentavivienda->setFechaPagoFactura($data[$i]['fechaPagoFactura']);
           $facturacuentavivienda = new Facturacuentavivienda();
           $facturacuentavivienda->setIdfacturaCuentaVivienda($data[$i]['facturaCuentaVivienda_idfacturaCuentaVivienda']);
           $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturacuentavivienda);

          array_push($lista,$pagocuentavivienda);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Pagocuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdpagoCuentaVivienda($pagocuentavivienda){
      $lista = array();
      $idpagoCuentaVivienda=$pagocuentavivienda->getIdpagoCuentaVivienda();

      try {
          $sql ="SELECT `idpagoCuentaVivienda`, `detallePagoCuentaVivienda`, `fechaPagoFactura`, `facturaCuentaVivienda_idfacturaCuentaVivienda`"
          ."FROM `pagocuentavivienda`"
          ."WHERE `idpagoCuentaVivienda`='$idpagoCuentaVivienda'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $pagocuentavivienda = new Pagocuentavivienda();
          $pagocuentavivienda->setIdpagoCuentaVivienda($data[$i]['idpagoCuentaVivienda']);
          $pagocuentavivienda->setDetallePagoCuentaVivienda($data[$i]['detallePagoCuentaVivienda']);
          $pagocuentavivienda->setFechaPagoFactura($data[$i]['fechaPagoFactura']);
           $facturacuentavivienda = new Facturacuentavivienda();
           $facturacuentavivienda->setIdfacturaCuentaVivienda($data[$i]['facturaCuentaVivienda_idfacturaCuentaVivienda']);
           $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturacuentavivienda);

          array_push($lista,$pagocuentavivienda);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Pagocuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByFacturaCuentaVivienda_idfacturaCuentaVivienda($pagocuentavivienda){
      $lista = array();
      $facturaCuentaVivienda_idfacturaCuentaVivienda=$pagocuentavivienda->getFacturaCuentaVivienda_idfacturaCuentaVivienda()->getIdfacturaCuentaVivienda();

      try {
          $sql ="SELECT `idpagoCuentaVivienda`, `detallePagoCuentaVivienda`, `fechaPagoFactura`, `facturaCuentaVivienda_idfacturaCuentaVivienda`"
          ."FROM `pagocuentavivienda`"
          ."WHERE `facturaCuentaVivienda_idfacturaCuentaVivienda`='$facturaCuentaVivienda_idfacturaCuentaVivienda'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $pagocuentavivienda = new Pagocuentavivienda();
          $pagocuentavivienda->setIdpagoCuentaVivienda($data[$i]['idpagoCuentaVivienda']);
          $pagocuentavivienda->setDetallePagoCuentaVivienda($data[$i]['detallePagoCuentaVivienda']);
          $pagocuentavivienda->setFechaPagoFactura($data[$i]['fechaPagoFactura']);
           $facturacuentavivienda = new Facturacuentavivienda();
           $facturacuentavivienda->setIdfacturaCuentaVivienda($data[$i]['facturaCuentaVivienda_idfacturaCuentaVivienda']);
           $pagocuentavivienda->setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturacuentavivienda);

          array_push($lista,$pagocuentavivienda);
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