<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Trabajo individual singifica ganancia individual  \\


interface IEventopersonaDao {

    /**
     * Guarda un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($eventopersona);
    /**
     * Modifica un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($eventopersona);
    /**
     * Elimina un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($eventopersona);
    /**
     * Busca un objeto Eventopersona en la base de datos.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($eventopersona);
    /**
     * Lista todos los objetos Eventopersona en la base de datos.
     * @return Array<Eventopersona> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Eventopersona en la base de datos que coincidan con la llave primaria.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Eventopersona> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEvento_idevento($eventopersona);
    /**
     * Lista todos los objetos Eventopersona en la base de datos que coincidan con la llave primaria.
     * @param eventopersona objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Eventopersona> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPersona_idpersona($eventopersona);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!