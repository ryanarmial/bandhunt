@extends('admin.layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="row">
      <div class="col-md-6"><h1>
        TOTAL POINT {{$databand}}
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-md-6">
        <div class="form-group" style="margin-top:25px;margin-bottom:10px">
          <select class="form-control" onchange="location = this.value;">
            <option selected value="{{url('levis-tools/chart')}}">Semua Band</option>
            @foreach($songs as $song)
              @if($song->id == $songid)
              <option selected value="{{url('levis-tools/chart')}}/{{$song->id}}">{{$song->band_name}}</option>
              @else
              <option value="{{url('levis-tools/chart')}}/{{$song->id}}">{{$song->band_name}}</option>
              @endif
            @endforeach
          </select>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Total Point</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="canvas"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
@section('footer')
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('backend/plugins/chart.js/Chart.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<script>
  var lineChartData = {
    labels : {!! $chartpoint->tanggal !!},
    datasets : [
      {
        label: '# of Votes',
        fillColor : "rgba(53, 142, 184,0.2)",
        strokeColor : "rgba(53, 142, 184,1)",
        pointColor : "rgba(53, 142, 184,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(53, 142, 184,1)",
        data : {{json_encode($chartpoint->point) }}
      }
    ]

  }

window.onload = function(){
  var ctx = document.getElementById("canvas").getContext("2d");
  window.myLine = new Chart(ctx).Line(lineChartData, {
    responsive: true
  });
}


</script>
@endsection
