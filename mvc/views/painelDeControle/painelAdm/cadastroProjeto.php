<div class="form">

      <form name="formularioCP" id="formCP" action="#" method="POST" class="flex" onsubmit="return CadasProjeto()">

          <h1>Cadastro de Projetos</h1>

          <input type="text" name="tituloProjeto" class="largura" placeholder="Título do Projeto">

          <input type="text" name="logradouroProjeto" class="largura" placeholder="Logradouro">

          <input type="number" name="NumeroProjeto" class="largura" placeholder="Número">

          <input type="text" name="BairroProjeto" class="largura" placeholder="Bairro">

         <div class="uniaoFlex">
          <label class="center" >Descrição: </label><textarea name="DescProjeto"></textarea>
          </div>

          <input type="text" name="TempoExec" class="largura" placeholder="Tempo de execução">

          <div class="">
                    <label>Licença Ambiental:</label>

                    <input type="radio" name="Opcao02" class="Op" value="S">Sim

                    <input type="radio" name="Opcao02" class="Op" value="N" checked>Não
               </div>

          <input type="text" name="RespTec" class="largura" placeholder="Responsável Técnico"> 

          <div class="botao">

               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    
               <input type="submit" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
               
          </div>                           

     </form>

</div>
<?php 
     if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
          $tituloProjeto = $_POST['tituloProjeto'];
          $logradouroProjeto = $_POST['logradouroProjeto'];
          $NumeroProjeto = $_POST['NumeroProjeto'];
          $BairroProjeto = $_POST['BairroProjeto'];
          $DescProjeto = $_POST['DescProjeto'];
          $TempoExec = $_POST['TempoExec'];
          $linceAmbietal = $_POST['Opcao02'];
          $RespTec = $_POST['RespTec'];
          include_once ( "painelAdm.php" );
          $idClbradror = $IdColaboradorLogado;
          include_once "database/database.php";
          CadastroProjeto($tituloProjeto, $logradouroProjeto, $NumeroProjeto, $BairroProjeto, $DescProjeto, $TempoExec, $linceAmbietal, $RespTec, $idClbradror);
     }
 ?>

<script type="text/javascript">
     function CadasProjeto()
     {
          // var msgSucess = document.getElementById('msgSucesso');

          if (document.formularioCP.tituloProjeto.value == "" || document.formularioCP.tituloProjeto.value == null ) 
          {
               alert("Título do projeto inválido pois está vazio.");
               document.formularioCP.tituloProjeto.focus();
               return false;
          }
          if(document.formularioCP.logradouroProjeto.value == "" || document.formularioCP.logradouroProjeto.value == null)
          {
               alert("Logradouro inválido pois está vazio.");
               document.formularioCP.logradouroProjeto.focus();
               return false;
          }
          if(document.formularioCP.NumeroProjeto.value == "" || document.formularioCP.NumeroProjeto.value == null)
          {
               alert("Numero inválido pois está vazio.");
               document.formularioCP.NumeroProjeto.focus();
               return false;
          }
          if(document.formularioCP.BairroProjeto.value == "" || document.formularioCP.BairroProjeto.value == null)
          {
               alert("Bairro inválido pois está vazio.");
               document.formularioCP.BairroProjeto.focus();
               return false;
          }
          if(document.formularioCP.DescProjeto.value == "" || document.formularioCP.DescProjeto.value == null)
          {
               alert("Descreva uma descrição.");
               document.formularioCP.DescProjeto.focus();
               return false;
          }
          if(document.formularioCP.TempoExec.value == "" || document.formularioCP.TempoExec.value == null)
          {
               alert("Tempo de execução inválido pois está vazio.");
               document.formularioCP.TempoExec.focus();
               return false;
          }
          if(document.formularioCP.RespTec.value == "" || document.formularioCP.RespTec.value == null)
          {
               alert("Responsável técnico inválido pois está vazio.");
               document.formularioCP.RespTec.focus();
               return false;
          }

     }
</script>