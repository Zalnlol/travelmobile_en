@extends('layoutUser.layout')
@section('titleweb', 'Contract information')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rental.css') }}">
@section('bodycode')

    <div style="margin-top: 10%; margin-bottom:5%" class="container">
        <h3 style="text-align: center">Contract details #{{ $data3['contract_id'] }}</h3>

        <div class="row" style="margin-top: 2%">

            <div class="col-sm-6" style="text-align: right">
                <img src="{{ asset('/images/carimg/' . $data3['image']) }}" style="height:130px">
            </div>
            <div class="col-sm-6" style="text-align: left">
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Car owner's name:</b> {{ $data3['user_name'] }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Car name:</b> {{ $data3['car_name'] }} {{ $data3['model_year'] }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>License plate:</b> {{ $data3['plate_id'] }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Daily kilometer: limit maximun </b> {{ $data3['max_travel_distance'] }} Km</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>If over limit:</b> {{ $data3['over_max_travel_cost'] }} đ/Km</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Default rental price:</b> {{ $data3['rent_price'] }}k</span>
                    </div>
                </div>





            </div>

        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Customer name:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['customer_name'] }}</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Phone:</b></span>
            </div>
            @if (($data3['status'] != 'Chờ xác nhận')||($data3['tmp'] != '1'))
                <div class="col-sm-6">
                    <span id="title-span" style="text-align: left">{{ $data3['customer_mobile'] }}</span>
                </div>
            @endif
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Pick-up date:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['pickup_date'] }} h</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Return date:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['return_date'] }} h</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Car delivery address:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['pickup_address'] }}</span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Rental:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['rental_price'] }} đ </span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Delivery fee:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['shipping_cost'] }}đ</span>
            </div>
        </div>

        @if ($data3['tmp'] != '1')
            <div class="row" style="margin-top: 2%">
                <div class="col-sm-6" style="text-align: right">
                    <span id="title-span"> <b>Deposited:</b></span>
                </div>
                <div class="col-sm-6">
                    <span id="title-span" style="text-align: left">{{ $data3['customer_deposit'] }}đ</span>
                </div>
            </div>
        @endif
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span"> <b>Service charge:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{ $data3['service_cost'] }}đ</span>
            </div>
        </div>

        @if ($data3['tmp'] != '2')
            <div class="row" style="margin-top: 2%">
                <div class="col-sm-6" style="text-align: right">
                    <span id="title-span"> <b>Deposit returned after successful rental:</b></span>
                </div>
                <div class="col-sm-6">
                    <span id="title-span" style="text-align: left">{{ $data3['deposit_after_rental'] }}đ</span>
                </div>
            </div>
        @endif

        @if ($data3['tmp'] != '2')
            <div class="row" style="margin-top: 2%">
                <div class="col-sm-6" style="text-align: right">
                    <span id="title-span"> <b>Cash collected from customers:</b></span>
                </div>
                <div class="col-sm-6">
                    <span id="title-span" style="text-align: left">{{ $data3['remaining'] }}đ</span>
                </div>
            </div>
        @else
            <div class="row" style="margin-top: 2%">
                <div class="col-sm-6" style="text-align: right">
                    <span id="title-span"> <b>Payment after the trip:</b></span>
                </div>
                <div class="col-sm-6">
                    <span id="title-span" style="text-align: left">{{ $data3['remaining'] }}đ</span>
                </div>
            </div>
        @endif










    </div>


@endsection
