<?php
     if ( isset ( $_GET [ 'v' ] ) )
     {
          $nomeDaView = base64_decode ( $_GET [ 'v' ]  ) . '.php' ;

          if ( file_exists ( 'mvc/views/blogPaginas/' . $nomeDaView  ) )
          {

          include_once  'mvc/views/blogPaginas/' . $nomeDaView ;

          }
          else 
          {
          echo '<h1>404 - Página não encontrada!</h1>' ;
          }
     }
?>