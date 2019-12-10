<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\


interface IPrestamoareacomunDao {

    /**
     * Guarda un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($prestamoareacomun);
    /**
     * Modifica un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($prestamoareacomun);
    /**
     * Elimina un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($prestamoareacomun);
    /**
     * Busca un objeto Prestamoareacomun en la base de datos.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($prestamoareacomun);
    /**
     * Lista todos los objetos Prestamoareacomun en la base de datos.
     * @return Array<Prestamoareacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Prestamoareacomun en la base de datos que coincidan con la llave primaria.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Prestamoareacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPrestamo_idPrestamo($prestamoareacomun);
    /**
     * Lista todos los objetos Prestamoareacomun en la base de datos que coincidan con la llave primaria.
     * @param prestamoareacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Prestamoareacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByAreaComun_idAreaComun($prestamoareacomun);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!