<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Painel Administrativo - Nome do Restaurante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow"">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" style="color: white;">Nome do Restaurante</a>
                <ul class="navbar-nav px-3">
                  <li class="nav-item text-nowrap">
                  </li>
                </ul>
              </nav>
          
              <div class="container-fluid">
                <div class="row">
                  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('estoque.index')}}">
                               <span data-feather="archive"></span>
                                Estoque
                              </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('receitas.index')}}">
                               <span data-feather="book-open"></span>
                                Receitas
                              </a>
                          </li>
                      </ul>
                    </div>
                  </nav>
                   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 2%;">
                      @yield('content')
                  </main>
                </div>

              </div>
    </body>
</html>
          

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
            feather.replace()
          </script>
