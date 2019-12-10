<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nada mejor que el código hecho a mano.  \\


class Detalleexistenciabodega {

  private $idDetalleExistencia;
  private $unidadesExistencia;
  private $descipcionExistenciaBodega;
  private $fechaModificacionExistenciaBodega;

    /**
     * Constructor de Detalleexistenciabodega
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idDetalleExistencia
     * @return idDetalleExistencia
     */
  public function getIdDetalleExistencia(){
      return $this->idDetalleExistencia;
  }

    /**
     * Modifica el valor correspondiente a idDetalleExistencia
     * @param idDetalleExistencia
     */
  public function setIdDetalleExistencia($idDetalleExistencia){
      $this->idDetalleExistencia = $idDetalleExistencia;
  }
    /**
     * Devuelve el valor correspondiente a unidadesExistencia
     * @return unidadesExistencia
     */
  public function getUnidadesExistencia(){
      return $this->unidadesExistencia;
  }

    /**
     * Modifica el valor correspondiente a unidadesExistencia
     * @param unidadesExistencia
     */
  public function setUnidadesExistencia($unidadesExistencia){
      $this->unidadesExistencia = $unidadesExistencia;
  }
    /**
     * Devuelve el valor correspondiente a descipcionExistenciaBodega
     * @return descipcionExistenciaBodega
     */
  public function getDescipcionExistenciaBodega(){
      return $this->descipcionExistenciaBodega;
  }

    /**
     * Modifica el valor correspondiente a descipcionExistenciaBodega
     * @param descipcionExistenciaBodega
     */
  public function setDescipcionExistenciaBodega($descipcionExistenciaBodega){
      $this->descipcionExistenciaBodega = $descipcionExistenciaBodega;
  }
    /**
     * Devuelve el valor correspondiente a fechaModificacionExistenciaBodega
     * @return fechaModificacionExistenciaBodega
     */
  public function getFechaModificacionExistenciaBodega(){
      return $this->fechaModificacionExistenciaBodega;
  }

    /**
     * Modifica el valor correspondiente a fechaModificacionExistenciaBodega
     * @param fechaModificacionExistenciaBodega
     */
  public function setFechaModificacionExistenciaBodega($fechaModificacionExistenciaBodega){
      $this->fechaModificacionExistenciaBodega = $fechaModificacionExistenciaBodega;
  }


}
//That`s all folks!