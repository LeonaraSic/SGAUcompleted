$(document).ready(function()
{
     /* ################  Menu Fixo ############
     Ao rollar a página e a atingir um certo tamanho, o menu principal fica fixo. */
     var nav = $('.menu');

     $(window).scroll(function(){

          if ( $( this ).scrollTop() > 0)
          {
               nav.addClass("menuFixo");
          }
          else
          {
               nav.removeClass("menuFixo");
          }
     });

     /* ##################### Scroll suave ####################
     Ao clicar em um link da principal e ele descer, ele faz de uma forma mais leve(suave). */
     $ ( '.scroll' ).click ( function ( e ){
          e.preventDefault();

          var id = $ ( this ).attr( 'href' );
          targetOffset = $( id ).offset().top,         

          $( 'html, body' ).animate({scrollTop: targetOffset - 155}, 500)
          
     });
     
     /* ######################## Slide de imagens da principal ################### */
     $( "#slide figure img:eq(0)" ).show().addClass( "ativo" );
     var texto = $( ".ativo" ).attr( "alt" );
     $( "#slide" ).prepend( "<p>" + texto + "</p>" );
      
     function slide() 
     {
          if ( $ ( ".ativo" ).next().length ) 
          {
               $( ".ativo" ).fadeOut().removeClass( "ativo" ).next().fadeIn().addClass( "ativo" );
               $( "#slide p" ).fadeOut().remove();
               texto = $( ".ativo" ).attr( "alt" );
               $( "#slide" ).fadeIn().prepend( "<p>" + texto + "</p>" );
          } 
          else
          {
               $( ".ativo" ).fadeOut().removeClass( "ativo" );
               $( "#slide figure img:first" ).fadeIn().addClass( "ativo" );
               $( "#slide p" ).fadeOut().remove();
               texto = $( ".ativo" ).attr( "alt" );
               $( "#slide" ).fadeIn().prepend( "<p>" + texto + "</p>" );
          }
     }
      
     setInterval( slide, 4000 );
      
     // Configuração dos botoes esquerda e direita
          
     $( "#avancar" ).click( slide );
      
     $( "#voltar" ).click( function () 
     {
          if ($( ".ativo" ).attr( "alt" ) != "1 - Bangkok" ) 
          {
               $( ".ativo" ).fadeOut().removeClass( "ativo" ).prev().fadeIn().addClass( "ativo" );
               $( "#slide p" ).fadeOut().remove();
               texto = $( ".ativo" ).attr( "alt" );
               $( "#slide" ).fadeIn().prepend( "<p>" + texto + "</p>" );
          } 
          else 
          {
               $( ".ativo" ).fadeOut().removeClass( "ativo" );
               $( "#slide figure img:last" ).fadeIn().addClass( "ativo" );
               $( "#slide p" ).fadeOut().remove();
               texto = $( ".ativo" ).attr( "alt" );
               $( "#slide" ).fadeIn().prepend( "<p>" + texto + "</p>" );
          }
     });

     /* ################ Animação das chamadas(textos) da principal ############### 
     Ao rolar a página e atingir 100% de altura anima as chamadas. */
     $(window).scroll(function () 
     {
          $('.chamada01').animate({ 'opacity': '1'}, 2000);
          $('.chamada02').animate({ 'opacity': '1'}, 2000);
          $('.chamada03').animate({ 'opacity': '1'}, 2000);
          $('.chamada04').animate({ 'opacity': '1'}, 2000);
     });




     /*  */


     
});




     

