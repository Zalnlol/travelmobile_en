@extends('layoutUser.layout')
@section('titleweb', 'Register car')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mytrip.css') }}">
    <link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.26399" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        @media print {
            .form-section {
                display: inline !important
            }

            .form-pagebreak {
                display: none !important
            }

            .form-section-closed {
                height: auto !important
            }

            .page-section {
                position: initial !important
            }
        }

    </style>
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.26399" />
    <link type="text/css" rel="stylesheet"
        href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8" />
    <link type="text/css" rel="stylesheet"
        href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.26399" />
    <style type="text/css">
        .form-label-left {
            width: 150px;
        }

        .form-line {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .form-label-right {
            width: 150px;
        }

        .form-all {
            margin-top: 20px;
            margin-right: auto;
            margin-left: auto;
            width: 750px;
            color: #141414 !important;
            font-family: 'Helvetica';
        }

        .form-radio-item label,
        .form-checkbox-item label,
        .form-grading-label,
        .form-header {
            color: false;
        }

    </style>
    <style>
        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #04AA6D;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #04AA6D;
            cursor: pointer;
        }

    </style>
    <style type="text/css" id="form-designer-style">
        .form-all {
            font-family: Helvetica, sans-serif;
        }

        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-family: Helvetica, sans-serif;
        }

        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-family: Helvetica, sans-serif;
        }

        .form-header-group {
            font-family: Helvetica, sans-serif;
        }

        .form-label {
            font-family: Helvetica, sans-serif;
        }

        .form-label.form-label-auto {

            display: inline-block;
            float: left;
            text-align: left;

        }

        .form-line {
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .form-all {
            max-width: 750px;
            width: 100%;
        }

        .form-label.form-label-left,
        .form-label.form-label-right,
        .form-label.form-label-left.form-label-auto,
        .form-label.form-label-right.form-label-auto {
            width: 150px;
        }

        .form-all {
            font-size: px
        }

        .form-all .qq-upload-button,
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-size: px
        }

        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-size: px
        }

        .supernova .form-all,
        .form-all {
            background-color: ;
        }

        .form-all {
            color: #141414;
        }

        .form-header-group .form-header {
            color: #141414;
        }

        .form-header-group .form-subHeader {
            color: #141414;
        }

        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label {
            color: #141414;
        }

        .form-sub-label {
            color: #2e2e2e;
        }

        .supernova {
            background-color: undefined;
        }

        .supernova body {
            background: transparent;
        }

        .form-textbox,
        .form-textarea,
        .form-dropdown,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: undefined;
        }

        .supernova {
            background-image: none;
        }

        #stage {
            background-image: none;
        }

        .form-all {
            background-image: none;
        }

        .ie-8 .form-all:before {
            display: none;
        }

        .ie-8 {
            margin-top: auto;
            margin-top: initial;
        }

        .row {
            margin-left: -8px;
            margin-right: -8px;
        }

        .col {
            float: left;
            padding-left: 8px;
            padding-right: 8px;
        }

        .col-half {
            width: 50%;
        }

        /*PREFERENCES STYLE*/
        /*__INSPECT_SEPERATOR__*/
        .form-textbox {
            width: 285px;
        }

        #input_11,
        #input_22,
        #input_33.form-textbox {
            width: 115px;
        }

        #label_24,
        #label_26.form-label-top {
            font-size: 16px;
            font-weight: bolder;
        }

        .form-textarea {
            width: 595px;
        }

        #label_36.form-label-top {
            font-weight: bolder;
        }

    </style>

    <link type="text/css" rel="stylesheet"
        href="https://cdn02.jotfor.ms/css/styles/buttons/form-submit-button-book_blue1.css?3.3.26399" />
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
                    <span id="title-nav2" >Trips List</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/register') }}">
                    <span id="title-nav2" style="color: #2E7093; border-bottom: solid #2E7093; ">Car registration</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/history') }}">
                    <span id="title-nav2" >Rental history</span>
                </a>
            </div>


        </div>

        <div class="container" style="margin-top: 5%">
            <div role="main" class="form-all">
                <ul class="form-section page-section">
                    <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-default">
                            <div class="header-text httal htvam">
                                <h2 id="header_1" class="form-header" data-component="header">
                                    <strong> Register car </strong>
                                    <h6 style="color: red">Warning can't edit information car after register</h6>
                                </h2>

                            </div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_text" id="id_4">
                        <div id="cid_4" class="form-input-wide">
                            <div id="text_4" class="form-html" data-component="text">
                                <h5><strong>Car Information</strong></h5>
                            </div>
                        </div>
                    </li>

                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <form action="{{ route('rental.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="input_5" name="user_id" data-type="input-textbox" class="form-textbox"
                            size="20" value="{{ $data }}" placeholder=" " data-component="textbox"
                            aria-labelledby="label_5" />
                        <input type="hidden" id="type_id" name="type_id" data-type="input-textbox" class="form-textbox"
                            size="20" placeholder=" " data-component="textbox"
                            aria-labelledby="label_5" />
                        <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_5">
                            <label class="form-label form-label-top" id="label_5" for="input_5"> Plate id </label>
                            <div id="cid_5" class="form-input-wide">
                                <input type="text" id="input_5" name="plate_id" data-type="input-textbox"
                                    class="form-textbox" size="20" value="" placeholder=" " data-component="textbox"
                                    aria-labelledby="label_5" />
                            </div>
                        </li>

                        <li class="form-line" data-type="control_image" id="id_25">
                            <div id="cid_25" class="form-input-wide">
                                <img alt="" class="form-image" style="border:0"
                                    src="//www.jotform.com/uploads/pinoytech/form_files/shadow.png" height="50px"
                                    width="618px" data-component="image" />
                            </div>
                        </li>

                        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_32">
                            <label class="form-label form-label-top" id="label_32" for="input_32"> Brand </label>
                            <div id="cid_32" class="form-input-wide">
                                <select class="form-dropdown" id="input_6" name="brand" onchange="return check()"
                                    style="width:150px" data-component="dropdown">

                                    <option value="0">Choose a brand</option>
                                    @foreach ($hangxe as $element)
                                        <option value="{{ $element['mfg_id'] }}">{{ $element['name'] }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </li>

                        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_32">
                            <label class="form-label form-label-top" id="label_32" for="input_32"> Model </label>
                            <div id="cid_32" class="form-input-wide">
                                <select class="form-dropdown" id="input_7" name="name" style="width:150px" disabled
                                    onchange="return checkgia()" data-component="dropdown">
                                    <option value="">Choose a model</option>
                                </select>
                            </div>
                        </li>

                        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_32">
                            <label class="form-label form-label-top" id="label_32" for="input_32"> Seat number </label>
                            <div id="cid_32" class="form-input-wide">
                                <select class="form-dropdown" id="input_10" name="seatnum" style="width:150px"
                                    data-component="dropdown">
                                    <option value="4"> 4 </option>
                                    <option value="5"> 5 </option>
                                    <option value="6"> 6 </option>
                                    <option value="7"> 7 </option>
                                    <option value="8"> 8 </option>
                                    <option value="9"> 9 </option>
                                    <option value="10"> 10 </option>
                                    <option value="11"> 11 </option>
                                    <option value="12"> 12 </option>
                                    <option value="13"> 13 </option>
                                    <option value="14"> 14 </option>
                                    <option value="15"> 15 </option>
                                    <option value="16"> 16 </option>
                                    <option value="17"> 17 </option>
                                    <option value="18"> 18 </option>
                                    <option value="19"> 19 </option>
                                    <option value="20"> 20 </option>
                                </select>
                            </div>
                        </li>

                        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_32">
                            <label class="form-label form-label-top" id="label_32" for="model_year"> Model year </label>
                            <div id="cid_32" class="form-input-wide">
                                <select class="form-dropdown" id="input_11" name="model_year" style="width:150px"
                                    data-component="dropdown">
                                    <option value="1960"> 1960 </option>
                                    <option value="1961"> 1961 </option>
                                    <option value="1962"> 1962 </option>
                                    <option value="1963"> 1963 </option>
                                    <option value="1964"> 1964 </option>
                                    <option value="1965"> 1965 </option>
                                    <option value="1966"> 1966 </option>
                                    <option value="1967"> 1967 </option>
                                    <option value="1968"> 1968 </option>
                                    <option value="1969"> 1969 </option>
                                    <option value="1970"> 1970 </option>
                                    <option value="1971"> 1971 </option>
                                    <option value="1972"> 1972 </option>
                                    <option value="1973"> 1973 </option>
                                    <option value="1974"> 1974 </option>
                                    <option value="1975"> 1975 </option>
                                    <option value="1976"> 1976 </option>
                                    <option value="1977"> 1977 </option>
                                    <option value="1978"> 1978 </option>
                                    <option value="1979"> 1979 </option>
                                    <option value="1980"> 1980 </option>
                                    <option value="1981"> 1981 </option>
                                    <option value="1982"> 1982 </option>
                                    <option value="1983"> 1983 </option>
                                    <option value="1984"> 1984 </option>
                                    <option value="1985"> 1985 </option>
                                    <option value="1986"> 1986 </option>
                                    <option value="1987"> 1987 </option>
                                    <option value="1988"> 1988 </option>
                                    <option value="1989"> 1989 </option>
                                    <option value="1990"> 1990 </option>
                                    <option value="1991"> 1991 </option>
                                    <option value="1992"> 1992 </option>
                                    <option value="1993"> 1993 </option>
                                    <option value="1994"> 1994 </option>
                                    <option value="1995"> 1995 </option>
                                    <option value="1996"> 1996 </option>
                                    <option value="1997"> 1997 </option>
                                    <option value="1998"> 1998 </option>
                                    <option value="1999"> 1999 </option>
                                    <option value="2000"> 2000 </option>
                                    <option value="2001"> 2001 </option>
                                    <option value="2002"> 2002 </option>
                                    <option value="2003"> 2003 </option>
                                    <option value="2004"> 2004 </option>
                                    <option value="2005"> 2005 </option>
                                    <option value="2006"> 2006 </option>
                                    <option value="2007"> 2007 </option>
                                    <option value="2008"> 2008 </option>
                                    <option value="2009"> 2009 </option>
                                    <option value="2010"> 2010 </option>
                                    <option value="2011"> 2011 </option>
                                    <option value="2012"> 2012 </option>
                                    <option value="2013"> 2013 </option>
                                    <option value="2014"> 2014 </option>
                                    <option value="2015"> 2015 </option>
                                    <option value="2016"> 2016 </option>
                                    <option value="2017"> 2017 </option>
                                    <option value="2018"> 2018 </option>
                                    <option value="2019"> 2019 </option>
                                    <option value="2020"> 2020 </option>
                                    <option value="2021"> 2021 </option>
                                </select>
                            </div>
                        </li>

                        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_32">
                            <label class="form-label form-label-top" id="label_32" for="input_32"> Transmission </label>
                            <div id="cid_32" class="form-input-wide">
                                <select class="form-dropdown" id="input_14" name="auto" style="width:150px"
                                    data-component="dropdown">
                                    <option value="1"> Automatic </option>
                                    <option value="2"> Manual </option>
                                </select>
                            </div>
                        </li>

                        <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_32">
                            <label class="form-label form-label-top" id="label_32" for="input_32"> Fuel </label>
                            <div id="cid_32" class="form-input-wide">

                                <select class="form-dropdown" id="input_13" name="fuel" style="width:150px"
                                    data-component="dropdown">
                                    <option value="1"> Petrol </option>
                                    <option value="2"> Diesel </option>

                                </select>
                            </div>
                        </li>


                        <li class="form-line form-line-column form-col-8" data-type="control_textbox" id="id_12">
                            <label class="form-label form-label-top" id="label_12" for="consumption"> Consumption </label>
                            <span style="opacity: 0.6;">
                                Consumption for distance 100km(Min consumption is 5 and max is 30).
                            </span>
                            <div id="cid_12" class="form-input-wide">
                                <input type="text" id="input_12" name="consumption"
                                    placeholder="" data-type="input-textbox"
                                    class="form-textbox" size="20" value="" placeholder=" " data-component="textbox"
                                    aria-labelledby="label_12" /> litres
                            </div>
                        </li>
                        <li class="form-line form-line-column form-col-9" data-type="control_textbox" id="id_13">
                            <label class="form-label form-label-top" id="label_13" for="rent_price"> List price
                            </label>
                            <span style="opacity: 0.6;">The price apply for all day. Maybe you can edit for special day(weekend, holiday, newyear...) in the update button after register.</span>
                            </br>
                        </br>
                            <span>
                                Min price is 400k and max is 1500k.
                            </span>
                            <br>

                            <span style="opacity: 0.6">List price: <span id="giadexuat">500</span> K/day</span>
                            </br>
                            </br>
                            <div id="cid_13" class="form-input-wide">
                                <input type="text" id="rent_price" name="rent_price" data-type="input-textbox"
                                    class="form-textbox" size="20" value="" placeholder=" " data-component="textbox"
                                    aria-labelledby="label_13" /> K
                            </div>
                        </li>



                        <li class="form-line" data-type="control_textarea" id="id_36">
                            <label class="form-label form-label-top" id="label_36" for="description">Description</label>
                            <div id="cid_36" class="form-input-wide">
                                <textarea class="form-control ckeditor" rows="4" id="description" name="description"
                                    placeholder="" cols="40"
                                    rows="6">Hyundai Elantra automatic number registered in June 2018. Beautiful new family car, original interior, clean, regular maintenance, free car wash for guests. 
                                    The car is spacious, safe, comfortable, suitable for family travel. Vehicles equipped with reverse sensor system, automatic wipers, automatic headlights, dashcam, AV entertainment system and many other amenities...</textarea>
                            </div>
                        </li>





                        <li class="form-line" data-type="control_image" id="id_25">
                            <div id="cid_25" class="form-input-wide">
                                <img alt="" class="form-image" style="border:0"
                                    src="//www.jotform.com/uploads/pinoytech/form_files/shadow.png" height="50px"
                                    width="618px" data-component="image" />
                            </div>
                        </li>
                </ul>
                <ul class="form-section" id="section_41">
                    <li id="cid_41" class="form-input-wide" data-type="control_collapse">
                        <div class="form-collapse-table form-collapse-hidden" id="collapse_41" data-component="collapse">
                            <span class="form-collapse-mid" id="collapse-text_41">
                            </span>
                            <span class="form-collapse-right form-collapse-right-show">

                            </span>
                        </div>
                    </li>

                    <li class="form-line" data-type="control_checkbox" id="id_26">
                        <label class="form-label form-label-top" id="label_24" for="input_24"> Feature </label>
                    </li>

                    <div class="row">
                        <li class="form-line" data-type="control_checkbox" id="id_26">
                            <div class="col col-half">

                                <div id="cid_26" class="form-input-wide">
                                    <div class="form-single-column" role="group" aria-labelledby="label_26"
                                        data-component="checkbox">
                                        <span class="form-checkbox-item" style="clear:left">
                                            <span class="dragger-item">
                                            </span>
                                            <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                                id="input_26_0" name="convertible" value="1" />
                                            <label id="label_input_26_0" for="input_26_0"> Convertible </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-half">
                                <div id="cid_26" class="form-input-wide">
                                    <div class="form-single-column" role="group" aria-labelledby="label_26"
                                        data-component="checkbox">
                                        <span class="form-checkbox-item">
                                            <span class="dragger-item">
                                            </span>
                                            <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                                id="input_26_0" name="bluetooth" value="1" />
                                            <label id="label_input_26_0" for="input_26_0"> Bluetooth </label>
                                        </span>
                                    </div>
                                </div>

                        </li>

                    </div>
                </ul>

                <div class="row">
                    <li class="form-line" data-type="control_checkbox" id="id_26">
                        <div class="col col-half">

                            <div id="cid_26" class="form-input-wide">
                                <div class="form-single-column" role="group" aria-labelledby="label_26"
                                    data-component="checkbox">
                                    <span class="form-checkbox-item" style="clear:left">
                                        <span class="dragger-item">
                                        </span>
                                        <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                            id="input_26_0" name="gps" value="1" />
                                        <label id="label_input_26_0" for="input_26_0"> GPS </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-half">
                            <div id="cid_26" class="form-input-wide">
                                <div class="form-single-column" role="group" aria-labelledby="label_26"
                                    data-component="checkbox">
                                    <span class="form-checkbox-item">
                                        <span class="dragger-item">
                                        </span>
                                        <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                            id="input_26_0" name="usb" value="1" />
                                        <label id="label_input_26_0" for="input_26_0"> USB </label>
                                    </span>
                                </div>
                            </div>

                    </li>

                </div>

                <div class="row">
                    <li class="form-line" data-type="control_checkbox" id="id_26">
                        <div class="col col-half">

                            <div id="cid_26" class="form-input-wide">
                                <div class="form-single-column" role="group" aria-labelledby="label_26"
                                    data-component="checkbox">
                                    <span class="form-checkbox-item" style="clear:left">
                                        <span class="dragger-item">
                                        </span>
                                        <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                            id="input_26_0" name="kid_chair" value="1" />
                                        <label id="label_input_26_0" for="input_26_0"> Kid chair </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-half">
                            <div id="cid_26" class="form-input-wide">
                                <div class="form-single-column" role="group" aria-labelledby="label_26"
                                    data-component="checkbox">
                                    <span class="form-checkbox-item">
                                        <span class="dragger-item">
                                        </span>
                                        <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                            id="input_26_0" name="map" value="1" />
                                        <label id="label_input_26_0" for="input_26_0"> Map </label>
                                    </span>
                                </div>
                            </div>

                    </li>
                </div>

                <div class="row">
                    <li class="form-line" data-type="control_checkbox" id="id_26">
                        <div class="col col-half">
                            <div id="cid_26" class="form-input-wide">
                                <div class="form-single-column" role="group" aria-labelledby="label_26"
                                    data-component="checkbox">
                                    <span class="form-checkbox-item" style="clear:left">
                                        <span class="dragger-item">
                                        </span>
                                        <input type="checkbox" aria-describedby="label_26" class="form-checkbox"
                                            id="input_26_0" name="camera" value="1" />
                                        <label id="label_input_26_0" for="input_26_0"> Behind camera </label>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </li>

                </div>

                </ul>
             

                <li class="form-line" data-type="control_checkbox" id="id_26">
                    <label class="form-label form-label-top" id="label_24" for="input_24"> Address </label>
                </li>

                <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_7">
                    <label class="form-label form-label-top" id="label_7" for="address"> Default address for deliver and receive
                    </label>
                    <span style="opacity: 0.6;">Must be carefully note for deliver and receive.</span>
                    <div id="cid_7" class="form-input-wide">
                        <input size="50" type="text" name="address" id="search_input" list="geoname" onchange="return checktoado()"
                            placeholder="Input city, address .. ex. Ho Chi Minh">
                        <datalist id="geoname">
                            <option>
                                Your location
                            </option>
                        </datalist>

                    </div>
                </li>
                
                <input type="text" hidden name="lat" id="lat">
                <input type="text" hidden name="lng" id="lng">

                <ul class="form-section">

                    <li class="form-line" data-type="control_image" id="id_25">
                        <div id="cid_25" class="form-input-wide">
                            <img alt="" class="form-image" style="border:0"
                                src="//www.jotform.com/uploads/pinoytech/form_files/shadow.png" height="50px" width="618px"
                                data-component="image" />
                        </div>
                    </li>

                    <li class="form-line" data-type="control_checkbox" id="id_26">
                        <label class="form-label form-label-top" id="label_24" for="input_24"> Deliver car </label>
                    </li>

                    <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_5">
                        <label class="form-label form-label-top" id="label_5" for="input_5"> Maximum Distance deliver
                        </label>
                        <div id="cid_5" class="form-input-wide">
                            <input type="range" name="max_ship_distance" id="range_weight3" style="width: 200px" value="25"
                                min="5" max="50" oninput="range_weight_disp3.value = range_weight3.value">
                            <output id="range_weight_disp3"></output> km
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_6">
                        <label class="form-label form-label-top" id="label_6" for="discount_monthly"> Delivery rate/km </label>
                        <div id="cid_6" class="form-input-wide">
                            <input type="range" name="shipping_price_km" id="range_weight4" style="width: 200px" value="10"
                                min="1" max="20" oninput="range_weight_disp4.value = range_weight4.value">
                            <output id="range_weight_disp4"></output> K
                        </div>
                    </li>

                    <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_6">
                        <label class="form-label form-label-top" id="label_7" for="free_ship_distance"> Free deliver distance
                             </label>
                        <div id="cid_7" class="form-input-wide">
                            <input type="range" name="free_ship_distance" id="range_weight5" style="width: 200px" value="25"
                                min="0" max="50" oninput="range_weight_disp5.value = range_weight5.value">
                            <output id="range_weight_disp5"></output> km
                        </div>
                    </li>

                </ul>

                <ul class="form-section">



                    <li class="form-line" data-type="control_checkbox" id="id_26">
                        <label class="form-label form-label-top" id="label_24" for="input_24"> Distance limit </label>
                    </li>

                    <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_5">
                        <label class="form-label form-label-top" id="label_5" for="input_5"> Max daily travel distance
                        </label>
                        <div id="cid_5" class="form-input-wide">
                            <input type="range" name="max_travel_distance" id="range_weight6" style="width: 200px"
                                value="400" min="300" max="500" oninput="range_weight_disp6.value = range_weight6.value">
                            <output id="range_weight_disp6"></output> km
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_6">
                        <label class="form-label form-label-top" id="label_6" for="over_max_travel_cost"> Over max travel distance cost(each km) </label>
                        <div id="cid_6" class="form-input-wide">
                            <input type="range" name="over_max_travel_cost" id="range_weight7" style="width: 200px"
                                value="3" min="1" max="5" oninput="range_weight_disp7.value = range_weight7.value">
                            <output id="range_weight_disp7"></output> K
                        </div>
                    </li>

                </ul>

                <li class="form-line" data-type="control_checkbox" id="id_26">
                    <label class="form-label form-label-top" id="label_24" for="input_24"> Rules </label>
                </li>
                <li class="form-line" data-type="control_textarea" style="margin-top: -20px" id="id_36">
                    <label class="form-label form-label-top" id="label_36" for="rules" style="opacity: 0.6">Note the rules carefully for customer.</label>


                    <div id="cid_36" class="form-input-wide">
                        <textarea type="text" rows="5" id="rules" class="form-control ckeditor" name="rules"
                            placeholder="  Kh??ng s??? d???ng xe v??o m???c ????ch phi ph??p. L??i xe c???n th???n, gi??? xe s???ch s???, tr??? xe ????ng gi???. Ph??? thu 500k n???u c?? m??i thu???c trong xe."
                            cols="40" rows="6"></textarea>
                    </div>
                </li>

                <input type="hidden" name="status" value="1" />

                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="text-align:center" data-align="left"
                            class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
                            <input style="text-align: center" type="button" onclick="return checksubmit()"
                                class="form-submit-button form-submit-button submit-button jf-form-buttons jsTest-submitField"
                                data-component="button" data-content="" value="Register">
                            <button type="submit" hidden id="nutsubmit1">Register</button>
                        </div>

                    </div>
                </li>
            </div>
        </div>
        </form>
    </div>







    </div>

    </div>
    </div>


    </div>

    <script src="{{ asset('script/map.js') }}"></script>
    <script>
        function checksubmit() {


            diachi = document.getElementById('search_input').value;
            if (diachi != '') {
                toado = ConvertAdd(diachi);

                lang = toado.lng;


                document.getElementById('lat').value = toado.lat
                document.getElementById('lng').value = lang

            }
            document.getElementById('nutsubmit1').click() = true;



        }
    </script>


@endsection
@section('Script')

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        car = {!! json_encode($tenxe->toArray(), JSON_HEX_TAG) !!};

        function check() {
            mfg_id = document.getElementById('input_6').value;

            car_list = [];
            i = 0;
            car.forEach(element => {
                if (element['mfg_id'] == mfg_id) {
                    car_list[i] = element;
                    i += 1;
                }
            });

            str = '<option value="0">Choose a brand</option>';
            car_list.forEach(element => {
                str += `<option value="` + element['model'] + `">` + element['model'] + `</option>`
            });

            if (mfg_id == '0') {
                document.getElementById('input_7').disabled = true;
                document.getElementById('input_7').innerHTML = `<option >Choose a model</option>`;
                
                
                
            } else {
                 document.getElementById('input_7').innerHTML = str;
                document.getElementById('input_7').disabled = false;
            }
        }


        function checkgia() {
            name = document.getElementById('input_7').value;
            car.forEach(element => {
                if (element['model'] == name) {
                    // giadexuat
                    document.getElementById('giadexuat').innerText = element['suggest_price'];
                    document.getElementById('rent_price').value = element['suggest_price'];
                    document.getElementById('type_id').value = element['type_id'];
                    //Ch??? ng???i
                    document.getElementById('input_10').value = element['seatnum'];
                    if(element['fuel_type']=='0'){

                        document.getElementById('input_13').value =1
                    } else{
                        document.getElementById('input_13').value =2;
                    }
                }
            });
        }
    </script>







@endsection
