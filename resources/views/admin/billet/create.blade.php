	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">
	
	<title>FATNAS-VOYAGE Administrateur</title>

	<!--<link href="{{asset('css/style.default.css')}}" rel="stylesheet">-->
	
	<!-- Bootstrap core CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">


	</head>
	
	<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">ADMINISTRATEUR FS</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" href="{{route('admin_path')}}">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="{{route('billets.index')}}">Billets</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('clients.index')}}">Clients</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="{{route('compagnies.index')}}">Compagnies</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('reservations.index')}}">Réservations</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('vols.index')}}">Vols</a>
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
						<a class="nav-link" href="#">Liste des compagnies</a>
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
		
			<form id="basicForm" action="{{route('billets.store')}}" method="POST"  class="form-horizontal">
				{{csrf_field()}}
				<div class="form-group">
		            <label class="col-sm-3 control-label"><span class="text-info">Type du Billet</span></label>
		            <div class="col-sm-6">
		               <select name="categorie" class="form-control">
		               		<option value="Business Class">Business Class</option>
		               		<option value="Economic Class">Economic Class</option>
		               </select>
		            </div>
            	</div>
            	{!! $errors->first('categorie','<div class="alert alert-danger">:message</div>') !!}
            	<div class="form-group">
		            <label class="col-sm-3 control-label"><span class="text-info">Prix </span></label>
		            <div class="col-sm-6">
		               <input type="number" name="prix" placeholder="Prix du billet" required="required" class="form-control" />
		            </div>
            	</div>
            	{!! $errors->first('prix','<div class="alert alert-danger">:message</div>') !!}
            	<div class="form-group">
		            <label class="col-sm-3 control-label"><span class="text-info">Compagnie</span></label>
		            
		            <div class="col-sm-6">
		               <select name="vol" class="form-control">
		               		@foreach($vols as $vol)
		               		<option  value="{{$vol->IdVol}}">{{$vol->NomCompagnie}}</option>
		               		@endforeach
		               </select>
		            </div>
		            
            	</div>
            	{!! $errors->first('vol','<div class="alert alert-danger">:message</div>') !!}
            	<button type="submit" class="btn btn-primary">AJOUTER</button>
            	
			</form>
			<br><button type="submit" class="btn btn-danger"><a href="{{route('compagnies.index')}}">ANNULER</a></button>
			
		 	
		
			
		
	
	
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
	
