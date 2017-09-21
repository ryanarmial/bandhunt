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
          MALIQ & D'ESSENTIALS
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <p class="center-align">
            <img src="{{asset('images/juri2.jpg')}}" alt="">
          </p>
          <p>MALIQ & D’Essentials dibentuk di Jakarta pada tahun 2002 dan terdiri dari Angga (Vokal), Indah (Vokal), Widi (Drum), Lale (Gitar), Ilman (Keyboard), dan Jawa (Bass). Karir music MALIQ & D’Essentials mulai menanjak bersama debut album pertama mereka yang berjudul "1st" di tahun 2004 dengan lagu - lagu hits seperti "Terdiam" dan "Untitled". Penampilan MALIQ & D’Essentials di Indonesia International Java Jazz Festival 2005 juga ikut mengangkat nama mereka di belantika musik Indonesia. Banyak yang menyebut band ini beraliran Jazz, walaupun mereka tidak pernah mengklaim diri sebagai Jazz band, melainkan beraliran Pop.</p>
          <p>Pada awal band ini dibentuk, musik mereka sangat terinspirasi oleh American Soul dan Neo Soul. Akan tetapi, musik MALIQ & D’Essentials berkembang menjadi lebih ‘Pop’ – hasil dari percampuran antara musik Soul, Pop klasik Indonesia dan Pop Inggris seperti The Beatles dan bahkan hingga musik Elektronik. Sejak musik mereka berevolusi menjadi lebih eklektik, band ini merilis album ke 5 di 2013 berjudul "Sriwedari" dan “Musik Pop” di tahun 2014 yang mendapat respon sangat bagus dari masyarakat dan juga media. Setelah mereka merilis beberapa single dan mendapatkan banyak nominasi dan penghargaan di 2015 dan 2016, MALIQ & D'Essentials merilis album terbaru di tahun 2017. Album ke-7 dari MALIQ & D’Essentials yang berjudul “Senandung Senandika” ini juga menandakan 15 tahun berkarir di industri musik Indonesia.</p>
          <!-- <p>MALIQ & D’Essentials terdiri dari Angga (Vokal), Indah (Vokal), Widi (Drum), Lale (Gitar), Ilman (Keyboard), dan Jawa (Bass). Band ini dibentuk pada tahun 2002 di Jakarta. Karir bermusik MALIQ & D’Essentials mulai menanjak dengan debut album pertama mereka. Album tersebut berhasil mendapatkan penghargaan sebagai album terbaik di tahun 2004 dengan 2 lagu hits mereka: “Terdiam” dan “Untitled”. Penampilan MALIQ & D’Essentials di Java Jazz Festival juga ikut mengangkat nama mereka. Band ini bisa dibilang beraliran jazz, walaupun mereka tidak pernah mengklaim sebagai jazz band. </p>
          <p>Pada awal band ini dibentuk, musik mereka sangat terinspirasi oleh American soul dan Neo soul. Akan tetapi, musik MALIQ & D’Essentials berkembang dan berevolusi menjadi lebih ‘pop’ – hasil dari percampuran antara musik soul, pop klasik Indonesia, pop Inggris seperti the Beatles, dan bahkan juga musik elektronik. Sejak aliran musiknya mulai beralih ke ‘eklektik pop’, band ini merilis album ke 6 yang berjudul “Musik Pop” di tahun 2014. Album tersebut mendapat respon yang sangat bagus dari masyarakat dan juga media. Setelah itu, mereka merilis beberapa singles dan mendapatkan banyak penghargaan. </p>
          <p>Melanjutkan sukses sebelumnya, band ini baru saja merilis album terbaru di tahun 2017. Album ke-7 dari MALIQ & D’Essentials yang berjudul “Senandung Senandika” ini juga menandakan 15 tahun berkarir di industri musik Indonesia.</p> -->
          <p><strong>Discography:</strong></p>
          <ul>
            <li>
              Albums
              <ul>
                <li>1st (2004)</li>
                <li>Free Your Mind (2007)</li>
                <li>Mata Hati Telinga (2009)</li>
                <li>The Beginning of a Beautiful Life (2010)</li>
                <li>Sriwedari (2013)</li>
                <li>Musik Pop (2014)</li>
                <li>Senandung Senandika (2017)</li>
              </ul>
            </li>
            <li>
              Singles
              <ul>
                <li>Tafakur (2008 – LCLM Compilation)</li>
                <li>Prasangka (2011 – Tribute to KLA Project)</li>
                <li>Berlari dan Tenggelam (2012 – Radio Killed The TV Stars Compilation)</li>
                <li>Barcelona (2014 – Fariz RM & Dian PP In Collaboration with Tribute)</li>
                <li>Aurora (2015)</li>
                <li>Mendekat, Melihat, Mendengar (2016 – Pop Hari Ini Compilation)</li>
              </ul>
            </li>
            <li>
              DVD
              <ul>
                <li>Live at 2009 Java Jazz International Festival</li>
              </ul>
            </li>
            <li>
              Book
              <ul>
                <li>The Beginning of a Beautiful Life – a Story Yet to be Told (2010)</li>
              </ul>
            </li>
          </ul>
          <p><strong>Awards:</strong></p>
          Please see: <a href="https://en.wikipedia.org/wiki/Maliq_%26_D%27Essentials#Awards_and_Nominations">https://en.wikipedia.org/wiki/Maliq_%26_D%27Essentials#Awards_and_Nominations</a>

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
