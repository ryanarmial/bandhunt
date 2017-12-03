@extends('admin.layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <!-- <small>Version 2.0</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$totalPoints}}</h3>

            <p>Total Point</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="{{url('levis-tools/users')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$totalVotes}}</h3>

            <p>Total Votes</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-people"></i>
          </div>
          <a href="{{url('levis-tools/chart')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$totalShares}}</h3>

            <p>Total Shares</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-musical-notes"></i>
          </div>
          <a href="{{url('levis-tools/share')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$totalToday}}</h3>

            <p>Total Point Today</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-people"></i>
          </div>
          <a href="{{url('levis-tools/daily')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
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
