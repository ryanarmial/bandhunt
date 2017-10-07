@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <div class="row">
    @foreach($bands as $band)
    <div class="col s3 band-banner" style="background-image:url(http://levi.co.id/band-hunt/public/foto/{{$band->foto}})"></div>
    @endforeach
  </div>
  <div class="wrap-img-banner">
    <img class="responsive-img hide-on-small-only" src="{{ asset('images/home-logo.png') }}">
    <img class="hide-on-med-and-up responsive-img" src="{{ asset('images/home-logo.png') }}">
  </div>
  <!-- <div class="btn-cta">
    <ul>
      <li><a href="{{ route('vote') }}">VOTE NOW</a></li>
      <li><a href="{{ route('submission') }}">SUBMIT NOW</a></li>
    </ul>
    <ul class="btn-pop-head">
      <li><a href="{{ route('popup') }}">LEVI'S&#174; POP UP STUDIO</a></li>
    </ul>
  </div> -->
</div>
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row margin-bottom-50">
      <div class="video-container">
       <iframe src="https://www.youtube.com/embed/7UDwaCOjucQ?rel=0" frameborder="0" allowfullscreen></iframe>
     </div>
    </div>
    <div id="band-hunt" class="row">
      <div class="col s12">
        <div class="judul-page">
          40 Band Semifinalis
        </div>
      </div>
      <div id="list-vote" class="col s12">
        <div class="col s12 m6 l3">
          <ol>
            <li>Alena</li>
            <li>Banana Project</li>
            <li>Batiga</li>
            <li>Beauty And The Beats</li>
            <li>Black Drama</li>
            <li>By The Way</li>
            <li>Cheery Trees</li>
            <li>Coffee Strikes</li>
            <li>Dewantara Rock</li>
            <li>DPR</li>
          </ol>
        </div>
        <div class="col s12 m6 l3">
          <ol start="11">
            <li>Dynamic Trio</li>
            <li>Fly To the Moon</li>
            <li>Good News</li>
            <li>Jeane</li>
            <li>Lada</li>
            <li>Lorong Waktu</li>
            <li>Mary Celeste</li>
            <li>Moluska</li>
            <li>Noy</li>
            <li>Own Band</li>
          </ol>
        </div>
        <div class="col s12 m6 l3">
          <ol start="21">
            <li>Q-Oz_ZeroFive</li>
            <li>Rival & Friends</li>
            <li>Romantick</li>
            <li>Ruang Kosong</li>
            <li>Shade</li>
            <li>Sinthink</li>
            <li>Stigma</li>
            <li>Teori</li>
            <li>The Godspeed</li>
            <li>The Little Lizard</li>
          </ol>
        </div>
        <div class="col s12 m6 l3">
          <ol start="31">
            <li>The Wise</li>
            <li>Tutur Nada</li>
            <li>Violet Fighter</li>
            <li>Visual Dream Band</li>
            <li>Ep’s</li>
            <li>Evvi</li>
            <li>Soloensis</li>
            <li>Tetra</li>
            <li>The Istiqomah</li>
            <li>You!</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
