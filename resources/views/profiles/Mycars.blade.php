@extends('layoutUser.layout')
@section('titleweb', 'My cars')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mytrip.css') }}">
@section('bodycode')
    <div style="padding: 8% 0%; ">
        <div class="row" style="box-shadow: 0px 0px 20px rgb(233, 227, 227); height:auto">

            <div class="col-sm-3" style="text-align: right ; ">
                <a href="{{url('/user/mycars')}}">
                    <span id="title-nav2" style="color: #2E7093; border-bottom: solid #2E7093; ">My cars</span>
                </a>
            </div>



            <div class="col-sm-2" style="text-align: left; margin-left:5% ">
                <a href="{{url('/user/mycars/triplist')}}">
                    <span id="title-nav2" >Trip list</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/register') }}">
                    <span id="title-nav2">Register car</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/history') }}">
                    <span id="title-nav2">History for rental</span>
                </a>
            </div>

        </div>

        <div class="container" style="margin-top: 5%">
           

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">My cars</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table" style="text-align: center">
						  <thead class="thead-dark">
						    <tr>
						      <th>Status</th>
						      <th style="width: 15%;">Plate id</th>
						      <th>Brand car</th>
						      <th>Model car</th>
                              <th>Join date</th>
                              <th style=""></th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                              @foreach ($mycar as $item)
                
						    <tr class="alert" role="alert">
						      <td>
                                  @if ($item->status == 1)
                                  <span class="badge badge-success">Waiting approval</span>
                                  @endif
                                  @if ($item->status == 2)
                                  <span class="badge badge-success">Actived</span>
                                  @endif
								  @if ($item->status == 3)
                                  <span class="badge badge-danger">Refused</span>
                                  @endif
								  @if ($item->status == 4)
                                  <span class="badge badge-danger">Maintenance</span>
                                  @endif
                                </td>
						      <td>{{ $item->plate_id }}</td>
						      <td>{{ $item->brand }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->created_at }}</td>
						
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" >
                                    <td class="project-actions text-right">
										<a class="btn btn-info btn-sm" href="{{ route('rental.image', $item->car_id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Image car
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{ route('rental.update', $item->car_id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Update
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('rental.delete', $item->car_id) }}" onclick="javascript:return confirm('Bạn có chắc muốn xóa ?')">
                                            Delete
                                        </a>
                                    </td>
				          		</a>
				        	</td>
						    </tr>                                           
                            @endforeach
						
						  </tbody>
						</table>
					</div>
				</div>
			</div>
          



        </div>

    </div>
    </div>


    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

@endsection
