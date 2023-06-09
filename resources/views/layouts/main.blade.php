<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SGE | Vila das Artes</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon_vila.png')}}" />
  <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
  @stack('styles')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/" class="text-nowrap logo-img">
            <img src="{{asset('images/logos/logo_vila.png')}}" width="180" alt="Logo Vila das Artes" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-sea nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">CONSULTAS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('alunos.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Alunos</span>
              </a>
            </li>

            @can('admin')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('coordenacoes.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-plus"></i>
                </span>
                <span class="hide-menu">Coordenações</span>
              </a>
            </li>
            @endcan

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('cursos.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-plus"></i>
                </span>
                <span class="hide-menu">Cursos</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-file-plus"></i>
                </span>
                <span class="hide-menu">Professores</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('turmas.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-chalkboard"></i>
                </span>
                <span class="hide-menu">Turmas</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">CADASTROS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('alunos.create')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Novo Aluno(a)</span>
              </a>
            </li>

            @can('admin')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('coordenacoes.create')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-plus"></i>
                </span>
                <span class="hide-menu">Nova Coordenação</span>
              </a>
            </li>
            @endcan
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('cursos.create')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-plus"></i>
                </span>
                <span class="hide-menu">Novo Curso</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-file-plus"></i>
                </span>
                <span class="hide-menu">Novo Professor</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-users-plus"></i>
                </span>
                <span class="hide-menu">Nova Turma</span>
              </a>
            </li>

            

          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <!-- ICONE DE NOTIFICAÇÕES
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              -->
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <strong>{{ Auth::user()->name }}</strong>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('images/profile/user-2.png')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

    @yield('content')

    </div>
  </div>
  <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/sidebarmenu.js')}}"></script>
  <script src="{{asset('js/app.min.js')}}"></script>
  <script src="{{asset('libs/simplebar/dist/simplebar.js')}}"></script>
  @stack('scripts')
</body>

</html>