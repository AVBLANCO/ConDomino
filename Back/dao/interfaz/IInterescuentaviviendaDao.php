<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Le he dedicado más tiempo a las frases que al software interno  \\


interface IInterescuentaviviendaDao {

    /**
     * Guarda un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($interescuentavivienda);
    /**
     * Modifica un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($interescuentavivienda);
    /**
     * Elimina un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($interescuentavivienda);
    /**
     * Busca un objeto Interescuentavivienda en la base de datos.
     * @param interescuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($interescuentavivienda);
    /**
     * Lista todos los objetos Interescuentavivienda en la base de datos.
     * @return Array<Interescuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!