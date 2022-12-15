<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Unifiedtransform') }}</title>

    <link rel="shortcut icon" href="{{asset('favicon_io/favicon.ico')}}">
    <link rel="shortcut icon" sizes="16x16" href="{{asset('favicon_io/favicon-16x16.png')}}">
    <link rel="shortcut icon" sizes="32x32" href="{{asset('favicon_io/favicon-32x32.png')}}">
    <link rel="apple-touch-icon" href="{{asset('favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('favicon_io/android-chrome-192x192.png')}}" sizes="192x192">
    <link rel="icon" href="{{asset('favicon_io/android-chrome-512x512.png')}}" sizes="512x512">

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <style>
    @import url("public/bootstrap-icons-1.7.1/font/bootstrap-icons.css");
/* @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400&display=swap'); */

@font-face {
  font-family: 'Ubuntu';
  src: URL('fonts/Ubuntu/Ubuntu-Regular.ttf') format('truetype');
}

body {
  background-color: #f8f9fa;
  font-family: 'Ubuntu', sans-serif;
}

#watermark {
  color: #efefef;
  font-size: 50px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  position: absolute;
  margin: 0;
  z-index: -1;
  left:0;
  top: 200px;
}

.nav-item > .nav.collapse {
  border: 1px solid #1693e3;
}

/* .dashboard .card {
  background-color: transparent;
} */

.bg-dark {
  background-image: linear-gradient(-45deg,#1054a9,#179ceb);
}

.nav-link {
  color: #212529;
}

.nav-link.active {
  color: #fff !important;/*#212529;*/
  border-top: 1px solid #dee2e6;
  border-left: 1px solid #dee2e6;
  border-bottom: 1px solid #dee2e6;
  /*background-color: #ffffff;#f8f9fa;#0d6efd;*/
  background-image: linear-gradient(-45deg,#1054a9,#179ceb);
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.navbar-pad {
  padding-top: 0;
  padding-bottom: 0;
}

.pos-fix-bt0-z10 {
  position: fixed;
  bottom: 0;
  z-index: 10;
}

.border-top-e6 {
  /* border-top: 1px solid #e6e6e6; */
  border-top: 1px solid #d9d9d9;
}

.border-btm-e6 {
  /* border-bottom: 1px solid #e6e6e6; */
  border-bottom: 1px solid #d9d9d9;
}

.border-rt-e6 {
  /* border-right: 1px solid #e6e6e6; */
  border-right: 1px solid #d9d9d9;
}

.loading-bg-color {
  background-color: #f8f9fa;
}

.dropdown-toggle.caret-off::after {
  display: none;
}
/*https://mdbootstrap.com/docs/standard/extended/timeline/*/
.timeline-1 {
  border-left: 3px solid #b565a7;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
  background: rgba(177, 99, 163, 0.09);
  margin: 0 auto;
  position: relative;
  padding: 50px;
  list-style: none;
  text-align: left;
  max-width: 40%;
}
  
@media (max-width: 767px) {
  .timeline-1 {
    max-width: 98%;
    padding: 25px;
  }
}
  
  .timeline-1 .event {
    border-bottom: 1px dashed #000;
    padding-bottom: 25px;
    margin-bottom: 25px;
    position: relative;
  }
  
  @media (max-width: 767px) {
    .timeline-1 .event {
      padding-top: 30px;
    }
  }
  
  .timeline-1 .event:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0;
    border: none;
  }
  
  .timeline-1 .event:before,
  .timeline-1 .event:after {
    position: absolute;
    display: block;
    top: 0;
  }
  
  .timeline-1 .event:before {
    left: -207px;
    content: attr(data-date);
    text-align: right;
    font-weight: 100;
    font-size: 0.9em;
    min-width: 120px;
  }
  
  @media (max-width: 767px) {
    .timeline-1 .event:before {
      left: 0px;
      text-align: left;
    }
  }
  
  .timeline-1 .event:after {
    -webkit-box-shadow: 0 0 0 3px #b565a7;
    box-shadow: 0 0 0 3px #b565a7;
    left: -55.8px;
    background: #fff;
    border-radius: 50%;
    height: 9px;
    width: 9px;
    content: "";
    top: 5px;
  }
  
  @media (max-width: 767px) {
    .timeline-1 .event:after {
      left: -31.8px;
    }
  }

/* https://laracasts.com/discuss/channels/laravel/loading-spinner-in-blade?page=1&replyId=611191*/
.loading {
  z-index: 20;
  position: absolute;
  top: 0;
  left:-5px;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.4);
}
.loading-content {
  position: absolute;
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  top: 40%;
  left:35%;
  animation: spin 2s linear infinite;
}
    
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* .table:not(.syllabus-table) th:first-child,
.table:not(.syllabus-table) td:first-child {
  position: sticky;
  left: 0;
  background-color: #fff;
  color: #212529;
} */

.table th, .table td {
  white-space: nowrap;
}

figure.table th, figure.table td {
  width: 100%;
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white border-btm-e6">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="bi bi-house"></i> {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                        @php
                            $latest_school_session = \App\Models\SchoolSession::latest()->first();
                            $current_school_session_name = null;
                            if($latest_school_session){
                                $current_school_session_name = $latest_school_session->session_name;
                            }
                        @endphp
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            @if (session()->has('browse_session_name') && session('browse_session_name') !== $current_school_session_name)
                                <a class="nav-link text-danger disabled" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-exclamation-diamond-fill me-2"></i> Browsing as Academic Session {{session('browse_session_name')}}</a>
                            @elseif(\App\Models\SchoolSession::latest()->count() > 0)
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Current Academic Session {{$current_school_session_name}}</a>
                            @else
                                <a class="nav-link text-danger disabled" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-exclamation-diamond-fill me-2"></i> Create an Academic Session.</a>
                            @endif
                        </li>
                    </ul>
                    @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="badge bg-light text-dark">{{ ucfirst(Auth::user()->role) }}</span>
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('password.edit')}}">
                                        <i class="bi bi-key me-2"></i> Change Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-door-open me-2"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>

    <div id="watermark">
        <p>Unifiedtransform</p>
    </div>
</body>
</html>
