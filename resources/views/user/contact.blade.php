@extends('user.index')
@section('content')

<div id="map"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col l4" data-kui-anim="zoomIn">
			<h4 class="center-align">Nous contacter</h4>
			<ul class="collection">
				<li class="collection-item avatar">
					<!--  <img src="images/yuna.jpg" alt="" class="circle"> -->
					<i class="material-icons circle green large">home</i><br>
					<span class="title">Fatnas Voyages</span>
					
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle amber">phone</i><br>
					<span class="title">59 74 45 54 / 09 44 21 73 / 08 01 73 64</span>
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle blue">email</i><br>
					<span class="title">fatnasvoyages@gmail.com</span>
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle red">place</i><br>
					<span class="title">ESATIC  - Treichville KM4</span>
				</li>
			</ul>
		</div>
		<div class="col l8" data-kui-anim="zoomIn">
			<h4 class="center-align">Laissez nous un message</h4>
			<div class="row z-depth-1">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" type="text" class="validate">
							<label for="icon_prefix">Votre nom</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input id="email" type="email" class="validate">
							<label for="email" data-error="incorrect" data-success="right">Email</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">insert_comment</i>
							<textarea id="textarea1" class="materialize-textarea"></textarea>
							<label for="textarea1">Message</label>
						</div>
						<a class="waves-effect waves-light btn right blue"><i class="material-icons left">send</i>envoyer</a>
					</div>
				</div>
			</form>
		</div>
	</div>


</div>
</div>

@endsection