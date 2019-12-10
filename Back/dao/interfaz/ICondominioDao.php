<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\


interface ICondominioDao {

    /**
     * Guarda un objeto Condominio en la base de datos.
     * @param condominio objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($condominio);
    /**
     * Modifica un objeto Condominio en la base de datos.
     * @param condominio objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($condominio);
    /**
     * Elimina un objeto Condominio en la base de datos.
     * @param condominio objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($condominio);
    /**
     * Busca un objeto Condominio en la base de datos.
     * @param condominio objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($condominio);
    /**
     * Lista todos los objetos Condominio en la base de datos.
     * @return Array<Condominio> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!