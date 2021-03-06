<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Únicamente cuando se pierde todo somos libres para actuar.  \\


interface ITipousuarioDao {

    /**
     * Guarda un objeto Tipousuario en la base de datos.
     * @param tipousuario objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipousuario);
    /**
     * Modifica un objeto Tipousuario en la base de datos.
     * @param tipousuario objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipousuario);
    /**
     * Elimina un objeto Tipousuario en la base de datos.
     * @param tipousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipousuario);
    /**
     * Busca un objeto Tipousuario en la base de datos.
     * @param tipousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipousuario);
    /**
     * Lista todos los objetos Tipousuario en la base de datos.
     * @return Array<Tipousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!