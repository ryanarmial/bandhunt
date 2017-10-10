@extends('layouts.app')

@section('content')
<div id="page-load">
  <div id="circleG">
  	<div id="circleG_1" class="circleG"></div>
  	<div id="circleG_2" class="circleG"></div>
  	<div id="circleG_3" class="circleG"></div>
  </div>
  <div id="msg-vote">
    <div class="wrap-msg">
      <div class="title">TERIMA KASIH</div>
      <div class="txt-msg">

      </div>
    </div>
  </div>
</div>
<div id="votes-page" class="wrap-text">
  <div class="container">
    <div class="row hide-on-med-and-up">
      <div class="col s12">
        <div class="judul-page">
          DUKUNG BAND FAVORITMU! <br>
          <span>1 vote = 1 poin, 1 share = 3 poin</span>
        </div>
      </div>
    </div>
    <div class="row hide-on-med-and-up" style="position:relative">
      <div class="col s12">
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">
              <div class="judul-accordion col s6">
                <span>TOP 10 BAND TODAY
                <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
              </div>
            </div>
            <div class="collapsible-body">
              <div id="ranking" class="">
                <ol>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                  <li>
                    Metalica
                    <div class="chart">
                      <div class="value"></div>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div id="sortby" class="input-field col s6">
        <select name="sorting" class="btn-sort">
          <option value="sort">Sort by</option>
          <option value="atoz">A to Z</option>
          <option value="ztoa">Z to A</option>
          <option value="highscore">Highest Score</option>
        </select>
      </div>
    </div>
    <div class="row hide-on-small-only">
      <div class="col m9">
        <div class="judul-page">
          DUKUNG BAND FAVORITMU! <br>
          <span>1 vote = 1 poin, 1 share = 3 poin</span>
        </div>
      </div>
      <div class="input-field col m3">
        <select name="sorting" class="btn-sort">
          <option value="sort">Sort by</option>
          <option value="atoz">A to Z</option>
          <option value="ztoa">Z to A</option>
          <option value="highscore">Highest Score</option>
        </select>
      </div>
    </div>
  </div>
  <div id="listband" class="container">
  <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <div class="video-container">
          <iframe width="1018" height="572" src="https://www.youtube.com/embed/7UDwaCOjucQ" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="bandvotes" class="col m9 s12">
        @foreach($songs as $song)
        <div class="col m4 s6 wrap-band" id="song{{$song->id}}">
          <a href="{{url('/vote/'.str_replace(" ", "-", strtolower($song->band_name)))}}">
            @if (strlen($song->band_name) <=14)
            <div class="name">{{$song->band_name}}</div>
            @else
            <div class="name">{{substr($song->band_name,0,14)}}...</div>
            @endif

            @if (strlen($song->judul) <=22)
            <div class="song">{{$song->judul}}</div>
            @else
            <div class="song">{{substr($song->judul,0,22)}}...</div>
            @endif
          </a>
          <div data-target="modal1" class="modal-trigger img" style="background-image:url(http://levi.co.id/band-hunt/public/foto/{{$song->foto}})"></div>
          <!-- <div class="vote">
            <div class="left">Total<br>Vote</div>
            <div class="right">{{$song->total_votes}}</div>
          </div> -->
          <div class="button">
            <div class="col m6 s12"><a href="#" class="btn-vote" data-song="{{$song->id}}">VOTE</a></div>
            <div class="col m6 s12"><a href="#" class="btn-share" data-song="{{$song->id}}">SHARE</a></div>
          </div>
        </div>
        @endforeach
      </div>
      <div id="ranking" class="col m3 s12 hide-on-small-only">
        <div class="title">TOP 10 BAND TODAY</div>
        <ol>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
          <li>
            Metalica
            <div class="chart">
              <div class="value"></div>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
  $('#page-load').click(function() {
    $(this).hide();
    $('#circleG').show();
    $('#msg-vote').hide();
  });
  $(".btn-vote").click(function() {
    idsong = $(this).attr('data-song');
    var uri = "{{url('/vote')}}";
    $('#page-load').show();
    $.ajax({
      type: 'POST', // Use POST with X-HTTP-Method-Override or a straight POST if appropriate.
      dataType: 'json', // Set datatype - affects Accept header
      url: uri, // A valid URL
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      "X-HTTP-Method-Override": "POST"
      },
      data: {"id": idsong},
      success : function(data){
        if(data){
          $('#song'+idsong).children('.vote').children('.right').text(data.song[0].total_votes);
          $('#circleG').hide();
          $('#msg-vote .txt-msg').html('Telah memberikan dukungan <br><span>'+data.song[0].band_name+'</span> <br>di LEVI’S® Band Hunt');
          $('#msg-vote').show()
        }else{
          $('#circleG').hide();
          $('#msg-vote .txt-msg').html('Kamu Hanya bisa vote 1x untuk 1 band');
          $('#msg-vote').show()
        }
      }
    });
    return false;
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
        $('#listband .row').html('')
        data.songs.forEach(song => {
          let bandname = song.band_name.length <= 14 ? song.band_name : song.band_name.substr(0, 14)+'...';
          let judul = song.judul.length <= 22 ? song.judul : song.judul.substr(0, 22)+'...';
          $('#listband .row').append('<div class="col m3 s6 wrap-band" id="song'+song.id+'"><div class="name">'+bandname+'</div><div class="song">'+judul+'</div><div class="img" style="background-image:url(http://levi.co.id/band-hunt/public/foto/'+song.foto+')"></div><div class="vote"><div class="left">Total<br>Vote</div><div class="right">'+song.total_votes+'</div></div><div class="button"><div class="col m6 s12"><a href="#" class="btn-vote" data-song="'+song.id+'">VOTE</a></div><div class="col m6 s12"><a href="#" class="btn-share" data-song="'+song.id+'">SHARE</a></div></div></div>')
        })
      }
    });
    return false;
  });
</script>
@endsection
