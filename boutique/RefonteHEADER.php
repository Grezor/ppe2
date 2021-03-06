<!DOCTYPE html>
<html lang="en">

<head>
    <title>ChopTaPhoto</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
    <link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="../css/jquery-ui.css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <!-- contact form -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <!-- /contact form -->
    <!-- Calendar -->
    <script src="../js/jquery-ui.js"></script>
    <!-- //Calendar -->
    <!-- gallery popup -->
    <link rel="stylesheet" href="../css/swipebox.css">
    <script src="../js/jquery.swipebox.min.js"></script>
    <!-- //gallery popup -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <!-- start-smoth-scrolling -->
    <!-- flexSlider -->
    <script defer src="../js/jquery.flexslider.js"></script>

    <!-- //flexSlider -->
    <script src="../js/responsiveslides.min.js"></script>

    <!--search-bar-->
    <script src="../js/main.js"></script>
    <!--//search-bar-->
    <!--tabs-->
    <script src="../js/easy-responsive-tabs.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });

        jQuery(function($) {
            $(".swipebox").swipebox();
        });

        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });

        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });


        $(document).ready(function() {


            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });


            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
</head>

<body>


    <div class="w3_navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.php">Choptaphoto
                            <p class="logo_w3l_agile_caption">Garder un souvenir</p>
                        </a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Accueil</a></li>
                            <li class="menu__item"><a href="#about" class="menu__link scroll">A Propos</a></li>
                            <!--<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>-->
                            <li class="menu__item"><a href="boutique/resa.php" class="menu__link scroll">Mes Réservations</a></li>
                            <li class="menu__item"><a href="#rooms" class="menu__link scroll">BornPhoto</a></li>
                            <li class="menu__item"><a href="#contact" class="menu__link scroll">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>


    <!-- -FOOTTER ONLY --> 
    <div class="copy">
        <p>© 2019 SUNRISE . All Rights Reserved | Design by Franck Olivier, Geoffrey, Guillaume et Mathieu.</p>
    </div>



    <!--//tabs-->

    <div class="arr-w3ls">
        <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
    <!-- //smooth scrolling -->
</body>
</html>