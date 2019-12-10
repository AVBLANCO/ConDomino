<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Apartamentousuario.php');
require_once realpath('../dao/interfaz/IApartamentousuarioDao.php');
require_once realpath('../dto/Apartamento.php');
require_once realpath('../dto/Usuario.php');

class ApartamentousuarioFacade {

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
   * Crea un objeto Apartamentousuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param apartamento_idApartamento
   * @param usuario_idUsuario
   * @param observacionesApartamentoUsuario
   * @param creacionApartamentoUsuario
   */
  public static function insert( $apartamento_idApartamento,  $usuario_idUsuario,  $observacionesApartamentoUsuario,  $creacionApartamentoUsuario){
      $apartamentousuario = new Apartamentousuario();
      $apartamentousuario->setApartamento_idApartamento($apartamento_idApartamento); 
      $apartamentousuario->setUsuario_idUsuario($usuario_idUsuario); 
      $apartamentousuario->setObservacionesApartamentoUsuario($observacionesApartamentoUsuario); 
      $apartamentousuario->setCreacionApartamentoUsuario($creacionApartamentoUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $rtn = $apartamentousuarioDao->insert($apartamentousuario);
     $apartamentousuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Apartamentousuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param apartamento_idApartamento
   * @param usuario_idUsuario
   * @return El objeto en base de datos o Null
   */
  public static function select($apartamento_idApartamento, $usuario_idUsuario){
      $apartamentousuario = new Apartamentousuario();
      $apartamentousuario->setApartamento_idApartamento($apartamento_idApartamento); 
      $apartamentousuario->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $result = $apartamentousuarioDao->select($apartamentousuario);
     $apartamentousuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Apartamentousuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param apartamento_idApartamento
   * @param usuario_idUsuario
   * @param observacionesApartamentoUsuario
   * @param creacionApartamentoUsuario
   */
  public static function update($apartamento_idApartamento, $usuario_idUsuario, $observacionesApartamentoUsuario, $creacionApartamentoUsuario){
      $apartamentousuario = self::select($apartamento_idApartamento, $usuario_idUsuario);
      $apartamentousuario->setObservacionesApartamentoUsuario($observacionesApartamentoUsuario); 
      $apartamentousuario->setCreacionApartamentoUsuario($creacionApartamentoUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $apartamentousuarioDao->update($apartamentousuario);
     $apartamentousuarioDao->close();
  }

  /**
   * Elimina un objeto Apartamentousuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param apartamento_idApartamento
   * @param usuario_idUsuario
   */
  public static function delete($apartamento_idApartamento, $usuario_idUsuario){
      $apartamentousuario = new Apartamentousuario();
      $apartamentousuario->setApartamento_idApartamento($apartamento_idApartamento); 
      $apartamentousuario->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $apartamentousuarioDao->delete($apartamentousuario);
     $apartamentousuarioDao->close();
  }

  /**
   * Lista todos los objetos Apartamentousuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Apartamentousuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $result = $apartamentousuarioDao->listAll();
     $apartamentousuarioDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Apartamentousuario de la base de datos a partir de apartamento_idApartamento.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param apartamento_idApartamento
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByApartamento_idApartamento($apartamento_idApartamento){
      $apartamentousuario = new Apartamentousuario();
      $apartamentousuario->setApartamento_idApartamento($apartamento_idApartamento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $result = $apartamentousuarioDao->listByApartamento_idApartamento($apartamentousuario);
     $apartamentousuarioDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Apartamentousuario de la base de datos a partir de usuario_idUsuario.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByUsuario_idUsuario($usuario_idUsuario){
      $apartamentousuario = new Apartamentousuario();
      $apartamentousuario->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apartamentousuarioDao =$FactoryDao->getapartamentousuarioDao(self::getDataBaseDefault());
     $result = $apartamentousuarioDao->listByUsuario_idUsuario($apartamentousuario);
     $apartamentousuarioDao->close();
     return $result;
  }


}
//That`s all folks!