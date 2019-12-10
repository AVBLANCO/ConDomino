<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La segunda regla de Anarchy es no hablar de Anarchy  \\


class Empleado_has_areacomun {

  private $empleado_idempleado;
  private $areaComun_idAreaComun;

    /**
     * Constructor de Empleado_has_areacomun
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a empleado_idempleado
     * @return empleado_idempleado
     */
  public function getEmpleado_idempleado(){
      return $this->empleado_idempleado;
  }

    /**
     * Modifica el valor correspondiente a empleado_idempleado
     * @param empleado_idempleado
     */
  public function setEmpleado_idempleado($empleado_idempleado){
      $this->empleado_idempleado = $empleado_idempleado;
  }
    /**
     * Devuelve el valor correspondiente a areaComun_idAreaComun
     * @return areaComun_idAreaComun
     */
  public function getAreaComun_idAreaComun(){
      return $this->areaComun_idAreaComun;
  }

    /**
     * Modifica el valor correspondiente a areaComun_idAreaComun
     * @param areaComun_idAreaComun
     */
  public function setAreaComun_idAreaComun($areaComun_idAreaComun){
      $this->areaComun_idAreaComun = $areaComun_idAreaComun;
  }


}
//That`s all folks!