@extends('user.index')

@section('content')

<p class="center-align">Veuillez remplir le formulaire pour pour vous enregister</p>

@if(session()->has('reservation.erreur'))
  <div class="alert alert-danger">
    {{session()->get('reservation.erreur')}}
  </div>
@endif

@if(session()->has('reservation.success'))
  <div class="alert alert-info">
    {{session()->get('reservation.success')}}
  </div>
@endif


<div class="row">
  <form class="col s12" method="post" action="{{route('reservations.store')}}">
    {{csrf_field()}}
    <div class="row">
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">account_circle</i>
        <input  id="name" name="Nom" type="text" class="validate">
        <label for="name">Nom</label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">account_circle</i>
        <input id="username" name="Prenom" type="text" class="validate">
        <label for="username">Prenom</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 l6">
        <i class="fa fa-birthday-cake prefix"></i>
        <input  id="birth" name="Naissance" type="date" class="validate">
        <label for="birth"></label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">place</i>
        <input id="adresse" type="text" name="Adresse" class="validate">
        <label for="adresse">Adresse</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">phone</i>
        <input  id="phone" type="tel" name="Telephone" class="validate">
        <label for="phone">Téléphone</label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">email</i>
        <input id="email" type="email" name="Email" class="validate">
        <label for="email" type="submit">Email</label>
      </div>
    </div>
    <input type="hidden" name="IdVol" value="{{$id}}">
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">airline_seat_legroom_normal</i>
        <input id="place" type="number" name="Place" class="validate">
        <label for="place" type="submit">Nombre de place</label>
      </div>
    </div>
    <div class="row">
      <div >
        <input type="submit" class="btn waves-effect btn-large" value="Valider">
      </div>
    </div>
  </form>
</div>
@endsection