<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - Calendar</title>
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
        <link rel="icon" type="image/png" sizes="32x32" href="Views/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Views/assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="Views/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="Views/assets/vendors/css/base/elisyam-1.5-dark.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>

                        
                        <div class="row no-margin">
                            <div class="col-xl-12">
                                <!-- Begin Widget -->
                                <div class="row widget has-shadow">
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h1>Calendario</h1>
                                        <div class="widget-options">
                                            <div class="dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                    <i class="la la-ellipsis-h"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <!-- Begin Calendar -->
                                        <div id="calendar"></div>
                                        <!-- End Calendar -->
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                                <!-- End Widget -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                
       
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="Views/assets/vendors/js/base/jquery.min.js"></script>
        <script src="Views/assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="Views/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="Views/assets/vendors/js/calendar/moment.min.js"></script>
        <script src="Views/assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="Views/assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="Views/assets/js/app/calendar/basic-calendar.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>