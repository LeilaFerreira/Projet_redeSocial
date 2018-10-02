<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href= "https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <style type="text/css">
    *{font-family: 'Montserrat'; cursive; margin:0;}
    body{background: #F6F6F6;}
    div#topo{width: 100%; top: 0; background: #FFF; box-shadow: 0 0 10px #000; height: 80px;}
    div#topo img[ name="logo"] {float: left; margin-left: 20px; margin-top:10px;}
    div#topo img[ name="menu"] {float: right; margin-right: 25px; margin-top:-29px}
    div#topo input {display: block; margin:auto; width: 300px; border: none; border-radius:3px; background:#F6F6F6}
    div#topo input[ type="text"]{display: block; margin:auto; width: 300px; border: none; border-radius:3px; background:#F6F6F6; height: 25px; padding-left:10px; box-shadow: inset 0 0 4px #000; }
    div#topo form{padding-top: 22px; width: 300px; display: block; margin:auto;}
    </style>
</head>
<body>
<div id="topo">
<a href="../usuario.php"><img src= "img/logo.png" width="150" name="logo"></a>
<form method = "GET">
<input type="text" placeholder= "Pesquisar amigos..." name="query" autocomplete="off"> <input type= "submit" hidden>
</form>
<a href="../logout.php"> <img src="img/sair.jpg" width="30" name="menu"></a>
<a href="#"><img src="img/chat.png" width="30" name="menu"></a>
<a href="#"><img src="img/perfil3.png" width="30" name="menu"></a>


</body>
</html>