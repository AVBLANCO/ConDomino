<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\


interface IGestiondocumentalDao {

    /**
     * Guarda un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($gestiondocumental);
    /**
     * Modifica un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($gestiondocumental);
    /**
     * Elimina un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($gestiondocumental);
    /**
     * Busca un objeto Gestiondocumental en la base de datos.
     * @param gestiondocumental objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($gestiondocumental);
    /**
     * Lista todos los objetos Gestiondocumental en la base de datos.
     * @return Array<Gestiondocumental> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!