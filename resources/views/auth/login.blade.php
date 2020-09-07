<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>Share</title>
      <link rel="icon" href="../img/globo.png">
      <!--<link rel="stylesheet" href="../css/reset.css">-->
      <link rel="stylesheet" href="../css/login.css">
    </head>

    <body>

      <!--cabeçalho-->
      <header>
        <nav class="nav-wrapper transparent">
          <div class="container">
            <a href="index.html" class="brand-logo"><img class="imagem_logo" alt="Logo da Share" src="../img/globo.png"></a>
            <a href="" class="sidenav-trigger" data-target = "mobile-menu">
              <i class="material-icons">menu</i>
            </a>

            <!--menu desktop-->
            <ul class="right hide-on-med-and-down">
              <li><a class="link_menu" href="index.html">Notícias</a></li>
              <li><a class="link_menu" href="modelo.html">Institucional</a></li>
              <li><a class="link_menu" href="#">Cursos</a></li>
              <li><a class="link_menu" href="#">Inscrições</a></li>
              <li><a class="link_menu" href="login.html">Login</a></li>
            </ul>
            <!--menu mobile-->
            <ul class="sidenav lighten-2" id="mobile-menu">
              <li><a href="index.html">Notícias</a></li>
              <li><a href="modelo.html">Institucional</a></li>
              <li><a href="#">Cursos</a></li>
              <li><a href="#">Inscrições</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
          </div>
        </nav>
      </header>

      <main>
      	  
    	<div class="container caixa_login">
	        <div class="z-depth-1 grey lighten-4 row geral_login">
	        	<img class="imagem_login" alt="Logo da Share" src=" ../img/share-logo.png">

	        	<form class="col s12" method="post">
		            <div class='row'>
		            	<div class='input-field col s12'>
		                	<input class='validate' type='email' name='email' id='email' />
		                	<label for='email'>Email</label>
		              </div>
		            </div>

		            <div class='row'>
		            	<div class='input-field col s12'>
		                	<input class='validate' type='password' name='password' id='password' />
		                	<label for='password'>Senha</label>
		              	</div>
		            </div>
		            <div class='row'>
		            	<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect botao_enviar'>Entrar</button>
		            </div>
	        	</form>
	        </div>
    	</div>


    <div class="section"></div>
    <div class="section"></div>

	

	</main>  


      <!--Rodapé-->
      <footer class="rodape_pag">
        <ul class="redes_sociais">
          <li><a class="facebook" href="https://www.facebook.com/shareideias/">Facebook</a></li>
          <li><a class="instagram" href="https://www.instagram.com/shareideias/">Instagram</a></li>
          <li><a class="linkedin" href="https://www.linkedin.com/in/shareideias/">LinkedIn</a></li>
        </ul>
        <p>&copy Share. Todos os direitos reservados.</p>
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


      <!--JS para zoom da imagem das notícias-->
      <script>
        document.addEventListener("DOMContentLoaded", function(){
          const gallery = document.querySelectorAll(".materialboxed");
          M.Materialbox.init(gallery, {});
        });
      </script>


    </body>
  </html>