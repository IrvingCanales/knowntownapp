<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KnowTown</title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- owl carousel css -->

        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.css" rel="stylesheet">	        

        <!-- Theme stylesheet -->
        <link href="assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes -->
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="assets/css/animate.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Mordernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
    <![endif]-->

        <meta property="og:title" content="KnowTown">
        <meta property="og:site_name" content="KnowTown">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">

        <meta property="og:image" content="">  

        <!--<meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@bootstrapious">-->

    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120">


        <!-- *** NAVBAR ***
        _________________________________________________________ -->

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand scrollTo" href="#intro">Landing Page!</a>-->
                    <a class="navbar-brand scrollTo" href="#intro"><img src="KnowTown_logo.png" alt="Home"></a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#intro">Intro</a>
                        </li>
                        <li><a href="#section1">Por que KnowTown</a>
                        </li>
                        <!--<li><a href="#section2">Acerca de nosotros</a>
                        </li>
                        <li><a href="#section3">Testimonials</a>
                        </li>-->
                        <li><a href="#section4">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->

            </div>
        </div>
        <!-- /#navbar -->

        <!-- *** NAVBAR END *** -->


        <div id="all">


            <!-- *** INTRO IMAGE ***
        _________________________________________________________ -->
            <div id="intro" class="clearfix">
                <div class="item">
                    <div class="container">
                        <div class="row">

                            <h1 data-animate="fadeInDown">KnowTown, muy pronto!</h1>
                            <p  class="message" data-animate="fadeInUp">Atrevete a conocer un nuevo destino cada vez y gana una experiencia épica.<br>Se parte de los mas aventureros viajantes del mundo.</p>


                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
                                <form action="save_user.php" method="post" id="frm-landingPage1" class="form">
                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="tu dirección de correo electrónico" name="email" id="frm-landingPage1-email" required value="">

                                        <span class="input-group-btn">

                                            <input class="btn btn-default" type="submit" value="Submit" name="_submit" id="frm-landingPage1-submit">

                                        </span>

                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <p class="text-small">No compartiremos tu correo electrónico con nadie. Lo prometemos!</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** INTRO IMAGE END *** -->



            <!-- *** SERVICES ***
        _________________________________________________________ -->
            <div class="section" id="section1">
                <div class="container">
                    <div class="col-md-12">
                        <h2 class="title" data-animate="fadeInDown">¿Por qué KnowTown?</h2>

                        <p class="lead">Algunos de los beneficios al ser parte de KnowTown. </p>

                        <div class="row services">

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-heart-o"></i>
                                </div>
                                <h3 class="heading">Enamorate de un nuevo destino</h3>
                                <p>Los mejores destinos en un solo lugar. </p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-certificate"></i>
                                </div>
                                <h3 class="heading">Una experiencia épica</h3>
                                <p>Disminuye el riesdo de experiencias negativas en tu viaje. </p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-map-marker"></i> 
                                </div>
                                <h3 class="heading">Conoce todo acerca del lugar</h3>
                                <p>No te quedes con ganas de vivir cada cultura al maximo. </p>
                            </div>

                        </div>
                        <div class="row services">

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-bullhorn"></i>
                                </div>
                                <h3 class="heading">Atrae los mejores turistas</h3>
                                <p>Posiciona tu ciudad como una gran opción a visitar.</p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-desktop"></i>
                                </div>
                                <h3 class="heading">Ofrece tus servicios</h3>
                                <p>Brinda la mejor atención a tus clientes. </p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-glass"></i> 
                                </div>
                                <h3 class="heading">Información puntual</h3>
                                <p>Todos los sitios históricos, museos, sitios de interés, gastronomía, vida nocturna, etc. </p>
                            </div>

                        </div>

                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** SERVICES END *** -->


            <!-- *** ABOUT US ***
        _________________________________________________________ -->

 <!--           <div class="section  text-gray" id="section2">
                <div class="container">
                    <div class="col-md-12">


                        <h2 class="title" data-animate="fadeInDown">About us</h2>

                        <div class="row">

                            <div class="col-md-8 col-md-offset-2">

                                <p class="text-large text-thin"  data-animate="fadeInUp">Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. </p>
                                <p class="text-large text-thin margin-bottom"  data-animate="fadeInUp">A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz.</p>

                                <p   data-animate="fadeInUp"><img src="img/team.jpg" alt="" class="img-circle img-responsive ondra-michal"></p>

                            </div>

                        </div>

                    </div>
                    inicio comentario /.12 fin comentario
                </div>
                inicio comentario /.container fin comentario
            </div>
