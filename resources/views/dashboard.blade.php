@extends('layouts.master')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                @php
                $desain = [
                'N' => array("color"=>"bg-red","icon"=>"people"),
                'M' => array("color"=>"bg-light-blue","icon"=>"people_outline"),
                'R4' => array("color"=>"bg-blue","icon"=>"directions_car"),
                'R6' => array("color"=>"bg-lime","icon"=>"local_taxi"),
                'R2' => array("color"=>"bg-light-green","icon"=>"directions_bike"),
                'PW' => array("color"=>"bg-deep-orange","icon"=>"streetview"),
                'SF' => array("color"=>"bg-grey","icon"=>"movie"),
                'VK' => array("color"=>"bg-blue-grey","icon"=>"shop"),
                'NL' => array("color"=>"bg-red","icon"=>"people","colum"=>"col-lg-6 col-md-6"),
                'ML' => array("color"=>"bg-light-blue","icon"=>"people_outline","colum"=>"col-lg-6 col-md-6"),
            ];
                @endphp
                @foreach ($data as $i => $item)
                @if ($item->kode == "NL" || $item->kode == "ML")
                    <div class="<?php echo $desain["$item->kode"]["colum"]; ?> col-sm-6 col-xs-12">
                @else
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                @endif
                    <div class="info-box <?php echo $desain["$item->kode"]["color"]; ?> hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons"><?php echo $desain["$item->kode"]["icon"]; ?></i>
                        </div>
                        <div class="content">
                            <div class="text">{{$item->nama_tiket}}</div>
                            <div class="number count-to" data-from="0" data-to="{{$item->total}}" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- #END# Widgets -->
            <!-- Bar Chart -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>BAR CHART</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="bar_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <!-- #END# Bar Chart -->
            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="body bg-teal">
                        <div class="font-bold m-b--35">ANSWERED TICKETS</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                TODAY
                                <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                YESTERDAY
                                <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                LAST WEEK
                                <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                LAST MONTH
                                <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                LAST YEAR
                                <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                            </li>
                            <li>
                                ALL
                                <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>BAR CHART</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="bar_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            {{-- Task Info --}}
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>TASK INFOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Manager</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Task A</td>
                                        <td><span class="label bg-green">Doing</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Task B</td>
                                        <td><span class="label bg-blue">To Do</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Task C</td>
                                        <td><span class="label bg-light-blue">On Hold</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Task D</td>
                                        <td><span class="label bg-orange">Wait Approvel</span></td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Task E</td>
                                        <td>
                                            <span class="label bg-red">Suspended</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Task Info --}}
        </div>
        <script>
            var ctx = document.getElementById("bar_chart").getContext('2d');
		    var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: {!! json_encode($nama_tiket) !!},
				datasets: [{
					label: '# of Votes',
					data: {!! json_encode($total_tiket) !!},
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
        </script>
@endsection