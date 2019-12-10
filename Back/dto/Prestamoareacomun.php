<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\


class Prestamoareacomun {

  private $prestamo_idPrestamo;
  private $areaComun_idAreaComun;
  private $fechaPestamoAreaComun;
  private $descripcionPrestamoAreaComun;

    /**
     * Constructor de Prestamoareacomun
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a prestamo_idPrestamo
     * @return prestamo_idPrestamo
     */
  public function getPrestamo_idPrestamo(){
      return $this->prestamo_idPrestamo;
  }

    /**
     * Modifica el valor correspondiente a prestamo_idPrestamo
     * @param prestamo_idPrestamo
     */
  public function setPrestamo_idPrestamo($prestamo_idPrestamo){
      $this->prestamo_idPrestamo = $prestamo_idPrestamo;
  }
    /**
     * Devuelve el valor correspondiente a areaComun_idAreaComun
     * @return areaComun_idAreaComun
     */
  public function getAreaComun_idAreaComun(){
      return $this->areaComun_idAreaComun;
  }

    /**
     * Modifica el valor correspondiente a areaComun_idAreaComun
     * @param areaComun_idAreaComun
     */
  public function setAreaComun_idAreaComun($areaComun_idAreaComun){
      $this->areaComun_idAreaComun = $areaComun_idAreaComun;
  }
    /**
     * Devuelve el valor correspondiente a fechaPestamoAreaComun
     * @return fechaPestamoAreaComun
     */
  public function getFechaPestamoAreaComun(){
      return $this->fechaPestamoAreaComun;
  }

    /**
     * Modifica el valor correspondiente a fechaPestamoAreaComun
     * @param fechaPestamoAreaComun
     */
  public function setFechaPestamoAreaComun($fechaPestamoAreaComun){
      $this->fechaPestamoAreaComun = $fechaPestamoAreaComun;
  }
    /**
     * Devuelve el valor correspondiente a descripcionPrestamoAreaComun
     * @return descripcionPrestamoAreaComun
     */
  public function getDescripcionPrestamoAreaComun(){
      return $this->descripcionPrestamoAreaComun;
  }

    /**
     * Modifica el valor correspondiente a descripcionPrestamoAreaComun
     * @param descripcionPrestamoAreaComun
     */
  public function setDescripcionPrestamoAreaComun($descripcionPrestamoAreaComun){
      $this->descripcionPrestamoAreaComun = $descripcionPrestamoAreaComun;
  }


}
//That`s all folks!