<?php
require "conexaobd.php";
class LoginSql{
    
public static $instance;

private function __construct() {
    
}

public static function getInstance() {
    if (!isset(self::$instance))
        self::$instance = new LoginSql();

    return self::$instance;
}
public function logar(Usuario $usuario){
  try{
        $sql = "SELECT * FROM tb_usuario where email = :email ";
        $p_sql = Conexao::getInstance()->prepare ($sql);
        $p_sql->bindValue(":email", $usuario->getEmail());
        $p_sql->execute();
        $linha = $p_sql->fetch(PDO::FETCH_ASSOC);
           
        
        //If para ver se a consulta retornou um usuario e se a senha esta ok
        if(!empty($linha) &&  password_verify($usuario->getSenha(), $linha['senha']) ) {
            
              $pojo = new Usuario;
              $pojo->setIdusuario($linha['usuario_id']);
              $pojo->setNome($linha['nome']);
              $pojo->setEmail($linha['email']);
              $pojo->setSenha($linha['senha']);
              $pojo->setAtivo($linha['ativo']);
              $pojo->setDataHora(($linha['data_hora']));
              var_dump($pojo);
              return $pojo;
        }else {

            return null;
        }

        }catch (Exception $e) {
          echo $e;
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        } 

      }

}


?>