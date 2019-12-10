<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\


class Rol {

  private $idrol;
  private $usuarioRol;
  private $passwordRol;
  private $descripcion;
  private $condominio_idCondominio;

    /**
     * Constructor de Rol
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idrol
     * @return idrol
     */
  public function getIdrol(){
      return $this->idrol;
  }

    /**
     * Modifica el valor correspondiente a idrol
     * @param idrol
     */
  public function setIdrol($idrol){
      $this->idrol = $idrol;
  }
    /**
     * Devuelve el valor correspondiente a usuarioRol
     * @return usuarioRol
     */
  public function getUsuarioRol(){
      return $this->usuarioRol;
  }

    /**
     * Modifica el valor correspondiente a usuarioRol
     * @param usuarioRol
     */
  public function setUsuarioRol($usuarioRol){
      $this->usuarioRol = $usuarioRol;
  }
    /**
     * Devuelve el valor correspondiente a passwordRol
     * @return passwordRol
     */
  public function getPasswordRol(){
      return $this->passwordRol;
  }

    /**
     * Modifica el valor correspondiente a passwordRol
     * @param passwordRol
     */
  public function setPasswordRol($passwordRol){
      $this->passwordRol = $passwordRol;
  }
    /**
     * Devuelve el valor correspondiente a descripcion
     * @return descripcion
     */
  public function getDescripcion(){
      return $this->descripcion;
  }

    /**
     * Modifica el valor correspondiente a descripcion
     * @param descripcion
     */
  public function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
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