<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\


class Bodega_has_producto {

  private $bodega_idBodega;
  private $producto_idProducto;

    /**
     * Constructor de Bodega_has_producto
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a bodega_idBodega
     * @return bodega_idBodega
     */
  public function getBodega_idBodega(){
      return $this->bodega_idBodega;
  }

    /**
     * Modifica el valor correspondiente a bodega_idBodega
     * @param bodega_idBodega
     */
  public function setBodega_idBodega($bodega_idBodega){
      $this->bodega_idBodega = $bodega_idBodega;
  }
    /**
     * Devuelve el valor correspondiente a producto_idProducto
     * @return producto_idProducto
     */
  public function getProducto_idProducto(){
      return $this->producto_idProducto;
  }

    /**
     * Modifica el valor correspondiente a producto_idProducto
     * @param producto_idProducto
     */
  public function setProducto_idProducto($producto_idProducto){
      $this->producto_idProducto = $producto_idProducto;
  }


}
//That`s all folks!