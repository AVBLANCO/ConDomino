<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\


interface IPrestamoDao {

    /**
     * Guarda un objeto Prestamo en la base de datos.
     * @param prestamo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($prestamo);
    /**
     * Modifica un objeto Prestamo en la base de datos.
     * @param prestamo objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($prestamo);
    /**
     * Elimina un objeto Prestamo en la base de datos.
     * @param prestamo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($prestamo);
    /**
     * Busca un objeto Prestamo en la base de datos.
     * @param prestamo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($prestamo);
    /**
     * Lista todos los objetos Prestamo en la base de datos.
     * @return Array<Prestamo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!