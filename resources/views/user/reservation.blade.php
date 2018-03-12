@extends('user.index')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div id="particles-js" class="light-blue darken-4">

		</div>
		<div class="row z-depth-1 grey">
			<form action="{{route('recherche_path')}}" method="post" accept-charset="utf-8" class="form-search">
				<div class="col l10 s8">
					<input type="search" name="Destination" placeholder="Rechercher une destination">
				</div>
				<div class="col l2 s4">
					<input type="submit" name="" class="btn waves-effect">
				</div>
			</form>
		</div>
	</div>
	@if(session()->has('reservation.create'))
	<div class="row">		
		<aside class=""><span class="col s12 card-panel white-text red center-align">{{session()->get('reservation.create')}}</span></aside>
	</div>
	@endif

	@if(session()->has('reservation.erreur'))
	<div class="row">		
		<aside class=""><span class="col s12 card-panel white-text red center-align">{{session()->get('reservation.erreur')}}</span></aside>
	</div>
	@endif
	<div class="row">
		<table class="z-depth-2 centered responsive-table">
			
			<tbody>
				@foreach($vols as $vol)
				<tr class="">
					<td><img src="{{asset('storage/'.$vol->logo)}}" alt="" class="responsive-img"></td>
					<td><a class="btn waves-effect btn-large white lighten-4 black-text">{{$vol->Destination}}</a></td>
					<td><a class="btn waves-effect btn-large white lighten-4 black-text">{{$vol->DateDepart}}</a></td>
					<td><a class="btn waves-effect btn-large white lighten-4 black-text">{{$vol->Statut}}</a></td>
					<td><a class="btn waves-effect btn-large white lighten-4 black-text">{{$vol->prix}} FCFA</a></td>
					<td><a href="" class="btn waves-effect btn-large white lighten-4 black-text">{{$vol->NbrePlace}} places restantes</a></td>
					<td>
						<form method="get" action="{{route('reservations.show',$vol->IdVol)}}">
							{{csrf_field()}}
							<input type="hidden" name="vol" value="{{$vol->IdVol}}">
							<input type="submit" class="btn waves-effect btn-large blue darken-2  lighten-4 black-text" name="valider"  value="RESERVATION" >
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>		
	</div>
</div>

@endsection


