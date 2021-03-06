@extends('layouts.app')

@section('content')

<script>
  fbq('track', 'Lead', {
  value: 10.00,
  currency: 'USD'
  });
</script>
<div class="wrap-text">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          Pendaftaran profil band
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <span><a href="{{route('register')}}">BUAT AKUN</a> atau <a href="{{route('login')}}">LOG-IN</a> di website Levi's&#174; Band Hunt ini</span>
          <ul>
            <li>1 band bisa submit 1 lagu</li>
            <li>Merupakan lagu original ciptaan sendiri, bukan hasil menjiplak atau rearrange/cover lagu musisi lain</li>
            <li>Genre bebas</li>
            <li>Lagu yang didaftarkan tidak boleh mengandung materi yang berbau SARA</li>
            <li>Submission berupa link lagu dari SoundCloud ataupun link video dari YouTube</li>
            <li>Durasi lagu adalah 3-6 menit</li>
            <li>Tidak terikat kontrak bermusik dengan label manapun</li>
            <li>Jumlah personil band minimal 3 orang, maksimal 8 orang</li>
            <li>Usia minimum personil band  adalah 17 tahun, dan maksimal 35 tahun per 31 Desember 2017 </li>
            <li>Batas akhir submission via online adalah sampai dengan 8 September 2017, pk. 23:59 WIB</li>
            <li>Batas akhir submission via <a target="_blank" href="http://levi.co.id/store-locator">DROP BOX</a> adalah sampai dengan 1 September 2017</li>
            <li>Untuk Syarat & Ketentuan selengkapnya, baca <a href="{{route('syarat')}}">di sini</a></li>
            <li>Klik <a href="{{route('downloadpdf')}}">di sini</a> untuk download formulir pendaftaran untuk disertakan sebagai dokumen proses submission
            <br>
            melalui <a target="_blank" href="http://levi.co.id/store-locator">DROP BOX</a> di salah satu Original Levi’s® Store</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@if(Auth::guest())
