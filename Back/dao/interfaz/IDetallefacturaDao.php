<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\


interface IDetallefacturaDao {

    /**
     * Guarda un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($detallefactura);
    /**
     * Modifica un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($detallefactura);
    /**
     * Elimina un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($detallefactura);
    /**
     * Busca un objeto Detallefactura en la base de datos.
     * @param detallefactura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($detallefactura);
    /**
     * Lista todos los objetos Detallefactura en la base de datos.
     * @return Array<Detallefactura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!