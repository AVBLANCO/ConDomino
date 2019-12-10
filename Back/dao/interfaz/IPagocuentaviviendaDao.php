<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\


interface IPagocuentaviviendaDao {

    /**
     * Guarda un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($pagocuentavivienda);
    /**
     * Modifica un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($pagocuentavivienda);
    /**
     * Elimina un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($pagocuentavivienda);
    /**
     * Busca un objeto Pagocuentavivienda en la base de datos.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($pagocuentavivienda);
    /**
     * Lista todos los objetos Pagocuentavivienda en la base de datos.
     * @return Array<Pagocuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Pagocuentavivienda en la base de datos que coincidan con la llave primaria.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Pagocuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdpagoCuentaVivienda($pagocuentavivienda);
    /**
     * Lista todos los objetos Pagocuentavivienda en la base de datos que coincidan con la llave primaria.
     * @param pagocuentavivienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Pagocuentavivienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByFacturaCuentaVivienda_idfacturaCuentaVivienda($pagocuentavivienda);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!