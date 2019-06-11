<main class="formularioLogin">

<form action="mvc/controllers/cadastrar.php" method="POST" name="formCadastro" id="formLogin" class="formCadastro" onsubmit="return cadasvalid()">

<div id="msgSucesso" class="msgDeSucesso"></div>
<!--  ############### Links de Entrar e Cadastrar ######################### -->
<div class="menuLogin">  
               <ul>

                    <li  class="entrar" >
                         <a href="?v=<?php echo base64_encode ( 'login' ) ?> " ><i class="fas fa-user user"></i>Entrar</a>
                    </li>

                    <li  class="registrar cadastro loginCadastro loginEntrar">     
                         <a href=" ?v=<?php echo base64_encode ( 'cadastrar' ) ?> "  class="click"> <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                    </li>
               
               </ul>
          </div>
          <div class="form formCadastro">
               
               <div class="NomesCadastro">

                    <input type="text" name="nome" class=" Campos margin " placeholder="Nome" id="priNome">
                    <input type="text" name="sobrenome" class=" Campos " placeholder="Sobrenome">    

               </div>

               <input type="text" name="cpf" class="Campos campo02" id="cpf" placeholder="CPF" >

               <input type="text" name="telefone" class="Campos campo02" id="telefoneC" placeholder="Telefone celular" >

               <input type="email"  name="emailCadastrar" id="EmailLogin" class="Campos campo02" placeholder="E-mail">
                    
               <input type="password" name="senhaCadastrar" id="senhaLogin" class="Campos campo03" placeholder="Senha">
               <input type="password" name="repSenhaCadastrar" id="senhaLogin" class="Campos campo03" placeholder="Repita a senha">
                    
               <input type="submit" value="Enviar" class=" BotaoLogin Campos " name="Cadastrar"  >

               <div class="form-group" id="error"></div>

               <div class="color"> <?php include_once 'mvc/controllers/cadastrar.php';?></div>

          </div>

          </form>

          <div class="copyright">

               <div class="textoCopy">
                    <p>
                         <span class=" textoApagado "> &copy; 2019  Copyright:</span> SGAU               
                    </p>
               </div>

               </div>

<script type="text/javascript">
     function cadasvalid()
     {
          var msgSucess = document.getElementById('msgSucesso');

          if (document.formCadastro.nome.value == "" || document.formCadastro.nome.value == null ) 
          {
               alert("Nome vazio, preencha seu nome.");
               document.formCadastro.nome.focus();
               return false;
          }
          else if(document.formCadastro.nome.value.length <3)
          {
               alert("Nome precisa ter no máximo 3 caracteres.");
               nome.focus();
               return false;
          }
          if(document.formCadastro.sobrenome.value == "" || document.formCadastro.sobrenome.value == null)
          {
               alert("Sobrenome vazio, preencha seu Sobrenome.");
               document.formCadastro.sobrenome.focus();
               return false;
          }
          else if(document.formCadastro.sobrenome.value.length <3)
          {
               alert("Sobrenome precisa ter no máximo 3 caracteres.");
               document.formCadastro.sobrenome.focus();
               return false;
          }
          if(document.formCadastro.cpf.value == "" || document.formCadastro.cpf.value == null)
          {
               alert("CPF não foi preenchido, por favor preencha.");
               document.formCadastro.cpf.focus();
               return false;
          }
          else if(document.formCadastro.cpf.value.length <11)
          {
               alert("CPF precisa conter 11 caracteres.");
               document.formCadastro.cpf.focus();
               return false;
          }
          if(document.formCadastro.telefone.value == "" || document.formCadastro.telefone.value == null)
          {
               alert("Telefone não foi preenchido, por favor preencha.");
               document.formCadastro.telefone.focus();
               return false;
          }
          else if(document.formCadastro.telefone.value.length <11)
          {
               alert("Telefone precisa conter 11 caracteres.");
               document.formCadastro.telefone.focus();
               return false;
          }
          if(document.formCadastro.emailCadastrar.value.indexOf('@') == -1 || document.formCadastro.emailCadastrar.value.indexOf('.') == -1 || document.formCadastro.emailCadastrar.value == "" || document.formCadastro.emailCadastrar.value == null)
          {
               alert("E-mail inválido, por favor digite um e-mail válido.");
               document.formCadastro.emailCadastrar.focus();
               return false;
          }
          if(document.formCadastro.senhaCadastrar.value == "" || document.formCadastro.senhaCadastrar.value == null)
          {
               alert("Senha não foi preenchida, por favor preencha.");
               document.formCadastro.senhaCadastrar.focus();
               return false;
          }
          else if(document.formCadastro.senhaCadastrar.value.length < 8 || document.formCadastro.senhaCadastrar.value.length >8)
          {
               alert("Campo senha precisa ter 8 caracteres.");
               document.formCadastro.senhaCadastrar.focus();
               return false;
          }
          if(document.formCadastro.repSenhaCadastrar.value == "" || document.formCadastro.repSenhaCadastrar.value == null)
          {
               alert("Campo repetir senha vazio, por favor preencha.");
               document.formCadastro.repSenhaCadastrar.focus();
               return false;
          }
          else if(document.formCadastro.repSenhaCadastrar.value!=document.formCadastro.senhaCadastrar.value)
          {
               alert("Senhas diferente.");
               document.formCadastro.repSenhaCadastrar.focus();
               return false;
          }
        

     }
</script>
</div>
</main>

