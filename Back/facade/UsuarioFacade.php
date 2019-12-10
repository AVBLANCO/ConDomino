<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nada mejor que el código hecho a mano.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Usuario.php');
require_once realpath('../dao/interfaz/IUsuarioDao.php');
require_once realpath('../dto/Persona.php');
require_once realpath('../dto/Tipousuario.php');
require_once realpath('../dto/Condominio.php');

class UsuarioFacade {

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
   * Crea un objeto Usuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @param persona_idpersona
   * @param estadoUsuario
   * @param passwordUsuario
   * @param tipoUsuario_idTipoUsuario
   * @param condominio_idCondominio
   */
  public static function insert( $idUsuario,  $persona_idpersona,  $estadoUsuario,  $passwordUsuario,  $tipoUsuario_idTipoUsuario,  $condominio_idCondominio){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 
      $usuario->setPersona_idpersona($persona_idpersona); 
      $usuario->setEstadoUsuario($estadoUsuario); 
      $usuario->setPasswordUsuario($passwordUsuario); 
      $usuario->setTipoUsuario_idTipoUsuario($tipoUsuario_idTipoUsuario); 
      $usuario->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $rtn = $usuarioDao->insert($usuario);
     $usuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @return El objeto en base de datos o Null
   */
  public static function select($idUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->select($usuario);
     $usuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Usuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @param persona_idpersona
   * @param estadoUsuario
   * @param passwordUsuario
   * @param tipoUsuario_idTipoUsuario
   * @param condominio_idCondominio
   */
  public static function update($idUsuario, $persona_idpersona, $estadoUsuario, $passwordUsuario, $tipoUsuario_idTipoUsuario, $condominio_idCondominio){
      $usuario = self::select($idUsuario);
      $usuario->setPersona_idpersona($persona_idpersona); 
      $usuario->setEstadoUsuario($estadoUsuario); 
      $usuario->setPasswordUsuario($passwordUsuario); 
      $usuario->setTipoUsuario_idTipoUsuario($tipoUsuario_idTipoUsuario); 
      $usuario->setCondominio_idCondominio($condominio_idCondominio); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->update($usuario);
     $usuarioDao->close();
  }

  /**
   * Elimina un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   */
  public static function delete($idUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->delete($usuario);
     $usuarioDao->close();
  }

  /**
   * Lista todos los objetos Usuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Usuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->listAll();
     $usuarioDao->close();
     return $result;
  }


}
//That`s all folks!