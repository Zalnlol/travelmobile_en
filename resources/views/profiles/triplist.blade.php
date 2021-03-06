@extends('layoutUser.layout')
@section('titleweb', 'Trips List')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mytrip.css') }}">
@section('bodycode')
    <div style="padding: 8% 0%; ">
        <div class="row" style="box-shadow: 0px 0px 20px rgb(233, 227, 227); height:auto">

            <div class="col-sm-3" style="text-align: right ; ">
                <a href="{{ url('/user/mycars') }}">
                    <span id="title-nav2">Cars List</span>
                </a>
            </div>



            <div class="col-sm-2" style="text-align: left; margin-left:5% ">
                <a href="{{ url('/user/mycars/triplist') }}">
                    <span id="title-nav2" style="color: #2E7093; border-bottom: solid #2E7093; ">Trips List</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/register') }}">
                    <span id="title-nav2">Car registration</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/history') }}">
                    <span id="title-nav2" >Rental history</span>
                </a>
            </div>


        </div>

        <div class="container" style="margin-top: 5%">
        </div>


        @foreach ($data3 as $rental)

            <div class="col-lg-12" style="margin-top: 10px">

                <div class="card" style="width: 50%; margin-left:25%">

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span id="namecar">{{ $rental['name'] }} {{ $rental['model_year'] }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2%">
                            <div class="col-sm-3">
                                <img src="{{ asset('/images/carimg/'.$rental['image']) }}" style="height:100px"  alt="">
                            </div>
                            <div class="col-sm-8" style="margin-left:3%">
                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Contract Code:</b> #{{ $rental['contract_id'] }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Start day:</b> {{ $rental['pickup_date'] }} gi???</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>End date:</b>{{ $rental['return_date'] }} gi???</span>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Address:</b>{{ $rental['pickup_address'] }}</span>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col" style="text-align: center">
                                        <span style="font-size: 11pt; font-weight:bold">Deposited:
                                            {{ $rental['deposit'] }}??</span>
                                    </div>

                                    <div class="col" style="text-align: center">
                                        <span style="font-size: 11pt; font-weight:bold">Remaining:
                                            {{ $rental['remaining'] }}??</span>
                                    </div>

                                </div>
                  
                                @if ($rental['status'] != 'Ch??? x??c nh???n')
                                    <div class="row">
                                        <div class="col">
                                            <span style="font-size: 11pt;">
                                                <b>Note: </b> {{ $rental['phone'] }}
                                            </span>
                                        </div>
                                    </div>

                                @else

                                    <div class="row">
                                        <div class="col">
                                            <span style="font-size: 11pt;">
                                                <b>L??u ??: </b> The customer's phone number will be shown on confirmation
                                            </span>
                                        </div>
                                    </div>



                                @endif





                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col" style="font-size:12pt">

                                @switch($rental['status'])
                                    @case('Ch??? x??c nh???n')
                                        <i class="fa fa-circle" style="color: rgb(0, 255, 0)"></i>
                                        Wait for confirmation
                                    @break
                                    @case('??ang giao xe')
                                        <i class="fa fa-circle" style="color: rgb(0, 255, 0)"></i>
                                        Car delivery
                                    @break
                                    @case('??ang cho thu??')
                                        <i class="fa fa-circle" style="color: rgb(0, 255, 0)"></i>
                                        Rental car
                                    @break

                                    @case('???? nh???n xe"')
                                            <i class="fa fa-circle" style="color: rgb(0, 140, 255)"></i>
                                            Car received
                                        @break

                                @endswitch


                    </div>

                    <div class="col" style="text-align: right">
                        <div class="dropdown">

                            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="action1">Action</span>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"
                                    href="{{ url('/user/mycars/triplist/xemchitiet/' . $rental['contract_id']) }}">See details</a>
                                @if ($rental['status']=='Ch??? x??c nh???n' )
                                    <a class="dropdown-item"
                                        href="{{ url('/user/mycars/triplist/xacnhan/' . $rental['contract_id']) }}">Confirm</a>
                                @endif
                                @if ($rental['status'] == '??ang giao xe')
                                    <a class="dropdown-item"
                                        href="{{ url('/user/mycars/triplist/dagiaoxe/' . $rental['contract_id']) }}">Car has been delivered</a>
                                @endif
                                @if ($rental['status'] == '??ang cho thu??')
                                <a class="dropdown-item"
                                    href="{{ url('/user/mycars/triplist/danhanxe/' . $rental['contract_id']) }}">Car received</a>
                            @endif


                            </div>



                        </div>
                    </div>
                </div>

            </div>
    </div>




    </div>

    @endforeach



    </div>






@endsection
