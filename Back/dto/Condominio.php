<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\


class Condominio {

  private $idCondominio;
  private $nombreCondominio;
  private $direccionCondominio;
  private $telefonoCondominio;
  private $rutCondominio;

    /**
     * Constructor de Condominio
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCondominio
     * @return idCondominio
     */
  public function getIdCondominio(){
      return $this->idCondominio;
  }

    /**
     * Modifica el valor correspondiente a idCondominio
     * @param idCondominio
     */
  public function setIdCondominio($idCondominio){
      $this->idCondominio = $idCondominio;
  }
    /**
     * Devuelve el valor correspondiente a nombreCondominio
     * @return nombreCondominio
     */
  public function getNombreCondominio(){
      return $this->nombreCondominio;
  }

    /**
     * Modifica el valor correspondiente a nombreCondominio
     * @param nombreCondominio
     */
  public function setNombreCondominio($nombreCondominio){
      $this->nombreCondominio = $nombreCondominio;
  }
    /**
     * Devuelve el valor correspondiente a direccionCondominio
     * @return direccionCondominio
     */
  public function getDireccionCondominio(){
      return $this->direccionCondominio;
  }

    /**
     * Modifica el valor correspondiente a direccionCondominio
     * @param direccionCondominio
     */
  public function setDireccionCondominio($direccionCondominio){
      $this->direccionCondominio = $direccionCondominio;
  }
    /**
     * Devuelve el valor correspondiente a telefonoCondominio
     * @return telefonoCondominio
     */
  public function getTelefonoCondominio(){
      return $this->telefonoCondominio;
  }

    /**
     * Modifica el valor correspondiente a telefonoCondominio
     * @param telefonoCondominio
     */
  public function setTelefonoCondominio($telefonoCondominio){
      $this->telefonoCondominio = $telefonoCondominio;
  }
    /**
     * Devuelve el valor correspondiente a rutCondominio
     * @return rutCondominio
     */
  public function getRutCondominio(){
      return $this->rutCondominio;
  }

    /**
     * Modifica el valor correspondiente a rutCondominio
     * @param rutCondominio
     */
  public function setRutCondominio($rutCondominio){
      $this->rutCondominio = $rutCondominio;
  }


}
//That`s all folks!