@else
<form id="form-band" enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('edittop32') }}#wrap-error">
{{ csrf_field() }}
<div class="bg-grey">
  <div class="container">
    <div class="row">
      <div class="col s12 margin-bottom-20">
        <div class="judul-page">
          Detil Band
        </div>
      </div>
      <div class="col s8 offset-s2">
        @if ($errors->any())
          <div id="wrap-error" class="card-panel red darken-4">
            <h5><strong>Oops!</strong> Pastikan semua kolom diisi dengan benar</h5>
          </div>
        @endif
      </div>
      <div class="col s12 m6">
        <div class="input-band {{$errors->has('band_name') ? 'has-error' : ''}}">
          <input type="text" name="band_name" value="{{old('band_name')}}" placeholder="Nama Band">
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
        </div>
        <div class="file-field input-band {{$errors->has('foto') ? 'has-error' : ''}}">
          <span class="jdl" style="padding-top:5px">Foto Band</span>
          <div class="btn">
            <span>Upload Foto</span>
            <input name="foto" type="file" onchange="showMyImage(this)" />
          </div>
          <div class="img-band">
            <img id="img-band" src="{{asset('images/band-pic.jpg')}}" alt="">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          </div>
          <!-- <div class="file-path-wrapper">
            <input class="file-path validate" type="hidden">
          </div> -->
        </div>
        <div class="input-band {{$errors->has('cerita') ? 'has-error' : ''}}">
          <textarea name="cerita" rows="4" placeholder="CERITA & PRESTASI BAND">{{old('cerita')}}</textarea>
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
        </div>
        <div class="margin-bottom-20 select-2row input-band {{$errors->has('genre') ? 'has-error' : ''}}">
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          <span class="jdl">Band Genre</span>
          <select class="browser-default" name="genre">
            <option disabled selected>Pilih Genre</option>
            <option {{old('genre') == 'Jazz' ? 'selected' : ''}} value="Jazz" >Jazz</option>
            <option {{old('genre') == 'Folk' ? 'selected' : ''}} value="Folk" >Folk</option>
            <option {{old('genre') == 'Rock' ? 'selected' : ''}} value="Rock" >Rock</option>
            <option {{old('genre') == 'Pop' ? 'selected' : ''}} value="Pop" >Pop</option>
            <option {{old('genre') == 'Blues' ? 'selected' : ''}} value="Blues" >Blues</option>
            <option {{old('genre') == 'Hip Hop' ? 'selected' : ''}} value="Hip Hop" >Hip Hop</option>
            <option {{old('genre') == 'Classic' ? 'selected' : ''}} value="Classic" >Classic</option>
            <option {{old('genre') == 'Electro' ? 'selected' : ''}} value="Electro" >Electro</option>
            <option {{old('genre') == 'Alternative Rock' ? 'selected' : ''}} value="Alternative Rock" >Alternative Rock</option>
            <option {{old('genre') == 'Funk' ? 'selected' : ''}} value="Funk" >Funk</option>
            <option {{old('genre') == 'Disco' ? 'selected' : ''}} value="Disco" >Disco</option>
            <option {{old('genre') == 'Heavy Metal' ? 'selected' : ''}} value="Heavy Metal" >Heavy Metal</option>
            <option {{old('genre') == 'Others' ? 'selected' : ''}} value="Others" >Others</option>
          </select>
        </div>
        <div class="select-2row input-band {{$errors->has('kota') ? 'has-error' : ''}}">
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          <span class="jdl">Kota Pilihan</span>
          <select class="browser-default" name="kota">
            <option disabled selected>Pilih Kota</option>
            <option {{old('kota') == 'Jakarta' ? 'selected' : ''}} value="Jakarta" >Jakarta</option>
            <option {{old('kota') == 'Yogyakarta' ? 'selected' : ''}} value="Yogyakarta" >Yogyakarta</option>
            <option {{old('kota') == 'Surabaya' ? 'selected' : ''}} value="Surabaya" >Surabaya</option>
            <option {{old('kota') == 'Medan' ? 'selected' : ''}} value="Medan" >Medan</option>
          </select>
          <br><i>Pilihan kota untuk proses recording tahap selanjutnya bila masuk semifinal</i>
        </div>
      </div>
      <div id="band" class="col s12 m6">
        <p>Anggota Band</p>
        <div id="personil-band">
          @if(session('member'))
          @for ($r = 0; $r < session('member'); $r++)
          <div class="member-band">
            <div class="txt-angka">{{$r+1}}.
              @if($r > 1)
              <br> <div class="btn-delete"> <i class="fa fa-times" aria-hidden="true"></i></div>
              @endif
            </div>
            <div class="input-band {{$errors->has('member_name.'.$r) ? 'has-error' : ''}}">
              <input type="text" name="member_name[]" value="{{old('member_name.'.$r)}}" placeholder="Nama">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('email') ? 'has-error' : ''}}">
              <input type="text" name="email[]" value="{{old('email.'.$r)}}" placeholder="Email">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('phone') ? 'has-error' : ''}}">
              <input type="text" name="phone[]" value="{{old('phone.'.$r)}}" placeholder="Phone">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('dob.'.$r) ? 'has-error' : ''}}">
              <input class="datepicker" type="text" name="dob[]" value="{{old('dob.'.$r)}}" placeholder="Tanggal Lahir">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('gender.'.$r) ? 'has-error' : ''}}">
              <select class="browser-default" name="gender[]">
                <option value="0" selected>Jenis Kelamin</option>
                <option {{old('gender.'.$r) == 'Male' ? 'selected' : ''}} value="Male">Laki-Laki</option>
                <option {{old('gender.'.$r) == 'Female' ? 'selected' : ''}} value="Female">Perempuan</option>
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('instrument.'.$r) ? 'has-error' : ''}}">
              <input type="text" name="instrument[]" value="{{old('instrument.'.$r)}}" placeholder="Instrument">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('uk_celana.'.$r) ? 'has-error' : ''}}">
              <select class="browser-default" name="uk_celana[]">
                <option value="0" selected>Ukuran Celana</option>
                @for ($i = 25; $i < 43; $i++)
                  <option {{old('uk_celana.'.$r) == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('uk_celana.'.$r) ? 'has-error' : ''}}">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
              <select class="browser-default" name="uk_baju[]">
                <option value="0" selected>Ukuran Baju</option>
                <option {{old('uk_baju.'.$r) == 'XS' ? 'selected' : ''}} value="XS">XS</option>
                <option {{old('uk_baju.'.$r) == 'S' ? 'selected' : ''}} value="S">S</option>
                <option {{old('uk_baju.'.$r) == 'M' ? 'selected' : ''}} value="M">M</option>
                <option {{old('uk_baju.'.$r) == 'L' ? 'selected' : ''}} value="L">L</option>
                <option {{old('uk_baju.'.$r) == 'XL' ? 'selected' : ''}} value="XL">XL</option>
              </select>
            </div>
          </div>
          @endfor
          @else
          <div class="member-band">
            <div class="txt-angka">1.</div>
            <div class="input-band {{$errors->has('member_name') ? 'has-error' : ''}}">
              <input type="text" name="member_name[]" value="" placeholder="Nama">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('email') ? 'has-error' : ''}}">
              <input type="text" name="email[]" value="" placeholder="Email">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('phone') ? 'has-error' : ''}}">
              <input type="text" name="phone[]" value="" placeholder="Phone">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('dob') ? 'has-error' : ''}}">
              <input class="datepicker" type="text" name="dob[]" value="" placeholder="Tanggal Lahir">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('gender') ? 'has-error' : ''}}">
              <select class="browser-default" name="gender[]">
                <option value="" disabled selected>Jenis Kelamin</option>
                <option value="Male">Laki-Laki</option>
                <option value="Female">Perempuan</option>
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('instrument') ? 'has-error' : ''}}">
              <input type="text" name="instrument[]" value="" placeholder="Instrument">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('uk_celana') ? 'has-error' : ''}}">
              <select class="browser-default" name="uk_celana[]">
                <option value="" disabled selected>Ukuran Celana</option>
                @for ($i = 25; $i < 43; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('uk_celana') ? 'has-error' : ''}}">
              <select class="browser-default" name="uk_baju[]">
                <option value="" disabled selected>Ukuran Baju</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div class="member-band">
            <div class="txt-angka">2.</div>
            <div class="input-band {{$errors->has('member_name') ? 'has-error' : ''}}">
              <input type="text" name="member_name[]" value="" placeholder="Nama">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('email') ? 'has-error' : ''}}">
              <input type="text" name="email[]" value="" placeholder="Email">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('phone') ? 'has-error' : ''}}">
              <input type="text" name="phone[]" value="" placeholder="Phone">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('dob') ? 'has-error' : ''}}">
              <input class="datepicker" type="text" name="dob[]" value="" placeholder="Tanggal Lahir">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('gender') ? 'has-error' : ''}}">
              <select class="browser-default" name="gender[]">
                <option value="" disabled selected>Jenis Kelamin</option>
                <option value="Male">Laki-Laki</option>
                <option value="Female">Perempuan</option>
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('instrument') ? 'has-error' : ''}}">
              <input type="text" name="instrument[]" value="" placeholder="Instrument">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('uk_celana') ? 'has-error' : ''}}">
              <select class="browser-default" name="uk_celana[]">
                <option value="" disabled selected>Ukuran Celana</option>
                @for ($i = 25; $i < 43; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="input-band {{$errors->has('uk_celana') ? 'has-error' : ''}}">
              <select class="browser-default" name="uk_baju[]">
                <option value="" disabled selected>Ukuran Baju</option>
                <option value="S">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="M">L</option>
                <option value="M">XL</option>
              </select>
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            </div>
          </div>
          @endif
        </div>
        <div id="btn-member">+ Tambah Member</div>
      </div>
      <div class="col s7 margin-top-20">
        <p class="isi-page">Mengetahui informasi tentang Levi’s&#174; Band Hunt melalui:</p>
        <div class="input-band {{$errors->has('info_bh') ? 'has-error' : ''}}">
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          <p class="">
            <input type="checkbox" id="fb" value="facebook" name="info_bh[]" {{old('info_bh') ? in_array("facebook", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="fb">Facebook Levis&#174; Indonesia</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="instagram" id="instagram" {{old('info_bh') ? in_array("instagram", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="instagram">Instagram Levis&#174; Indonesia</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="informasi_toko" id="infotoko" {{old('info_bh') ? in_array("informasi_toko", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="infotoko">Informasi dari toko Original Levis&#174; Store</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="vipclub" id="vipclub" {{old('info_bh') ? in_array("vipclub", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="vipclub">Levis&#174; VIP Club</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="guitar_plus" id="guitarplus" {{old('info_bh') ? in_array("guitar_plus", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="guitarplus">Guitar Plus</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="umi" id="umi" {{old('info_bh') ? in_array("umi", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="umi">Universal Music Indonesia</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="maliq" id="maliq" {{old('info_bh') ? in_array("maliq", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="maliq">Maliq & D'Essentials</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="poster" id="poster" {{old('info_bh') ? in_array("poster", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="poster">Poster</label>
          </p>
          <p class="">
            <input type="checkbox" name="info_bh[]" value="teman" id="teman" {{old('info_bh') ? in_array("teman", old('info_bh')) ? 'checked' : '' : ''}} />
            <label for="teman">Teman</label>
          </p>
          <p class="">
            <input type="checkbox" {{old('info_bh') ? in_array("lainnya", old('info_bh')) ? 'checked' : '' : ''}} name="info_bh[]" value="lainnya" id="lain" />
            <label for="lain">Lainnya:</label>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrap-text">
  <div class="container">
    <div class="row">
      <div class="col s12 margin-bottom-20">
        <div class="judul-page">
          Detil Lagu
        </div>
      </div>
      <div id="songlist" class="col s12">
        @if(session('song'))
        @for ($s = 0; $s < session('song'); $s++)
        <div class="song-item col s12">
          <div class="txt-angka">{{$s+1}}.
            @if($s > 0)
            <br> <div class="btn-delete"> <i class="fa fa-times" aria-hidden="true"></i></div>
            @endif
          </div>
          <div class="input-band col s12 m6 {{$errors->has('judul.'.$s) ? 'has-error' : ''}}">
            <input type="text" name="judul[]" value="{{old('judul.'.$s)}}" placeholder="Judul Lagu">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          </div>
          <div class="input-band col s12 m6 {{$errors->has('link.'.$s) ? 'has-error' : ''}}">
            <input type="text" name="link[]" value="{{old('link.'.$s)}}" placeholder="Link Lagu(Youtube atau Soundcloud)">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          </div>
          <div class="input-band col s12 {{$errors->has('lirik.'.$s) ? 'has-error' : ''}}">
            <textarea name="lirik[]" rows="4" placeholder="Lirik Lagu">{{old('lirik.'.$s)}}</textarea>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          </div>
        </div>
        @endfor
        @else
        <div class="song-item col s12">
          <div class="txt-angka">1.</div>
          <div class="col s12 m6">
            <input type="text" name="judul[]" value="" placeholder="Judul Lagu">
          </div>
          <div class="col s12 m6">
            <input type="text" name="link[]" value="" placeholder="Link Lagu (YouTube atau SoundCloud)">
          </div>
          <div class="col s12">
            <textarea name="lirik[]" rows="4" placeholder="Lirik Lagu"></textarea>
          </div>
        </div>
        @endif
      </div>
      <!-- <div class="col s12 center-align margin-bottom-20">
        <div id="btn-song">+ Tambah Lagu (Maks 3 Lagu)</div>
      </div> -->
    </div>
  </div>
</div>
<div class="bg-grey">
  <div class="container">
    <div class="row">
      <div class="col s8 offset-s2">
        <p class="">
          <input class="checkmandatory check-syarat" type="checkbox" id="test5" value="syarat" name="syarat" />
          <label for="test5">Saya telah membaca dan menyetujui <a target="_blank" href="{{route('syarat')}}">Syarat & Ketentuan</a> yang berlaku</label>
        </p>
        <!-- <p class="">
          <input class="checkmandatory check-kontrak" type="checkbox" id="test2" value="kontrak" name="kontrak" />
          <label for="test2">Dengan mendaftar, saya menyatakan bahwa tidak terikat <a target="_blank" href="{{route('contract')}}">kontrak</a> dengan label musik manapun</label>
        </p> -->
        <!-- <p class="">
          <input class="checkmandatory check-vipclub" type="checkbox" id="test3" value="vipclub" name="vipclup" />
          <label for="test3">Setuju untuk didaftarkan menjadi member Levi’s VIP Club </label>
        </p> -->
      </div>
      <div class="wrap-submit col s12 center-align">
        <button disabled><script>
          fbq('track', 'Lead', {
          value: 10.00,
          currency: 'USD'
          });
        </script>DAFTAR</button>
 
      </div>
    </div>
  </div>
</div>
</form>
@endif
@stop
@section('footer')
<script type="text/javascript">
  function showMyImage(fileInput) {
    var files = fileInput.files;
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var imageType = /image.*/;
      if (!file.type.match(imageType)) {
       continue;
    }
    var img=document.getElementById("img-band");
    img.file = file;
    var reader = new FileReader();
    reader.onload = (function(aImg) {
      return function(e) {
         aImg.src = e.target.result;
    };
    })(img);
      reader.readAsDataURL(file);
    }
  }
  $(".button-collapse").sideNav();
  $('.datepicker').pickadate({
    selectYears: 99,
    selectMonths: true,
    formatSubmit: 'yyyy-mm-dd',
    hiddenName: true,
    min: new Date(1982,1,1),
    max: new Date(1999,12,31),
    today: false,
  });
  $("#btn-member").click(function(){
    member = $('#personil-band .member-band:first-child');
    countmember = $('#personil-band .member-band').length;
    $('#personil-band').append(member[0].outerHTML);
    memberlast = $('#personil-band .member-band:last-child');
    memberlast.children('.txt-angka').html(countmember+1+'. <br> <div class="btn-delete"> <i class="fa fa-times" aria-hidden="true"></i></div>');

    $(".btn-delete").click(function() {
      $(this).parent().parent().remove();
    });

    $('.datepicker').pickadate({
      selectYears: 99,
      selectMonths: true,
      formatSubmit: 'yyyy-mm-dd',
      hiddenName: true,
      min: new Date(1982,1,1),
      max: new Date(1999,12,31),
      today: false,
    });
  });
  $("#btn-song").click(function(){
    jumlahsong = $('#songlist').children('.song-item').length;

    if(jumlahsong < 3){
      song = $('#songlist .song-item:first-child');

      $('#songlist').append(song[0].outerHTML);
      songlast = $('#songlist .song-item:last-child');
      songlast.children('.txt-angka').html(jumlahsong+1+'. <br> <div class="btn-delete"> <i class="fa fa-times" aria-hidden="true"></i></div>');
    }

    $(".btn-delete").click(function() {
      $(this).parent().parent().remove();
    });
  });
  $(".btn-delete").click(function() {
    $(this).parent().parent().remove();
  });
  $(".checkmandatory").click(function() {
    // $(this).parent().parent().remove();
    syarat  = ( $(".check-syarat").is(' :checked') ) ? 1 : 0;
    // kontrak = ( $(".check-kontrak").is(':checked') ) ? 1 : 0;
    if(syarat){
      $(".wrap-submit button").removeAttr('disabled');
    }else{
      $(".wrap-submit button").attr('disabled','disabled');
    }
  });
</script>
@endsection
