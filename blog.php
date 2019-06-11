<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="app/lib/app/css/blogs.css">
    <link rel="stylesheet" href="app/lib/app/css/media.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>blog</title>
</head>
<body>
    
    
    <div id="ConteudoFlex">
    
        <input type="checkbox" id="btBlogMenu">
        <label for="btBlogMenu">&#9776;</label>

        <nav id="Menu_Blog">     

            <div id="ImgLogo"><img src="app/img/logo_sgau_Reform.png" alt=""></div>

            <div class="border"></div>

            <div class="icons"> 

                <a href="#"><i class="fab fa-facebook-f "></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"> <i class="fab fa-whatsapp "></i></a>

            </div>

            <div class="border"></div>
            
        
            <ul>           
            <div class="logoSGAU">SGAU</div>
                <li><a href="index.php">Início</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'arborizacao' ) ?>" class="arborizacao">Arborização</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'vantagens' ) ?>" id="vantagens">Vantagens</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'amapa' ) ?>" id="amapa">Amapá</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'semam' ) ?>" id="seman">Semam</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'entrevistas' ) ?>" id="entrevistas">Entrevistas</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'projetos' ) ?>" id="projetos">Projetos</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'trabalhos' ) ?>" id="trabalhos">Trabalhos</a></li>
                <li><a href="?v=<?php echo base64_encode ( 'noticias'  )?>" id="noticias">Notícias</a></li>
            </ul>

        </nav>
        
        <div id="ImgHeader">
            <div id="TextoH1">
                <div id="Background">
                    <h1>Seja bem vindo(a) ao blog do <b>SGAU</b></h1>
                </div>
           </div>
        </div>

        <?php include_once "mvc/controllers/paginacao.php" ?>

    </div>

  
    
  
</body>
</html>     
