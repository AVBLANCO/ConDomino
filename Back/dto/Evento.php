<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\


class Evento {

  private $idevento;
  private $descripcionEvento;
  private $fechaEvento;

    /**
     * Constructor de Evento
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idevento
     * @return idevento
     */
  public function getIdevento(){
      return $this->idevento;
  }

    /**
     * Modifica el valor correspondiente a idevento
     * @param idevento
     */
  public function setIdevento($idevento){
      $this->idevento = $idevento;
  }
    /**
     * Devuelve el valor correspondiente a descripcionEvento
     * @return descripcionEvento
     */
  public function getDescripcionEvento(){
      return $this->descripcionEvento;
  }

    /**
     * Modifica el valor correspondiente a descripcionEvento
     * @param descripcionEvento
     */
  public function setDescripcionEvento($descripcionEvento){
      $this->descripcionEvento = $descripcionEvento;
  }
    /**
     * Devuelve el valor correspondiente a fechaEvento
     * @return fechaEvento
     */
  public function getFechaEvento(){
      return $this->fechaEvento;
  }

    /**
     * Modifica el valor correspondiente a fechaEvento
     * @param fechaEvento
     */
  public function setFechaEvento($fechaEvento){
      $this->fechaEvento = $fechaEvento;
  }


}
//That`s all folks!