@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <img class="responsive-img hide-on-small-only" src="{{ asset('images/banner.jpg') }}">
  <img class="hide-on-med-and-up responsive-img" src="{{ asset('images/banner-mobile.jpg') }}">
</div>
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          LEVI’S&#174; POP UP STUDIO
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <p>Levi’s&#174; akan memfasilitasi 12 band pertama yang melakukan pendaftaran melalui nomor <strong>081806035857</strong> di setiap studio musik yang ditentukan. Peserta yang terdaftar akan memperoleh fasilitas sebagai berikut secara gratis:</p>
          <ul>
            <li>Penggunaan studio musik  selama 1 (satu) jam</li>
            <li>Perekaman video untuk di upload ke website</li>
            <li>Koneksi internet untuk upload video</li>
            <li>Asistensi dari crew yang ditunjuk untuk membantu registrasi di <a href="{{ url('/') }}"> www.levi.co.id/band-hunt</a></li>
          </ul>
          <p>Levi’s&#174; Pop Up Recording Studio akan berlangsung mulai pukul 11.00 – 23.00. Panitia akan melakukan pengaturan jadwal. Peserta harus sudah hadir di studio maksimal 30 menit sebelum jadwal. Keterlambatan peserta akan memotong jatah durasi pemakaian studio.</p>
          <p>Adapun studio musik yang ditunjuk adalah sebagai berikut:</p>
          <p>
            <span style="font-size:1.2rem"><strong>OUTLAW MUSIC STUDIO - JAKARTA</strong></span><br>
            Jl. H. Nawi Raya No.80A, RT.3/RW.7, Gandaria Utara, Kby. Baru, Jakarta Selatan <br>
            <strong>15 Agustus 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>STARLIGHT STUDIO - JAKARTA</strong></span><br>
            Komplek Kimia Farma 2, Jalan Padibu Blok AG7, No. 13, RT.08 / RW.14, Duren Sawit, RT.9/RW.14, Duren Sawit, Jakarta Timur <br>
            <strong>2 September 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>ABE STUDIO - JAKARTA</strong></span> <br>
            Jl. Gandaria I No.9, RT.1/RW.10, Kramat Pela, Kby. Baru, Jakarta Selatan <br>
            Jakarta 12130 <br>
            <strong>24 Agustus 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>SB STUDIO – MEDAN</strong></span> <br>
            Jl. Amal No.17, Sunggal, Medan Sunggal, Medan <br>
            <strong>3 September 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>STUDIO NADA MUSICA – SURABAYA</strong></span> <br>
            Jl. Bendul Merisi Sel. Airdas No.65, Bendul Merisi, Wonocolo, Surabaya<br>
            <strong>2 dan 3 September 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>STUDIO CKUSTIK – MAKASSAR</strong></span> <br>
            Jl. Kijang No.29, Maricaya, Kec. Makassar, Makassar <br>
            <strong>5 September 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>JOGJA MUSIC SCHOOL – JOGJAKARTA</strong></span> <br>
            Jl. Godean KM.3 No.1, Nogotirto, Gamping, Kabupaten Sleman <br>
            <strong>2 September 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>ESCAPE STUDIO – BANDUNG</strong></span><br>
            Jl. Baranangsiang No.8A, Kb. Pisang, Bandung, Bandung<br>
            <strong>7 dan 8 September 2017</strong>
          </p>
          <p>
            <span style="font-size:1.2rem"><strong>VENOM STUDIO – JAKARTA</strong></span><br>
            Jl. Kebagusan IV No.31, RT.1/RW.4, Kebagusan, Ps. Minggu, Jakarta Selatan<br>
            <strong>8 September 2017</strong>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
