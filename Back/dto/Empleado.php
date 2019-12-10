<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\


class Empleado {

  private $idempleado;
  private $areaEmpleado;
  private $cantidadHorasTrabajo;
  private $fechaInicioContrato;
  private $fechaFinCotrato;
  private $valorHora;
  private $persona_idpersona;

    /**
     * Constructor de Empleado
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idempleado
     * @return idempleado
     */
  public function getIdempleado(){
      return $this->idempleado;
  }

    /**
     * Modifica el valor correspondiente a idempleado
     * @param idempleado
     */
  public function setIdempleado($idempleado){
      $this->idempleado = $idempleado;
  }
    /**
     * Devuelve el valor correspondiente a areaEmpleado
     * @return areaEmpleado
     */
  public function getAreaEmpleado(){
      return $this->areaEmpleado;
  }

    /**
     * Modifica el valor correspondiente a areaEmpleado
     * @param areaEmpleado
     */
  public function setAreaEmpleado($areaEmpleado){
      $this->areaEmpleado = $areaEmpleado;
  }
    /**
     * Devuelve el valor correspondiente a cantidadHorasTrabajo
     * @return cantidadHorasTrabajo
     */
  public function getCantidadHorasTrabajo(){
      return $this->cantidadHorasTrabajo;
  }

    /**
     * Modifica el valor correspondiente a cantidadHorasTrabajo
     * @param cantidadHorasTrabajo
     */
  public function setCantidadHorasTrabajo($cantidadHorasTrabajo){
      $this->cantidadHorasTrabajo = $cantidadHorasTrabajo;
  }
    /**
     * Devuelve el valor correspondiente a fechaInicioContrato
     * @return fechaInicioContrato
     */
  public function getFechaInicioContrato(){
      return $this->fechaInicioContrato;
  }

    /**
     * Modifica el valor correspondiente a fechaInicioContrato
     * @param fechaInicioContrato
     */
  public function setFechaInicioContrato($fechaInicioContrato){
      $this->fechaInicioContrato = $fechaInicioContrato;
  }
    /**
     * Devuelve el valor correspondiente a fechaFinCotrato
     * @return fechaFinCotrato
     */
  public function getFechaFinCotrato(){
      return $this->fechaFinCotrato;
  }

    /**
     * Modifica el valor correspondiente a fechaFinCotrato
     * @param fechaFinCotrato
     */
  public function setFechaFinCotrato($fechaFinCotrato){
      $this->fechaFinCotrato = $fechaFinCotrato;
  }
    /**
     * Devuelve el valor correspondiente a valorHora
     * @return valorHora
     */
  public function getValorHora(){
      return $this->valorHora;
  }

    /**
     * Modifica el valor correspondiente a valorHora
     * @param valorHora
     */
  public function setValorHora($valorHora){
      $this->valorHora = $valorHora;
  }
    /**
     * Devuelve el valor correspondiente a persona_idpersona
     * @return persona_idpersona
     */
  public function getPersona_idpersona(){
      return $this->persona_idpersona;
  }

    /**
     * Modifica el valor correspondiente a persona_idpersona
     * @param persona_idpersona
     */
  public function setPersona_idpersona($persona_idpersona){
      $this->persona_idpersona = $persona_idpersona;
  }


}
//That`s all folks!