<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\


class Areacomun {

  private $idAreaComun;
  private $detalleAreaComun;
  private $costoAreaComun;
  private $condominio_idCondominio;
  private $estadoAreaComun;

    /**
     * Constructor de Areacomun
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idAreaComun
     * @return idAreaComun
     */
  public function getIdAreaComun(){
      return $this->idAreaComun;
  }

    /**
     * Modifica el valor correspondiente a idAreaComun
     * @param idAreaComun
     */
  public function setIdAreaComun($idAreaComun){
      $this->idAreaComun = $idAreaComun;
  }
    /**
     * Devuelve el valor correspondiente a detalleAreaComun
     * @return detalleAreaComun
     */
  public function getDetalleAreaComun(){
      return $this->detalleAreaComun;
  }

    /**
     * Modifica el valor correspondiente a detalleAreaComun
     * @param detalleAreaComun
     */
  public function setDetalleAreaComun($detalleAreaComun){
      $this->detalleAreaComun = $detalleAreaComun;
  }
    /**
     * Devuelve el valor correspondiente a costoAreaComun
     * @return costoAreaComun
     */
  public function getCostoAreaComun(){
      return $this->costoAreaComun;
  }

    /**
     * Modifica el valor correspondiente a costoAreaComun
     * @param costoAreaComun
     */
  public function setCostoAreaComun($costoAreaComun){
      $this->costoAreaComun = $costoAreaComun;
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
    /**
     * Devuelve el valor correspondiente a estadoAreaComun
     * @return estadoAreaComun
     */
  public function getEstadoAreaComun(){
      return $this->estadoAreaComun;
  }

    /**
     * Modifica el valor correspondiente a estadoAreaComun
     * @param estadoAreaComun
     */
  public function setEstadoAreaComun($estadoAreaComun){
      $this->estadoAreaComun = $estadoAreaComun;
  }


}
//That`s all folks!