<main class="formularioLogin">

<form action="mvc/controllers/controll.php" method="POST" name="formLogin" id="formLogin" class="formLogin" onsubmit="return loginValidar()">
          <!--  ############### Links de Entrar e Cadastrar ######################### -->
          <div class="menuLogin">  
               <ul>

                    <li  class="entrar loginEntrar" >
                         
                         <a href="?v=<?php echo base64_encode ( 'login' ) ?> " ><i class="fas fa-user user"></i>Entrar</a>
                    </li>

                    <li  class="registrar cadastro loginCadastro " >     
                         <a href=" ?v=<?php echo base64_encode ( 'cadastrar' ) ?> "  class="click"> <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                    </li>
               
               </ul>
          </div>
          <!-- ##################### Formulário de login ####################### -->
          <div class="form formLogin" id="formlogin">

               <input type="text" name="cpfLogin" id="cpf" class="campos" placeholder="CPF">              
               <input type="email"  name="emailLogin" id="emailLogin" class="campos campo02" placeholder="E-mail">
               
               <input type="password" name="senhaLogin" id="senhaLogin" class="campos campo03" placeholder="Senha">
               
               <input type="submit" value="Enviar" class=" botaoLogin campos " name="Enviar">

               <div class="color"> <?php include_once 'mvc/controllers/cadastrar.php' ;?></div>

          <!-- ############### Chamadas para fazer o cadastro ############# -->

               <div class="linkLogin" >

                    <ol class="link">
                         <li class="conta">Ainda não possui uma conta? 
                              <a href=" ?v=<?php echo base64_encode ( 'cadastrar' ) ?> ">Cadastre-se </a>
                         </li>
                    </ol>

               </div>
          <!-- #################### Botão para retornar para a Index ####################### -->
               <div class="borda"></div>
               
               <div class="retornarIndex">
                    <ol class="btnRetornar">
                         <li><a href="index.php" title="Fechar">Fechar</a></li>
                    </ol>
               </div>
               
          </div>

</form>
          <!-- ############################# Footer ###################### -->

               <div class="copyright apaga">

               <div class="textoCopy">
                    <p>
                         <span class=" textoApagado "> &copy; 2019  Copyright:</span> SGAU               
                    </p>
               </div>

               </div>

     <script type="text/javascript">
     function loginValidar()
     {
          var msgSucess = document.getElementById('msgSucesso');

          if(document.formLogin.emailLogin.value.indexOf('@') == -1 || document.formLogin.emailLogin.value.indexOf('.') == -1 || document.formLogin.emailLogin.value == "" || document.formLogin.emailLogin.value == null)
          {
               alert("E-mail inválido, por favor digite um e-mail válido.");
               document.formLogin.emailLogin.focus();
               return false;
          }
          else if(document.formLogin.senhaLogin.value == "" || document.formLogin.senhaLogin.value == null)
          {
               alert("Senha não foi preenchida, por favor preencha.");
               document.formLogin.senhaLogin.focus();
               return false;
          }
          else if(document.formLogin.senhaLogin.value.length < 8 || document.formLogin.senhaLogin.value.length >8)
          {
               alert("Campo senha precisa ter 8 caracteres.");
               document.formLogin.senhaLogin.focus();
               return false;
          }


     }
</script>

</main>