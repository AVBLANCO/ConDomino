<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\


class Usuario {

  private $idUsuario;
  private $persona_idpersona;
  private $estadoUsuario;
  private $passwordUsuario;
  private $tipoUsuario_idTipoUsuario;
  private $condominio_idCondominio;

    /**
     * Constructor de Usuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idUsuario
     * @return idUsuario
     */
  public function getIdUsuario(){
      return $this->idUsuario;
  }

    /**
     * Modifica el valor correspondiente a idUsuario
     * @param idUsuario
     */
  public function setIdUsuario($idUsuario){
      $this->idUsuario = $idUsuario;
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
    /**
     * Devuelve el valor correspondiente a estadoUsuario
     * @return estadoUsuario
     */
  public function getEstadoUsuario(){
      return $this->estadoUsuario;
  }

    /**
     * Modifica el valor correspondiente a estadoUsuario
     * @param estadoUsuario
     */
  public function setEstadoUsuario($estadoUsuario){
      $this->estadoUsuario = $estadoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a passwordUsuario
     * @return passwordUsuario
     */
  public function getPasswordUsuario(){
      return $this->passwordUsuario;
  }

    /**
     * Modifica el valor correspondiente a passwordUsuario
     * @param passwordUsuario
     */
  public function setPasswordUsuario($passwordUsuario){
      $this->passwordUsuario = $passwordUsuario;
  }
    /**
     * Devuelve el valor correspondiente a tipoUsuario_idTipoUsuario
     * @return tipoUsuario_idTipoUsuario
     */
  public function getTipoUsuario_idTipoUsuario(){
      return $this->tipoUsuario_idTipoUsuario;
  }

    /**
     * Modifica el valor correspondiente a tipoUsuario_idTipoUsuario
     * @param tipoUsuario_idTipoUsuario
     */
  public function setTipoUsuario_idTipoUsuario($tipoUsuario_idTipoUsuario){
      $this->tipoUsuario_idTipoUsuario = $tipoUsuario_idTipoUsuario;
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