<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>Share - Administração</title>
      <link rel="icon" href="../img/globo.png">
      <!--<link rel="stylesheet" href="../css/reset.css">-->
      <link rel="stylesheet" href="../css/administração.css">
    </head>

    <body>

      <!--cabeçalho-->
      <header>
        @include('components.componente_navbar')
      </header>
      <!--fim cabeçalho-->
      
      <main>

        <h2>Administração</h2>

        <div class="container">
          <div class="row">
            
              <div class="col 14 m6 s12">
                <h3 class="news_title">Recentes</h3>
                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">short_text</i>
                    <span class="title">Recente 1</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">short_text</i>
                    <span class="title">Recente 2</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">short_text</i>
                    <span class="title">Recente 3</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>

                <h3 class="news_title">Notícias</h3>
                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">receipt</i>
                    <span class="title">Notícia 1</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">receipt</i>
                    <span class="title">Notícia 2</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">receipt</i>
                    <span class="title">Notícia 3</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">receipt</i>
                    <span class="title">Notícia 4</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>
              </div>
            


            
              <div class="col 14 m6 s12">
                <h3 class="news_title">Páginas</h3>
                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Sobre nós</span>
                    <p>A Share - Centro de Línguas é uma entidade estudantil da UFSCar - Campus Sorocaba que surgiu no ano de 2017, com o intuito de disponibilizar o ensino de línguas para os alunos da universidade. Atualmente, além de oferecermos diversos cursos de línguas ainda atuamos em outras áreas (como dança e fotografia) e visamos sempre atingir novos objetivos.
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Institucional</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Cursos</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


                <ul class="collection">
                  <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Inscrições</span>
                    <p>
                      Text
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>
                  </li>
                </ul>


              </div>


          </div>  
        </div>
    </main>  


      <!--Rodapé-->
      <footer class="rodape_pag">
        <p class="rodape_pag">&copy Share. Todos os direitos reservados.</p>
      </footer>
          

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <!--JS para barra de navegação no mobile-->
      <script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
      </script>

    </body>
  </html>