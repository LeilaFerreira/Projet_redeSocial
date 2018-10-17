<?php
   require "../model/usuario.php";
   require "../model/loginsql.php";
   
   class LoginControle{

   private $email ;
   private $senha;   

   public function __construct($_senha, $_email) {
            $this->email = $_email;
            $this->senha = $_senha;
            
            $this->preencheDadosUsuario();
        }

    private function preencheDadosUsuario(){
            $this->tb_usuario = new Usuario();
            $this->tb_usuario->setEmail($this->email);
            $this->tb_usuario->setSenha($this->senha);
            

        }

        
    public function logarUsuario(){
            $usuario = new Usuario();
            $usuario = LoginSql::getInstance()->logar($this->tb_usuario);
            
            if($usuario != null){
                session_start();
                $_SESSION['nomeUsuario'] = $usuario->getNome();
                $_SESSION['emailUsuario'] = $usuario->getEmail();
            }
            
           

          
        }
       

    }
?>