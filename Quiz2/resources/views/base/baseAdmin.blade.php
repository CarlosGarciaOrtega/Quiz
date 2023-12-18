<!doctype html>
<html lang="en" class="dark-theme">


<!-- Mirrored from codervent.com/fobia/demo/ltr/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Dec 2023 09:16:49 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ url('assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{ url('assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{ url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ url('assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/css/header-colors.css')}}" rel="stylesheet" />

    <title>Quiz</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Fobia</h4>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>Admin</li>
                <li>
                    <a href="{{url('/backend/creaPregunta')}}">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Crear pregunta</div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/backend/pregunta')}}">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Preguntas</div>
                    </a>
                </li>

    

                <li>
                    <a href="{{url('login')}}">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Login</div>
                    </a>
                </li>
                <li>
                    <a href="{{url('logout')}}">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Logout</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
               
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                      
                       
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href=""
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                     {{session('nombre')}}
                                </div>
                            </a>
                            </li>
                    </ul>
                           

                </div>
            </nav>
        </header>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">
                <div class="content-wrapper">
    @if($errors->any())


    <div class="alert alert-primary alert-dismissible fade show d-flex justify-content-between" role="alert">
        <div>
            <i class="fa fa-exclamation-circle me-2"></i>{{$errors->first()}}
        </div>

        <button type="button" class="btn-close fa fa-times" data-dismiss="alert" aria-hidden="true"
            aria-label="Close"></button>
    </div>

    @endif
    @if(session('message'))

    <div class="alert alert-primary alert-dismissible fade show d-flex justify-content-between" role="alert">
        <div>
            <i class="fa fa-exclamation-circle me-2"></i>{{session('message')}}
        </div>

        <button type="button" class="btn-close fa fa-times" data-dismiss="alert" aria-hidden="true"
            aria-label="Close"></button>
    </div>

    @endif

                @yield('content')
        </div>
        <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->

    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <ion-icon name="color-palette-outline" class="me-0"></ion-icon>
        </button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
            tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                        value="option1" checked>
                    <label class="form-check-label" for="LightTheme">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                        value="option2">
                    <label class="form-check-label" for="DarkTheme">Dark</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                        value="option3">
                    <label class="form-check-label" for="SemiDark">Semi Dark</label>
                </div>
                <hr />
                <h6 class="mb-0">Header Colors</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    </div>
    <!--end wrapper-->


    <!-- JS Files-->
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <!--plugins-->
    <script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="{{ url('assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
    <script src="{{ url('assets/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{ url('assets/js/index.js')}}"></script>
    <!-- Main JS-->
    <script src="{{ url('assets/js/main.js')}}"></script>


</body>


<!-- Mirrored from codervent.com/fobia/demo/ltr/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Dec 2023 09:17:16 GMT -->

</html>
