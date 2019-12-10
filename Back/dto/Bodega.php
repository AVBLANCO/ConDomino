<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\


class Bodega {

  private $idBodega;
  private $descripcionBodega;
  private $detalleExistenciaBodega_idDetalleExistencia;

    /**
     * Constructor de Bodega
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idBodega
     * @return idBodega
     */
  public function getIdBodega(){
      return $this->idBodega;
  }

    /**
     * Modifica el valor correspondiente a idBodega
     * @param idBodega
     */
  public function setIdBodega($idBodega){
      $this->idBodega = $idBodega;
  }
    /**
     * Devuelve el valor correspondiente a descripcionBodega
     * @return descripcionBodega
     */
  public function getDescripcionBodega(){
      return $this->descripcionBodega;
  }

    /**
     * Modifica el valor correspondiente a descripcionBodega
     * @param descripcionBodega
     */
  public function setDescripcionBodega($descripcionBodega){
      $this->descripcionBodega = $descripcionBodega;
  }
    /**
     * Devuelve el valor correspondiente a detalleExistenciaBodega_idDetalleExistencia
     * @return detalleExistenciaBodega_idDetalleExistencia
     */
  public function getDetalleExistenciaBodega_idDetalleExistencia(){
      return $this->detalleExistenciaBodega_idDetalleExistencia;
  }

    /**
     * Modifica el valor correspondiente a detalleExistenciaBodega_idDetalleExistencia
     * @param detalleExistenciaBodega_idDetalleExistencia
     */
  public function setDetalleExistenciaBodega_idDetalleExistencia($detalleExistenciaBodega_idDetalleExistencia){
      $this->detalleExistenciaBodega_idDetalleExistencia = $detalleExistenciaBodega_idDetalleExistencia;
  }


}
//That`s all folks!