<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\


interface IEmpleadoDao {

    /**
     * Guarda un objeto Empleado en la base de datos.
     * @param empleado objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empleado);
    /**
     * Modifica un objeto Empleado en la base de datos.
     * @param empleado objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empleado);
    /**
     * Elimina un objeto Empleado en la base de datos.
     * @param empleado objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empleado);
    /**
     * Busca un objeto Empleado en la base de datos.
     * @param empleado objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empleado);
    /**
     * Lista todos los objetos Empleado en la base de datos.
     * @return Array<Empleado> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!