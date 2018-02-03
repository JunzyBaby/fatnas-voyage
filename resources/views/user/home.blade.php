@extends('user.index')
@section('content')
 <marquee class=" flow-text z-depth-4 light-blue animated zoomIn" BEHAVIOR="alternate" ><strong>Fatnas Voyages</strong> Nous réalisons votre  rêve de faire le tour du monde!</marquee>
 <div class="slider">
  <ul class="slides">
    <li>
      <img src="{{asset('images/abidjan2.jpg')}}"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="center-align">La baie des milliardaires</h3>
        <h5 class="light grey-text text-lighten-3 center-align">Abidjan</h5>
      </div>
    </li>
    <li>
      <img src="{{asset('images/basilique.jpg')}}"> <!-- random image -->
      <div class="caption left-align">
        <h3 class="center-align">Basilique Yamoussoukro</h3>
        <h5 class="light grey-text text-lighten-3 center-align">Notre dame de la paix</h5>
      </div>
    </li>
    <li>
      <img src="{{asset('images/zaouli.jpg')}}"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="center-align">Le Zaouli</h3>
        <h5 class="light grey-text text-lighten-3 center-align">Danse populaire des communautés Gouro de Côte d'Ivoire</h5>
      </div>
    </li>
    <li>
      <img src="{{asset('images/sassandra.jpg')}}"> <!-- random image -->
      <div class="caption right-align">
        <h3 class="center-align">Vue d'une plage</h3>
        <h5 class="light grey-text text-lighten-3 center-align">Sassandra</h5>
      </div>
    </li>
    <li>
      <img src="{{asset('images/liane1.jpg')}}"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="center-align">Le pont des lianes</h3>
        <h5 class="light grey-text text-lighten-3 center-align">Man</h5>
      </div>
    </li>
  </ul>
</div>
<div class="container grey lighten-4">
  <div class="row">
    <h2 class="center-align">Fatnas Voyages, réservez vos vols au meilleur tarif</h2>
    <h3 class="center-align flow-text">Voyagez vers l'Afrique et le Monde</h3>
  </div>
</div>
<div class="container-fluid grey lighten-4">
  <div class="row">
    <div class="col s12 m4">
      <div class="card" data-kui-anim="slideInLeft">
        <div class="card-image">
          <img src="{{asset('images/afr.png')}}">
          <span class="card-title center-align">Paris, France</span>
        </div>
        <div class="card-content">
          <p class="flow-text">A partir de 400 000 FCFA</p>
        </div>
        <div class="card-action">
          <a href="#" class="waves-effect waves-light btn blue darken-4 animated fadeOut infinite">Voir l'offre</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card" data-kui-anim="zoomIn">
        <div class="card-image">
          <img src="{{asset('images/dubai.png')}}">
          <h3 class="card-title center-align">Dubaï</h3>
        </div>
        <div class="card-content">
          <p class="flow-text">A partir de 700 000 FCFA</p>
        </div>
        <div class="card-action">
          <a href="#" class="waves-effect waves-light btn blue darken-4 animated shake infinite">Voir l'offre</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card" data-kui-anim="slideInRight">
        <div class="card-image">
          <img src="{{asset('images/airci.jpg')}}">
          <h3 class="card-title center-align">Dakar, Sénégal</h3>
        </div>
        <div class="card-content">
          <p class="flow-text">A partir de 260 000 FCFA</p>
        </div>
        <div class="card-action">
          <a href="#" class="waves-effect waves-light btn blue darken-4 animated fadeIn infinite">Voir l'offre</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid grey lighten-4">
  <div class="row">
    <h2 class="center-align" data-kui-anim ="jackInTheBox">Nos partenaires</h2>
    
    <div class="container center-align col l12 m12  grey lighten-4" data-kui-anim="zoomIn">
      <marquee BEHAVIOR="alternate">
        <img src="images/Jumia.png" alt="placeholder+image" class="z-depth-1">
        <img src="images/aire.png" alt="placeholder+image" class="z-depth-1">
        <img src="images/France.png" alt="placeholder+image" class="z-depth-1">
        <img src="images/Brussels.png" alt="placeholder+image" class="z-depth-1">
        <img src="images/Turkish.png" alt="placeholder+image" class="z-depth-1">
        <img src="images/tap.png" alt="placeholder+image" class="z-depth-1">
        <img src="images/tou.jpg" alt="placeholder+image" class="z-depth-1">
      </marquee>
    </div>

  </div>
</div>
@endsection