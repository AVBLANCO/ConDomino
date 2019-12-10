<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Apartamento.php');
require_once realpath('../dao/interfaz/IApartamentoDao.php');
require_once realpath('../dto/Piso.php');

class ApartamentoFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Apartamento a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idApartamento
   * @param descripcionApartamento
   * @param piso_idPiso
   */
  public static function insert( $idApartamento,  $descripcionApartamento,  $piso_idPiso){
      $apartamento = new Apartamento();
      $apartamento->setIdApartamento($idApartamento); 
      $apartamento->setDescripcionApartamento($descripcionApartamento); 
      $apartamento->setPiso_idPiso($piso_idPiso); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentoDao =$FactoryDao->getapartamentoDao(self::getDataBaseDefault());
     $rtn = $apartamentoDao->insert($apartamento);
     $apartamentoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Apartamento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idApartamento
   * @return El objeto en base de datos o Null
   */
  public static function select($idApartamento){
      $apartamento = new Apartamento();
      $apartamento->setIdApartamento($idApartamento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentoDao =$FactoryDao->getapartamentoDao(self::getDataBaseDefault());
     $result = $apartamentoDao->select($apartamento);
     $apartamentoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Apartamento  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idApartamento
   * @param descripcionApartamento
   * @param piso_idPiso
   */
  public static function update($idApartamento, $descripcionApartamento, $piso_idPiso){
      $apartamento = self::select($idApartamento);
      $apartamento->setDescripcionApartamento($descripcionApartamento); 
      $apartamento->setPiso_idPiso($piso_idPiso); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentoDao =$FactoryDao->getapartamentoDao(self::getDataBaseDefault());
     $apartamentoDao->update($apartamento);
     $apartamentoDao->close();
  }

  /**
   * Elimina un objeto Apartamento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idApartamento
   */
  public static function delete($idApartamento){
      $apartamento = new Apartamento();
      $apartamento->setIdApartamento($idApartamento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentoDao =$FactoryDao->getapartamentoDao(self::getDataBaseDefault());
     $apartamentoDao->delete($apartamento);
     $apartamentoDao->close();
  }

  /**
   * Lista todos los objetos Apartamento de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Apartamento en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentoDao =$FactoryDao->getapartamentoDao(self::getDataBaseDefault());
     $result = $apartamentoDao->listAll();
     $apartamentoDao->close();
     return $result;
  }


}
//That`s all folks!