<div class="form">

<form name="formularioCF" id="formCF" action="#" method="POST" class="flex" onsubmit="return cadasvalidFunci()">

<h1>Cadastro de Funcionários</h1>

<div class="uniaoFlex">
     <input type="text" name="nomeColaborador" class="largura uniaoLargura" placeholder="Digite o nome">                                     
     <input type="text" name="sobrenomeColaborador"  class="largura"  placeholder="Digite o sobrenome">
</div>

<div class="">
     <label class="font">Cargo:</label>

     <input type="radio" name="tipo" class="tipo font" value="Secretario" checked>Secretário 
          
     <input type="radio" name="tipo" class="tipo font" value="Assistente" >Assistente 
          
     <input type="radio" name="tipo" class="tipo font" value="Engenheiro">Engenheiro 
          
     <input type="radio" name="tipo" class="tipo font" value="Estagiario">Estagiário
</div>


<input type="email" name="emailColaborador"   class="largura" placeholder="Digite o e-mail">

<input type="password" name="senhaColaborador"  class="largura"  placeholder="Digite a senha">

<input type="password" name="Area"  class="largura"  placeholder="Repita a senha">


<div class="botao ">

     <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">      

     <input type="reset" name="Cancelar" id="Cancelar" class="btn" value="Cancelar"
     >
</div>
     
</div>
<?php 
     if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
          $nomeColaborador = $_POST['nomeColaborador'];
          $sobrenomeColaborador = $_POST['sobrenomeColaborador'];
          $Cargo = $_POST['tipo'];
          $emailColaborador = $_POST['emailColaborador'];
          $senhaColaborador = md5($_POST['senhaColaborador']);
          include_once "database/database.php";
          CadastrarColaborador($nomeColaborador, $sobrenomeColaborador, $Cargo, $emailColaborador, $senhaColaborador);
     }
 ?>
 <script type="text/javascript">
     function cadasvalidFunci()
     {
          // var msgSucess = document.getElementById('msgSucesso');

          if (document.formularioCF.nomeColaborador.value == "" || document.formularioCF.nomeColaborador.value == null ) 
          {
               alert("Nome vazio, preencha o nome.");
               document.formularioCF.nomeColaborador.focus();
               return false;
          }
          else if(document.formularioCF.nomeColaborador.value.length <3)
          {
               alert("Nome precisa ter no máximo 3 caracteres.");
               document.formularioCF.nomeColaborador.focus();
               return false;
          }
          if(document.formularioCF.sobrenomeColaborador.value == "" || document.formularioCF.sobrenomeColaborador.value == null)
          {
               alert("Sobrenome vazio, preencha o Sobrenome.");
               document.formularioCF.sobrenomeColaborador.focus();
               return false;
          }
          else if(document.formularioCF.sobrenomeColaborador.value.length <3)
          {
               alert("Sobrenome precisa ter no máximo 3 caracteres.");
               document.formularioCF.sobrenomeColaborador.focus();
               return false;
          }
          if(document.formularioCF.emailColaborador.value.indexOf('@') == -1 || document.formularioCF.emailColaborador.value.indexOf('.') == -1 || document.formularioCF.emailColaborador.value == "" || document.formularioCF.emailColaborador.value == null)
          {
               alert("E-mail inválido, por favor digite um e-mail válido.");
               document.formularioCF.emailColaborador.focus();
               return false;
          }
          if(document.formularioCF.senhaColaborador.value == "" || document.formularioCF.senhaColaborador.value == null)
          {
               alert("Senha não foi preenchida, por favor preencha.");
               document.formularioCF.senhaColaborador.focus();
               return false;
          }
          else if(document.formularioCF.senhaColaborador.value.length < 8 || document.formularioCF.senhaColaborador.value.length >8)
          {
               alert("Campo senha precisa ter 8 caracteres.");
               document.formularioCF.senhaColaborador.focus();
               return false;
          }
          if(document.formularioCF.Area.value == "" || document.formularioCF.Area.value == null)
          {
               alert("Campo repetir senha vazio, por favor preencha.");
               document.formularioCF.Area.focus();
               return false;
          }
          else if(document.formularioCF.Area.value!=document.formularioCF.senhaColaborador.value)
          {
               alert("Senhas diferente.");
               document.formularioCF.Area.focus();
               return false;
          }
        

     }
</script>
