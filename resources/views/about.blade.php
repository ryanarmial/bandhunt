@extends('layouts.app')

@section('content')
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div id="about-levis" class="row">
      <div class="col s12">
        <div class="judul-page">
          ABOUT LEVI'S&#174;
        </div>
      </div>
      <div class="col s6 m3"><img class="responsive-img" src="{{asset('images/about1.jpg')}}" alt=""></div>
      <div class="col s6 m3"><img class="responsive-img" src="{{asset('images/about2.jpg')}}" alt=""></div>
      <div class="col s6 m3"><img class="responsive-img" src="{{asset('images/about3.jpg')}}" alt=""></div>
      <div class="col s6 m3"><img class="responsive-img" src="{{asset('images/about4.jpg')}}" alt=""></div>

      <div class="col s12 margin-top-20">
        <div class="isi-page">
          <p>Levi's® adalah merek fesyen ikonik dunia yang selalu dekat dengan dunia musik. Selain menjadi pakaian pilihan para musisi karena gayanya yang casual dan <i>'cool'</i>, musik juga merupakan medium untuk mengekspresikan keunikan dan keotentikan diri yang merefleksikan filosofi <i>'Authentic Self Expression'</i> yang Levi's® percaya. Berdasarkan hal ini, Levi's® menggelar <strong>Levi’s® Band Hunt</strong> mencari band indie berbakat yang memiliki lagu dan musik otentik dan unik.</p>
          <p>Untuk penjurian, Levi's® bekerjasama dengan Universal Music Indonesia dan menghadirkan sosok-sosok musik Indonesia seperti Jan Djuhana (Artist & Repertoire Director Universal Music Indonesia), Maliq & D’Essentials, serta Ricky Siahaan (pemain gitar Band Seringai). Selain berdasarkan pertimbangan bermusik mereka di industri musik nasional, pemilihan kerjasama ini juga karena masing-masing memiliki kesamaan semangat untuk merayakan filosofi orisinalitas, live in Levi’s® dan live in music.</p>
        </div>
      </div>
    </div>
    <div id="band-hunt" class="margin-top-50 row">
      <div class="col s12">
        <div class="judul-page">
          APA SIH Levi's&#174; BAND HUNT?
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          Levi’s&#174; Band Hunt adalah audisi digital pertama untuk berburu band-band muda terbaik di Indonesia. Mengambil filosofi "Authentic Self Expression", kampanye ini bertujuan untuk mencari band independent dengan lagu asli dari genre apapun yang paling unik dan otentik di seluruh Indonesia. Kini saatnya tunjukkan pada seluruh Indonesia kalau band kamu memiliki keunikan tersendiri, berbeda dari yang lain. Raih kesempatan jadi band beken dan mendapatkan record deal dari Universal Music Indonesia, uang tunai, dan juga paket produk dari Levi’s&#174; untuk seluruh anggota band!
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col s12 center-align margin-top-20">
    <a href="#" id="back-to-top" title="Back to top">Back to top</a>
  </div> -->
</div>
@stop
@section('footer')
<script type="text/javascript">
if ($('#back-to-top').length) {
  var scrollTrigger = 100, // px
      backToTop = function () {
          var scrollTop = $(window).scrollTop();
          if (scrollTop > scrollTrigger) {
              $('#back-to-top').addClass('show');
          } else {
              $('#back-to-top').removeClass('show');
          }
      };
  backToTop();
  $(window).on('scroll', function () {
      backToTop();
  });
  $('#back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
          scrollTop: 0
      }, 700);
  });
}
</script>
@endsection
