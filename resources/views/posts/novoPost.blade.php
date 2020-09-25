<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="{{ URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('../css/materialize.min.css') }}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>Share</title>
      <link rel="icon" href="{{ asset('../img/globo.png') }}">
  
      <!--<link rel="stylesheet" href="../css/reset.css">-->
      <link rel="stylesheet" href="{{ asset('../css/cursos.css') }}">

      <!--animate.css-->
      <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css') }}"/>
    

      <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
        <!--wow.js-->
      <script src="{{ asset('../js/wow.min.js') }}"></script>
      <script>new WOW().init();</script>

      <!--fonte-->
      <style>
        @import url("{{ URL::asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap') }}");
      </style>

      
    </head>

    <body>

      <!--cabeçalho-->
      <header>
        @include('components.componente_navbar')
      </header>
      <!--fim cabeçalho-->

      <main>

        <!--POP UP-->
      <div class="janela" id="fechar">
          <div class="conteudo-janela">
            <a class="fechar" href="#fechar">X</a>
            <h2 class="titulo-janela">Processo seletivo</h2>
            <p>Está interessado em fazer parte da história de nossa entidade?</p>
            <p>Se inscreva em um ou mais de nossos processos:</p>
            <p class="datas-janela">de 28/02 até 14/03:</p>
              <div class="botaoadm">
                <a href=""><button class='col s12 btn btn-large waves-effect'>Administrativo</button></a><br>
              </div>
              <p class="datas-janela">de 28/02 até 14/03:</p>
              <div class="botaoprof">
                <a href=""><button class='col s12 btn btn-large waves-effect'>Professor</button></a><br>
              </div>
              <p class="datas-janela">de 26/03 até 30/03:</p>
              <div class="botaoaluno">
                <a href=""><button class='col s12 btn btn-large waves-effect'>Aluno</button></a><br>
              </div>
          </div>
        </div>
        <!--FIM POP UP-->

        <form action="{{ route('blogStore')}}" method="POST">
          @csrf
            <div>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Título"/>
                <label for="html">Texto</label>
                <input type="text" name="html" id="html" placeholder="Texto"/>
                <label for="criadoPor">Criador</label>
                <input type="number" name="criadoPor" id="criadoPor" placeholder="Criador"/>
            </div>
            <button type="submit">Salvar</button>
            <button type="button" onclick="window.location='{{ URL::previous() }}'">Cancelar</button>
        </form>

      </main>  

      <!--Rodapé-->
      <footer class="rodape_pag">
       <ul class="redes_sociais">
          <li><a class="facebook" href="https://www.facebook.com/shareideias/">Facebook</a></li>
          <li><a class="instagram" href="https://www.instagram.com/shareideias/">Instagram</a></li>
          <li><a class="linkedin" href="https://www.linkedin.com/in/shareideias/">LinkedIn</a></li>
        </ul>
        <a class="white-text" href="https://br.freepik.com/fotos-vetores-gratis/escola">Foto do header criado por jcomp - br.freepik.com</a> <br>
        <span class="white-text"> &copy Share. Todos os direitos reservados.</span>
      </footer>
          

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>

    

      <!--JS para zoom da imagem das notícias-->
      <script>
        document.addEventListener("DOMContentLoaded", function(){
          const gallery = document.querySelectorAll(".materialboxed");
          M.Materialbox.init(gallery, {});
        });
      </script>

      <script>  
       $(document).ready(function(){
    $('.collapsible').collapsible();
  });

      </script>

      <script>
        $(document).ready(function(){
    $('.slider').slider();
  });
      </script>

      

       


      <!--JS temporário para modal-->
      <script type="text/javascript" src="../js/modal.js"></script>

        <!--JS para barra de navegação no mobile-->
      <script>
        $(document).ready(function(){
   $('.sidenav').sidenav();
  });

      
      </script>


    </body>
  </html>