@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <img class="responsive-img hide-on-small-only" src="{{ asset('images/banner.jpg') }}">
  <img class="hide-on-med-and-up responsive-img" src="{{ asset('images/banner-mobile.jpg') }}">
</div>
<div id="detail" class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          RICKY SIAHAAN
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <p class="center-align">
            <img src="{{asset('images/juri4.jpg')}}" alt="">
          </p>
          <p>Nama: Ricardo Bisuk Juara Siahaan<br>
            Nama Panggilan: Ricky Siahaan<br>
            TTL: Tanjung Pandan 5 Mei 1976<br>
            E-mail: ricky.shn@gmail.com<br>
            Pekerjaan: <br>
            <ol>
              <li>Gitaris, produser musik dari SERINGAI ( 2002-sekarang)</li>
              <li>Assistant Program Director MTV Sky 101.6 FM (2001-2004)</li>
              <li>Managing Editor Rolling Stone Indonesia Magazine (2005-sekarang)</li>
              <li>Personal Manager Iko Uwais (2015-sekarang)</li>
            </ol>
           </p>
          <p>Darah musik telah lama mengalir lama di pembuluh Ricky Siahaan. Tumbuh besar dengan mendengarkan band-band rock di tahun 80-an seperti Motley Crue, Metallica, dan juga Iron Maiden membuat Ricky Siahaan yakin bahwa musik dan entertainment adalah jalan hidupnya. “Hidup di musik itu tidak semerta-merta hanya berprofesi sebagai musisi.” Ini adalah opini Ricky. Ia beranggapan banyak infrastruktur di lingkungan musik yang butuh sumber daya manusia yang mumpuni. Opini ini tercermin dari kegiatannya sehari hari. Ia menjadi produser radio, dan juga jurnalis musik di majalah Rolling Stone selama belasan tahun. Disela sela itu semua, ia juga berhasil bersama rekan rekan sebandnya di SERINGAI, membesarkan bandnya, hingga menjadi salah satu band rock yang dikenal luas di Indonesia, bermain di seluruh pelosok nusantara, hingga didaulat menjadi band pembuka konser Metallica di GBK Senayan tahun 2013.</p>

        </div>
      </div>
    </div>
  </div>
</div>
<div id="judges">
  <div class="container">
    <div class="row">
      <div class="col s12 wrap-juri">
        <div class="col s12 judul-page margin-bottom-50">
          Dewan Juri
        </div>
        <div class="col s6 m3">
          <a href="{{route('juriumi')}}#detail">
            <div class="wrap-pic-juri">
              <img src="{{asset('images/juri1.jpg')}}" alt="" class="responsive-img">
              <div class="juri-overlay valign-wrapper"><span>VIEW</span></div>
            </div>
            <p>UNIVERSAL MUSIC INDONESIA</p>
          </a>
        </div>
        <div class="col s6 m3">
          <a href="{{route('jurimaliq')}}#detail">
            <div class="wrap-pic-juri">
              <img src="{{asset('images/juri2.jpg')}}" alt="" class="responsive-img">
              <div class="juri-overlay valign-wrapper"><span>VIEW</span></div>
            </div>
            <p>MALIQ & D'ESSENTIALS</p>
          </a>
        </div>
        <div class="col s6 m3">
          <a href="{{route('jurijan')}}#detail">
            <div class="wrap-pic-juri">
              <img src="{{asset('images/juri3.jpg')}}" alt="" class="responsive-img">
              <div class="juri-overlay valign-wrapper"><span>VIEW</span></div>
            </div>
            <p>JAN N. DJUHANA</p>
          </a>
        </div>
        <div class="col s6 m3">
          <a href="{{route('juriricky')}}#detail">
            <div class="wrap-pic-juri">
              <img src="{{asset('images/juri4.jpg')}}" alt="" class="responsive-img">
              <div class="juri-overlay valign-wrapper"><span>VIEW</span></div>
            </div>
            <p>RICKY SIAHAAN</p>
          </a>
        </div>
        <!-- <ol>
          <li><a href="{{route('about')}}#about-jan">Jan Djuhana</a></li>
          <li><a href="{{route('about')}}#about-ricky">Ricky Siahaan</a></li>
          <li><a href="{{route('about')}}#about-umi">Universal Music Indonesia</a></li>
          <li><a href="{{route('about')}}#about-maliq">Maliq & D’Essentials</a></li>
          <li><a href="{{route('about')}}#about-levis">Levi’s Indonesia</a></li>
        </ol> -->
      </div>
    </div>
  </div>
</div>
@endsection
