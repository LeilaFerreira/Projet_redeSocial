<?php 

require "../controle/loginControle.php";

/*
    Pagina que realiza validação dos dados do cadastro e direcionameto do usuario
    logado para a area de usuario.

*/

$email = $_POST['email'];   
$senha = $_POST['senha']; 
$erroMensValidacao ="";

if(empty($email)){
    $erroMensValidacao .= "Nome do Usuairo não pode ser em braco. </br>";
}
          
if(empty($senha)){
    $erroMensValidacao .= "Nome do Usuairo não pode ser em braco. </br>";
}
          
if(!empty($erroMensValidacao)){

}else{
    $login = new LoginControle($senha,$email);
    $login->logarUsuario();
    header("Location:../paginadepublicacao/index.php");
}

?>