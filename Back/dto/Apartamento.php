<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\


class Apartamento {

  private $idApartamento;
  private $descripcionApartamento;
  private $piso_idPiso;

    /**
     * Constructor de Apartamento
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idApartamento
     * @return idApartamento
     */
  public function getIdApartamento(){
      return $this->idApartamento;
  }

    /**
     * Modifica el valor correspondiente a idApartamento
     * @param idApartamento
     */
  public function setIdApartamento($idApartamento){
      $this->idApartamento = $idApartamento;
  }
    /**
     * Devuelve el valor correspondiente a descripcionApartamento
     * @return descripcionApartamento
     */
  public function getDescripcionApartamento(){
      return $this->descripcionApartamento;
  }

    /**
     * Modifica el valor correspondiente a descripcionApartamento
     * @param descripcionApartamento
     */
  public function setDescripcionApartamento($descripcionApartamento){
      $this->descripcionApartamento = $descripcionApartamento;
  }
    /**
     * Devuelve el valor correspondiente a piso_idPiso
     * @return piso_idPiso
     */
  public function getPiso_idPiso(){
      return $this->piso_idPiso;
  }

    /**
     * Modifica el valor correspondiente a piso_idPiso
     * @param piso_idPiso
     */
  public function setPiso_idPiso($piso_idPiso){
      $this->piso_idPiso = $piso_idPiso;
  }


}
//That`s all folks!