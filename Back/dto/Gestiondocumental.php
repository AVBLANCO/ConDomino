<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\


class Gestiondocumental {

  private $idGestionDocumental;
  private $descripcionGestionDoc;

    /**
     * Constructor de Gestiondocumental
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idGestionDocumental
     * @return idGestionDocumental
     */
  public function getIdGestionDocumental(){
      return $this->idGestionDocumental;
  }

    /**
     * Modifica el valor correspondiente a idGestionDocumental
     * @param idGestionDocumental
     */
  public function setIdGestionDocumental($idGestionDocumental){
      $this->idGestionDocumental = $idGestionDocumental;
  }
    /**
     * Devuelve el valor correspondiente a descripcionGestionDoc
     * @return descripcionGestionDoc
     */
  public function getDescripcionGestionDoc(){
      return $this->descripcionGestionDoc;
  }

    /**
     * Modifica el valor correspondiente a descripcionGestionDoc
     * @param descripcionGestionDoc
     */
  public function setDescripcionGestionDoc($descripcionGestionDoc){
      $this->descripcionGestionDoc = $descripcionGestionDoc;
  }


}
//That`s all folks!