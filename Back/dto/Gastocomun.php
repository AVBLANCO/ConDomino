<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La noche está estrellada, y tiritan, azules, los astros, a lo lejos  \\


class Gastocomun {

  private $idGastoComun;
  private $observacionGasto;
  private $costoTotalGasto;
  private $calendario_idCalendario;
  private $fechaInicioCancelacionGastoComun;
  private $fechaFinCancelacionGastoComun;
  private $estadoGastoComun;
  private $fechaCreacionGastoComun;
  private $condominio_idCondominio;

    /**
     * Constructor de Gastocomun
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idGastoComun
     * @return idGastoComun
     */
  public function getIdGastoComun(){
      return $this->idGastoComun;
  }

    /**
     * Modifica el valor correspondiente a idGastoComun
     * @param idGastoComun
     */
  public function setIdGastoComun($idGastoComun){
      $this->idGastoComun = $idGastoComun;
  }
    /**
     * Devuelve el valor correspondiente a observacionGasto
     * @return observacionGasto
     */
  public function getObservacionGasto(){
      return $this->observacionGasto;
  }

    /**
     * Modifica el valor correspondiente a observacionGasto
     * @param observacionGasto
     */
  public function setObservacionGasto($observacionGasto){
      $this->observacionGasto = $observacionGasto;
  }
    /**
     * Devuelve el valor correspondiente a costoTotalGasto
     * @return costoTotalGasto
     */
  public function getCostoTotalGasto(){
      return $this->costoTotalGasto;
  }

    /**
     * Modifica el valor correspondiente a costoTotalGasto
     * @param costoTotalGasto
     */
  public function setCostoTotalGasto($costoTotalGasto){
      $this->costoTotalGasto = $costoTotalGasto;
  }
    /**
     * Devuelve el valor correspondiente a calendario_idCalendario
     * @return calendario_idCalendario
     */
  public function getCalendario_idCalendario(){
      return $this->calendario_idCalendario;
  }

    /**
     * Modifica el valor correspondiente a calendario_idCalendario
     * @param calendario_idCalendario
     */
  public function setCalendario_idCalendario($calendario_idCalendario){
      $this->calendario_idCalendario = $calendario_idCalendario;
  }
    /**
     * Devuelve el valor correspondiente a fechaInicioCancelacionGastoComun
     * @return fechaInicioCancelacionGastoComun
     */
  public function getFechaInicioCancelacionGastoComun(){
      return $this->fechaInicioCancelacionGastoComun;
  }

    /**
     * Modifica el valor correspondiente a fechaInicioCancelacionGastoComun
     * @param fechaInicioCancelacionGastoComun
     */
  public function setFechaInicioCancelacionGastoComun($fechaInicioCancelacionGastoComun){
      $this->fechaInicioCancelacionGastoComun = $fechaInicioCancelacionGastoComun;
  }
    /**
     * Devuelve el valor correspondiente a fechaFinCancelacionGastoComun
     * @return fechaFinCancelacionGastoComun
     */
  public function getFechaFinCancelacionGastoComun(){
      return $this->fechaFinCancelacionGastoComun;
  }

    /**
     * Modifica el valor correspondiente a fechaFinCancelacionGastoComun
     * @param fechaFinCancelacionGastoComun
     */
  public function setFechaFinCancelacionGastoComun($fechaFinCancelacionGastoComun){
      $this->fechaFinCancelacionGastoComun = $fechaFinCancelacionGastoComun;
  }
    /**
     * Devuelve el valor correspondiente a estadoGastoComun
     * @return estadoGastoComun
     */
  public function getEstadoGastoComun(){
      return $this->estadoGastoComun;
  }

    /**
     * Modifica el valor correspondiente a estadoGastoComun
     * @param estadoGastoComun
     */
  public function setEstadoGastoComun($estadoGastoComun){
      $this->estadoGastoComun = $estadoGastoComun;
  }
    /**
     * Devuelve el valor correspondiente a fechaCreacionGastoComun
     * @return fechaCreacionGastoComun
     */
  public function getFechaCreacionGastoComun(){
      return $this->fechaCreacionGastoComun;
  }

    /**
     * Modifica el valor correspondiente a fechaCreacionGastoComun
     * @param fechaCreacionGastoComun
     */
  public function setFechaCreacionGastoComun($fechaCreacionGastoComun){
      $this->fechaCreacionGastoComun = $fechaCreacionGastoComun;
  }
    /**
     * Devuelve el valor correspondiente a condominio_idCondominio
     * @return condominio_idCondominio
     */
  public function getCondominio_idCondominio(){
      return $this->condominio_idCondominio;
  }

    /**
     * Modifica el valor correspondiente a condominio_idCondominio
     * @param condominio_idCondominio
     */
  public function setCondominio_idCondominio($condominio_idCondominio){
      $this->condominio_idCondominio = $condominio_idCondominio;
  }


}
//That`s all folks!