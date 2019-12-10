<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Únicamente cuando se pierde todo somos libres para actuar.  \\


interface IBodega_has_productoDao {

    /**
     * Guarda un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($bodega_has_producto);
    /**
     * Modifica un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($bodega_has_producto);
    /**
     * Elimina un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($bodega_has_producto);
    /**
     * Busca un objeto Bodega_has_producto en la base de datos.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($bodega_has_producto);
    /**
     * Lista todos los objetos Bodega_has_producto en la base de datos.
     * @return Array<Bodega_has_producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Bodega_has_producto en la base de datos que coincidan con la llave primaria.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Bodega_has_producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByBodega_idBodega($bodega_has_producto);
    /**
     * Lista todos los objetos Bodega_has_producto en la base de datos que coincidan con la llave primaria.
     * @param bodega_has_producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Bodega_has_producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByProducto_idProducto($bodega_has_producto);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!