<?php 
	session_start();
	if (!$_SESSION['validar']) {
		header('location: login.php');
		exit();
	}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Autolavado | ELITE </title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          }); 
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="Views/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="Views/assets/img/ELITE.jpg">
        
        <!-- Stylesheet -->
        <link rel="stylesheet" href="Views/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="Views/assets/vendors/css/base/elisyam-1.5-dark.min.css">
        <link rel="stylesheet" href="Views/assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="Views/assets/css/owl-carousel/owl.theme.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="Views/assets/img/ELITE.jpg" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="db-default.html" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="Views/assets/img/ELITE.jpg"   alt="logo" class="logo-small">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="Views/assets/img/ELITE.jpg" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                            <!-- Search -->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                            <!-- End Search -->
                            <!-- Begin Notifications -->
                            <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu notification">
                                    <li>
                                        <div class="notifications-header">
                                            <div class="title">Notificaciones  (3)</div>
                                            <div class="notifications-overlay"></div>
                                            <img src="Views/assets/img/ELITE.jpg" alt="..." class="img-fluid">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Nuevo Usuario Registrado
                                                </div>
                                                <span class="date">5 minutos</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-calendar-check-o"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Nueva Visita Entrate
                                                </div>
                                                <span class="date">2 minutos</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-history"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Nueva Petición de Premio
                                                </div>
                                                <span class="date">Justo Ahora</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">Ver más</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Notifications -->
                            <!-- User -->
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="Views/assets/img/avatar/admin.png" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                        <img src="Views/assets/img/avatar/admin.png" alt="..." class="rounded-circle">
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item"> 
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item no-padding-bottom"> 
                                            Settings
                                        </a>
                                    </li>
                                    
                                    <li><a rel="nofollow" href="index.php?action=salir" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                           <!-- <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>-->
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        <ul class="list-unstyled">
                            <br>
                            <b><center>MENÚ</center></b>
                            <li class="active"><a href="index.php?action=inicio"><i class="la la-home"></i><span>Inicio</span></a>
                            </li>

                            <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-users"></i><span>Clientes/Usuarios</span></a>
                                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                                    <li><a href="index.php?action=usuarios"><i class="la la-eye"></i>Ver Clientes</a></li>
                                    <li><a href="index.php?action=addUser"><i class="la la-plus"></i>Agregar Cliente</a></li>
                                    
                                </ul>
                            </li>


                            <li><a href="#dropdown-vi" aria-expanded="false" data-toggle="collapse"><i class="la la-car"></i><span>Visitas</span></a>
                                <ul id="dropdown-vi" class="collapse list-unstyled pt-0">
                                    <li><a href="index.php?action=visitas"><i class="la la-eye"></i>Ver Visitas</a></li>
                                    <li><a href="index.php?action=addVisita"><i class="la la-plus"></i>Agregar Visita</a></li>
                                    
                                </ul>
                            </li>

                            <li><a href="#dropdown-pr" aria-expanded="false" data-toggle="collapse"><i class="la la-bullhorn"></i><span>Promociones</span></a>
                                <ul id="dropdown-pr" class="collapse list-unstyled pt-0">
                                    <li><a href="index.php?action=promociones"><i class="la la-eye"></i>Ver Promociones</a></li>
                                    <li><a href="index.php?action=addPromo"><i class="la la-plus"></i>Agregar Promocion</a></li>
                                    
                                </ul>
                            </li>

                            <li><a href="#dropdown-pe" aria-expanded="false" data-toggle="collapse"><i class="la la-certificate"></i><span>Premios</span></a>
                                <ul id="dropdown-pe" class="collapse list-unstyled pt-0">
                                    <li><a href="index.php?action=premios"><i class="la la-eye"></i>Ver Premios</a></li>
                                    <li><a href="index.php?action=addPremios"><i class="la la-plus"></i>Agregar Premios</a></li>
                                    
                                </ul>
                            </li>

                            <li><a href="index.php?action=calendario"><i class="la la-calendar"></i><span>Calendario</span></a></li>
                            
                            <li><a href="index.php?action=acercade"><i class="la la-spinner"></i><span>Acerca de...</span></a></li>
                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->  
                      
                </div>
                </div>
            </div>
        </div>

        <div class="content-inner">
             <div class="container-fluid">
                 <?php
                     $carga = new Controller();
                     $carga->enlacesPaginasController();

                ?>
             </div>
         </div>

        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="Views/assets/vendors/js/base/jquery.min.js"></script>
        <script src="Views/assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="Views/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="Views/assets/vendors/js/chart/chart.min.js"></script>
        <script src="Views/assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="Views/assets/vendors/js/calendar/moment.min.js"></script>
        <script src="Views/assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="Views/assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="Views/assets/vendors/js/app/app.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="Views/assets/js/dashboard/db-default-dark.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>