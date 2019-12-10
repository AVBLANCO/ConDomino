<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\


class Producto {

  private $idProducto;
  private $nombreProducto;
  private $precioProducto;
  private $descripcionProducto;
  private $fechaCompraPoducto;

    /**
     * Constructor de Producto
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idProducto
     * @return idProducto
     */
  public function getIdProducto(){
      return $this->idProducto;
  }

    /**
     * Modifica el valor correspondiente a idProducto
     * @param idProducto
     */
  public function setIdProducto($idProducto){
      $this->idProducto = $idProducto;
  }
    /**
     * Devuelve el valor correspondiente a nombreProducto
     * @return nombreProducto
     */
  public function getNombreProducto(){
      return $this->nombreProducto;
  }

    /**
     * Modifica el valor correspondiente a nombreProducto
     * @param nombreProducto
     */
  public function setNombreProducto($nombreProducto){
      $this->nombreProducto = $nombreProducto;
  }
    /**
     * Devuelve el valor correspondiente a precioProducto
     * @return precioProducto
     */
  public function getPrecioProducto(){
      return $this->precioProducto;
  }

    /**
     * Modifica el valor correspondiente a precioProducto
     * @param precioProducto
     */
  public function setPrecioProducto($precioProducto){
      $this->precioProducto = $precioProducto;
  }
    /**
     * Devuelve el valor correspondiente a descripcionProducto
     * @return descripcionProducto
     */
  public function getDescripcionProducto(){
      return $this->descripcionProducto;
  }

    /**
     * Modifica el valor correspondiente a descripcionProducto
     * @param descripcionProducto
     */
  public function setDescripcionProducto($descripcionProducto){
      $this->descripcionProducto = $descripcionProducto;
  }
    /**
     * Devuelve el valor correspondiente a fechaCompraPoducto
     * @return fechaCompraPoducto
     */
  public function getFechaCompraPoducto(){
      return $this->fechaCompraPoducto;
  }

    /**
     * Modifica el valor correspondiente a fechaCompraPoducto
     * @param fechaCompraPoducto
     */
  public function setFechaCompraPoducto($fechaCompraPoducto){
      $this->fechaCompraPoducto = $fechaCompraPoducto;
  }


}
//That`s all folks!