<!DOCTYPE html>
<html lang="en" dir="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shop Store | ადმინ პანელი </title>
    <meta name="author" content="Davit Gakhokia , დავით გახოკია"/>
    <link rel="shortcut icon" href="Backend/images/logo/logo.png" type="image/x-icon" />
    <link rel="icon" href="Backend/images/logo/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@8af0edd/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('Backend/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/css/plugins/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/css/plugins/datatables.min.css') }}"  rel="stylesheet"  />


    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-ingiri-arial/css/bpg-ingiri-arial.min.css">
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-ingiri/css/bpg-ingiri.min.css">




    <style>
       *{
         font-family: "BPG Ingiri Arial", sans-serif;
         /* font-family: "BPG Ingiri", sans-serif; */
        }
    </style>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="{{ asset('Backend/images/logo/logo.png') }}" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <div class="search-bar">
                    <input type="text" placeholder="ძიება">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <a href="/" target="_blank">
                    <i class="fas fa-globe fa-2x"></i>
                </a>
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->

                <!-- Notificaiton -->

                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="{{ asset('Backend/images/logo/logo.png') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a  class="dropdown-item" href="#0">
                                <i class="i-Lock-User mr-1"></i>
                                {{ Auth::user()->name }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                               <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <!-- Menu Dashboards-->

            @include('backend.partials.menu')

            <!--// Menu Dashboards-->

            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                @include('backend.partials.notifications')
                <!-- Main Content  -->
                @yield('content')
                <!-- // Main Content  -->
            </div>
            <!-- Footer Start -->

            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->

    <!-- ============ Search UI End ============= -->
    <script src="{{ asset('Backend/js/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('Backend/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Backend/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Backend/js/scripts/script.min.js') }}"></script>
    <script src="{{ asset('Backend/js/scripts/sidebar.large.script.min.js') }}"></script>


    <script src="{{ asset('Backend/js/plugins/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('Backend/js/scripts/sweetalert.script.min.js') }}"></script>


    <script src="{{ asset('Backend/js/plugins/datatables.min.js') }}"></script>
    <script src="{{ asset('Backend/js/scripts/datatables.script.min.js') }}"></script>

</body>
</html>
