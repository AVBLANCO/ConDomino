<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Les traigo amor  \\


class Persona {

  private $idpersona;
  private $nombrePersonal;
  private $nacionalidadPersona;
  private $fechaNacimientoPersona;
  private $telefonoPersona;
  private $correoPersona;

    /**
     * Constructor de Persona
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idpersona
     * @return idpersona
     */
  public function getIdpersona(){
      return $this->idpersona;
  }

    /**
     * Modifica el valor correspondiente a idpersona
     * @param idpersona
     */
  public function setIdpersona($idpersona){
      $this->idpersona = $idpersona;
  }
    /**
     * Devuelve el valor correspondiente a nombrePersonal
     * @return nombrePersonal
     */
  public function getNombrePersonal(){
      return $this->nombrePersonal;
  }

    /**
     * Modifica el valor correspondiente a nombrePersonal
     * @param nombrePersonal
     */
  public function setNombrePersonal($nombrePersonal){
      $this->nombrePersonal = $nombrePersonal;
  }
    /**
     * Devuelve el valor correspondiente a nacionalidadPersona
     * @return nacionalidadPersona
     */
  public function getNacionalidadPersona(){
      return $this->nacionalidadPersona;
  }

    /**
     * Modifica el valor correspondiente a nacionalidadPersona
     * @param nacionalidadPersona
     */
  public function setNacionalidadPersona($nacionalidadPersona){
      $this->nacionalidadPersona = $nacionalidadPersona;
  }
    /**
     * Devuelve el valor correspondiente a fechaNacimientoPersona
     * @return fechaNacimientoPersona
     */
  public function getFechaNacimientoPersona(){
      return $this->fechaNacimientoPersona;
  }

    /**
     * Modifica el valor correspondiente a fechaNacimientoPersona
     * @param fechaNacimientoPersona
     */
  public function setFechaNacimientoPersona($fechaNacimientoPersona){
      $this->fechaNacimientoPersona = $fechaNacimientoPersona;
  }
    /**
     * Devuelve el valor correspondiente a telefonoPersona
     * @return telefonoPersona
     */
  public function getTelefonoPersona(){
      return $this->telefonoPersona;
  }

    /**
     * Modifica el valor correspondiente a telefonoPersona
     * @param telefonoPersona
     */
  public function setTelefonoPersona($telefonoPersona){
      $this->telefonoPersona = $telefonoPersona;
  }
    /**
     * Devuelve el valor correspondiente a correoPersona
     * @return correoPersona
     */
  public function getCorreoPersona(){
      return $this->correoPersona;
  }

    /**
     * Modifica el valor correspondiente a correoPersona
     * @param correoPersona
     */
  public function setCorreoPersona($correoPersona){
      $this->correoPersona = $correoPersona;
  }


}
//That`s all folks!