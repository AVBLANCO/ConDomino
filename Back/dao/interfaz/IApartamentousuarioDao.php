<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\


interface IApartamentousuarioDao {

    /**
     * Guarda un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($apartamentousuario);
    /**
     * Modifica un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($apartamentousuario);
    /**
     * Elimina un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($apartamentousuario);
    /**
     * Busca un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($apartamentousuario);
    /**
     * Lista todos los objetos Apartamentousuario en la base de datos.
     * @return Array<Apartamentousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Apartamentousuario en la base de datos que coincidan con la llave primaria.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Apartamentousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByApartamento_idApartamento($apartamentousuario);
    /**
     * Lista todos los objetos Apartamentousuario en la base de datos que coincidan con la llave primaria.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Apartamentousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuario_idUsuario($apartamentousuario);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!