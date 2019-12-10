<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Por desgracia, mi epitafio será una frase insulsa y vacía  \\


class Piso {

  private $idPiso;
  private $descripcionPiso;
  private $torre_idTorre;

    /**
     * Constructor de Piso
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idPiso
     * @return idPiso
     */
  public function getIdPiso(){
      return $this->idPiso;
  }

    /**
     * Modifica el valor correspondiente a idPiso
     * @param idPiso
     */
  public function setIdPiso($idPiso){
      $this->idPiso = $idPiso;
  }
    /**
     * Devuelve el valor correspondiente a descripcionPiso
     * @return descripcionPiso
     */
  public function getDescripcionPiso(){
      return $this->descripcionPiso;
  }

    /**
     * Modifica el valor correspondiente a descripcionPiso
     * @param descripcionPiso
     */
  public function setDescripcionPiso($descripcionPiso){
      $this->descripcionPiso = $descripcionPiso;
  }
    /**
     * Devuelve el valor correspondiente a torre_idTorre
     * @return torre_idTorre
     */
  public function getTorre_idTorre(){
      return $this->torre_idTorre;
  }

    /**
     * Modifica el valor correspondiente a torre_idTorre
     * @param torre_idTorre
     */
  public function setTorre_idTorre($torre_idTorre){
      $this->torre_idTorre = $torre_idTorre;
  }


}
//That`s all folks!