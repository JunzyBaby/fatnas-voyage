	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">
		
		<title>FATNAS-VOYAGE Administrateur</title>
		
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
			@if(session()->has('billet.destroy'))
			<div class="alert alert-danger">
				{{session()->get('billet.destroy')}}
			</div>
			@endif
			@if(session()->has('billet.update'))
			<div class="alert alert-warning">
				{{session()->get('billet.update')}}
			</div>
			@endif
			@if(session()->has('billet.create'))
			<div class="alert alert-info">
				{{session()->has('billet.create')}}
			</div>
			@endif
			<div class="row">
				<div class="table-responsive">
					
					<table class="table table-primary mb30">
						<thead>
							<tr>
								<th>N°</th>
								<th>Type de billet</th>
								<th>Prix </th>
								<th>Vol</th>
								<th>Compagnie</th>                        
							</tr>
						</thead>
						<tbody>
							@foreach($billets as $billet)                  
							<tr>	
								<td>{{$billet->IdBillet}}</td>
								<td>{{$billet->TypeBille}}</td>
								<td>{{$billet->prix}}</td>
								<td>{{$billet->CodeVol}}</td>
								<td>{{$billet->NomCompagnie}}</td>
								<td><a class="btn btn-success" href="{{route('billets.edit',$billet->IdBillet)}}">Modifier</a></td>
								<td>
									<form action="{{route('billets.destroy',$billet->IdBillet)}}" method="POST" >
										{{csrf_field()}}
										{{method_field('DELETE')}}
										<input type="submit" value="Supprimer" name="Supprimer" class="btn btn-danger">
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				
				<a class="btn btn-info" href="{{route('billets.create')}}"> Créer un billet</a>
			</div>
			
			
			
			
	<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>
	
