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
          UNIVERSAL MUSIC INDONESIA
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <p class="center-align">
            <img src="{{asset('images/juri1.jpg')}}" alt="">
          </p>
          <p><strong>Universal Music Indonesia (UMI) merupakan anak perusahaan dari Universal Music Group International (UMGI) yang merupakan perusahaan rekaman terkemuka di dunia.</strong></p>

          <p>UMI salah satu major recording label di Indonesia yang eksistensinya terus berkembang menjadi yang terbesar di industri musik Indonesia.</p>
          <p>UMI menjadi perusahaan rekaman yang mengorbitkan, mempopulerkan dan menjadi rekanan beberapa artist ternama seperti Samsons, RAN, Raisa, Ada Band, Andra and The Backbone, Gigi, HiVi, Dewi Sandra, Ike Nurjanah, Sania, White Shoes Company, Ecoutez, Gruvi, Salju, 5 Romeo, Pee Wee Gaskins, pemenang dan finalis Indonesian Idols seperti Regina Ivanova, Nowela, juga pemenang dan finalis The Voice Indonesia and finalis seperti Billy Simpson, Mario G Klau, Gloria Jessica, Sekar Teja, Nina Yunken, dan lainnya serta pemenang dan kontestan The Voice Kids Indonesia di tahun 2016 kemarin.</p>
          <p>UMI memiliki dan mengoperasikan beragam bisnis yang terlibat dalam rekaman musik, penerbitan musik, merchandise, dan konten audiovisual.</p>
          <p>UMI mengidentifikasi dan mengembangkan seniman rekaman dan penulis lagu, dan kami memproduksi, mendistribusikan dan mempromosikan musik yang terkenal dan sukses secara komersial untuk menyenangkan dan menghibur penggemar musik di Indonesia.</p>
          <p>Dengan teknologi digital yang mengubah dunia, komitmen UMI yang tak tertandingi untuk memimpin dalam mengembangkan layanan baru, platform dan model bisnis untuk pengiriman musik dan konten terkait memberdayakan inovator dan memungkinkan kesempatan komersial dan artistik baru yang berkembang sangat cepat di era digital ini.</p>
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
