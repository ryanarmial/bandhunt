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
          JAN N. DJUHANA
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <p class="center-align">
            <img src="{{asset('images/juri3.jpg')}}" alt="">
          </p>
          <p><strong>Artist & Repertoire (A&R) Director Universal Music Indonesia</strong></p>

          <p>Produser yang satu ini sudah sangat lama berkecimpung di industri musik nasional. Sampai 2017 ini, dia sudah lebih dari 38 tahun berada dalam perusahaan rekaman mulai dari perusahaan sendiri hingga perusahaan international. Berkat pengalamannya yang matang tersebut, Jan N. Djuhana sangat piawai dalam mencium artis baru yang berpotensi diorbitkan, sebuah daya penciuman yang hanya bisa diperoleh melalui proses Panjang. Insting, naluri, atau feeling, demikian orang musik menyebutnya.</p>
          <p>Sejak muda, Jan cukup akrab dengan dunia  musik. Ketika SMA dia sudah bergabung dengan grup musik sebagai pemetik bas gitar. Hobinya berlanjut hingga di perguruan tinggi, bahkan sampai membuka toko kaset sendiri di kawasan Glodok. Dia sering kali merekam lagu-lagu barat dari piringan hitam kekaset, yang direspons sangat baik oleh pembeli. Lambat laun, toko kasetnya makin ramai. Dia sering kali melupakan kuliahnya karena kesibukan di toko kaset dan manggung’ bersama grup musiknya.</p>
          <p>Bersama sejumlah temannya, Jan kemudian membangun perusahaan rekaman Team Records. Dialah yan didapuk sebagai penaggung jawab untuk menemukan artis baru yang layak direkam. Dia pula yang ditugaskan memilih lagu-lagu barat yang akan direkam. Talentanya sudah mulai terlihat, sehingga perusahaannya dilirik beberapa perusahaan lain yang bergerak di bidang tersebut. Kehebatan Jan dalam mencium potensi penyanyi/grup baru, terlihat ketika menggarap album Yana Julio. Penyanyi solo pria tersebut, melejit menjadi salah satu pendatang baru yang disegani. Lalu dia juga berhasil mencetak beberapa album Elfa’s Singer. Bintang Jan makin benderang, kala membuat kompilasi 10 Bintang Nusantara, dengan hits single KLA Project Tentang Kita. Di album tersebut ada juga grup Kahitna, Sawung Jabo, ITB Jazz Choir, dan lain-lain. Akhirnya, Jan juga menemukan grup band Dewa 19 dengan hits perdananya Kangen.</p>
          <p>Pada 1997, Jan bergabung dengan Sony Music Indonesia. Dan lagi-lagi, bertugas untuk menemukan penyayi baru. Tidak perlu menunggu lama, Jan menjawabnya dengan grup musik asal Bandung /rif. Grup ini mengusung aliran musik cadas, yang waktu itu sudah dikuasai oleh Log Zhelebour dengan Logiss Record-nya. Tentu bukan hal mudah menembus dominasi musik cadas tersebut. Tapi Jan membuktikan pilihannya tidak keliru /rif menjelma menjadi salah satu kelompok musik rock yang bisa berkibar.</p>
          <p>Jan juga yang mengorbitkan SO7 (Sheilla on 7) dari Yogyakarta, kota yang sebelumnya jarang dilirik oleh produser lain. Ketika pertama kali menerima kaset demo grup ini, Jan tidak langsung menerimanya meski tahu persis grup yang terdiri atas Duta, Eross, Adam, Anton dan Sakti ini sangat berpotensi. Jan malah meminta mereka untuk menambah koleksi lagu, sehingga kemudian lahirlah lagu Dan serta Anugerah Terindah, dua lagu yang menjadi hits album perdana grup tersebut. Hasilnya… luar biasa. Album tersebut laku sampai sekitar 2 juta kopi.</p>
          <p>Selain SO7 ada juga grup Padi asal Surabaya yang pada album perdananya langsung sukses dengan angka penjualan lebih dari 1 juta kopi. Padahal sebelumnya tidak ada industri yang mengenal grup band ini. Sekarang Padi termasuk dalam jajaran grup musik papan atas. Ada banyak penyanyi/grup band lainnya yang diorbitkan Jan dengan tangan dinginnya, antara lain Cokelat, Glenn Fredly, Audy, Rio Febrian, dan lainnya. Jan juga adalah produser yang suka menggali potensi putra daerah yang belum terjamah oleh produser lain, contohnya SID (Bali), Vagetoz (Sukabumi), Tasya (lagu anak-anak), dan lain-lain.</p>
          <p>Kelanjutan karier Jan tidak berhenti sampai di sini, tapi Jan terus eksis menghasilkan karya-karya besar dan mengorbitkan penyanyi dan band-band menjadi TOP dan terkenal sampai saat ini, antara lain Ratu, Yovie n Nuno, Ello, Gita Gutawa, Pinkan Mambo, The Changcuters, Bondan and FadeTo Black, Speaker first dan  Cakra Khan.</p>
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
