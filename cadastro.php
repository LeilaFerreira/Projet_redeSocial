
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/cadastro.css">

    <link href= "https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <style type="text/css">
    *{font-family: 'Roboto', 'Segoe UI', Tahoma, Segoe UI, Arial, sans-serif;}
    div#topo{width: 100%; top: 0; background: #F6F6F6; box-shadow: 0 0 20px #000; height: 80px;}
    div#topo img[ name="logo"] {float: left; margin-left: 20px; margin-top:-5px;}
    div#topo img[ name="menu"] {float: right; margin-right: 25px; margin-top:-29px}
    div#topo input {display: block; margin:auto; width: 300px; border: none; border-radius:9px; background:white; padding-left:20px;}
    div#topo input[ type="text"]{display: block; margin:auto; width: 300px; border: none; border-radius:3px; background:#F6F6F6; height: 25px; padding-left:10px; box-shadow: inset 0 0 4px #000; }
    div#topo form{padding-top: 22px; width: 300px; display: block; margin:auto;} 
    </style>
</head>

    <script>
        //Linha de codigo encontrada no stackoverflow (jquery)para exbir o modal
        // Document  é a pagina;
        // ready é quando ele esta pronto
        // modal.('show') é para exibir o modal
        $(document).ready(function () {
            $('#modalCadastro').modal('show');
        })

    </script>


</head>

<style>
    @keyframes scrollBgGridLinks {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-600px);
        }
    }
</style>
        <!-- <video autoplay muted loop class="video" >
        <source src= "image/file.mp4" type="video/mp4">
        </video>  -->

<body>
<div class="col"></div>
        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="topo">
          <a href="home.php"><img src= "image/logo.png" width="200" name="logo"></a>
</div> 
 <fieldset>         
<br><div class="container">
  <div class="row justify-content-start">
    <div class="col">


    
        <div class="panel panel-default panel-expand">
        <div class="panel-heading">
        <h4>cadastro</h4>
        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="nome" class="form-control" id="inputNome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">E-mail</label>
      <input type="email" class="form-control" id="inputEmail14" placeholder="email">
    </div>
  </div>
  <div class="form-row ">
  <div class="form-group">
    <label for="inputSenha">Senha</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
  </div>
  <div class="form-group col-md-6">
    <label for="inputSenha2">Confirmar Senha</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmar Senha">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Campus</label>
      <select id="inputState" class="form-control">
      <option value="vilaOlimpia">Vila Olímpia, SP - Brasil</option>
      <option value="argentina">Buenos Aires - Argentina</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Curso</label>
      <select id="inputState" class="form-control">
      <option value="fullstack">Desenvolvimento Web Full Stack</option>
      <option value="mobile">Desenvolvimento Mobile</option>
      <option value="marketing">Marketing Digital</option>
      <option value="datascience">Data Science</option>
      <option value="gestao">Gestão de Negócios Digitais</option>
      </select>
    </div>
    
  </div>
  
  </div>
  <div class="form-group row">
         <label for="upload-foto" class="col-sm-2 col-form-label">Foto</label>
         <div class="col-sm-10">
         <input type="file" accept="image/*" id="upload-foto" name="fotoPerfil">
   </div>
   </div>
  <button><a href="index.php" class="button"  > Cadastrar</a></button>  
  <button><a href="home.php"class="button">Voltar</a></button> <br>                  
  <small>Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade,
        incluindo o Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone
        fornecido.
  </small>
</form>
</div>
</div>
</div>
</fieldset>
<footer >
    <div style="bottom: 10px; left: 0px; margin-bottom: 6px; position: absolute; text-align: center; width: 100%;">
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Sobre TalkHouse</a>
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Termo de serviços</a>
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Ajuda</a>
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Trabalhe conosco</a>

    </div>

</footer>



</body>

</html>
