<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\


class Calendario {

  private $idCalendario;
  private $mesCalendario;
  private $anioCalendario;
  private $diaCalendario;

    /**
     * Constructor de Calendario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCalendario
     * @return idCalendario
     */
  public function getIdCalendario(){
      return $this->idCalendario;
  }

    /**
     * Modifica el valor correspondiente a idCalendario
     * @param idCalendario
     */
  public function setIdCalendario($idCalendario){
      $this->idCalendario = $idCalendario;
  }
    /**
     * Devuelve el valor correspondiente a mesCalendario
     * @return mesCalendario
     */
  public function getMesCalendario(){
      return $this->mesCalendario;
  }

    /**
     * Modifica el valor correspondiente a mesCalendario
     * @param mesCalendario
     */
  public function setMesCalendario($mesCalendario){
      $this->mesCalendario = $mesCalendario;
  }
    /**
     * Devuelve el valor correspondiente a anioCalendario
     * @return anioCalendario
     */
  public function getAnioCalendario(){
      return $this->anioCalendario;
  }

    /**
     * Modifica el valor correspondiente a anioCalendario
     * @param anioCalendario
     */
  public function setAnioCalendario($anioCalendario){
      $this->anioCalendario = $anioCalendario;
  }
    /**
     * Devuelve el valor correspondiente a diaCalendario
     * @return diaCalendario
     */
  public function getDiaCalendario(){
      return $this->diaCalendario;
  }

    /**
     * Modifica el valor correspondiente a diaCalendario
     * @param diaCalendario
     */
  public function setDiaCalendario($diaCalendario){
      $this->diaCalendario = $diaCalendario;
  }


}
//That`s all folks!