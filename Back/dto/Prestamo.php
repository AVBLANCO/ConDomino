<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Yo a tu edad hacía calculadoras en visualBasic  \\


class Prestamo {

  private $idPrestamo;
  private $descripcioPrestamo;
  private $fechaPrestamo;

    /**
     * Constructor de Prestamo
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idPrestamo
     * @return idPrestamo
     */
  public function getIdPrestamo(){
      return $this->idPrestamo;
  }

    /**
     * Modifica el valor correspondiente a idPrestamo
     * @param idPrestamo
     */
  public function setIdPrestamo($idPrestamo){
      $this->idPrestamo = $idPrestamo;
  }
    /**
     * Devuelve el valor correspondiente a descripcioPrestamo
     * @return descripcioPrestamo
     */
  public function getDescripcioPrestamo(){
      return $this->descripcioPrestamo;
  }

    /**
     * Modifica el valor correspondiente a descripcioPrestamo
     * @param descripcioPrestamo
     */
  public function setDescripcioPrestamo($descripcioPrestamo){
      $this->descripcioPrestamo = $descripcioPrestamo;
  }
    /**
     * Devuelve el valor correspondiente a fechaPrestamo
     * @return fechaPrestamo
     */
  public function getFechaPrestamo(){
      return $this->fechaPrestamo;
  }

    /**
     * Modifica el valor correspondiente a fechaPrestamo
     * @param fechaPrestamo
     */
  public function setFechaPrestamo($fechaPrestamo){
      $this->fechaPrestamo = $fechaPrestamo;
  }


}
//That`s all folks!