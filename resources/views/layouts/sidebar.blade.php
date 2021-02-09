<!doctype html>
<html lang="en">

<head>
  @yield('head')
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/sidebar/style.css')}}">
  <style type="text/css">
    .active {
      background-color: #300D41;
      /*color: gold;*/
    }
  </style>
</head>

<body>
  @php($user = Session::get('user'))

  @if($user->hak_akses == 'superadmin')

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
      <h1><a href="index.html" class="logo"><img src="{{asset('logo.png')}}" alt="" width="80" height="80"></a></h1>
      <ul class="list-unstyled components mb-5">
        <li>
          <a href="#"><span class="fa fa-home"></span> Dashboard</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-signal"></span> Add Data FOD</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-()"></span> Add New Student</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-tasks"></span> Add Program Level</a>
        </li>
        <!-- <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span> Services</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li> -->
      </ul>

      <!-- <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div> -->
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button> -->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              {{-- @if(Session::has())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else --}}
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  Welcome {{ $user->name }} &nbsp;<span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('logout_all') }}">
                    {{ __('Logout') }}
                  </a>

                  {{-- <form id="logout-form" action="{{ url('logout_all') }}" method="POST" style="display: none;">
                    @csrf
                  </form> --}}
                </div>
              </li>
              {{-- @endguest --}}
            </ul>

          </div>
        </div>
      </nav>

      <!-- <h2 class="mb-4">LIA FOD</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
      @yield('content')
    </div>
  </div>

  <script src="{{asset('js/sidebar/jquery.min.js')}}"></script>
  <script src="{{asset('js/sidebar/popper.js')}}"></script>
  <script src="{{asset('js/sidebar/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/sidebar/main.js')}}"></script>

  @elseif($user->hak_akses == 'guru')

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
      <h1><a href="index.html" class="logo"><img src="{{asset('logo.png')}}" alt="" width="80" height="80"></a></h1>
      <ul class="list-unstyled components mb-5">
        <li>
          <a href="#"><span class="fa fa-home"></span> Dashboard</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-signal"></span>Menu Guru</a>
        </li>
        {{-- <li >
              <a href="#"><span class="fa fa-user"></span> Add New Student</a>
          </li>
          <li >
              <a href="#"><span class="fa fa-tasks"></span> Add Program Level</a>
          </li> --}}
        <!-- <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span> Services</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li> -->
      </ul>

      <!-- <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div> -->
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button> -->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              {{-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  Welcome {{ Auth::user()->name }} &nbsp;<span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest --}}

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  Welcome {{ $user->name }} &nbsp;<span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  {{-- <a class="dropdown-item" href="{{ url('logout_all') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a> --}}
                  <a class="dropdown-item" href="{{ url('logout_all') }}">
                    {{ __('Logout') }}
                  </a>

                  {{-- <form id="logout-form" action="{{ url('logout_all') }}" method="POST" style="display: none;">
                    @csrf
                  </form> --}}
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>

      <!-- <h2 class="mb-4">LIA FOD</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
      @yield('content')
    </div>
  </div>

  <script src="{{asset('js/sidebar/jquery.min.js')}}"></script>
  <script src="{{asset('js/sidebar/popper.js')}}"></script>
  <script src="{{asset('js/sidebar/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/sidebar/main.js')}}"></script>

  @else

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
      <h1><a href="index.html" class="logo"><img src="{{asset('logo.png')}}" alt="" width="80" height="80"></a></h1>
      <ul class="list-unstyled components mb-5">
        <li>
          <a href="#"><span class="fa fa-home"></span> Dashboard</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-signal"></span> Menu Siswa </a>
        </li>
        {{-- <li >
              <a href="#"><span class="fa fa-user"></span> Add New Student</a>
          </li>
          <li >
              <a href="#"><span class="fa fa-tasks"></span> Add Program Level</a>
          </li> --}}
        <!-- <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span> Services</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li> -->
      </ul>

      <!-- <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div> -->
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button> -->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              {{-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  Welcome {{ Auth::user()->name }} &nbsp;<span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest
            </ul> --}}
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                Welcome {{ $user->name }} &nbsp;<span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('logout_all') }}">
                  {{ __('Logout') }}
                </a>

                {{-- <form id="logout-form" action="{{ url('logout_all') }}" method="POST" style="display: none;">
                  @csrf
                </form> --}}
              </div>
            </li>

          </div>
        </div>
      </nav>

      <!-- <h2 class="mb-4">LIA FOD</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
      @yield('content')
    </div>
  </div>

  <script src="{{asset('js/sidebar/jquery.min.js')}}"></script>
  <script src="{{asset('js/sidebar/popper.js')}}"></script>
  <script src="{{asset('js/sidebar/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/sidebar/main.js')}}"></script>

  @endif


</body>

</html>