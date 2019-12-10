<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La gente siempre me pregunta si conozco a Tyler Durden.  \\


class Eventopersona {

  private $evento_idevento;
  private $persona_idpersona;
  private $condominio_idCondominio;

    /**
     * Constructor de Eventopersona
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a evento_idevento
     * @return evento_idevento
     */
  public function getEvento_idevento(){
      return $this->evento_idevento;
  }

    /**
     * Modifica el valor correspondiente a evento_idevento
     * @param evento_idevento
     */
  public function setEvento_idevento($evento_idevento){
      $this->evento_idevento = $evento_idevento;
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