<div class="form">

     <form name="formularioDI" id="formDI" action="#" method="POST" class="flex"  onsubmit="return cadasInfracoes()">

          <h1>Cadastro de Infrações</h1>

          <input type="text" name="NomeCompleto" class="largura" placeholder="Nome Completo">

          <input type="text" name="Cpf" class="largura" placeholder="CPF/CNPJ">

          <input type="email" name="email" class="largura" placeholder="E-mail">

          <input type="tel" name="Telefone" class="largura" placeholder="Telefone">

          <input type="text" name="logradouro" class="largura" placeholder="Logradouro">

          <input type="number" name="Numero" class="largura" placeholder="Número">

          <input type="text" name="bairro" class="largura" placeholder="Bairro">
          <div class="uniaoFlex">
               
          <label>Infração cometida</label>
          <textarea name="infracao"></textarea>
          </div>
          
          
          <div class="uniaoFlex">
               <label>Data da infração: </label>
               <input type="date" name="DtInfracao" class="largura ultimaLargura" placeholder="Data da Infração">   
          </div>
          <div class="botao">

               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    
               <input type="reset" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
               
          </div>                           

     </form>

</div>
<?php 
 if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
     $nomeInfracao = $_POST['NomeCompleto'];
     $CpfCnpj = $_POST['Cpf'];
     $emailInfracao = $_POST['email'];
     $FoneInfra = $_POST['Telefone'];
     $LograInfracao = $_POST['logradouro'];
     $NumInfracao = $_POST['Numero'];
     $BairroInfracao = $_POST['bairro'];
     $infracao = $_POST['infracao'];
     $DataInfracao = $_POST['DtInfracao'];
     include_once ( "painelAdm.php" );
     $IdClbrador = $IdColaboradorLogado;
     include_once ( "database/database.php");
     CadastraInfracao($nomeInfracao, $CpfCnpj, $emailInfracao, $FoneInfra, $LograInfracao, $NumInfracao, $BairroInfracao, $infracao, $DataInfracao, $IdClbrador);
 }
 ?>

<script type="text/javascript">
     function cadasInfracoes()
     {
          // var msgSucess = document.getElementById('msgSucesso');

          if (document.formularioDI.NomeCompleto.value == "" || document.formularioDI.NomeCompleto.value == null ) 
          {
               alert("Nome vazio, preencha o nome.");
               document.formularioDI.NomeCompleto.focus();
               return false;
          }
          else if(document.formularioDI.NomeCompleto.value.length <3)
          {
               alert("Nome precisa ter no máximo 3 caracteres.");
               NomeCompleto.focus();
               return false;
          }
          if(document.formularioDI.Cpf.value == "" || document.formularioDI.Cpf.value == null)
          {
               alert("CPF não foi preenchido, por favor preencha.");
               document.formularioDI.Cpf.focus();
               return false;
          }
          else if(document.formularioDI.Cpf.value.length <11 )
          {
               alert("CPF precisa conter 11 caracteres.");
               document.formularioDI.Cpf.focus();
               return false;
          }
          if(document.formularioDI.email.value.indexOf('@') == -1 || document.formularioDI.email.value.indexOf('.') == -1 || document.formularioDI.email.value == "" || document.formularioDI.email.value == null)
          {
               alert("E-mail inválido, por favor digite um e-mail válido.");
               document.formularioDI.email.focus();
               return false;
          }
          if(document.formularioDI.Telefone.value == "" || document.formularioDI.Telefone.value == null)
          {
               alert("Telefone não foi preenchido, por favor preencha.");
               document.formularioDI.Telefone.focus();
               return false;
          }
          else if(document.formularioDI.Telefone.value.length <11)
          {
               alert("Telefone precisa conter 11 caracteres.");
               document.formularioDI.Telefone.focus();
               return false;
          }
         
          if(document.formularioDI.logradouro.value == "" || document.formularioDI.logradouro.value == null)
          {
               alert("Logradouro não foi preenchida, por favor preencha.");
               document.formularioDI.logradouro.focus();
               return false;
          }
          if(document.formularioDI.Numero.value == "" || document.formularioDI.Numero.value == null)
          {
               alert("Número vazio, por favor preencha.");
               document.formularioDI.Numero.focus();
               return false;
          }    
          if(document.formularioDI.bairro.value == "" || document.formularioDI.bairro.value == null)
          {
               alert("Bairro vazio, por favor preencha.");
               document.formularioDI.bairro.focus();
               return false;
          }     
          if(document.formularioDI.infracao.value == "" || document.formularioDI.infracao.value == null)
          {
               alert("Infracao vazia, por favor preencha.");
               document.formularioDI.infracao.focus();
               return false;
          }
          if(document.formularioDI.DtInfracao.value == "" || document.formularioDI.DtInfracao.value == null)
          {
               alert("Data da infração não selecionada, por favor preencha.");
               document.formularioDI.DtInfracao.focus();
               return false;
          }

     }
</script>