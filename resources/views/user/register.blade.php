extends('user.index')
@section('content')
<p class="center-align">Veuillez remplir le formulaire pour pour vous enregister</p>
<div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">account_circle</i>
        <input  id="name" type="text" class="validate">
        <label for="name">Nom</label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">account_circle</i>
        <input id="username" type="text" class="validate">
        <label for="username">Prenom</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 l6">
        <i class="fa fa-birthday-cake prefix"></i>
        <input  id="birth" type="date" class="validate">
        <label for="birth"></label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">place</i>
        <input id="adresse" type="text" class="validate">
        <label for="adresse">Adresse</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">phone</i>
        <input  id="phone" type="tel" class="validate">
        <label for="phone">Téléphone</label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">email</i>
        <input id="email" type="email" class="validate">
        <label for="email" type="submit">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
         <i class="material-icons prefix">airline_seat_legroom_normal</i>
        <select>
          <option value="" disabled selected>Nombres de places</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div >
        <a class="btn waves-effect btn-large">Valider</a>
      </div>
    </div>

  </form>
</div>
@endsection