@extends('layouts.app')
@section('meta')
<meta property="og:url"           content="{{url('/vote/'.str_replace(array("-"," "),array("_", "-"),strtolower($song->band_name)))}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Saya memberikan dukungan untuk {{$song->band_name}} di #LevisBandHunt" />
<meta property="og:description"   content="Levi’s® Band Hunt adalah audisi digital pertama untuk berburu band-band muda terbaik di Indonesia." />
<meta property="og:image"         content="http://levi.co.id/band-hunt/public/foto/{{$song->foto}}" />
@stop
@section('content')
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59ea40db95f7b200121c29ae&product=custom-share-buttons"></script>
<div id="page-load">
  <div id="circleG">
  	<div id="circleG_1" class="circleG"></div>
  	<div id="circleG_2" class="circleG"></div>
  	<div id="circleG_3" class="circleG"></div>
  </div>
  <div id="msg-vote">
    <div class="modal-action modal-close waves-effect waves-green close-btn">
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <div class="wrap-msg">
      <div class="title">TERIMA KASIH</div>
      <div class="txt-msg">

      </div>
    </div>
  </div>
</div>
<div id="detail" class="container">
  <div class="row">
    <div class="col l8 push-l2 m12 s12">
      <div class="video-container">
       <iframe src="{{$song->link}}?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="wrap-band" style="margin-top:10px">
        <div class="button">
          <div class="col m3 s6"><a href="#" class="{{ $song->status ? "btn-clicked" : "btn-click" }} btn-vote" data-song="{{$song->id}}">LIKE</a></div>
          <div class="fixed-action-btn horizontal col m3 s6 wrap-share">
            <a class="btn-click btn-share" data-song="{{$song->id}}">
              SHARE
            </a>
            <ul>
              <li>
                <div data-network="facebook" data-url="{{url('/vote/'.$song->url)}}" data-title="Saya memberikan dukungan untuk {{$song->band_name}} di #LevisBandHunt" class="st-custom-button">
                  <i style="color:#395A93" class="fa fa-facebook-official" aria-hidden="true"></i>
                </div>
              </li>
              <li>
                <div data-network="twitter" data-url="{{url('/vote/'.$song->url)}}" data-title="Saya memberikan dukungan untuk {{$song->band_name}} di #LevisBandHunt" class="st-custom-button">
                  <i style="color:#08ABDC" class="fa fa-twitter-square" aria-hidden="true"></i>
                </div>
              </li>
              <li>
                <div data-network="whatsapp" data-url="{{url('/vote/'.$song->url)}}" data-title="Saya memberikan dukungan untuk {{$song->band_name}} di #LevisBandHunt" class="st-custom-button">
                  <i style="color:#05B654" class="fa fa-whatsapp" aria-hidden="true"></i>
                </div>
              </li>
              <li>
                <div data-network="googleplus" data-url="{{url('/vote/'.$song->url)}}" data-title="Saya memberikan dukungan untuk {{$song->band_name}} di #LevisBandHunt" class="st-custom-button">
                  <i style="color:#E0483E" class="fa fa-google-plus-square" aria-hidden="true"></i>
                </div>
              </li>
              <li>
                <div data-network="email" data-url="{{url('/vote/'.$song->url)}}" data-title="Saya memberikan dukungan untuk {{$song->band_name}} di #LevisBandHunt" class="st-custom-button">
                  <i style="#bdbdbd" class="fa fa-envelope-square" aria-hidden="true"></i>
                </div>
              </li>
            </ul>
          </div>
          <div class="col m3 s12 offset-m3 hide-on-med-and-down"><a href="{{url('/')}}" class="btn-clicked btn-share">BACK</a></div>
        </div>
      </div>
    </div>
    <div id="detail-band" class="col l2 pull-l8 m12 s12">
      <div class="image hide-on-med-and-down">
        <img src="http://levi.co.id/band-hunt/public/foto/{{$song->foto}}" alt="">
      </div>
      <div class="bandname">
        <span>Nama Band: </span>
        {{$song->band_name}}
      </div>
      <div class="bandmember">
        <span>Anggota Band: </span>
        {{$song->member}}
      </div>
      <div class="judullagu">
        <span>Judul Lagu: </span>
        {{$song->judul}}
      </div>
      <div class="genre">
        <span>Genre: </span>
        {{$song->genre}}
      </div>
      <div class="asalkota">
        <span>Asal Kota: </span>
        {{$song->kota}}
      </div>
    </div>
    <div id="lirik" class="col l2">
      <p class="jdl-lirik">LIRIK LAGU</p>
      <div class="lirik">
        <div class="judullirik">"{{$song->judul}}"</div>
        <div class="liriklagu">
          <p>{{$song->lirik}}</p>
        </div>
      </div>
    </div>
    <div id="btn-mobile" class="col s12 hide-on-large-only">
      <a href="{{url('/')}}" class="btn-clicked btn-share">BACK</a>
    </div>
  </div>
</div>
@stop
@section('footer')
<script>
$(document).on('click', "#page-load", function () {
  $(this).hide();
  $('#circleG').show();
  $('#msg-vote').hide();
});
$(document).on('click', ".btn-vote", function () {
  idsong = $(this).attr('data-song');
  var uri = "{{url('/vote')}}";
  $('#page-load').show();
  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: uri,
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    "X-HTTP-Method-Override": "POST"
    },
    data: {"id": idsong},
    success : function(data){
      if(data){
        // $('#song'+idsong).children('.vote').children('.right').text(data.song[0].total_votes);
        $('.btn-vote').removeClass('btn-click').addClass('btn-clicked')
        $('#circleG').hide();
        $('#msg-vote .txt-msg').html('Telah memberikan dukungan <br><span>'+data.song[0].band_name+'</span> <br>di LEVI’S® Band Hunt');
        $('#msg-vote').show()
      }else{
        $('#circleG').hide();
        $('#msg-vote .txt-msg').html('Kamu hanya bisa vote 1x per 24 jam untuk 1 band');
        $('#msg-vote').show()
      }
    }
  });
  return false;
});
$(document).on('click', '.st-custom-button', function(){
  let platform = $(this).attr('data-network');
  let idsong   = $(this).attr('data-song');
  var uri      = "{{url('/share')}}";
  // $('#page-load').show();
  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: uri,
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    "X-HTTP-Method-Override": "POST"
    },
    data: {"id": idsong, "platform": platform},
    success : function(data){
      if(data){
        // // $('#song'+idsong).children('.vote').children('.right').text(data.song[0].total_votes);
        // $('#song'+idsong).children('.button').children('.col').children('.btn-vote').removeClass('btn-click').addClass('btn-clicked')
        // $('#circleG').hide();
        // $('#msg-vote .txt-msg').html('Telah memberikan dukungan <br><span>'+data.song[0].band_name+'</span> <br>di LEVI’S® Band Hunt');
        // $('#msg-vote').show()
      }else{
        // $('#circleG').hide();
        // $('#msg-vote .txt-msg').html('Kamu hanya bisa vote 1x per 24 jam untuk 1 band');
        // $('#msg-vote').show()
      }
    }
  });
  return false;
});
</script>
@endsection
