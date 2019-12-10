<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\


interface IBodegaDao {

    /**
     * Guarda un objeto Bodega en la base de datos.
     * @param bodega objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($bodega);
    /**
     * Modifica un objeto Bodega en la base de datos.
     * @param bodega objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($bodega);
    /**
     * Elimina un objeto Bodega en la base de datos.
     * @param bodega objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($bodega);
    /**
     * Busca un objeto Bodega en la base de datos.
     * @param bodega objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($bodega);
    /**
     * Lista todos los objetos Bodega en la base de datos.
     * @return Array<Bodega> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!