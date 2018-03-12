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
			<a class="navbar-brand" href="#">RECEPTIONNISTE  FS</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="{{route('reception_path')}}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="{{route('reception_billet')}}">Billets</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="{{route('reception_client')}}">Clients</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="{{route('reception_compagnie')}}">Compagnies</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{route('reception_reservation')}}">Réservations</a>
					</li>
					<li class="nav-item">
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
			<h3>#Liste des Réservations</h3>
			@if(session()->has('reservation.confirme'))
			<div class="alert alert-success">
				{{session()->get('reservation.confirme')}}
			</div>
			@endif
			@if(session()->has('reservation.update'))
			<div class="alert alert-danger">
				{{session()->get('reservation.update')}}
			</div>
			@endif
			<div class="row">
				<div class="table-responsive">
					
					<table class="table table-primary mb30">
						<thead>
							<tr>
								<th>Nom & Prenom </th>                        
								<th>Date de Reservat°</th>
								<th>Nbre Place</th>
								<th>Contact</th>
								<th>Code </th>
								<th>Destination</th>
								<th>Depart</th>
								<th>Arrivé</th>
								<th>Statut</th>
								<th>Opération</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($reservations as $reservation)                  
							<tr>                       
								<td>{{$reservation->NomClient}} {{$reservation->PrenomClient}}</td>                        
								<td>{{$reservation->DateReservation}}</td>
								<td>{{$reservation->NbrPlace}}</td>
								<td>{{$reservation->ContactClient}}</td>
								<td>{{$reservation->CodeVol}}</td>
								<td>{{$reservation->Destination}}</td>
								<td>{{$reservation->DateDepart}}</td>
								<td>{{$reservation->DateArrive}}</td>
								<td style="color: blue;">@if(empty($reservation->statut))
									Non confirmé
									@else
									{{$reservation->statut}}
									@endif
								</td>
								<td>
									<form action="{{route('reservers.update',$reservation->IdReservation)}}" method="POST" >
										{{csrf_field()}}
										{{method_field('PUT')}}
										<input type="hidden" name="confirme" value="annulé">
										<input type="submit" value="Annuler" name="Supprimer" class="btn btn-danger">
									</form>
									<td>
										<form action="{{route('reservers.update',$reservation->IdReservation)}}" method="POST" >
											{{csrf_field()}}
											{{method_field('PUT')}}
											<input type="hidden" name="confirme" value="confirmé">
											<input type="submit" value="Confirmer" name="Supprimer" class="btn btn-success">
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					
					
				</div>
				
				
				
				
	<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>
	
