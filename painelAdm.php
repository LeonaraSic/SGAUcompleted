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
                         //Logar com o nome do colaborador
                         session_start();
                         echo $_SESSION['nome'] . "&nbsp" . $_SESSION['sobrenome'];
                         $IdColaboradorLogado = $_SESSION['id_colaborador'];
                         ?>
                         </div>

                         <div class = " cargo "> Administrador</div>

                    </div>

               </div>

               <nav class="menuControle">

               <!-- #################### DROP DAWN DO MENU CADASTRAR ####################### -->
                    <ul class="linksControle">

                         <li>
                              <a href="#"><i class="fas fa-edit"></i> &nbsp;Cadastros &nbsp; <i class="fas fa-angle-down "></i></a>
                              
                              <ul class=" dropDown aumenta" >

                                   <li><a href="?p=<?php echo base64_encode ( 'cadastroFuncionario' ) ?>">Cadastro de Funcionários</a></li>
                                   
                                   <li><a href="?p=<?php echo base64_encode ( 'cadastroAreaVerde' ) ?>">Cadastro de  Área Verde</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'cadastroArvores' ) ?>">Cadastro de Árvores</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'cadastroMudas' ) ?>">Cadastro de Mudas</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'cadastroProjeto' ) ?>">Cadastro de Projeto</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'cadastroInfracoes' ) ?>">Cadastro de Infrações</a></li>

                              </ul>

                         </li>

                    </ul>

                     <!-- #################### DROP DAWN DO MENU RELATORIO ####################### -->
                    <ul class="linksControle">

                         <li>
                              <a href="#"><i class="fas fa-clipboard"></i> &nbsp;Relatório &nbsp; <i class="fas fa-angle-down "></i></a>
                              
                              <ul class=" dropDown diminui" >

                                   <li><a href="?p=<?php echo base64_encode ( 'arvoresMunicipio' ) ?>">Árvores no minicípio</a></li>
                                   
                                   <li><a href="?p=<?php echo base64_encode ( 'consultaBairro' ) ?>">Consulta por bairro</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'consultaAreaVerde' ) ?>">Consulta por área verde</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'consultaTipoArvore' ) ?>">Consulta por tipo de Árvore</a></li>

                              </ul>

                         </li>

                    </ul>

                     <!-- #################### DROP DAWN DE INDICIES ARBOREOS ####################### -->
                    <ul class="linksControle">

                         <li>
                              <a href="#"><i class="fas fa-chart-bar"></i> &nbsp;Índices &nbsp; <i class="fas fa-angle-down "></i></a>
                              
                              <ul class=" dropDown " >

                                   <li><a href="?p=<?php echo base64_encode ( 'coberturaArborea' ) ?>">Cobertura arbórea </a></li>
                                   
                                   <li><a href="?p=<?php echo base64_encode ( 'porcentagemArborea' ) ?>">Porcentagem de cobertura árborea</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'indiciesArboreos' ) ?>">Índices de cobertura árborea</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'densidadeArvores' ) ?>">Densidades de árvores</a></li>

                                   <li><a href="?p=<?php echo base64_encode ( 'densidadeArvoresHabitante' ) ?>">Densidades de árvores por habitante</a></li>


                              </ul>

                         </li>
                          <li><a href="?p=<?php echo base64_encode( 'analiseRequerimento' ) ?>"><i class="fas fa-edit"></i> &nbsp;Análise do Requerimento</a></li>

                    </ul>
                     <ol>
                         <li><a href="index.php" title="Fechar"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                    </ol>

               </nav>

          </div>

 
          <?php include_once 'mvc/controllers/painel.php'?>
     
     </div>

</main>     
     
</body>
</html>