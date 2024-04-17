<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('assets/images/favicon/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{ asset ('assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200;300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset ('/assets/css/libs.bundle.css')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/theme.bundle.css') }}" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Kavlan | Bootstrap 5 HTML Admin Dashboard</title>
    
</head>
<body class="">

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light border-0 py-0 fixed-top bg-dark-800">
      <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-grow-1 navbar-actions">
    
          <!-- Menu Toggle-->
          <div class="menu-toggle cursor-pointer me-4 text-primary-hover transition-color disable-child-pointer">
            <i class="ri-menu-fold-line ri-lg fold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
              title="Close menu"></i>
            <i class="ri-menu-unfold-line ri-lg unfold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
              title="Open Menu"></i>
          </div>
          <!-- / Menu Toggle-->
    
          <!-- Navbar Actions-->
          <div class="d-flex align-items-center">
    
            <!-- Search-->
            <button class="btn-icon btn-hover-dark btn-search me-2">
              <i class="ri-search-2-line align-bottom lh-1 text-body"></i>
            </button>
    
            <!-- Search navbar overlay-->
            <div class="navbar-search d-none">
              <div class="input-group mb-3 h-100">
                <span class="input-group-text px-4 bg-transparent"><i class="ri-search-line ri-lg"></i></span>
                <input type="text" class="form-control text-body bg-transparent border-0" placeholder="Enter your search terms...">
                <span class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent"><i class="ri-close-circle-line ri-lg text-primary"></i></span>
              </div>
            </div>
            <!-- / Search navbar overlay-->
    
            <!-- / Search-->
    
            <!-- Region -->
            <div class="dropdown me-2">
              <button class="btn-icon btn-hover-dark" type="button" id="regionDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="flag-icon flag-icon-gb"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="regionDropdown">
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">United Kingdom <span class="text-muted ms-5"><span class="flag-icon flag-icon-gb"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">United States<span class="text-muted ms-5"><span class="flag-icon flag-icon-us"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Australia<span class="text-muted ms-5"><span class="flag-icon flag-icon-au"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Belgium<span class="text-muted ms-5"><span class="flag-icon flag-icon-be"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Canada<span class="text-muted ms-5"><span class="flag-icon flag-icon-ca"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">China <span class="text-muted ms-5"><span class="flag-icon flag-icon-cn"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Denmark <span class="text-muted ms-5"><span class="flag-icon flag-icon-dk"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">France<span class="text-muted ms-5"><span class="flag-icon flag-icon-fr"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Netherlands<span class="text-muted ms-5"><span class="flag-icon flag-icon-nl"></span></span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Russia<span class="text-muted ms-5"><span class="flag-icon flag-icon-ru"></span></span></a></li>
              </ul>
            </div>
            <!-- /Region -->
    
            <!-- Language-->
            <div class="dropdown me-2">
              <button class="btn-icon btn-hover-dark" type="button" id="language"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-global-line align-bottom text-body lh-1"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="language">
                <li>
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">English 
                    <span class="text-muted ms-5">EN</span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">French<span class="text-muted ms-5">FR</span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Espanol<span class="text-muted ms-5">ES</span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Turkish<span class="text-muted ms-5">TR</span></a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Russian<span class="text-muted ms-5">RU</span></a></li>
              </ul>
            </div>
            <!-- / Language-->
    
            <!-- Notifications-->
            <a class="btn-icon btn-hover-dark position-relative p-2 disable-child-pointer" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button"
            aria-controls="offcanvasNotifications">
              <i class="ri-notification-fill align-bottom text-body lh-1"></i>
              <span class="badge bg-primary text-white position-absolute top-0 end-0">3</span>
            </a>
            <!-- / Notifications-->
    
          </div>
          <!-- / Navbar Actions-->
            
        </div>
      </div>
    </nav>    <!-- / Navbar-->

    <!-- Page Content -->
    <main id="main">

        <!-- Content-->
        <section class="container-fluid">
         
        @yield('content') 
      
    </section>
        <!-- / Content-->

    </main>
    <!-- /Page Content -->

    <!-- Page Aside-->
    <aside class="aside bg-dark-700">
    
        <div class="simplebar-wrapper">
            <div data-pixr-simplebar>
                <div class="pb-6 pb-sm-0 position-relative">
    
                    <!-- Mobile close btn-->
                    <div class="cursor-pointer close-menu me-4 text-primary-hover transition-color disable-child-pointer position-absolute end-0 top-0 mt-3 pt-1 d-xl-none">
                        <i class="ri-close-circle-line ri-lg align-middle me-n2"></i>
                    </div>
                    <!-- / Mobile close btn-->

                    <!-- Mobile Logo-->
                    <div class="d-flex justify-content-center align-items-center py-3">
                        <a class="m-0" href="./index.html">
                            <div class="d-flex align-items-center justify-content-center">
                                <svg class="f-w-6 me-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.39 353.81"><polygon points="228.38 33.94 0 262.32 0 0 119.61 0 119.61 43.01 101.9 60.73 86.02 76.61 86.02 33.6 33.6 33.6 33.6 181.2 214.46 0.34 390.66 0.34 242.09 148.91 218.73 124.76 309.55 33.94 228.38 33.94" fill="currentColor"/><polygon points="398.39 353.81 217.51 353.81 131.04 261.75 45.09 353.81 0 353.81 0 353.49 131.26 212.91 232.05 320.21 317.27 320.21 170.28 173.21 194.19 149.29 194.19 149.55 254.9 210.51 254.97 210.39 398.39 353.81" fill="currentColor"/></svg>
                                <span class="fw-bold fs-3 text-white">{{ Auth::user()->name}}</span>
                            </div>
                          </a>
                    </div>






                 <!--menu nav -->
                    <h4>Menu</h4>
                    <a class="navbar-brand" href="{{ route('cursos.index') }}">Cursos</a>
                    <a class="navbar-brand" href="{{route ('users.index') }}">Usuarios</a>
                    <a class="navbar-brand" href="{{route('genera_ordenes.index') }}">Generar Ordenes</a>




                    


                    <div class="dropdown m-0">
                                <button class="border-0 rounded px-2 f-h-9 bg-dark-opacity p-0 text-body" type="button" id="profileDropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ri-settings-2-line"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                  <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-user-line me-2"></i> Edit
                                      profile</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-settings-2-line me-2"></i> Edit
                                      settings</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-mail-open-line me-2"></i> View
                                      messages</a></li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                                  <li><a class="dropdown-item" onclick="event.preventDefault();cerrarSession.submit()">Cerrar Sesion</a></li>
            <form action="{{ route('logout') }}" id="cerrarSession" method="POST" >
             @csrf
             </form>
                                </ul>
                              </div>
    
                    
                    



    
    </aside>    <!-- / Page Aside-->

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{ asset ('assets/js/vendor.bundle.js')}}"></script>
    
    <!-- Theme JS -->
    <script src="{{ asset ('assets/js/theme.bundle.js')}}"></script>
</body>

</html>
