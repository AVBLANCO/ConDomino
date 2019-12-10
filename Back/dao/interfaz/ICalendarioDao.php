<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\


interface ICalendarioDao {

    /**
     * Guarda un objeto Calendario en la base de datos.
     * @param calendario objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calendario);
    /**
     * Modifica un objeto Calendario en la base de datos.
     * @param calendario objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calendario);
    /**
     * Elimina un objeto Calendario en la base de datos.
     * @param calendario objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calendario);
    /**
     * Busca un objeto Calendario en la base de datos.
     * @param calendario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calendario);
    /**
     * Lista todos los objetos Calendario en la base de datos.
     * @return Array<Calendario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!