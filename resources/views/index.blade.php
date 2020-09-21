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
      <title>Share</title>
      <link rel="icon" href="../img/globo.png">
  
      <!--<link rel="stylesheet" href="../css/reset.css">-->
      <link rel="stylesheet" href="../css/index.css">

      <!--animate.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--wow.js-->
      <script src="../js/wow.min.js"></script>
      <script>new WOW().init();</script>

      <!--fonte-->
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
      </style>

      
    </head>

    <body>

      <!--cabeçalho-->
      <header>
        @include('componente_navbar')
      </header>
      <!--fim cabeçalho-->

      <!--BANNER-->
      <div class="parallax-container">
        <!--<img class="responsive-img fotinho" src="../img/logoparaheader.png">-->
        <h1 class="textoheadertitulo">Share</h1>
          <h2 class="textoheader">Compartilhando<br>ideias</h2>
        <div class="parallax">
          <img src="../img/alunoheader.png">
        </div>
      </div>
      <!--<img class="responsive-img" src="../img/aluno.png">-->
      <!--FIM BANNER-->

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

        <!--NOTICIAS-->
       <div class="slider">
    <ul class="slides">
      <li>
        <!--podemos adicionar imagem aqui-->
        <div class="caption center-align">
          <h3>Notícia 1</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        <a class="btn waves-effect white grey-text darken-text-2">Checar notícias</a>
        </div>
      </li>
      <li>
         <img src="../img/noticia1.png">
        <div class="caption left-align">
          <h3>Notícia 2</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        <a class="btn waves-effect white grey-text darken-text-2">Checar notícias</a>
        </div>
      </li>
      <li>
        <img src="../img/noticia_2.png">
        <div class="caption right-align">
          <h3>Notícia 3</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        <a class="btn waves-effect white grey-text darken-text-2">Checar notícias</a>
        </div>
      </li>
      <li>
       <img src="../img/noticia3.png">
        <div class="caption center-align">
          <h3>Notícia 4</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        <a class="btn waves-effect white grey-text darken-text-2">Checar notícias</a>
        </div>
      </li>
    </ul>
  </div>
         
        <!--FIM NOTICIAS-->


        <!--REDES SOCIAIS-->
        <div class="redes">
         <ul class="redes_sociais">
          <li><a class="facebook iconepreto_fb" href="https://www.facebook.com/shareideias/">Facebook</a></li>
          <li><a class="instagram iconepreto_ig" href="https://www.instagram.com/shareideias/">Instagram</a></li>
          <li><a class="linkedin iconepreto_ln" href="https://www.linkedin.com/in/shareideias/">LinkedIn</a></li>
        </ul>
      </div>
        <!--REDES SOCIAIS-->


        <!--MISSA0-->
        <div class="row rowzeras1">
          <h2 id="instit1" class="wow animate__animated animate__fadeIn">Nossa Missão</h2>
          
          <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="card cardzeras1 wow animate__animated animate__fadeIn" data-wow-delay="0.5s">
              Visamos a <b class="negritocartao1">construção do conhecimento</b> nas mais diversas áreas: idiomas, cultura e até softwares. Tudo isso de forma <b class="negritocartao1">íntegra e gratuita</b>, preservando, assim, tanto o ensinar quanto o aprender.
            </div>
          </div>
        </div>
        <!--FIM MISSAO-->

      <img class="responsive-img" src="../img/aula_fade1.png">

        <!--CONQUISTAS-->
         <div class="row rowzeras2">
          <!--<h2 id=instit2></h2>-->
          <div class="col s12 m8 offset-m2 l8 offset-l2">
            <div class="card cardzeras2">
              No primeiro semestre de 2020 <b class="negritocartao2">mais de 3.900 pessoas</b> tanto no Brasil quanto no exterior se inscreveram em cursos da Share
            </div>
          </div>

          <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="card cardzeras21">
              Oferecemos <b class="negritocartao2">18 cursos</b> e ofertamos <b class="negritocartao2">370 vagas</b>
            </div>
          </div>

          <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="card cardzeras22">
              Fomos destaque no <a class="linknot" href=“https://g1.globo.com/sp/sorocaba-jundiai/noticia/2020/04/23/centro-de-linguas-da-ufscar-sorocaba-recebe-inscricoes-para-cursos-gratuitos.ghtml” target=“_blank”>G1 Notícias</a>, <a class="linknot" href=“https://www.sorocaba.ufscar.br/noticia?codigo=12631” target=“_blank”>Site da UFSCar Sorocaba</a>,<br> Rádio Jornal Cruzeiro do Sul e TV Sorocaba(SBT)
            </div>
          </div>
        </div>
        <!--FIM CONQUISTAS-->

        <h3 class="wow animate__animated animate__slideInUp citacao">"Conectar o desejo de ensinar com a vontade de aprender"</h3>

        <!--DEPOIMENTOS-->
        <div class="row rowzeras3">
          
          <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="card cardzeras3">
              <i>"Fazer o curso de oratória na share, para mim, foi incrível! Além de ter a oportunidade de conhecer pessoas de outros cursos e pessoas de fora da UFSCar, as aulas me proporcionaram um aprendizado muito rico sobre técnicas de apresentação, como se portar durante um discurso e como ser claro e coerente ao passar uma mensagem verbal. Indico a Share para todos aqueles que tem vontade de aprender de uma forma inovadora!"</i> <br>- <b>Vitória Benevenuto, aluna do curso de Oratória de 2019</b>
            </div>
          </div>

          <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="card cardzeras3">
            <i>"Eu fiz o curso de espanhol pós intermediário e foi muito bom, gostei muito da relação aluno-professor que eu tive com a minha professora (tanto que agora ela é minha aluna de alemão). Já sabia muito do idioma, mas eu não tinha nenhuma prova ou certificado e isso me ajudou muito; quase fui contratada como professora de espanhol esse ano, mas por não atender meu horario de disponibilidade mesmo que eu não consegui"</i> <br>- <b>Helena do Carmo, aluna do curso de Espanhol Pós-intermediário</b>
            </div>
          </div>

          <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="card cardzeras3">
            <i>"O Naruto pode ser um pouco duro as vezes, talvez você não saiba disso, mas o Naruto também cresceu sem pai. Na verdade ele nunca conheceu nenhum de seus pais, e nunca teve nenhum amigo em nossa aldeia. Mesmo assim eu nunca vi ele chorar, ficar zangado ou se dar por vencido, ele está sempre disposto a melhorar, ele quer ser respeitado, é o sonho dele e o Naruto daria a vida por isso sem hesitar. Meu palpite é que ele se cansou de chorar e decidiu fazer alguma coisa a respeito!"</i> - <b>Kakashi, ex-aluno da academia ninja de 201x</b>
            </div>
          </div>
        </div>
        <!--FIM DEPOIMENTOS-->

        <div class="parallax-container">
          <div class="parallax">
            <img src="../img/time_parallax.png">
          </div>
        </div>


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
        $('.parallax').parallax();
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