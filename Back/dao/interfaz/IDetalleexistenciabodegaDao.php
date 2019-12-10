<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\


interface IDetalleexistenciabodegaDao {

    /**
     * Guarda un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($detalleexistenciabodega);
    /**
     * Modifica un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($detalleexistenciabodega);
    /**
     * Elimina un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($detalleexistenciabodega);
    /**
     * Busca un objeto Detalleexistenciabodega en la base de datos.
     * @param detalleexistenciabodega objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($detalleexistenciabodega);
    /**
     * Lista todos los objetos Detalleexistenciabodega en la base de datos.
     * @return Array<Detalleexistenciabodega> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!