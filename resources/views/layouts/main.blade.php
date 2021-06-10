<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link href="/css/styles.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
        <style>
              .centert {
    margin-left:auto;
    margin-right:auto;
  }
        </style>
</head>

<body class="sb-nav-fixed">
    @include('sweetalert::alert')

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Euro2020 Prono <img src="/assets/img/euro.png" width="60px" alt=""></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            {{-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>--}}
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Se Déconnecté</a></li>


                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>


                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Groupes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('groupe.liste')}}">Liste des Matches</a>

                                @foreach ($groupesName as $groupe)
                                <a class="nav-link" href="{{route('groupe',$groupe->id)}}">{{$groupe->nom}}</a>
                                @endforeach



                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Phase a élimination directe
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="login.html">Quart de Final</a>
                                <a class="nav-link" href="register.html">Demi Final</a>
                                <a class="nav-link" href="password.html">Final</a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Connecté en tant que:</div>
                    @auth
                    {{Auth::user()->name}}
                    @endauth

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <div class="row">
                    Aujourd'hui {{date('D-m-Y H:i:s')}}<br>

                     {{ \Carbon\Carbon::createFromFormat('Y/m/d H:i:s', '2021/06/04  23:20:00') }} || {{ \Carbon\Carbon::now() ."est la date de mnt "}}<br>

                    @if ( (\Carbon\Carbon::createFromFormat('Y/m/d H:i:s', '2021/06/05  23:25:00' ))->gte(\Carbon\Carbon::now()))
                    <br>resultat<br>
                        {{"la date  est supérieur ou égale a la date de mnt"}}
                    @else
                        {{"nah"}}
                    @endif



                    </div>

                    <div class="row">


                     @yield('content')

                    </div>
<!--
                    <div class="row">


                        <div class="d-flex align-items-center justify-content-center mx-auto  card col-lg-6 col-md-6 col-sm-12 col-xs-12"
                            style="min-width: 100%;padding: 0;">
                            <div class="card-header text-center" style="width: 100%;">
                                Groupe A
                            </div>
                            <div class="d-flex align-items-center justify-content-center mx-auto col-sm-12 col-xs-12">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item text-center d-md-flex justify-content-around">
                                        <img src="https://www.countryflags.io/MK/shiny/64.png" width="20px"><span
                                            class="text-right">France</span>
                                    </li>
                                    <li class="list-group-item text-center">Portugal</li>
                                    <li class="list-group-item text-center">Pays de Galles</li>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">0 - 0</li>
                                    <li class="list-group-item text-center">12h</li>
                                    <li class="list-group-item text-center">18h</li>

                                </ul>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center d-md-flex justify-content-around"><span
                                            class="text-left">Allemagne</span><img
                                            src="https://www.countryflags.io/MK/shiny/64.png" width="20px">
                                    </li>
                                    <li class="list-group-item text-center">Croatie</li>
                                    <li class="list-group-item text-center">Macédoine du Nord</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col" class="text-center">Group 1</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-center"><img
                                        src="https://www.countryflags.io/pt/shiny/64.png" width="20px">
                                </td>
                                <td class="text-center">Portugal</td>
                                <td class="text-center">0 - 0</td>
                                <td class="text-center">France</td>
                                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png"
                                        width="20px"></td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center"><img
                                        src="https://www.countryflags.io/CZ/shiny/64.png" width="20px">
                                </td>
                                <td class="text-center">Croatie</td>
                                <td class="text-center">1 - 5</td>
                                <td class="text-center">Portugal</td>
                                <td class="text-center"><img src="https://www.countryflags.io/PT/shiny/64.png"
                                        width="20px"></td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center"><img
                                        src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png"
                                        width="20px">
                                </td>
                                <td class="text-center">Pays de Galles</td>
                                <td class="text-center">18h</td>
                                <td class="text-center">Macédoine du Nord</td>
                                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png"
                                        width="20px"></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="5" class="text-center">Pronostic 1</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-center"><img
                                        src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png"
                                        width="20px">
                                </td>
                                <td class="text-center">Pays de Galles</td>
                                <td class="text-center">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control text-center" placeholder="..."
                                            aria-label="Username">
                                        <span class="input-group-text">VS</span>
                                        <input disabled value="0" type="text" class="form-control  text-center"
                                            placeholder="..." aria-label="Server">
                                    </div>
                                </td>

                                <td class="text-center">Macédoine du Nord</td>
                                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png"
                                        width="20px"></td>
                            </tr>
                        </tbody>
                    </table>
-->
                    <br>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Amine Ch 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script src="/js/scripts.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
    {{-- <script src="/assets/demo/chart-area-demo.js"></script> --}}
    {{-- <script src="/assets/demo/chart-bar-demo.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="/js/datatables-simple-demo.js"></script> --}}
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session::has('add'))
    <script>
        swal("pronostic a bien été enregistré","okk","success",{
            button:"ok",
            });
    </script> --}}


    {{-- @endif --}}

</body>

</html>
