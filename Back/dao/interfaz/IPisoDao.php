<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\


interface IPisoDao {

    /**
     * Guarda un objeto Piso en la base de datos.
     * @param piso objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($piso);
    /**
     * Modifica un objeto Piso en la base de datos.
     * @param piso objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($piso);
    /**
     * Elimina un objeto Piso en la base de datos.
     * @param piso objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($piso);
    /**
     * Busca un objeto Piso en la base de datos.
     * @param piso objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($piso);
    /**
     * Lista todos los objetos Piso en la base de datos.
     * @return Array<Piso> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!