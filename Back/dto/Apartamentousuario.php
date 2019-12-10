<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\


class Apartamentousuario {

  private $apartamento_idApartamento;
  private $usuario_idUsuario;
  private $observacionesApartamentoUsuario;
  private $creacionApartamentoUsuario;

    /**
     * Constructor de Apartamentousuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a apartamento_idApartamento
     * @return apartamento_idApartamento
     */
  public function getApartamento_idApartamento(){
      return $this->apartamento_idApartamento;
  }

    /**
     * Modifica el valor correspondiente a apartamento_idApartamento
     * @param apartamento_idApartamento
     */
  public function setApartamento_idApartamento($apartamento_idApartamento){
      $this->apartamento_idApartamento = $apartamento_idApartamento;
  }
    /**
     * Devuelve el valor correspondiente a usuario_idUsuario
     * @return usuario_idUsuario
     */
  public function getUsuario_idUsuario(){
      return $this->usuario_idUsuario;
  }

    /**
     * Modifica el valor correspondiente a usuario_idUsuario
     * @param usuario_idUsuario
     */
  public function setUsuario_idUsuario($usuario_idUsuario){
      $this->usuario_idUsuario = $usuario_idUsuario;
  }
    /**
     * Devuelve el valor correspondiente a observacionesApartamentoUsuario
     * @return observacionesApartamentoUsuario
     */
  public function getObservacionesApartamentoUsuario(){
      return $this->observacionesApartamentoUsuario;
  }

    /**
     * Modifica el valor correspondiente a observacionesApartamentoUsuario
     * @param observacionesApartamentoUsuario
     */
  public function setObservacionesApartamentoUsuario($observacionesApartamentoUsuario){
      $this->observacionesApartamentoUsuario = $observacionesApartamentoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a creacionApartamentoUsuario
     * @return creacionApartamentoUsuario
     */
  public function getCreacionApartamentoUsuario(){
      return $this->creacionApartamentoUsuario;
  }

    /**
     * Modifica el valor correspondiente a creacionApartamentoUsuario
     * @param creacionApartamentoUsuario
     */
  public function setCreacionApartamentoUsuario($creacionApartamentoUsuario){
      $this->creacionApartamentoUsuario = $creacionApartamentoUsuario;
  }


}
//That`s all folks!