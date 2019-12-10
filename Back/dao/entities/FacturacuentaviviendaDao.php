<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

include_once realpath('../dao/interfaz/IFacturacuentaviviendaDao.php');
include_once realpath('../dto/Facturacuentavivienda.php');
include_once realpath('../dto/Cuentavivienda.php');
include_once realpath('../dto/Detallefactura.php');

class FacturacuentaviviendaDao implements IFacturacuentaviviendaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Facturacuentavivienda en la base de datos.
     * @param facturacuentavivienda objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($facturacuentavivienda){
      $idfacturaCuentaVivienda=$facturacuentavivienda->getIdfacturaCuentaVivienda();
$desccripcinFacturaCuentaVivienda=$facturacuentavivienda->getDesccripcinFacturaCuentaVivienda();
$fechaCreacionFacturaCuentaVivienda=$facturacuentavivienda->getFechaCreacionFacturaCuentaVivienda();
$fechaPagoFacturaCuentaVivienda=$facturacuentavivienda->getFechaPagoFacturaCuentaVivienda();
$montoFacturaCuentaVivienda=$facturacuentavivienda->getMontoFacturaCuentaVivienda();
$medioPagoFacturaCuentaVivienda=$facturacuentavivienda->getMedioPagoFacturaCuentaVivienda();
$cuentaVivienda_idCuentaVivienda=$facturacuentavivienda->getCuentaVivienda_idCuentaVivienda()->getIdCuentaVivienda();
$estadoFacturaCuentaVivienda=$facturacuentavivienda->getEstadoFacturaCuentaVivienda();
$detalleFactura_iddetalleFactura=$facturacuentavivienda->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql= "INSERT INTO `facturacuentavivienda`( `idfacturaCuentaVivienda`, `desccripcinFacturaCuentaVivienda`, `fechaCreacionFacturaCuentaVivienda`, `fechaPagoFacturaCuentaVivienda`, `montoFacturaCuentaVivienda`, `medioPagoFacturaCuentaVivienda`, `cuentaVivienda_idCuentaVivienda`, `estadoFacturaCuentaVivienda`, `detalleFactura_iddetalleFactura`)"
          ."VALUES ('$idfacturaCuentaVivienda','$desccripcinFacturaCuentaVivienda','$fechaCreacionFacturaCuentaVivienda','$fechaPagoFacturaCuentaVivienda','$montoFacturaCuentaVivienda','$medioPagoFacturaCuentaVivienda','$cuentaVivienda_idCuentaVivienda','$estadoFacturaCuentaVivienda','$detalleFactura_iddetalleFactura')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Facturacuentavivienda en la base de datos.
     * @param facturacuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($facturacuentavivienda){
      $idfacturaCuentaVivienda=$facturacuentavivienda->getIdfacturaCuentaVivienda();

      try {
          $sql= "SELECT `idfacturaCuentaVivienda`, `desccripcinFacturaCuentaVivienda`, `fechaCreacionFacturaCuentaVivienda`, `fechaPagoFacturaCuentaVivienda`, `montoFacturaCuentaVivienda`, `medioPagoFacturaCuentaVivienda`, `cuentaVivienda_idCuentaVivienda`, `estadoFacturaCuentaVivienda`, `detalleFactura_iddetalleFactura`"
          ."FROM `facturacuentavivienda`"
          ."WHERE `idfacturaCuentaVivienda`='$idfacturaCuentaVivienda'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $facturacuentavivienda->setIdfacturaCuentaVivienda($data[$i]['idfacturaCuentaVivienda']);
          $facturacuentavivienda->setDesccripcinFacturaCuentaVivienda($data[$i]['desccripcinFacturaCuentaVivienda']);
          $facturacuentavivienda->setFechaCreacionFacturaCuentaVivienda($data[$i]['fechaCreacionFacturaCuentaVivienda']);
          $facturacuentavivienda->setFechaPagoFacturaCuentaVivienda($data[$i]['fechaPagoFacturaCuentaVivienda']);
          $facturacuentavivienda->setMontoFacturaCuentaVivienda($data[$i]['montoFacturaCuentaVivienda']);
          $facturacuentavivienda->setMedioPagoFacturaCuentaVivienda($data[$i]['medioPagoFacturaCuentaVivienda']);
           $cuentavivienda = new Cuentavivienda();
           $cuentavivienda->setIdCuentaVivienda($data[$i]['cuentaVivienda_idCuentaVivienda']);
           $facturacuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentavivienda);
          $facturacuentavivienda->setEstadoFacturaCuentaVivienda($data[$i]['estadoFacturaCuentaVivienda']);
           $detallefactura = new Detallefactura();
           $detallefactura->setIddetalleFactura($data[$i]['detalleFactura_iddetalleFactura']);
           $facturacuentavivienda->setDetalleFactura_iddetalleFactura($detallefactura);

          }
      return $facturacuentavivienda;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Facturacuentavivienda en la base de datos.
     * @param facturacuentavivienda objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($facturacuentavivienda){
      $idfacturaCuentaVivienda=$facturacuentavivienda->getIdfacturaCuentaVivienda();
$desccripcinFacturaCuentaVivienda=$facturacuentavivienda->getDesccripcinFacturaCuentaVivienda();
$fechaCreacionFacturaCuentaVivienda=$facturacuentavivienda->getFechaCreacionFacturaCuentaVivienda();
$fechaPagoFacturaCuentaVivienda=$facturacuentavivienda->getFechaPagoFacturaCuentaVivienda();
$montoFacturaCuentaVivienda=$facturacuentavivienda->getMontoFacturaCuentaVivienda();
$medioPagoFacturaCuentaVivienda=$facturacuentavivienda->getMedioPagoFacturaCuentaVivienda();
$cuentaVivienda_idCuentaVivienda=$facturacuentavivienda->getCuentaVivienda_idCuentaVivienda()->getIdCuentaVivienda();
$estadoFacturaCuentaVivienda=$facturacuentavivienda->getEstadoFacturaCuentaVivienda();
$detalleFactura_iddetalleFactura=$facturacuentavivienda->getDetalleFactura_iddetalleFactura()->getIddetalleFactura();

      try {
          $sql= "UPDATE `facturacuentavivienda` SET`idfacturaCuentaVivienda`='$idfacturaCuentaVivienda' ,`desccripcinFacturaCuentaVivienda`='$desccripcinFacturaCuentaVivienda' ,`fechaCreacionFacturaCuentaVivienda`='$fechaCreacionFacturaCuentaVivienda' ,`fechaPagoFacturaCuentaVivienda`='$fechaPagoFacturaCuentaVivienda' ,`montoFacturaCuentaVivienda`='$montoFacturaCuentaVivienda' ,`medioPagoFacturaCuentaVivienda`='$medioPagoFacturaCuentaVivienda' ,`cuentaVivienda_idCuentaVivienda`='$cuentaVivienda_idCuentaVivienda' ,`estadoFacturaCuentaVivienda`='$estadoFacturaCuentaVivienda' ,`detalleFactura_iddetalleFactura`='$detalleFactura_iddetalleFactura' WHERE `idfacturaCuentaVivienda`='$idfacturaCuentaVivienda' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Facturacuentavivienda en la base de datos.
     * @param facturacuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($facturacuentavivienda){
      $idfacturaCuentaVivienda=$facturacuentavivienda->getIdfacturaCuentaVivienda();

      try {
          $sql ="DELETE FROM `facturacuentavivienda` WHERE `idfacturaCuentaVivienda`='$idfacturaCuentaVivienda'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Facturacuentavivienda en la base de datos.
     * @return ArrayList<Facturacuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idfacturaCuentaVivienda`, `desccripcinFacturaCuentaVivienda`, `fechaCreacionFacturaCuentaVivienda`, `fechaPagoFacturaCuentaVivienda`, `montoFacturaCuentaVivienda`, `medioPagoFacturaCuentaVivienda`, `cuentaVivienda_idCuentaVivienda`, `estadoFacturaCuentaVivienda`, `detalleFactura_iddetalleFactura`"
          ."FROM `facturacuentavivienda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $facturacuentavivienda= new Facturacuentavivienda();
          $facturacuentavivienda->setIdfacturaCuentaVivienda($data[$i]['idfacturaCuentaVivienda']);
          $facturacuentavivienda->setDesccripcinFacturaCuentaVivienda($data[$i]['desccripcinFacturaCuentaVivienda']);
          $facturacuentavivienda->setFechaCreacionFacturaCuentaVivienda($data[$i]['fechaCreacionFacturaCuentaVivienda']);
          $facturacuentavivienda->setFechaPagoFacturaCuentaVivienda($data[$i]['fechaPagoFacturaCuentaVivienda']);
          $facturacuentavivienda->setMontoFacturaCuentaVivienda($data[$i]['montoFacturaCuentaVivienda']);
          $facturacuentavivienda->setMedioPagoFacturaCuentaVivienda($data[$i]['medioPagoFacturaCuentaVivienda']);
           $cuentavivienda = new Cuentavivienda();
           $cuentavivienda->setIdCuentaVivienda($data[$i]['cuentaVivienda_idCuentaVivienda']);
           $facturacuentavivienda->setCuentaVivienda_idCuentaVivienda($cuentavivienda);
          $facturacuentavivienda->setEstadoFacturaCuentaVivienda($data[$i]['estadoFacturaCuentaVivienda']);
           $detallefactura = new Detallefactura();
           $detallefactura->setIddetalleFactura($data[$i]['detalleFactura_iddetalleFactura']);
           $facturacuentavivienda->setDetalleFactura_iddetalleFactura($detallefactura);

          array_push($lista,$facturacuentavivienda);
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