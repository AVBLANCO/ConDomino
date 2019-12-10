<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuenta la leyenda que si gritas 'Soy programador' las nenas caerán a tus pies  \\


class Torre {

  private $idTorre;
  private $descripcionTorre;
  private $condominio_idCondominio;

    /**
     * Constructor de Torre
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idTorre
     * @return idTorre
     */
  public function getIdTorre(){
      return $this->idTorre;
  }

    /**
     * Modifica el valor correspondiente a idTorre
     * @param idTorre
     */
  public function setIdTorre($idTorre){
      $this->idTorre = $idTorre;
  }
    /**
     * Devuelve el valor correspondiente a descripcionTorre
     * @return descripcionTorre
     */
  public function getDescripcionTorre(){
      return $this->descripcionTorre;
  }

    /**
     * Modifica el valor correspondiente a descripcionTorre
     * @param descripcionTorre
     */
  public function setDescripcionTorre($descripcionTorre){
      $this->descripcionTorre = $descripcionTorre;
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