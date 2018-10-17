<?php 

require "../controle/cadastroControle.php";

/*
    Pagina que realiza validação dos dados do cadastro e direcionameto do usuario
    logado para a area de usuario.

*/

$nome = $_POST['nome'];
$email = $_POST['email'];   
$senha = $_POST['senha']; 
$confirmarSenha = $_POST['confirmarSenha'];
$campus = $_POST['campus'];
$curso = $_POST['curso'];
$foto = @$_FILES['fotoPerfil'];
$erroMensValidacao ="";

// verificando email, login e senha para inserir no cadastro

if(empty($nome)){
    $erroMensValidacao .= "Nome do Usuairo não pode ser em braco. </br>";
}
                            
if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
    $erroMensValidacao .= "Email invalido.</br>";
}
if(isset($_POST['senha'])&&($_POST['confirmarSenha'])){
    if($_POST['senha'] != $_POST['confirmarSenha']){
        $erroMensValidacao .= "Senhas incompativesi.";
    }
   
}
if(!empty($erroMensValidacao)){
    header("Location:../home.php?error=".$erroMensValidacao);
    
}else{
    
   $caminhoFoto = "../imagTemp/".  $foto['name'];
   if(move_uploaded_file($foto['tmp_name'], $caminhoFoto)) {
        $cadastroControle = new CadastroControle($nome,$senha,$campus,$curso,$foto, $email);
        $cadastroControle->cadastrarUsuario();
        header("Location:../home.php");
   }


   
}
?>