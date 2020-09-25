<nav class="nav-wrapper transparent">
    <div class="container">
      <a href="{{ route('index') }}" class="brand-logo"><img class="imagem_logo" alt="Logo da Share" src="{{ asset('../img/globo.png') }}"></a>
      <a href="" class="sidenav-trigger" data-target = "mobile-menu">
        <i class="material-icons">menu</i>
      </a>

      <!--menu desktop-->
      <ul class="right hide-on-med-and-down">
        <li><a class="link_menu" href="#panel-heading">Notícias</a></li>
        <li><a class="link_menu" href="#">Institucional</a></li>
        <li><a class="link_menu" href="{{ route('cursos') }}">Cursos</a></li>
        <li><a class="link_menu" href="#">Inscrições</a></li>
        <li><a class="link_menu" href="{{ route('faq') }}">FAQ</a></li>
        <li><a class="link_menu" href="login.html">Login</a></li>
      </ul>
      <!--menu mobile-->
      <ul class="sidenav lighten-2" id="mobile-menu">
        <li><a href="#panel-heading">Notícias</a></li>
        <li><a href="#">Institucional</a></li>
        <li><a href="{{ route('cursos') }}">Cursos</a></li>
        <li><a href="#">Inscrições</a></li>
        <li><a href="{{ route('faq') }}">FAQ</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </div>
</nav>