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
      <li class="active">Bands</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
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
                    <td>{{$band->band_name}}</td>
                  </tr>
                  <tr>
                    <td>Photo: </td>
                    <td><img style="max-width:500px;height:auto" src="{{asset('/foto/'.$band->foto)}}" alt=""></td>
                  </tr>
                  <tr>
                    <td>Story: </td>
                    <td>{{$band->cerita}}</td>
                  </tr>
                  <tr>
                    <td>Genre: </td>
                    <td>{{$band->genre}}</td>
                  </tr>
                  <tr>
                    <td>Origin City: </td>
                    <td>{{$band->kota}}</td>
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
                    <td>{{$song->judul}}</td>
                  </tr>
                  <tr>
                    <td><strong>Link Song</strong></td>
                    <td><a target="_blank" href="{{$matches ? $matches[0] : '#'}}">Link Song</a></td>
                  </tr>
                  <tr>
                    <td><strong>Song Lyric</strong></td>
                    <td>{{$song->lirik}}</td>
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
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
@section('footer')

@endsection
