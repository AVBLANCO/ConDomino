<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Les traigo amor  \\


class Tipousuario {

  private $idTipoUsuario;
  private $descripcionTipoUsuario;

    /**
     * Constructor de Tipousuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idTipoUsuario
     * @return idTipoUsuario
     */
  public function getIdTipoUsuario(){
      return $this->idTipoUsuario;
  }

    /**
     * Modifica el valor correspondiente a idTipoUsuario
     * @param idTipoUsuario
     */
  public function setIdTipoUsuario($idTipoUsuario){
      $this->idTipoUsuario = $idTipoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a descripcionTipoUsuario
     * @return descripcionTipoUsuario
     */
  public function getDescripcionTipoUsuario(){
      return $this->descripcionTipoUsuario;
  }

    /**
     * Modifica el valor correspondiente a descripcionTipoUsuario
     * @param descripcionTipoUsuario
     */
  public function setDescripcionTipoUsuario($descripcionTipoUsuario){
      $this->descripcionTipoUsuario = $descripcionTipoUsuario;
  }


}
//That`s all folks!