<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\


class Detallefactura {

  private $iddetalleFactura;
  private $valorDetalle;
  private $descripcionDetalle;

    /**
     * Constructor de Detallefactura
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a iddetalleFactura
     * @return iddetalleFactura
     */
  public function getIddetalleFactura(){
      return $this->iddetalleFactura;
  }

    /**
     * Modifica el valor correspondiente a iddetalleFactura
     * @param iddetalleFactura
     */
  public function setIddetalleFactura($iddetalleFactura){
      $this->iddetalleFactura = $iddetalleFactura;
  }
    /**
     * Devuelve el valor correspondiente a valorDetalle
     * @return valorDetalle
     */
  public function getValorDetalle(){
      return $this->valorDetalle;
  }

    /**
     * Modifica el valor correspondiente a valorDetalle
     * @param valorDetalle
     */
  public function setValorDetalle($valorDetalle){
      $this->valorDetalle = $valorDetalle;
  }
    /**
     * Devuelve el valor correspondiente a descripcionDetalle
     * @return descripcionDetalle
     */
  public function getDescripcionDetalle(){
      return $this->descripcionDetalle;
  }

    /**
     * Modifica el valor correspondiente a descripcionDetalle
     * @param descripcionDetalle
     */
  public function setDescripcionDetalle($descripcionDetalle){
      $this->descripcionDetalle = $descripcionDetalle;
  }


}
//That`s all folks!