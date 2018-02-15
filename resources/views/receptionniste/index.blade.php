	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">
	
	<title>FATNAS-VOYAGE Receptionniste</title>
	
	<!-- Bootstrap core CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
	</head>
	
	<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">RECEPTIONNISTE FS</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active ">
				<a class="nav-link" href="{{route('reception_path')}}">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="{{route('reception_billet')}}">Billets</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('client.index')}}">Clients</a>
			</li>
			<li class="nav-item  ">
				<a class="nav-link" href="{{route('reception_compagnie')}}">Compagnies</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('reception_reservation')}}">Réservations</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="{{route('reception_vol')}}">Vols</a>
			</li>
		</ul>	
	</div>
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="#">Les états <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Liste des compagnies</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Listes des Vols</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Export</a>
					</li>
				</ul>	
			</nav>
		</div>
	</div>
	
	<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
		<h1>Tableau de Bord</h1>
		
			<div class="row">
			    <div class="col-sm-2">
			    	<a href="{{route('reception_billet')}}">
					<img src="{{asset('images/billet.jpg')}}" class="img-thumbnail" alt="" width="200" height="230">
					</a><br>
					<a href="{{route('reception_billet')}}"" class="" >Espace des Billets</a>
			    </div>

			    <div class="col-sm-2">
			    	<a href="{{route('client.index')}}">
					<img src="{{asset('images/client.png')}}" class="img-thumbnail" alt="" width="200" height="230">
					</a><br>
				<a href="{{route('client.index')}}" class="">Espaces des Clients</a>
			    </div>

			    <div class="col-sm-2">
			    	<a href="{{route('reception_compagnie')}}">
					<img src="{{asset('images/client.png')}}" class="img-thumbnail" alt="" width="200" height="230">
					</a><br>
				<a href="{{route('reception_compagnie')}}" class="">Espace des compagnies</a>
			    </div>

			    <div class="col-sm-2">			    	
					<a href="{{route('reception_reservation')}}">
					<img src="{{asset('images/client.png')}}" class="img-thumbnail" alt="" width="200" height="230">
					</a><br>
				<a href="{{route('reception_reservation')}}" class="">Espace des reservations</a>			
			    </div>

			    <div class="col-sm-2">			    	
					<a href="{{route('reception_vol')}}">
					<img src="{{asset('images/avion.png')}}" class="img-thumbnail" alt="" width="200" height="230">
					</a><br>
				<a href="{{route('reception_vol')}}" class="">Espace des vols</a>			
			    </div> 

		 	 </div>
			
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="../../../../assets/js/vendor/popper.min.js"></script>
	<script src="../../../../dist/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
	</html>
	
