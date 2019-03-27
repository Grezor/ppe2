<?php
include('db.php');
if(session_id() == '' || !isset($_SESSION)){session_start();}
    //session_start();//?

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ChopTaPhoto</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
    <!-- header -->
    <!--
    <div class="banner-top">
        <div class="social-bnr-agileits">
            <ul class="social-icons3">
                <li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li>
            </ul>
        </div>
        <div class="contact-bnr-w3-agile">
            <ul>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">ChopTaPhoto@gmail.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+33 7 80 80 80 80</li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>-->
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
                            <?php 
                                if (isset($_SESSION["id"])) {
                                    echo '<li class="menu__item"><a href="boutique/logout.php" class="menu__link scroll">Déconnexion</a></li>';
                                }else{
                                    echo '<li class="menu__item"><a href="boutique/login.php" class="menu__link scroll">Connexion</a></li>';
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>
    <!-- //header -->
    <!-- banner -->
    <div id="home" class="w3ls-banner">
        <!-- banner-text -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="w3layouts-banner-top">

                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>ChopTa<span>Photo</span></h4>
                                    <h3>Nous savons ce qui vous plait!!!</h3>
                                    <p>Bienvenu</p>
                                    <div class="agileits_w3layouts_more menu__item">
                                        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Ensavoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top w3layouts-banner-top1">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>ChopTaPhoto</h4>
                                    <h3>Pour des Evenements amical & familiale</h3>
                                    <p>Venez& Capturez votre moment</p>
                                    <div class="agileits_w3layouts_more menu__item">
                                        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="clearfix"> </div>
            <!--banner Slider starts Here-->
        </div>
        <div class="thim-click-to-bottom">
            <a href="#about" class="scroll">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- //banner -->
    <!--//Header-->
    <!-- //Modal1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <!-- Modal1 -->
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Chopta<span>Photo</span></h4>
                    <img src="images/1.jpg" alt=" " class="img-responsive">
                    <h5>Parceque nous savons que le souvenir est important!</h5>
                    <p>ChopTaPhoto est une entreprise de location de borne photo de nouvelle technologie qui vous permetra de prendre des photos net et précis des différents évenements qui vous plairont!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <div id="availability-agileits">
        <div class="col-md-12 book-form-left-w3layouts">
            <a href="boutique/products.php">
                <h2>Reserver votre borne Photo ici!!!</h2>
            </a>
        </div>

        <div class="clearfix"> </div>
    </div>
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="agileits_banner_bottom">
                <h3><span>Profiter d'une expérience Particulière</span> Grace a nos services:</h3>
            </div>
            <div class="w3ls_banner_bottom_grids">
                <ul class="cbp-ig-grid">
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon "><img src="./images/livraison.jpg" style="width:60px;height:55px"></span>
                            <h4 class="cbp-ig-title">Livraison sous 24h, 7/7 jour</h4>
                            <span class="cbp-ig-category"> ChopTaPhoto</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon "><img src="./images/impression.jpg" style="width:60px;height:55px"></span>
                            <h4 class="cbp-ig-title"> Impression Rapide</h4>
                            <span class="cbp-ig-category">ChopTaPhoto</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_users"></span>
                            <h4 class="cbp-ig-title">Divers</h4>
                            <span class="cbp-ig-category"> ChopTaPhoto</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_ticket"></span>
                            <h4 class="cbp-ig-title">PRENEZ LE CONTROLE PAR WIFI</h4>
                            <span class="cbp-ig-category"> ChopTaPhoto</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner-bottom -->
    <!-- /about -->
    <div class="about-wthree" id="about">
        <div class="container">
            <div class="ab-w3l-spa">
                <h3 class="title-w3-agileits title-black-wthree">Que savoir sur CHOPTAPHOTO</h3>
                <p class="about-para-w3ls">Chopta<span>Photo</span> est une entreprise dynamique qui permet a tout un chacun de réaliser des prises de Photo rapide grace a nos technicien qui font pour eux: repérage, réglages techniques (lumière, cadrage, mise au point, vitesse…) afin que leurs photo soient parfaites. Suivant les évenements et la destination des photos,ChopTaPhoto vous accompagnera dans vos joies comme tristesses, car nous savons ce dont vous avez besoin</p>
                <img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
                <div class="w3l-slider-img">
                    <img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
                </div>
                <div class="w3ls-info-about">
                    <h4>Vous aimerez vos realisations!</h4>
                    <p>car on est jamais mieux servi que par sois même.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about -->
    <!--sevices-->
    <div class="advantages">
        <div class="container">
            <div class="advantages-main">
                <h3 class="title-w3-agileits">Nos services</h3>
                <div class="advantage-bottom">
                    <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                        <div class="advantage-block ">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <h4>Réserver, payer Après!</h4>
                            <p>la joie ne se fait pas attendre, chopta<span>Photo</span>au coeur de vos émotions.</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>Efficace et dicret</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>Le mode de paimement est le votre</p>

                        </div>
                    </div>
                    <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                        <div class="advantage-block">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4> De 24 heure a plus </h4>
                            <p>le temps du plaisir ne se discute pas, exprimer vous a travers le temps qu'il vous faudra.</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>24H de suivi durant vos évenements.</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>24/24H, 7/7J Notre équipe est a votre disposition.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--//sevices-->
    <!-- team -->

    <!-- <div class="team" id="team">
        <div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Notre équipe:</h3>
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>

                    </li>
                    <li>
                        <img src="images/franck.jpg" class="img-responsive" style="width:110px;height60;" />
                    </li>
                    <li>
                        <img src="images/geoffrey.jpg" alt=" " class="img-responsive" style="width:100px;height60;" />
                    </li>
                    <li>
                        <img src="images/stan.JPG" alt=" " class="img-responsive" style="width:100px;height60;" />
                    </li>

                </ul>
                <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Franck Olivier Azzibrouck Azziley</h4>
                            <span>Co-Founder</span>
                            <p>Etudiant en deuxiene année BTS en services informatiques à efficcom-lille</p>
                            <div class="social-bnr-agileits footer-icons-agileinfo">
                                <ul class="social-icons3">
                                    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
                                    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab2">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Geoffrey DUPLESSI</h4>
                            <span>Co-Founder</span>
                            <p>Etudiant en deuxiene année BTS en services informatiques</p>
                            <div class="social-bnr-agileits footer-icons-agileinfo">

                                <ul class="social-icons3">
                                    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
                                    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab3">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Stanislas delgrange</h4>
                            <span>Co-Founder</span>
                            <p>Etudiant en deuxiene année BTS en services informatiques</p>
                            <div class="social-bnr-agileits footer-icons-agileinfo">
                            
<ul class="social-icons3">
    <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
    <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
    <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
    <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
</ul>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
-->
    <!-- //team -->
    <!-- Gallery -->
    <section class="portfolio-w3ls" id="gallery">
        <h3 class="title-w3-agileits title-black-wthree">Notre Gallerie</h3>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>

        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>

        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/" style="height:220px;">
                <div class="textbox">
                    <h4>ChopTaPhoto</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>

        <div class="clearfix"> </div>
    </section>
    <!-- //gallery -->
    <!-- rooms & rates -->
    <div class="plans-section" id="rooms">
        <div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Nos bornes Photo:</h3>
            <div class="priceing-table-main">
                <div class="col-md-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="images/borne1.jpg" alt=" " class="img-responsive" />
                            <h4> Haut de Gamme</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>320</span>€</h3>
                                <a href="boutique/products.php"> réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 price-grid ">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="images/borne2.jpg" alt=" " class="img-responsive" />
                            <h4>Milieu de gamme</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>220</span>€</h3>
                                <a href="boutique/products.php"> réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 price-grid lost">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="images/borne3.jpg" alt=" " class="img-responsive" />
                            <h4> Bas de game</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>180</span>€</h3>
                                <a href="boutique/products.php">réserver</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <section class="contact-w3ls" id="contact">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                <div class="contact-agileits">
                    <h4>Pour rester informer sur nos Progressions</h4>
                    <p class="contact-agile2">C'est par ici</p>
                    <form method="post" name="sentMessage" id="contactForm">
                        <div class="control-group form-group">

                            <label class="contact-p1">Nom:</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <p class="help-block"></p>

                        </div>
                        <div class="control-group form-group">

                            <label class="contact-p1">téléphone:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required>
                            <p class="help-block"></p>

                        </div>
                        <div class="control-group form-group">

                            <label class="contact-p1">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <p class="help-block"></p>

                        </div>


                        <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
                    </form>
                    <?php
				if(isset($_POST['sub']))
    				{
    					$name =$_POST['name'];
    					$phone = $_POST['phone'];
    					$email = $_POST['email'];
    					$approval = "Not Allowed";
    					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
    					
    					
    					if(mysqli_query($bdd,$sql)) echo"OK";
    					
    					
    				}
				?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                <h4>Contacter nous:</h4>
                <p class="contact-agile1"><strong>Phone :</strong>0780759649</p>
                <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">azzibrouckazziley@gmail.COM</a></p>
                <p class="contact-agile1"><strong>Address :</strong> 6 place antoine tacque</p>

                <div class="social-bnr-agileits footer-icons-agileinfo">
                    <ul class="social-icons3">
                        <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

                    </ul>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.3163076432083!2d3.0323134157376015!3d50.62124057949927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d56d0498e283%3A0xcc5ee6a6102b77dc!2s6+Place+Antoine+Tacq%2C+59000+Lille!5e0!3m2!1sfr!2sfr!4v1552771629938"></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- /contact -->
    <div class="copy">
        <p>© 2019 SUNRISE . All Rights Reserved | Design by Franck Olivier, Geoffrey, Guillaume et Mathieu.</p>
    </div>
    <!--/footer -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- contact form -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- /contact form -->
    <!-- Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });

    </script>
    <!-- //Calendar -->
    <!-- gallery popup -->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });

    </script>
    <!-- //gallery popup -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        /*jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });*/

    </script>
    <!-- start-smoth-scrolling -->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    </script>
    <!-- //flexSlider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
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

    </script>
    <!--search-bar-->
    <script src="js/main.js"></script>
    <!--//search-bar-->
    <!--tabs-->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
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
    <!--//tabs-->

    <div class="arr-w3ls">
        <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <!-- //smooth scrolling -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>
