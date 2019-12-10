<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La segunda regla de Anarchy es no hablar de Anarchy  \\


interface IEmpleado_has_detallefacturaDao {

    /**
     * Guarda un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empleado_has_detallefactura);
    /**
     * Modifica un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empleado_has_detallefactura);
    /**
     * Elimina un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empleado_has_detallefactura);
    /**
     * Busca un objeto Empleado_has_detallefactura en la base de datos.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empleado_has_detallefactura);
    /**
     * Lista todos los objetos Empleado_has_detallefactura en la base de datos.
     * @return Array<Empleado_has_detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Empleado_has_detallefactura en la base de datos que coincidan con la llave primaria.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Empleado_has_detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEmpleado_idempleado($empleado_has_detallefactura);
    /**
     * Lista todos los objetos Empleado_has_detallefactura en la base de datos que coincidan con la llave primaria.
     * @param empleado_has_detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Empleado_has_detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByDetalleFactura_iddetalleFactura($empleado_has_detallefactura);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!