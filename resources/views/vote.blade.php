@extends('layouts.app')

@section('content')
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59ea40db95f7b200121c29ae&product=custom-share-buttons"></script>
<div id="votes-page" class="wrap-text">
  <div class="container">
    <div class="row">
      <div class="col m8 offset-m2 s12 margin-bottom-50">
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/cUWfiGS9dTo?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col s12">
        <div class="judul-page">
          PENGUMUMAN PEMENANG:
        </div>
        <div class="sub-page" style="margin-top:20px">
          <span>Levi’s® Band Hunt 2017 is wrapped!<br>
            Selamat kepada Batiga sebagai Juara 1 yang berhak mendapatkan Record Deal dengan Universal Music Indonesia!<br>
            Dan selamat kepada Tutur Nada sebagai Juara 2, dan Violet Fighters sebagai Juara 3!</span><br><br>
          <span>Terima kasih atas dukungannya yang luar biasa bagi Levi’s® Band Hunt! Kami sangat senang melihat antusiasme Levi's® Pioneers mengikuti Levi's Band Hunt 2017. <br>
          Tahun ini ada 1.500 band pendaftar yang mengirimkan karyanya. <br>
          Bangga melihat kualitas bermusik & kreativitas musisi muda Indonesia. <br>
          Sejalan dengan perwujudan filosofi "Authentic Self Expression",  Levi’s® percaya bahwa musik adalah bentuk paling nyata untuk mengekspresikan diri. <br> Jika tahun ini band kamu belum beruntung, pastikan kamu kirim musik terbaikmu di Levi’s® Band Hunt 2018. <br><br>
          Ayo kita terus berkarya untuk kemajuan musik Indonesia! <br>
          #LevisBandHunt <br>
          #LiveInLevis</span><br><br>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6" style="margin-bottom:20px">
        <img class="materialboxed responsive-img" src="http://levi.co.id/band-hunt/public/images/stage.jpg">
      </div>
      <div class="col s12 m6" style="margin-bottom:20px">
        <img class="materialboxed responsive-img" src="http://levi.co.id/band-hunt/public/images/batiga.jpg">
      </div>
      <div class="col s12 m6" style="margin-bottom:20px">
        <img class="materialboxed responsive-img" src="http://levi.co.id/band-hunt/public/images/tuturnada.jpg">
      </div>
      <div class="col s12 m6" style="margin-bottom:20px">
        <img class="materialboxed responsive-img" src="http://levi.co.id/band-hunt/public/images/violet.jpg">
      </div>
    </div>
  </div>
</div>

@stop
@section('footer')
<script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  $(document).ready(function(){
    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        closeIcon: true,
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
          link = trigger.attr('data-link');
          modal.children('.modal-content').children('.video-container').html('<iframe src="'+link+'" frameborder="0" allowfullscreen></iframe>')
        },
        complete: function() {
          $('#modal1').children('.modal-content').children('.video-container').html('')
        } // Callback for Modal close
      }
    );
  });
  $(document).on('click', "#page-load", function () {
    $(this).hide();
    $('#circleG').show();
    $('#msg-vote').hide();
  });
  $(".btn-sort").change(function() {
    sort = $(this).val()
    if(sort == 'atoz'){
      type = 'atoz'
    }else if (sort == 'ztoa') {
      type = 'ztoa'
    }else if (sort == 'highscore') {
      type = 'highscore'
    }else if (sort == 'lowscore') {
      type = 'lowscore'
    }
    $.ajax({
      type: 'GET', // Use POST with X-HTTP-Method-Override or a straight POST if appropriate.
      dataType: 'json', // Set datatype - affects Accept header
      url: '{{url("/vote")}}/sort/'+type, // A valid URL
      success : function(data){
        $('#bandvotes').html('')
        data.songs.forEach(song => {
          // $('#bandvotes').append('<div class="col l4 m6 s6 wrap-band" id="song'+song.id+'"><div class="name truncate">'+song.band_name+'</div><div class="song truncate">'+song.judul+'</div><div data-link="'+song.link+'" data-target="modal1" class="modal-trigger img" style="background-image:url(http://levi.co.id/band-hunt/public/foto/'+song.foto+')"></div><div class="button"><div class="col m6 s12"><a href="#" class="btn-vote" data-song="'+song.id+'">LIKE</a></div><div class="col m6 s12"><a href="#" class="btn-share" data-song="'+song.id+'">SHARE</a></div></div></div>')
          $('#bandvotes').append(`<div class="col l4 m6 s6 wrap-band" id="song${song.id}">
            <a href="{{url('/vote')}}/${song.url}">
              <div class="name truncate">${song.band_name}</div>
              <div class="song truncate">${song.judul}</div>
            </a>
            <div data-link="${song.link}" data-target="modal1" class="modal-trigger img">
              <img src="http://levi.co.id/band-hunt/public/foto/${song.foto}" alt="">
            </div>
            <div class="button">
              <div class="col m6 s12"><a href="#" class="${song.status ? 'btn-clicked' : 'btn-clicked'} btn-vote" data-song="${song.id}">LIKE</a></div>
              <div class="fixed-action-btn horizontal col m6 s12 wrap-share">
                <a class="btn-clicked btn-share" data-song="${song.id}">
                  SHARE
                </a>
                <ul>
                  <li>
                    <div data-network="facebook" data-url="{{url('/vote')}}/${song.url}" data-title="Saya memberikan dukungan untuk ${song.band_name} di #LevisBandHunt" class="st-custom-button">
                      <i style="color:#395A93" class="fa fa-facebook-official" aria-hidden="true"></i>
                    </div>
                  </li>
                  <li>
                    <div data-network="twitter" data-url="{{url('/vote')}}/${song.url}" data-title="Saya memberikan dukungan untuk ${song.band_name} di #LevisBandHunt" class="st-custom-button">
                      <i style="color:#08ABDC" class="fa fa-twitter-square" aria-hidden="true"></i>
                    </div>
                  </li>
                  <li>
                    <div data-network="whatsapp" data-url="{{url('/vote')}}/${song.url}" data-title="Saya memberikan dukungan untuk ${song.band_name} di #LevisBandHunt" class="st-custom-button">
                      <i style="color:#05B654" class="fa fa-whatsapp" aria-hidden="true"></i>
                    </div>
                  </li>
                  <li>
                    <div data-network="googleplus" data-url="{{url('/vote')}}/${song.url}" data-title="Saya memberikan dukungan untuk ${song.band_name} di #LevisBandHunt" class="st-custom-button">
                      <i style="color:#E0483E" class="fa fa-google-plus-square" aria-hidden="true"></i>
                    </div>
                  </li>
                  <li>
                    <div data-network="email" data-url="{{url('/vote')}}/${song.url}" data-title="Saya memberikan dukungan untuk ${song.band_name} di #LevisBandHunt" class="st-custom-button">
                      <i style="#bdbdbd" class="fa fa-envelope-square" aria-hidden="true"></i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>`);
        })
      }
    });
    return false;
  });
</script>
@endsection
