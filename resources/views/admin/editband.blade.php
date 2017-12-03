@extends('admin.layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$band->band_name}}
      <!-- <small>Version 2.0</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Top 32</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <form id="form-band" enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('edittop32',['id' => $band->id]) }}">
      {{ csrf_field() }}
        <div class="col-md-12">
          <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Band Detail</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <tbody>
                    <tr>
                      <td>Band Name: </td>
                      <td>
                        <input name="band_name" type="text" class="form-control" value="{{$band->band_name}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Photo: </td>
                      <td>
                        <img style="max-width:500px;height:auto" src="{{asset('/foto/'.$band->foto)}}" alt="">
                        <input type="hidden" name="oldpic" value="{{$band->foto}}">
                        <input type="file" id="exampleInputFile" name="foto" value="">
                      </td>
                    </tr>
                    <tr>
                      <td>Story: </td>
                      <td>
                        <textarea name="cerita" rows="8" cols="80">{{$band->cerita}}</textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>Genre: </td>
                      <td>
                        <select class="browser-default" name="genre">
                          <option disabled selected>Pilih Genre</option>
                          <option {{$band->genre == 'Jazz' ? 'selected' : ''}} value="Jazz" >Jazz</option>
                          <option {{$band->genre == 'Folk' ? 'selected' : ''}} value="Folk" >Folk</option>
                          <option {{$band->genre == 'Rock' ? 'selected' : ''}} value="Rock" >Rock</option>
                          <option {{$band->genre == 'Pop' ? 'selected' : ''}} value="Pop" >Pop</option>
                          <option {{$band->genre == 'Blues' ? 'selected' : ''}} value="Blues" >Blues</option>
                          <option {{$band->genre == 'Hip Hop' ? 'selected' : ''}} value="Hip Hop" >Hip Hop</option>
                          <option {{$band->genre == 'Classic' ? 'selected' : ''}} value="Classic" >Classic</option>
                          <option {{$band->genre == 'Electro' ? 'selected' : ''}} value="Electro" >Electro</option>
                          <option {{$band->genre == 'Alternative Rock' ? 'selected' : ''}} value="Alternative Rock" >Alternative Rock</option>
                          <option {{$band->genre == 'Funk' ? 'selected' : ''}} value="Funk" >Funk</option>
                          <option {{$band->genre == 'Disco' ? 'selected' : ''}} value="Disco" >Disco</option>
                          <option {{$band->genre == 'Heavy Metal' ? 'selected' : ''}} value="Heavy Metal" >Heavy Metal</option>
                          <option {{$band->genre == 'Others' ? 'selected' : ''}} value="Others" >Others</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Origin City: </td>
                      <td>
                        <select class="browser-default" name="kota">
                          <option disabled selected>Pilih Kota</option>
                          <option {{$band->kota == 'Jakarta' ? 'selected' : ''}} value="Jakarta" >Jakarta</option>
                          <option {{$band->kota == 'Yogyakarta' ? 'selected' : ''}} value="Yogyakarta" >Yogyakarta</option>
                          <option {{$band->kota == 'Surabaya' ? 'selected' : ''}} value="Surabaya" >Surabaya</option>
                          <option {{$band->kota == 'Medan' ? 'selected' : ''}} value="Medan" >Medan</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Informasi dari : </td>
                      <td>{{$band->info_bh}}</td>
                    </tr>
                    <tr>
                      <td>Created at : </td>
                      <td>{{$band->created_at}}</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </div>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Members Detail</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Instrument</th>
                        <th>Panth Size</th>
                        <th>Shirt Size</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($members as $member)
                    <tr>
                      <td>{{$member->member_name}}</td>
                      <td>{{$member->email}}</td>
                      <td>{{$member->phone}}</td>
                      <td>{{$member->dob}}</td>
                      <td>{{$member->gender}}</td>
                      <td>{{$member->instrument}}</td>
                      <td>{{$member->uk_celana}}</td>
                      <td>{{$member->uk_baju}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </div>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Songs Detail</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <!-- <thead>
                      <tr>
                        <th>Song Title</th>
                        <th>Song Link</th>
                        <th>Song Lyric</th>
                      </tr>
                    </thead> -->
                    <tbody>
                    @foreach($songs as $song)
                    <?php
                    preg_match('/(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$])/im',$song->link, $matches);
                    $tanggal = explode(" ", $song->created_at);
                    ?>
                    <tr>
                      <td><strong>Song Title</strong></td>
                      <td>
                        <input name="idsong[]" type="hidden" class="form-control" value="{{$song->id}}">
                        <input name="judul[]" type="text" class="form-control" value="{{$song->judul}}">
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Link Song</strong></td>
                      <td>
                        <input name="link[]" type="text" class="form-control" value="{{$song->link}}">
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Song Lyric</strong></td>
                      <td>
                        <textarea name="lirik[]" rows="8" cols="80">{{$song->lirik}}</textarea>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
            </div>
            <button>Submit</button>
        </div>
      </form>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
@section('footer')

@endsection
