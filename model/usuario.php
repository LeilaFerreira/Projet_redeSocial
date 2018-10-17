<?php
  
class Usuario {
  
    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $data_hora;
    private $ativo;
    
  
    public function getIdusuario() {
        return $this->id_usuario;
    }
    public function setIdusuario($id) {
         $this->id_usuario = $id;
    }
  
    public function getNome() {
        return $this->nome;
    }
  
    public function setNome($nome) {
        $this->nome = $nome;
    }
  
    public function getEmail() {
        return $this->email;
    }
  
    public function setEmail($email) {
        $this->email = strtolower($email);
    }
  
    public function getSenha() {
        return $this->senha;
    }
  
    public function setSenha($senha) {
        $this->senha = $senha;
    }    
     
    public function getAtivo() {
        return $this->ativo;
    }
  
    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
     
    public function getDataHora() {
        return $this->data_hora;
    }
  
    public function setDataHora($datahora) {
        $this->data_hora = $datahora;
    }
  
}
  
?>