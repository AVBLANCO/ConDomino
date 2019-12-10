<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

include_once realpath('../dao/interfaz/IApartamentousuarioDao.php');
include_once realpath('../dto/Apartamentousuario.php');
include_once realpath('../dto/Apartamento.php');
include_once realpath('../dto/Usuario.php');

class ApartamentousuarioDao implements IApartamentousuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($apartamentousuario){
      $apartamento_idApartamento=$apartamentousuario->getApartamento_idApartamento()->getIdApartamento();
$usuario_idUsuario=$apartamentousuario->getUsuario_idUsuario()->getIdUsuario();
$observacionesApartamentoUsuario=$apartamentousuario->getObservacionesApartamentoUsuario();
$creacionApartamentoUsuario=$apartamentousuario->getCreacionApartamentoUsuario();

      try {
          $sql= "INSERT INTO `apartamentousuario`( `apartamento_idApartamento`, `usuario_idUsuario`, `observacionesApartamentoUsuario`, `creacionApartamentoUsuario`)"
          ."VALUES ('$apartamento_idApartamento','$usuario_idUsuario','$observacionesApartamentoUsuario','$creacionApartamentoUsuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($apartamentousuario){
      $apartamento_idApartamento=$apartamentousuario->getApartamento_idApartamento()->getIdApartamento();
$usuario_idUsuario=$apartamentousuario->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql= "SELECT `apartamento_idApartamento`, `usuario_idUsuario`, `observacionesApartamentoUsuario`, `creacionApartamentoUsuario`"
          ."FROM `apartamentousuario`"
          ."WHERE `apartamento_idApartamento`='$apartamento_idApartamento' AND`usuario_idUsuario`='$usuario_idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $apartamento = new Apartamento();
           $apartamento->setIdApartamento($data[$i]['apartamento_idApartamento']);
           $apartamentousuario->setApartamento_idApartamento($apartamento);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['usuario_idUsuario']);
           $apartamentousuario->setUsuario_idUsuario($usuario);
          $apartamentousuario->setObservacionesApartamentoUsuario($data[$i]['observacionesApartamentoUsuario']);
          $apartamentousuario->setCreacionApartamentoUsuario($data[$i]['creacionApartamentoUsuario']);

          }
      return $apartamentousuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($apartamentousuario){
      $apartamento_idApartamento=$apartamentousuario->getApartamento_idApartamento()->getIdApartamento();
$usuario_idUsuario=$apartamentousuario->getUsuario_idUsuario()->getIdUsuario();
$observacionesApartamentoUsuario=$apartamentousuario->getObservacionesApartamentoUsuario();
$creacionApartamentoUsuario=$apartamentousuario->getCreacionApartamentoUsuario();

      try {
          $sql= "UPDATE `apartamentousuario` SET`apartamento_idApartamento`='$apartamento_idApartamento' ,`usuario_idUsuario`='$usuario_idUsuario' ,`observacionesApartamentoUsuario`='$observacionesApartamentoUsuario' ,`creacionApartamentoUsuario`='$creacionApartamentoUsuario' WHERE `apartamento_idApartamento`='$apartamento_idApartamento' AND `usuario_idUsuario`='$usuario_idUsuario' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($apartamentousuario){
      $apartamento_idApartamento=$apartamentousuario->getApartamento_idApartamento()->getIdApartamento();
$usuario_idUsuario=$apartamentousuario->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql ="DELETE FROM `apartamentousuario` WHERE `apartamento_idApartamento`='$apartamento_idApartamento' AND`usuario_idUsuario`='$usuario_idUsuario'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Apartamentousuario en la base de datos.
     * @return ArrayList<Apartamentousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `apartamento_idApartamento`, `usuario_idUsuario`, `observacionesApartamentoUsuario`, `creacionApartamentoUsuario`"
          ."FROM `apartamentousuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $apartamentousuario= new Apartamentousuario();
           $apartamento = new Apartamento();
           $apartamento->setIdApartamento($data[$i]['apartamento_idApartamento']);
           $apartamentousuario->setApartamento_idApartamento($apartamento);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['usuario_idUsuario']);
           $apartamentousuario->setUsuario_idUsuario($usuario);
          $apartamentousuario->setObservacionesApartamentoUsuario($data[$i]['observacionesApartamentoUsuario']);
          $apartamentousuario->setCreacionApartamentoUsuario($data[$i]['creacionApartamentoUsuario']);

          array_push($lista,$apartamentousuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Apartamentousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByApartamento_idApartamento($apartamentousuario){
      $lista = array();
      $apartamento_idApartamento=$apartamentousuario->getApartamento_idApartamento()->getIdApartamento();

      try {
          $sql ="SELECT `apartamento_idApartamento`, `usuario_idUsuario`, `observacionesApartamentoUsuario`, `creacionApartamentoUsuario`"
          ."FROM `apartamentousuario`"
          ."WHERE `apartamento_idApartamento`='$apartamento_idApartamento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $apartamentousuario = new Apartamentousuario();
           $apartamento = new Apartamento();
           $apartamento->setIdApartamento($data[$i]['apartamento_idApartamento']);
           $apartamentousuario->setApartamento_idApartamento($apartamento);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['usuario_idUsuario']);
           $apartamentousuario->setUsuario_idUsuario($usuario);
          $apartamentousuario->setObservacionesApartamentoUsuario($data[$i]['observacionesApartamentoUsuario']);
          $apartamentousuario->setCreacionApartamentoUsuario($data[$i]['creacionApartamentoUsuario']);

          array_push($lista,$apartamentousuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Apartamentousuario en la base de datos.
     * @param apartamentousuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Apartamentousuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuario_idUsuario($apartamentousuario){
      $lista = array();
      $usuario_idUsuario=$apartamentousuario->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql ="SELECT `apartamento_idApartamento`, `usuario_idUsuario`, `observacionesApartamentoUsuario`, `creacionApartamentoUsuario`"
          ."FROM `apartamentousuario`"
          ."WHERE `usuario_idUsuario`='$usuario_idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $apartamentousuario = new Apartamentousuario();
           $apartamento = new Apartamento();
           $apartamento->setIdApartamento($data[$i]['apartamento_idApartamento']);
           $apartamentousuario->setApartamento_idApartamento($apartamento);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['usuario_idUsuario']);
           $apartamentousuario->setUsuario_idUsuario($usuario);
          $apartamentousuario->setObservacionesApartamentoUsuario($data[$i]['observacionesApartamentoUsuario']);
          $apartamentousuario->setCreacionApartamentoUsuario($data[$i]['creacionApartamentoUsuario']);

          array_push($lista,$apartamentousuario);
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