<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fatnas Voyages :: Nous réalisons votre reve de faire le tour du monde</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/kissui.scrollanim/0.3.0/scrollanim.min.css">
    <!--Import Google Icon Font--> 
    <link href="{{asset('materialize-icons/materialize-icons.css')}}" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="{{asset('materialize/css/materialize.min.css')}}">
    <!-- calling font-awesome icons -->

    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Import css for animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('libs/animate.css')}}">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    
    <style type="text/css" media="screen">
    *{
        font-size: 20px;
        text-align: justify;

    }
    html{margin-bottom: 0px;}
    .pager-footer{font-size: 10px;}
    .row .card-panel{width: 100px;}

    #map{height: 400px;
        width: 100%;}
        #particles-js{
            background: ;
            height: 300px;
        }
        .center-text{ text-transform: uppercase ;}
        .navbar-fixed {
            z-index: 999;
        }

    </style>
</head>
<body>
    <header>
     <div class="navbar-fixed">
        <nav class="amber darken-3">
        <div class="nav-wrapper">
         <a href="index.php?page=home" class="brand-logo">
        <i class="fa fa-fw fa-plane fa-2x">FS</i></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <!--  -->
            <li class=""><a href = "">ACCUEIL</a></li>
            <li class=""><a href = "">RESERVATION</a></li>
            <li><a href = "https://travel.jumia.com" target="_blank">HOTELS</a></li>
            <li class=" "><a href = "">A PROPOS</a></li>
            <li class=""><a href = "">NOUS CONTACTER</a></li>

        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li class=" "><a href = "">ACCUEIL</a></li>
            <li class=" "><a href = "">RESERVATION</a></li>
              <li><a href = "https://travel.jumia.com" target="_blank">HOTELS</a></li>
            <li class=""><a href = "">A PROPOS</a></li>
            <li class=""><a href = "">NOUS CONTACTER</a></li>
        </ul>
    </div>
   </nav>
  </div>
</header>
    @yield('content')
<footer class="page-footer amber darken-1 s12" data-kui-anim="slideInUp">
  <div class="container-fluid black-text ">
    <div class="row">

      <div class="center-align s12">
        <h4 class="center-align center-text">Nous suivre sur les réseaux sociaux</h4>
        <a class="btn-floating btn-large waves-effect waves-light blue darken-4" href="https://www.facebook.com/SKD-Android-745082905674140/" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
        <a class="btn-floating btn-large waves-effect waves-light blue" href="https://twitter.com/@kolomasoro" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
        <a class="btn-floating btn-large waves-effect waves-light blue darken-2" href="https://www.linkedin.com/in/koloma-soro-fsd-developper" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
        <a class="btn-floating btn-large waves-effect waves-light red lighten-1" href="https://www.instagram.com/kolomadaniel/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a>
      </div>


    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <span class="black-text animated fadeInLeft">© Copyright  2018 - all rights reserved</span>
      <a class="text-lighten-4 right black-text animated flash infinite right" >Designed by Team GL-ESATIC</a>
    </div>
  </div>
</footer>  
       

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/kissui.scrollanim/0.3.0/scrollanim.min.js"></script>
    <script src="{{asset('libs/jquery-3.2.1.js')}}" type="text/javascript"></script>
    <script src="{{asset('/materialize/js/materialize.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/init.materialize.js')}}"></script>
    <!-- calling scrollanimate -->
    <!-- <script type="text/javascript" src="libs/scrollanim.js"></script> -->


    <script src="{{asset('/libs/particles/particles.js')}}"></script>
    <script src="{{asset('/libs/particles/apps.js')}}"></script>

    <!-- google maps api -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTTVWwiox030uem928N2plTNwPvkp-wsk&callback=initMap"></script>
    <!-- google maps JS -->
    <script src="{{asset('/js/google.maps.js')}}" type="text/javascript"></script>

</body>
</html>