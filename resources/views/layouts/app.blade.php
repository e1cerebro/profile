<!DOCTYPE html>
<html lang="en">

<head>
    <title>CHRIS | PERSONAL PROFILE</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="Chris, Personal Profile, web developer, windsor, php, laravel, html5">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS | STYLE -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/linecons.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/colors/brown.css"  id="csscolors"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- CSS | Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,500,600' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <noscript>
        <style>
        @media screen and (max-width: 755px) {
            .hs-content-scroller {
                overflow: visible;
            }
        }
        </style>
    </noscript>
</head>

<body>
    <!-- Page preloader -->
    <!--<div id="page-loader">
        <canvas id="demo-canvas"></canvas>
    </div>-->
    <!-- container -->
    <div id="hs-container" class="hs-container">


        @yield('sidebar')

        @yield('aside')

        <!-- Go To Top Button -->
        <a href="#hs-menu" class="hs-totop-link"><i class="fa fa-chevron-up"></i></a>
        <!-- End Go To Top Button -->

        <!-- hs-content-scroller -->
        <div class="hs-content-scroller">

            @yield('headercontent')

            <!-- hs-content-wrapper -->
            <div class="hs-content-wrapper">
                @yield('about')

                @yield('resume')

                @yield('services')

                @yield('skills')


                @yield('works')

                @yield('contact')

                @yield('empty')

            </div>
                <!-- End hs-content-wrapper -->
            </div>
            <!-- End hs-content-scroller -->
        </div>
        <!-- End container -->
        <div id="my-panel">
        </div>

        <!-- PLUGIN SCRIPTS -->

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/default.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/watch.js"></script>
        <script type="text/javascript" src="js/layout.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
         @yield('jquery')
        <!-- END PLUGIN SCRIPTS -->

</body>


<!-- Mirrored from www.demo.codiux.com/pulsev2/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 04:59:45 GMT -->
</html>
