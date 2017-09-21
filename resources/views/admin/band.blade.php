@extends('admin.layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Bands List
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
      <div class="col-xs-12">
        <div class="box">
          <!-- <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
          </div> -->
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Band Name</th>
                <th>Foto</th>
                <th>Cerita</th>
                <th>Genre</th>
                <th>Origin City</th>
                <th>Detail</th>
              </tr>
              </thead>
              <tbody>
                <?php $i=1?>
                @foreach($bands as $band)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$band->band_name}}</td>
                  <td><img height="70px" src="{{asset('foto/'.$band->foto)}}" alt=""></td>
                  <td>{{substr($band->cerita, 0,200)}}...</td>
                  <td>{{$band->genre}}</td>
                  <td>{{$band->kota}}</td>
                  <td>
                    <a href="{{url('/levis-tools/bands/'.$band->id)}}">
                      <div class="btn btn-info btn-sm">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Detail
                      </div>
                    </a>
                    <a href="{{url('/levis-tools/bands/delete/'.$band->id)}}">
                      <div class="btn btn-danger btn-sm">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Delete
                      </div>
                    </a>
                  </td>
                </tr>
                <?php $i++?>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Band Name</th>
                <th>Foto</th>
                <th>Cerita</th>
                <th>Genre</th>
                <th>Origin City</th>
                <th>Detail</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
@section('footer')
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
