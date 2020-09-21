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
      <link rel="stylesheet" href="../css/cursos.css">

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
        <nav class="nav-wrapper transparent">
          <div class="container">
            <a href="/" class="brand-logo"><img class="imagem_logo" alt="Logo da Share" src="../img/globo.png"></a>
            <a href="" class="sidenav-trigger" data-target = "mobile-menu">
              <i class="material-icons">menu</i>
            </a>
             
             <!--menu desktop-->
            <ul class="right hide-on-med-and-down">
              <li><a class="link_menu" href="#panel-heading">Notícias</a></li>
              <li><a class="link_menu" href="#">Institucional</a></li>
              <li><a class="link_menu" href="/cursos">Cursos</a></li>
              <li><a class="link_menu" href="#">Inscrições</a></li>
              <li><a class="link_menu" href="/faq">FAQ</a></li>
              <li><a class="link_menu" href="login.html">Login</a></li>
            </ul>
            <!--menu mobile-->
            <ul class="sidenav lighten-2" id="mobile-menu">
              <li><a href="#panel-heading">Notícias</a></li>
              <li><a href="modelo.html">Institucional</a></li>
              <li><a href="/cursos">Cursos</a></li>
              <li><a href="#">Inscrições</a></li>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>  
          </div>
        </nav> 
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

        <h1 class="titulo_faq">F.A.Q.</h1>
        <h2><b>FREQUENTLY ASKED QUESTIONS</b></h2>
        <h3>O F.A.Q. é uma compilação de perguntas frequentes</h3>
        <h3 class="texto_faq_titulo">esclarecendo possíveis dúvidas que possam surgir.</h3>
        <div class="row">
          <div class="col s12 m10 offset-m1 l10 offset-l1">
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Como eu faço para ser aluno?</div>
                  <div class="collapsible-body"><span>O processo é feito a partir de um formulário online através da nossa página do facebook.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Como eu faço para ser professor?</div>
                  <div class="collapsible-body"><span>O processo seletivo é feito a partir de um formulário online através da nossa página do facebook, seguido por uma entrevista a ser agendada.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Como eu faço para ser um membro administrativo?</div>
                  <div class="collapsible-body"><span>O processo seletivo é feito a partir de um formulário online através da nossa página do facebook, seguido por uma entrevista a ser agendada.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Quando ocorrem os processos seletivos?</div>
                  <div class="collapsible-body"><span>No primeiro semestre, ocorre geralmente no mês de março. No segundo semestre, ocorre geralmente no mês de agosto.Os processos ocorrem na seguinte ordem: 1.Membros administrativos; 2.Professores; 3.Alunos</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Para quantos cursos posso me inscrever?</div>
                  <div class="collapsible-body"><span>Você pode se inscrever em até dois cursos. As pessoas que se inscreverem em mais do que dois cursos, serão excluídas da seleção.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Preciso comparecer à aula magna/confirmação de matrícula?</div>
                  <div class="collapsible-body"><span>Sim, o comparecimento é obrigatório. A ausência no evento, sem justificativa enviada para o e-mail share.projeto.ufscar@gmail.com, pode acarretar na perda de sua vaga.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Posso enviar outra pessoa no meu lugar, para a confirmação de matrícula?</div>
                  <div class="collapsible-body"><span>Não, a matrícula não pode ser realizada por terceiros. Caso você, não posso comparecer em nenhum dos dias da confirmação de matrícula, entre em contato por e-mail.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>O pagamento da taxa de matrícula é obrigatório?</div>
                  <div class="collapsible-body"><span>Somente em cursos presenciais, exceto no caso de o aprovado apresente-se em situação de carência financeira, neste caso, pedimos que entre em contato conosco.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Qual o valor da taxa?</div>
                  <div class="collapsible-body"><span>A taxa de matrícula tem valor simbólico de R${'$'}5,00. Esse valor é revertido para melhorias nas aulas e na entidade com um todo.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">expand_more</i>Quando receberei meu certificado de conclusão?</div>
                  <div class="collapsible-body"><span>Os certificados são enviados após o final do curso por e-mail. Geralmente, levam cerca de 2 meses para serem confeccionados e enviados a todos os concluintes. Este certificado é enviado apenas para aqueles que foram aprovados no(s) seu(s) curso(s).</span></div>
                </li>
                
             </ul>
            
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