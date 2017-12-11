<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aguakate App</title>
    <link rel="stylesheet" href="../public/assets/css/bulma.css">
    <link rel="stylesheet" href="../public/assets/plugins/font-awesome-4.7.0/css/font-awesome.css">
  </head>
  <body>
    <!-- start-navbar -->
    <nav class="navbar is-light">
      <div class="navbar-brand">
        <a class="navbar-item" href="#">
        <img src="../public/images/bulma.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="#">
            Inicio
          </a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href="#">
              Cocinas
            </a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item" href="/documentation/overview/start/">
                Overview
              </a>
              <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                Modifiers
              </a>
              <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                Columns
              </a>
              <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                Layout
              </a>
              <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                Form
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                Elements
              </a>
              <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                Components
              </a>
            </div>
          </div>
          <a class="navbar-item" href="#">
            Transforma tu negocio
          </a>
          <a class="navbar-item" href="#">
            Ayuda
          </a>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="field is-grouped">
              <p class="control">
                <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
                  <span class="icon">
                    <i class="fa fa-user-circle"></i>
                  </span>
                  <span>
                    Iniciar Sesión
                  </span>
                </a>
              </p>
              <p class="control">
                <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
                  <span class="icon">
                    <i class="fa fa-hand-o-up"></i>
                  </span>
                  <span>Registrarme</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end-navbar -->
    <!-- start-hero -->
    <div class="hero is-light">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-vcentered">
            <div class="column is-8">
              <h1 class="title is-1">El menú de tu restaurante favorito, ahora siempre disponible.</h1>
            </div>
          </div>
          <div class="columns is-vcentered">
            <div class="column is-4">
              <div class="field">
                <label class="label is-large">Lugar</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input is-large" name="" value="" placeholder="Comalcalco, Tabasco">
                  <span class="icon is-small is-left">
                    <i class="fa fa-map-marker"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="column is-4">
              <div class="field">
                <label class="label is-large">Cocina</label>
                <p class="control has-icons-left">
                  <span class="select is-large">
                    <select>
                      <option>Comida Mexicana</option>
                      <option>Pizzas y Pastas</option>
                      <option>Tacos al pastor</option>
                    </select>
                  </span>
                  <span class="icon is-small is-left">
                    <i class="fa fa-cutlery"></i>
                  </span>
                </p>
              </div>
            </div>
            <div class="column is-4">
              <label class="label is-large">Explorar sabores</label>
              <button type="button" name="button" class="button is-primary is-large">
                <span class="icon is-small">
                  <i class="fa fa-search"></i>
                </span>
                <span>
                  Buscar
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
          <div class="container">
            <ul>
              <li class="is-active"><a href="#">Overview</a></li>
              <li><a href="#">Overview</a></li>
              <li><a href="#">Overview</a></li>
              <li><a href="#">Overview</a></li>
              <li><a href="#">Overview</a></li>
              <li><a href="#">Overview</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- end-hero -->
    <div class="container">

    </div>
    <script type="text/javascript" src="../public/assets/js/bulma.js"></script>
  </body>
</html>
