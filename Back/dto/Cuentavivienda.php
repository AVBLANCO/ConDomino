<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No quiero morir sin tener cicatrices.  \\


class Cuentavivienda {

  private $idCuentaVivienda;
  private $descripcionCuentaVivienda;
  private $saldoCuentaVivienda;
  private $fechaCreacionCuentaVivienda;
  private $fechaActualizacionCuentaVivienda;
  private $apartamento_idApartamento;

    /**
     * Constructor de Cuentavivienda
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCuentaVivienda
     * @return idCuentaVivienda
     */
  public function getIdCuentaVivienda(){
      return $this->idCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a idCuentaVivienda
     * @param idCuentaVivienda
     */
  public function setIdCuentaVivienda($idCuentaVivienda){
      $this->idCuentaVivienda = $idCuentaVivienda;
  }
    /**
     * Devuelve el valor correspondiente a descripcionCuentaVivienda
     * @return descripcionCuentaVivienda
     */
  public function getDescripcionCuentaVivienda(){
      return $this->descripcionCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a descripcionCuentaVivienda
     * @param descripcionCuentaVivienda
     */
  public function setDescripcionCuentaVivienda($descripcionCuentaVivienda){
      $this->descripcionCuentaVivienda = $descripcionCuentaVivienda;
  }
    /**
     * Devuelve el valor correspondiente a saldoCuentaVivienda
     * @return saldoCuentaVivienda
     */
  public function getSaldoCuentaVivienda(){
      return $this->saldoCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a saldoCuentaVivienda
     * @param saldoCuentaVivienda
     */
  public function setSaldoCuentaVivienda($saldoCuentaVivienda){
      $this->saldoCuentaVivienda = $saldoCuentaVivienda;
  }
    /**
     * Devuelve el valor correspondiente a fechaCreacionCuentaVivienda
     * @return fechaCreacionCuentaVivienda
     */
  public function getFechaCreacionCuentaVivienda(){
      return $this->fechaCreacionCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a fechaCreacionCuentaVivienda
     * @param fechaCreacionCuentaVivienda
     */
  public function setFechaCreacionCuentaVivienda($fechaCreacionCuentaVivienda){
      $this->fechaCreacionCuentaVivienda = $fechaCreacionCuentaVivienda;
  }
    /**
     * Devuelve el valor correspondiente a fechaActualizacionCuentaVivienda
     * @return fechaActualizacionCuentaVivienda
     */
  public function getFechaActualizacionCuentaVivienda(){
      return $this->fechaActualizacionCuentaVivienda;
  }

    /**
     * Modifica el valor correspondiente a fechaActualizacionCuentaVivienda
     * @param fechaActualizacionCuentaVivienda
     */
  public function setFechaActualizacionCuentaVivienda($fechaActualizacionCuentaVivienda){
      $this->fechaActualizacionCuentaVivienda = $fechaActualizacionCuentaVivienda;
  }
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


}
//That`s all folks!