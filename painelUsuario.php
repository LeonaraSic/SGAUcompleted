<!DOCTYPE html>
<html lang="pt-br">
<head>
     
     <meta charset="UTF-8">
     
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
     <title>Painel</title>

     <link rel="stylesheet" href="app/lib/app/css/app.css">
     <link rel="stylesheet" href="app/lib/app/css/mediaAdm.css">
     
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>

<main class="homeJunto">

     <input type="checkbox" id="btMenu">
     <label for="btMenu">&#9776;</label>

     <div id="painelDeControle">

          <div class="menuDeControle">

               <div class="containerSgau">

                    <div class="Logosgau">SGAU</div>

               </div>

               <div class="usuarioAdm">
                    
                    <div class = " fotoRedonda "> 
                         <img src="app/img/user.png" alt="">
                    </div>
                    
                    <div class="col1">

                         <div class = " nome "> 
                         <?php 
                         #montar nome do usuario logado!
                         session_start();
                         echo $_SESSION['nome']. "&nbsp". $_SESSION['sobrenome'];
                         $id_usuario = $_SESSION['id_cidadao'];
                         ?>                         
                          </div>

                         <div class = " cargo "> Cidadão</div>

                    </div>

               </div>

               <nav class="menuControle">

               <!-- #################### DROP DAWN DO MENU CADASTRAR ####################### -->
                    <ul class="linksControle">
                        <li><a href="?p=<?php echo base64_encode('cadastroRequerimento')?>"><i class="fas fa-edit"></i> &nbsp;Requerimento</a></li>
                        
                    </ul>

                    <ol>
                         <li><a href="index.php" title="Fechar"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                    </ol>
               
               </nav>


          </div>
 
          <?php include_once 'mvc/controllers/painelUsuario.php'?>
     
     </div>

</main>     
     
</body>
</html>