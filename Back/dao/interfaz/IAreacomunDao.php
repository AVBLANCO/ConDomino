<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ͡~ ͜ʖ ͡°)  \\


interface IAreacomunDao {

    /**
     * Guarda un objeto Areacomun en la base de datos.
     * @param areacomun objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($areacomun);
    /**
     * Modifica un objeto Areacomun en la base de datos.
     * @param areacomun objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($areacomun);
    /**
     * Elimina un objeto Areacomun en la base de datos.
     * @param areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($areacomun);
    /**
     * Busca un objeto Areacomun en la base de datos.
     * @param areacomun objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($areacomun);
    /**
     * Lista todos los objetos Areacomun en la base de datos.
     * @return Array<Areacomun> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!