<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chronic Book</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">

    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="homepage-1">
        <!-- wrapper -->
        <div id="header">
            <!-- header -->

            <div id="believe-nav">
                <!-- Nav -->
                <div class="container">
                    <div class="min-marg">
                        <nav class="navbar navbar-default">
                            <!-- <div class="container-fluid"> -->
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{route('app_home')}}"><img src="images/M3.jpg" alt="logo"></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{route('app_home')}}">Accueil <span
                                                class="sr-only">(current)</span></a></li>
                                    <li><a href="{{ route('nos_auteurs') }}">Nos auteurs</a></li>
                                    <li><a href="{{ route('inscriptions') }}">S'inscrire</a></li>
                                    <li><a href="{{ route('connexion') }}">Connexion</a></li>
                                </ul>

                     
                            </div><!-- /.navbar-collapse -->
                            <!--</div> -->

                        </nav>
                    </div>
                </div>
            </div> <!-- Nav -->

        </div> <!-- header -->
 @yield('content') 

        <div id="footer">
            <!-- Footer -->
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-widget">
                                <div class="wid-title">Bienvenue chez</div>
                                <h1>Chronic Book</h1>
                                <p>
                                    Site internet qui vous plonge dans un univers de lecture passionnante !<br />Des
                                    auteurs hautement inspirés pour vous satisfaire !
                                </p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="quick-links">
                                <div class="wid-title">Liens rapides</div>
                                <ul>
                                    <li><a href="{{ route('app_home') }}">Accueil</a></li>
                                    <li><a href="{{ route('nos_auteurs') }}">Nos auteurs</a></li>
                                    <li><a href="{{ route('inscriptions') }}">S'inscrire</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="term">
                                <div class="wid-title">Contactez nous</div>
                                <ul class="ft-soc clearfix">
                                    <li><a href="https://www.facebook.com/Beyack-Loic-105527538673663/"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="https://mobiletwitter.com/login"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://youtube.com/Chane/UCh78VLsdeNTUdLvOiRaKXpw"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="term">
                                <div class="wid-title">Nombre de visiteurs</div>
                                <p>500 k</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="subscribe">
                                <div class="wid-title">Commentaires et suggestions</div>
                                <p>
                                    Laissez un commentaire ou une suggestion ici !
                                </p>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <br>
                                        <textarea placeholder="Message ici ..." name="" id="" class="form-control"
                                            cols="30" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <div class="container">
                    <p>Copyright 2022. Développé par ESSIMBI Louis </a> &amp; et NGUEFACK Willy.</p>
                </div>
            </div>
        </div><!-- Footer -->
    </div> <!-- wrapper -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/library.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.raty.js"></script>
    <script src="js/ui.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.selectbox-0.2.js"></script>
    <script src="js/theme-script.js"></script>
</body>

</html>
