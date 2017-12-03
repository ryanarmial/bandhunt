@extends('admin.layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      List Top 32
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
                <th>Song Title</th>
                <th>Link Song</th>
                <th>Origin Cities</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php $i=1?>
                @foreach($songs as $song)
                <tr>
                  <td>{{$i}}</td>
                  <td><a target="_blank" href="{{url('levis-tools/bands/'.$song->band_id)}}">{{$song->band_name}}</a></td>
                  <td>{{$song->judul}}</td>
                  <?php
                  preg_match('/(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$])/im',$song->link, $matches);
                  $tanggal = explode(" ", $song->created_at);
                  // $host = $matches[0];
                  ?>
                  <td><a target="_blank" href="{{$matches ? $matches[0] : '#'}}">Link Song</a></td>
                  <td>{{$song->kota}}</td>
                  <td>
                    <a href="{{url('/levis-tools/top32/edit/'.$song->band_id)}}">
                      <div class="btn btn-info btn-sm">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Edit
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
                <th>Song Title</th>
                <th>Link Song</th>
                <th>Origin Cities</th>
                <th>Action</th>
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
    var table = $('#example1').DataTable({
      "info": true,
      drawCallback: function() {
        var api = this.api();
        api.$('.edit-song').click(function() {
          $(this).prev().removeAttr('disabled')
          $(this).hide();
          $(this).next().show();
        });
        api.$('.action-song .btn-danger').click(function() {
          $(this).parent().prev().prev().attr('disabled', '');
          $(this).parent().hide();
          $(this).parent().prev().show();
        });
        api.$('.action-song .btn-info').click(function() {
          value = $(this).parent().prev().prev().val();
          id    = $(this).parent().prev().prev().attr('data-id');

          input = $(this).parent().prev().prev();
          action = $(this).parent();
          edit = $(this).parent().prev();

          var uri = "{{url('/levis-tools/song/score')}}/"+id;

          $.ajax({
            type: 'POST', // Use POST with X-HTTP-Method-Override or a straight POST if appropriate.
            dataType: 'json', // Set datatype - affects Accept header
            url: uri, // A valid URL
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "X-HTTP-Method-Override": "POST"
            },
            data: {"score": value},
            success : function(data){
              if(data){
                input.attr('disabled', '');
                action.hide();
                edit.show();
              }
            }
          });
          return false;
        });
        api.$('.btn-status').click(function() {
          btn = $(this);
          id    = btn.attr('data-id');
          value = btn.attr('data-value');

          var uri = "{{url('/levis-tools/song/status')}}/"+id;

          $.ajax({
            type: 'POST', // Use POST with X-HTTP-Method-Override or a straight POST if appropriate.
            dataType: 'json', // Set datatype - affects Accept header
            url: uri, // A valid URL
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "X-HTTP-Method-Override": "POST"
            },
            data: {"status": value},
            success : function(data){
              if(data){
                $('.status-song-'+id).removeClass('btn-info')
                $('.status-song-'+id).removeClass('btn-default')
                $('.status-song-'+id).addClass('btn-default')
                btn.removeClass('btn-default')
                btn.addClass('btn-info')
              }
            }
          });
          return false;

        });
      }
    });
  });
</script>
@endsection
