<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Surveillant</title>
    <link rel="stylesheet" href={{ asset('bulma/css/bulma.min.css') }}>
    @yield('css')
</head>

<body>
    <main class="section">
        <div class="container">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                  <a class="navbar-item" href={{ route('surveillants.index') }}>
                    Liste des surveillants
                  </a>

                  <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                  </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                  <div class="navbar-end">
                    <div class="navbar-item">
                      <div class="buttons">
                        <a class="button is-primary" href={{ route('surveillants.create') }}>
                          <strong>Ajouter</strong>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            @yield('content')
        </div>
    </main>
</body>

</html>
