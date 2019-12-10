<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La noche está estrellada, y tiritan, azules, los astros, a lo lejos  \\


class Pagocuentavivienda {

  private $idpagoCuentaVivienda;
  private $detallePagoCuentaVivienda;
  private $fechaPagoFactura;
  private $facturaCuentaVivienda_idfacturaCuentaVivienda;

    /**
     * Constructor de Pagocuentavivienda
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idpagoCuentaVivienda
     * @return idpagoCuentaVivienda
     */
  public function getIdpagoCuentaVivienda(){
      return $this->idpagoCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a idpagoCuentaVivienda
     * @param idpagoCuentaVivienda
     */
  public function setIdpagoCuentaVivienda($idpagoCuentaVivienda){
      $this->idpagoCuentaVivienda = $idpagoCuentaVivienda;
  }
    /**
     * Devuelve el valor correspondiente a detallePagoCuentaVivienda
     * @return detallePagoCuentaVivienda
     */
  public function getDetallePagoCuentaVivienda(){
      return $this->detallePagoCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a detallePagoCuentaVivienda
     * @param detallePagoCuentaVivienda
     */
  public function setDetallePagoCuentaVivienda($detallePagoCuentaVivienda){
      $this->detallePagoCuentaVivienda = $detallePagoCuentaVivienda;
  }
    /**
     * Devuelve el valor correspondiente a fechaPagoFactura
     * @return fechaPagoFactura
     */
  public function getFechaPagoFactura(){
      return $this->fechaPagoFactura;
  }

    /**
     * Modifica el valor correspondiente a fechaPagoFactura
     * @param fechaPagoFactura
     */
  public function setFechaPagoFactura($fechaPagoFactura){
      $this->fechaPagoFactura = $fechaPagoFactura;
  }
    /**
     * Devuelve el valor correspondiente a facturaCuentaVivienda_idfacturaCuentaVivienda
     * @return facturaCuentaVivienda_idfacturaCuentaVivienda
     */
  public function getFacturaCuentaVivienda_idfacturaCuentaVivienda(){
      return $this->facturaCuentaVivienda_idfacturaCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a facturaCuentaVivienda_idfacturaCuentaVivienda
     * @param facturaCuentaVivienda_idfacturaCuentaVivienda
     */
  public function setFacturaCuentaVivienda_idfacturaCuentaVivienda($facturaCuentaVivienda_idfacturaCuentaVivienda){
      $this->facturaCuentaVivienda_idfacturaCuentaVivienda = $facturaCuentaVivienda_idfacturaCuentaVivienda;
  }


}
//That`s all folks!