-->
            <!-- /.section -->

            <!-- *** ABOUT US END *** -->

            <!-- *** JOIN US ***
        _________________________________________________________ -->

            <div class="section" data-animate="bounceIn">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">


                        <h2 class="title">Unete a la aventura!</h2>

                        <p class="lead margin-bottom">Conoce los mejores y asombrosos destinos. Que todo salga perfecto y has de tu viaje la mejor experiencia que hayas tenido. Conoce, diviertete, ahorra tiempo y dinero.</p>


                        <div class="row">

                            <div class="col-md-8 col-md-offset-2">


                                <form action="#" method="post" id="frm-landingPage2" class="form">
                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="tu dirección de correo electrónico" name="email" id="frm-landingPage2-email" required value="">

                                        <span class="input-group-btn">

                                            <input class="btn btn-default" type="submit" value="Submit" name="_submit" id="frm-landingPage2-submit">

                                        </span>

                                    </div>
                                    <!-- /input-group -->
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** JOIN US END *** -->      

            <!-- *** TESTIMONIALS ***
_________________________________________________________ -->
<!--
            <div class="section text-gray" id="section3" data-animate="fadeInUp">

                <div class="container">
                    <div class="col-md-12">

                        <div class="mb20">
                            <h2 class="title" data-animate="fadeInUp">Customers said about us</h2>

                            <p class="lead text-center" data-animate="fadeInUp">Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. </p> 
                        </div>

                        <ul class="owl-carousel testimonials same-height-row" data-animate="fadeInUp">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-1.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-2.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>

                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-3.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div> 
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div> 
                            </li>
                        </ul> Inicio comentario .owl-carousel fin comentario
                    </div> inicio comentario /.12  fin comentario
                </div> inicio comentario /.container fin comentario

            </div> inicio comentario /.section fin comentario	
-->
            <!-- *** TESTIMONIALS END *** -->

            <!-- *** CONTACT ***
        _________________________________________________________ -->

            <div class="section" id="section4" >
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">


                        <h2 class="title" data-animate="fadeInDown">Contactanos</h2>

                        <p class="lead margin-bottom" data-animate="fadeInUp">Si quieres atraer a los mejores turistas a tu ciudad y quieres que tus servicios sean considerados por todos. No esperes más, contactanos!</p>


                        <ul class="list-unstyled text-large text-thin" data-animate="fadeInUp">
                            <li><strong>E-mail:</strong> KnowTownCUU@gmail.com</li>
                            <li><strong>Telefono:</strong> 614 406 58 31</li>
                        </ul>

                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->



            <!-- *** FOOTER ***
        _________________________________________________________ -->

            <div class="section" id="footer">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6">

                            <p class="social">
                                <a href="http://www.facebook.com/KnowTownMX" class="external facebook" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                               <!-- <a href="#" class="external instagram" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>-->                                
                                <a href="mailto:KnowTownCUU@gmail.com" class="email" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <!-- /.6 -->

                        <div class="col-sm-6">
                            <p>&copy; 2017 KnowTown. 
                                <!-- Do not remove the attribution, thx! If you need to do so, pls donate (http://bootstrapious.com/donate) to support us! -->
                                <!--Template by <a href="https://www.bootstrapious.com/landing-pages" class="external">Bootstrapious</a>.</p>-->
                        </div>

                    </div>

                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** FOOTER END *** -->
        </div>

        <!-- js base -->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>


        <!-- waypoints for scroll spy -->
        <script src="assets/js/waypoints.min.js"></script>

        <!-- owl carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>        

        <!-- jQuery scroll to -->
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- main js file -->

        <script src="assets/js/front.js"></script>        


    </bo