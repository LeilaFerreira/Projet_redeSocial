<?php
    include("header.php");

    session_start();
    
    
    if (!isset($_SESSION['nomeUsuario'] )){
        header('location:..\home.php');
       
        exit;
    }



    ?>
<html>
<head>
    <style type="text/css">
    div#publish{ width: 400px; height:270px; display:block ; margin: auto; border: none;border-radius:5px;background: #FFF; box-shadow: 0 0 20px #A1A1A1; margin-top:100px;}
    div#publish textarea{width: 300px; height: 150px; display: block; margin: auto;border-radius:5px; padding-left: 5px; padding-top: 5px;border-width:1px; border-color: #A1A1A1;}
    div#publish img{margin-top:0px; margin-left: 10px; width:40px; cursor:pointer;}
    div#publish input[type="submit"]{width: 70px; height: 25px; border-radius:3px; float:right;margin-right:15px; border: none; margin-top: 5px; background: #4169E1; color: #FFF;cursor:pointer;}
    div#publish input[type="submit"]: houver{background: #001F3F;}
    </style>
</head>
<body>
    <div id="publish">
        <form method="POST" enctype="multipart/form-data">
            <br/>
            <textarea placeholder="Escrever uma publicação nova" name= "texto"></textarea>
            <label for="file-input">
            <img src="img/fotografia.png" title="inserir uma fotografia"/>
            
            </label>
            <input type="submit" value="publicar" name= "publish"/>
            <input type="file" id="file-input"name="file" hidden/>
            <?php echo $_SESSION['nomeUsuario']; ?>
          
        </form>  
    </div>      
</body>
</html>