<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\


class Proveedor {

  private $idProveedor;
  private $rutProveedor;
  private $formaDePagoProveedor;
  private $telefonoProveedor;
  private $correoProveedor;
  private $direccionProveedor;
  private $fechaCreacionProveedor;
  private $producto_idProducto;

    /**
     * Constructor de Proveedor
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idProveedor
     * @return idProveedor
     */
  public function getIdProveedor(){
      return $this->idProveedor;
  }

    /**
     * Modifica el valor correspondiente a idProveedor
     * @param idProveedor
     */
  public function setIdProveedor($idProveedor){
      $this->idProveedor = $idProveedor;
  }
    /**
     * Devuelve el valor correspondiente a rutProveedor
     * @return rutProveedor
     */
  public function getRutProveedor(){
      return $this->rutProveedor;
  }

    /**
     * Modifica el valor correspondiente a rutProveedor
     * @param rutProveedor
     */
  public function setRutProveedor($rutProveedor){
      $this->rutProveedor = $rutProveedor;
  }
    /**
     * Devuelve el valor correspondiente a formaDePagoProveedor
     * @return formaDePagoProveedor
     */
  public function getFormaDePagoProveedor(){
      return $this->formaDePagoProveedor;
  }

    /**
     * Modifica el valor correspondiente a formaDePagoProveedor
     * @param formaDePagoProveedor
     */
  public function setFormaDePagoProveedor($formaDePagoProveedor){
      $this->formaDePagoProveedor = $formaDePagoProveedor;
  }
    /**
     * Devuelve el valor correspondiente a telefonoProveedor
     * @return telefonoProveedor
     */
  public function getTelefonoProveedor(){
      return $this->telefonoProveedor;
  }

    /**
     * Modifica el valor correspondiente a telefonoProveedor
     * @param telefonoProveedor
     */
  public function setTelefonoProveedor($telefonoProveedor){
      $this->telefonoProveedor = $telefonoProveedor;
  }
    /**
     * Devuelve el valor correspondiente a correoProveedor
     * @return correoProveedor
     */
  public function getCorreoProveedor(){
      return $this->correoProveedor;
  }

    /**
     * Modifica el valor correspondiente a correoProveedor
     * @param correoProveedor
     */
  public function setCorreoProveedor($correoProveedor){
      $this->correoProveedor = $correoProveedor;
  }
    /**
     * Devuelve el valor correspondiente a direccionProveedor
     * @return direccionProveedor
     */
  public function getDireccionProveedor(){
      return $this->direccionProveedor;
  }

    /**
     * Modifica el valor correspondiente a direccionProveedor
     * @param direccionProveedor
     */
  public function setDireccionProveedor($direccionProveedor){
      $this->direccionProveedor = $direccionProveedor;
  }
    /**
     * Devuelve el valor correspondiente a fechaCreacionProveedor
     * @return fechaCreacionProveedor
     */
  public function getFechaCreacionProveedor(){
      return $this->fechaCreacionProveedor;
  }

    /**
     * Modifica el valor correspondiente a fechaCreacionProveedor
     * @param fechaCreacionProveedor
     */
  public function setFechaCreacionProveedor($fechaCreacionProveedor){
      $this->fechaCreacionProveedor = $fechaCreacionProveedor;
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