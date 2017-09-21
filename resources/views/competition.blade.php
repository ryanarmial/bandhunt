@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <div id="wrap-mekanisme">
    <div class="container">
      <div class="row ">
        <div class="col s12 margin-bottom-20">
          <div class="judul-page">
            Mekanisme
          </div>
        </div>
        <div class="demo col s12 hide-on-med-and-up">
          <ul id="lightSlider">
            <li class="center-align">
              <div class="item-mekan"><img src="{{asset('images/mekan1.png')}}" alt=""></div>
              <p>Daftarkan band kamu di LEVI’S&#174; BAND HUNT.</p>
            </li>
            <li class="center-align">
              <div class="item-mekan"><img src="{{asset('images/mekan2.png')}}" alt=""></div>
              <p>Kirim demo berupa link lagu dari Soundcloud atau link video music dari YouTube, sebelum 8 September 2017</p>
            </li>
            <li class="center-align">
              <div class="item-mekan"><img src="{{asset('images/mekan3.png')}}" alt=""></div>
              <p>Setelah proses seleksi, akan dipilih 40 band untuk diundang ke studio recording & shooting, berlokasi di 4 kota. Setelah video di upload ajak sebanyak-banyaknya teman dan kerabat mu untuk vote band kamu</p>
            </li>
            <li class="center-align">
              <div class="item-mekan"><img src="{{asset('images/mekan4.png')}}" alt=""></div>
              <p>5 Band dengan total point tertinggi, dan 3 band dari wild card dewan juri akan diundang ke Grand Finale.</p>
            </li>
            <li class="center-align">
              <div class="item-mekan"><img src="{{asset('images/mekan5.png')}}" alt=""></div>
              <p>Grand Finale akan diadakan selama 2 hari di Jakarta untuk proses sharing session bersama Maliq & D'Essensials dan Universal Music Indonesia, serta grooming session oleh Levi's&#174;</p>
            </li>
            <li class="center-align">
              <div class="item-mekan"><img src="{{asset('images/mekan6.png')}}" alt=""></div>
              <p>Rekaman & produksi video musik bersama Universal Music Indonesia.</p>
            </li>
          </ul>
        </div>
        <div class="hide-on-small-only">
          <div class="col s6 m2 l2">
            <div class="item-mekan"><img class="responsive-img" src="{{asset('images/mekan1.png')}}" alt=""></div>
            <p>Daftarkan band kamu di LEVI’S&#174; BAND HUNT.</p>
          </div>
          <div class="col s6 m2 l2">
            <div class="item-mekan"><img class="responsive-img" src="{{asset('images/mekan2.png')}}" alt=""></div>
            <p>Kirim demo berupa link lagu dari Soundcloud atau link video music dari YouTube, sebelum 8 September 2017</p>
          </div>
          <div class="col s6 m2 l2">
            <div class="item-mekan"><img class="responsive-img" src="{{asset('images/mekan3.png')}}" alt=""></div>
            <p>Setelah proses seleksi, akan dipilih 40 band untuk diundang ke studio recording & shooting, berlokasi di 4 kota. Setelah video di-upload ajak sebanyak-banyaknya teman dan kerabatmu untuk vote band kamu</p>
          </div>
          <div class="col s6 m2 l2">
            <div class="item-mekan"><img class="responsive-img" src="{{asset('images/mekan4.png')}}" alt=""></div>
            <p>5 Band dengan total point tertinggi, dan 3 band dari wild card dewan juri akan diundang ke Grand Finale</p>
          </div>
          <div class="col s6 m2 l2">
            <div class="item-mekan"><img class="responsive-img" src="{{asset('images/mekan5.png')}}" alt=""></div>
            <p>Grand Finale akan diadakan selama 2 hari di Jakarta untuk proses sharing session bersama Maliq & D'Essentials dan Universal Music Indonesia, serta grooming session oleh Levi's&#174;</p>
          </div>
          <div class="col s6 m2 l2">
            <div class="item-mekan last-mekan"><img class="responsive-img" src="{{asset('images/mekan6.png')}}" alt=""></div>
            <p>Rekaman & produksi video musik bersama Universal Music Indonesia</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="hadiah">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="wrap-garis">
          <div class="judul-page">
            Hadiah
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="wrap-garis">
          <div class="judul-page" style="border:none;">
            JUARA 1
          </div>
          <div class="center-align">
            <img class="responsive-img" src="{{asset('images/hadiah1.png')}}" alt="">
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="wrap-garis">
          <div class="judul-page" style="border:none;">
            JUARA 2
          </div>
          <div class="center-align">
            <img class="responsive-img" src="{{asset('images/hadiah2.png')}}" alt="">
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="wrap-garis">
          <div class="judul-page" style="border:none;">
            JUARA 3
          </div>
          <div class="center-align">
            <img class="responsive-img" src="{{asset('images/hadiah3.png')}}" alt="">
          </div>
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
@stop
@section('footer')
<link type="text/css" rel="stylesheet" href="{{asset('css/lightslider.css')}}" />
<script src="{{asset('js/lightslider.js')}}"></script>
<script type="text/javascript">
$('#lightSlider').lightSlider({
  item: 1,
  loop:true,
  slideMargin: 0,
});
</script>
@endsection
