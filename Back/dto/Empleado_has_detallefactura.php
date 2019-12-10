<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\


class Empleado_has_detallefactura {

  private $empleado_idempleado;
  private $detalleFactura_iddetalleFactura;

    /**
     * Constructor de Empleado_has_detallefactura
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a empleado_idempleado
     * @return empleado_idempleado
     */
  public function getEmpleado_idempleado(){
      return $this->empleado_idempleado;
  }

    /**
     * Modifica el valor correspondiente a empleado_idempleado
     * @param empleado_idempleado
     */
  public function setEmpleado_idempleado($empleado_idempleado){
      $this->empleado_idempleado = $empleado_idempleado;
  }
    /**
     * Devuelve el valor correspondiente a detalleFactura_iddetalleFactura
     * @return detalleFactura_iddetalleFactura
     */
  public function getDetalleFactura_iddetalleFactura(){
      return $this->detalleFactura_iddetalleFactura;
  }

    /**
     * Modifica el valor correspondiente a detalleFactura_iddetalleFactura
     * @param detalleFactura_iddetalleFactura
     */
  public function setDetalleFactura_iddetalleFactura($detalleFactura_iddetalleFactura){
      $this->detalleFactura_iddetalleFactura = $detalleFactura_iddetalleFactura;
  }


}
//That`s all folks!