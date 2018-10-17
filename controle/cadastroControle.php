<?php
   require "../model/usuario.php";
   require "../model/usuariosql.php";
   
   class CadastroControle{

   private $nome ;
   private $senha;   
   private $campus;
   private $curso;
   private $fotoCaminho;
   private $email;
   private $tb_usuario;



        public function __construct($_nome,$_senha,$_campus,$_curso,$_foto, $_email) {
            $this->nome = $_nome;
            $this->senha =  password_hash($_senha ,PASSWORD_DEFAULT);
            $this->campus = $_campus;
            $this->curso = $_curso;
            $this->fotoCaminho = $_foto;
            $this->email = $_email;
            
            
            $this->preencheDadosUsuario();
        }

        private function preencheDadosUsuario(){
            $this->tb_usuario = new Usuario();
            $this->tb_usuario->setNome($this->nome);
            $this->tb_usuario->setSenha($this->senha);
            $this->tb_usuario->setEmail($this->email);
            $this->tb_usuario->setAtivo(1);
            
            
            date_default_timezone_set('America/Sao_Paulo');
            $timestamp = date("Y-m-d H:i:s");
            $this->tb_usuario->setDataHora($timestamp);


        }

        
        public function cadastrarUsuario(){
            
            UsuarioSql::getInstance()->Inserir($this->tb_usuario);
          
        }
       

    }
?>