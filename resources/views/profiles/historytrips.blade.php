@extends('layoutUser.layout')
@section('titleweb', 'Trip history')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mytrip.css') }}">
@section('bodycode')
    <div style="padding: 8% 0%; ">
        <div class="row" style="box-shadow: 0px 0px 20px rgb(233, 227, 227); height:auto">

            <div class="col-sm-4" style="text-align: right ; ">
                <a href="{{url('/user/mytrips')}}">
                    <span id="title-nav2">My trip</span>
                </a>
            </div>



            <div class="col-sm-5" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/triphistory') }}">
                    <span id="title-nav2" style="color: #2E7093; border-bottom: solid #2E7093; ">Trip history</span>
                </a>
            </div>
        </div>
        <div class="container" style="margin-top: 5%">
            <div class="row">

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
                                        <img src="{{ asset('/images/carimg/'.$rental['image']) }}" style="height:100px" ` alt="">
                                    </div>
                                    <div class="col-sm-8" style="margin-left:3%">
                                        <div class="row">
                                            <div class="col">
                                                <span id="content"><b>Contract Code:</b> #{{ $rental['contract_id'] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <span id="content"><b>Start day:</b> {{ $rental['pickup_date'] }}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <span id="content"><b>End date:</b>{{ $rental['return_date'] }}</span>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <span id="content"><b>Address:</b>{{ $rental['pickup_address'] }}</span>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col" style="text-align: center">
                                                <span style="font-size: 11pt; font-weight:bold">Total:
                                                    {{ $rental['contract_value'] }}??</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col" style="font-size:12pt">

                                        @switch($rental['status'])
                                            @case('??ang li??n h???')
                                                <i class="fa fa-circle" style="color: rgb(0, 255, 0)"></i>
                                                In contact
                                                @break
                                            @case('???? h???y chuy???n')
                                                <i class="fa fa-circle" style="color: rgb(255, 38, 0) "></i>
                                                Trip canceled
                                                @break
                                            @case('???? ho??n th??nh')
                                                <i class="fa fa-circle" style="color: rgb(0, 140, 255)"></i>
                                                Accomplished
                                            @break

                                        @endswitch


                            </div>

                            <div class="col" style="text-align: right">
                                <div class="dropdown">

                                    <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        id="action1">Action</span>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if ($rental['status'] == '???? h???y chuy???n')
                                            <a class="dropdown-item" href="{{ url('/user/triphistory/delete/'.$rental['contract_id']) }}">Delete</a>
                                        @endif
                                        @if ($rental['status'] == '???? ho??n th??nh')                                    
                                            <a class="dropdown-item" href="{{ route('review.create', $rental['contract_id']) }}">Reviews</a>                                                                                                                 
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



</div>

</div>



</div>


</div>



@endsection
