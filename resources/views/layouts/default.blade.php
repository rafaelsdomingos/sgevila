<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    @stack('styles')
    <title>SGE | Vila das Artes</title>
</head>
<body>
    <div class="container">
       
        <nav class="navbar navbar-expand-lg bg-light shadow p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="https://assets.website-files.com/60b08b651ddad74a7f7080c3/60b5d2e327813d4dd34be27c_logomarca-vila-das-artes.png" alt="Logo" height="24" class="d-inline-block align-text-top">
                </a>
              
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  href="/alunos">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/professores">Professores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/turmas">Turmas</a>
                    </li>
                    </ul>
                </div>
            </div>
          </nav>

        @yield('content')
    </div>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    @stack('scripts')
</body>
</html>