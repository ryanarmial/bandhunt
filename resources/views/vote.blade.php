@extends('layouts.app')

@section('content')
<div id="detail" class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row">
      <div class="col m9">
        <div class="judul-page">
          VOTE FOR THE NEXT FAMOUS STAR
        </div>
      </div>
      <div class="input-field col m3">
        <select name="sorting" class="btn-sort">
          <option value="sort">Sort by</option>
          <option value="atoz">A to Z</option>
          <option value="ztoa">Z to A</option>
          <option value="highscore">Highest Score</option>
          <option value="lowscore">Lowest Score</option>
        </select>
      </div>
    </div>
  </div>
  <div id="listband" class="container">
    <div class="row">
      @foreach($songs as $song)
      <div class="col m3 s6 wrap-band" id="song{{$song->id}}">
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
        <div class="img" style="background-image:url(http://levi.co.id/band-hunt/public/foto/{{$song->foto}})"></div>
        <div class="vote">
          <div class="left">Total<br>Vote</div>
          <div class="right">{{$song->total_votes}}</div>
        </div>
        <div class="button">
          <div class="col m6 s12"><a href="#" class="btn-vote" data-song="{{$song->id}}">VOTE</a></div>
          <div class="col m6 s12"><a href="#" class="btn-share" data-song="{{$song->id}}">SHARE</a></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@stop
@section('footer')
<script type="text/javascript">
  $(".btn-vote").click(function() {
    idsong = $(this).attr('data-song');
    var uri = "{{url('/vote')}}";

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
          angka = $('#song'+idsong).children('.vote').children('.right').html();
          $('#song'+idsong).children('.vote').children('.right').text(Number(angka)+1);
        }else{
          alert('Kamu Hanya bisa vote 1x untuk 1 band')
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
