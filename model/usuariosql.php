<?php
    require "conexaobd.php";
    class UsuarioSql{
        
    public static $instance;
  
    private function __construct() {
        
    }
  
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioSql();
  
        return self::$instance;
    }


        public function Inserir(Usuario $usuario) {
            try {
                $sql = "INSERT INTO tb_usuario (    
                    nome,
                    email,
                    senha,
                    data_hora,
                    ativo
                    )
                    VALUES (
                    :nome,
                    :email,
                    :senha,
                    :data_hora,
                    :ativo)";
                    
      
               $p_sql = Conexao::getInstance()->prepare ($sql);
      
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":email", $usuario->getEmail());
                $p_sql->bindValue(":senha", $usuario->getSenha());
                $p_sql->bindValue(":data_hora", $usuario->getDataHora());
                $p_sql->bindValue(":ativo", $usuario->getAtivo());
               
              
      
                return $p_sql->execute();
            } catch (Exception $e) {
                
                print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
            }
        }


        public function BuscarTodos() {
            try {
                $sql = "SELECT * FROM tb_usuario order by nome";
                $result = Conexao::getInstance()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
      
                foreach ($lista as $l)
                    $f_lista[] = $this->populaUsuario($l);
      
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
            }
        }

        private function populaUsuario($row) {
            $pojo = new Usuario;
            $pojo->setIdusuario($row['usuario_id']);
            $pojo->setNome($row['nome']);
            $pojo->setEmail($row['email']);
            $pojo->setSenha($row['senha']);
            $pojo->setAtivo($row['ativo']);
            $pojo->setDataHora(($row['data_hora']));
            return $pojo;
        }
}
?>