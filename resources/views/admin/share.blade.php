@extends('admin.layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="row">
      <div class="col-md-6"><h3>
        Detail Share Social Media {{$tanggal}}
        <!-- <small>Version 2.0</small> -->
      </h3>
      </div>
      <div class="col-md-6">
        <div class="form-group" style="margin-top:25px;margin-bottom:10px">
          <select class="form-control" onchange="location = this.value;">
            <option selected value="{{url('levis-tools/chart')}}">Semua Tanggal</option>
            @foreach($dates as $date)
              @if($date->tanggal == $tanggal)
              <option selected value="{{url('levis-tools/share')}}/{{$date->tanggal}}">{{$date->tanggal}}</option>
              @else
              <option value="{{url('levis-tools/share')}}/{{$date->tanggal}}">{{$date->tanggal}}</option>
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
  var barChartData = {
    labels : {!! $sharepoint->platform !!},
    datasets : [
      {
        label: '# of Votes',
        fillColor : "rgba(53, 142, 184,0.5)",
				strokeColor : "rgba(53, 142, 184,0.8)",
				highlightFill: "rgba(53, 142, 184,0.75)",
				highlightStroke: "rgba(53, 142, 184,1)",
        data : {{json_encode($sharepoint->point) }}
      }
    ]

  }

  window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

</script>
@endsection
