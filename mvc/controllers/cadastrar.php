<?php

     if(isset($_POST['Cadastrar']) && $_POST['Cadastrar'] === 'Enviar')
     {     
          $nome = $_POST['nome'];
          $sobrenome = $_POST['sobrenome'];
          $cpf =  $_POST['cpf'];
          $celular =  $_POST['telefone'];
          $email =  $_POST['emailCadastrar'];
          $senha =  $_POST['senhaCadastrar'];
          $repSenha =  $_POST['repSenhaCadastrar'];

          if($nome === '')
          {
               echo ' Nome inválido ou vazio. ';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if(strlen($nome) < 3)
          {
               echo 'Nome precisa conter 3 ou mais caracteres.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if (strlen($sobrenome) <3)
          {
               echo ' Sobrenome precisa conter 3 ou mais  caracteres.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($cpf === ' ')
          {
               echo ' cpf vazio.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($cpf < 0 && $cpf >14 ) 
          {
               echo ' cpf precisa conter 14 caracteres, incluindo pontos e traços.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
               header("location: ../../usuario.php?v=Y2FkYXN0cmFy");
               exit;
          }


     }if(isset($_POST['Cadastrar']) && $_POST['Cadastrar'] === 'Enviar') 
     {    //Cadastrar o cidadão no banco de dados
          $nomeCadastro = $_POST['nome'];
          $sobrenomeCadastro = $_POST['sobrenome'];
          $cpfCadastro = $_POST['cpf'];
          $telefoneCadastro = $_POST['telefone'];
          $emailCadastro = $_POST['emailCadastrar'];
          $senhaCadastro = $_POST['senhaCadastrar'];
          $senhaCadastro = md5($senhaCadastro);

          include_once "../../database/database.php";
          CadastrarCidadao($nomeCadastro, $sobrenomeCadastro, $cpfCadastro, $telefoneCadastro, $emailCadastro, $senhaCadastro);
          header("location: ../../usuario.php?v=Y2FkYXN0cmFy");


     }

?>