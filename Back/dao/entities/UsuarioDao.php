<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\

include_once realpath('../dao/interfaz/IUsuarioDao.php');
include_once realpath('../dto/Usuario.php');
include_once realpath('../dto/Persona.php');
include_once realpath('../dto/Tipousuario.php');
include_once realpath('../dto/Condominio.php');

class UsuarioDao implements IUsuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param usuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuario){
      $idUsuario=$usuario->getIdUsuario();
$persona_idpersona=$usuario->getPersona_idpersona()->getIdpersona();
$estadoUsuario=$usuario->getEstadoUsuario();
$passwordUsuario=$usuario->getPasswordUsuario();
$tipoUsuario_idTipoUsuario=$usuario->getTipoUsuario_idTipoUsuario()->getIdTipoUsuario();
$condominio_idCondominio=$usuario->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "INSERT INTO `usuario`( `idUsuario`, `persona_idpersona`, `estadoUsuario`, `passwordUsuario`, `tipoUsuario_idTipoUsuario`, `condominio_idCondominio`)"
          ."VALUES ('$idUsuario','$persona_idpersona','$estadoUsuario','$passwordUsuario','$tipoUsuario_idTipoUsuario','$condominio_idCondominio')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuario){
      $idUsuario=$usuario->getIdUsuario();

      try {
          $sql= "SELECT `idUsuario`, `persona_idpersona`, `estadoUsuario`, `passwordUsuario`, `tipoUsuario_idTipoUsuario`, `condominio_idCondominio`"
          ."FROM `usuario`"
          ."WHERE `idUsuario`='$idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setIdUsuario($data[$i]['idUsuario']);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $usuario->setPersona_idpersona($persona);
          $usuario->setEstadoUsuario($data[$i]['estadoUsuario']);
          $usuario->setPasswordUsuario($data[$i]['passwordUsuario']);
           $tipousuario = new Tipousuario();
           $tipousuario->setIdTipoUsuario($data[$i]['tipoUsuario_idTipoUsuario']);
           $usuario->setTipoUsuario_idTipoUsuario($tipousuario);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $usuario->setCondominio_idCondominio($condominio);

          }
      return $usuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param usuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuario){
      $idUsuario=$usuario->getIdUsuario();
$persona_idpersona=$usuario->getPersona_idpersona()->getIdpersona();
$estadoUsuario=$usuario->getEstadoUsuario();
$passwordUsuario=$usuario->getPasswordUsuario();
$tipoUsuario_idTipoUsuario=$usuario->getTipoUsuario_idTipoUsuario()->getIdTipoUsuario();
$condominio_idCondominio=$usuario->getCondominio_idCondominio()->getIdCondominio();

      try {
          $sql= "UPDATE `usuario` SET`idUsuario`='$idUsuario' ,`persona_idpersona`='$persona_idpersona' ,`estadoUsuario`='$estadoUsuario' ,`passwordUsuario`='$passwordUsuario' ,`tipoUsuario_idTipoUsuario`='$tipoUsuario_idTipoUsuario' ,`condominio_idCondominio`='$condominio_idCondominio' WHERE `idUsuario`='$idUsuario' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuario){
      $idUsuario=$usuario->getIdUsuario();

      try {
          $sql ="DELETE FROM `usuario` WHERE `idUsuario`='$idUsuario'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @return ArrayList<Usuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idUsuario`, `persona_idpersona`, `estadoUsuario`, `passwordUsuario`, `tipoUsuario_idTipoUsuario`, `condominio_idCondominio`"
          ."FROM `usuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuario= new Usuario();
          $usuario->setIdUsuario($data[$i]['idUsuario']);
           $persona = new Persona();
           $persona->setIdpersona($data[$i]['persona_idpersona']);
           $usuario->setPersona_idpersona($persona);
          $usuario->setEstadoUsuario($data[$i]['estadoUsuario']);
          $usuario->setPasswordUsuario($data[$i]['passwordUsuario']);
           $tipousuario = new Tipousuario();
           $tipousuario->setIdTipoUsuario($data[$i]['tipoUsuario_idTipoUsuario']);
           $usuario->setTipoUsuario_idTipoUsuario($tipousuario);
           $condominio = new Condominio();
           $condominio->setIdCondominio($data[$i]['condominio_idCondominio']);
           $usuario->setCondominio_idCondominio($condominio);

          array_push($lista,$usuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!