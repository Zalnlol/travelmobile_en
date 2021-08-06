@extends('layoutUser.layout')
@section('titleweb', 'Home Page')


@section('bodycode')
    <div style="margin-top:5%">
        <div class="tm-section tm-bg-img" id="tm-section-1">
            <div class="tm-bg-white ie-container-width-fix-2">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            <form action="{{ url('/searchcar') }}" method="get" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-100">
                                        <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                        <input name="city" type="text" class="form-control" id="search_input" list="geoname"
                                            onchange="return checktoado()" placeholder="Input city, address, ex: Ho chi minh">
                                        <datalist id="geoname">
                                            <option>
                                                Use your current location
                                            </option>
                                        </datalist>
                                    </div>
                                </div>
                                <input type="text" name="lat" id="lat" hidden>
                                <input type="text" name="lng" id="lng" hidden>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="checkin" type="text" class="form-control" id="inputCheckIn"
                                            placeholder="Start at">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <select name="hourstart" class="form-control tm-select" id="children1">
                                            <option value="0">0:00 am</option>
                                            <option value="1">1:00 am</option>
                                            <option value="2">2:00 am</option>
                                            <option value="3">3:00 am</option>
                                            <option value="4">4:00 am</option>
                                            <option value="5">5:00 am</option>
                                            <option value="6">6:00 am</option>
                                            <option value="7">7:00 am</option>
                                            <option value="8">8:00 am</option>
                                            <option value="9">9:00 am</option>
                                            <option value="10">10:00 am</option>
                                            <option value="11">11:00 am</option>
                                            <option value="12">12:00 pm</option>
                                            <option value="13">1:00 pm</option>
                                            <option value="14">2:00 pm</option>
                                            <option value="15">3:00 pm</option>
                                            <option value="16">4:00 pm</option>
                                            <option value="17">5:00 pm</option>
                                            <option value="18">6:00 pm</option>
                                            <option value="19">7:00 pm</option>
                                            <option value="20">8:00 pm</option>
                                            <option value="21">9:00 pm</option>
                                            <option value="22">10:00 pm</option>
                                            <option value="23">11:00 pm</option>
                                        </select>
                                        <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="checkout" type="text" class="form-control" id="inputCheckOut"
                                            placeholder="Finish at">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <select name="hourend" class="form-control tm-select" id="children">
                                            <option value="0">0:00 am</option>
                                            <option value="1">1:00 am</option>
                                            <option value="2">2:00 am</option>
                                            <option value="3">3:00 am</option>
                                            <option value="4">4:00 am</option>
                                            <option value="5">5:00 am</option>
                                            <option value="6">6:00 am</option>
                                            <option value="7">7:00 am</option>
                                            <option value="8">8:00 am</option>
                                            <option value="9">9:00 am</option>
                                            <option value="10">10:00 am</option>
                                            <option value="11">11:00 am</option>
                                            <option value="12">12:00 pm</option>
                                            <option value="13">1:00 pm</option>
                                            <option value="14">2:00 pm</option>
                                            <option value="15">3:00 pm</option>
                                            <option value="16">4:00 pm</option>
                                            <option value="17">5:00 pm</option>
                                            <option value="18">6:00 pm</option>
                                            <option value="19">7:00 pm</option>
                                            <option value="20">8:00 pm</option>
                                            <option value="21">9:00 pm</option>
                                            <option value="22">10:00 pm</option>
                                            <option value="23">11:00 pm</option>
                                        </select>
                                        <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                    </div>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-100">
                                    <button type="button" onclick="return checksubmit1()"
                                        class="btn btn-primary tm-btn-search">Find rental car</button>
                                </div>

                                <button type="submit" id="nutsubmit1" hidden>Find rental car</button>

                                <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                    <p class="tm-margin-b-0">Provide details above to find suitable car.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-article-carousel">
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-1.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header>
                                        <h3 class="text-uppercase tm-article-title-2">Quick & simple process
                                        </h3>
                                    </header>
                                    <p>Passport or ID & driver license</p>
                                </div>
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-2.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header>
                                        <h3 class="text-uppercase tm-article-title-2">Vehicle delivery</h3>
                                    </header>
                                    <p>Low to free cost of delivery
                                    <p>
                                </div>
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-3.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header>
                                        <h3 class="text-uppercase tm-article-title-2">Various choice of payment:
                                        </h3>
                                    </header>
                                    <p>ATM/VISA, convenient store, e-wallet
                                    <p>
                                </div>
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-4.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header>
                                        <h3 class="text-uppercase tm-article-title-2">Wide range of option</h3>
                                    </header>
                                    <p>Sedan, Hatchback, Crossover, SUV, Pickup...
                                    <p>
                                </div>
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-5.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header>
                                        <h3 class="text-uppercase tm-article-title-2">Worry free with insurance</h3>
                                    </header>
                                    <p>MIC, Petrolimex PJICO</p>
                                </div>
                            </article>
                            <article class="tm-bg-white tm-carousel-item">
                                <img src="images/features-6.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header>
                                        <h3 class="text-uppercase tm-article-title-2">Free of charge for cancel</h3>
                                    </header>
                                    <p>No cost!
                                    <p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- Logo Tâm --}}
        <div class="tm-section tm-section-pad tm-bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        @foreach ($p as $items)
                            <div class="column-mfg">
                                <div class="card">
                                    <img src="{{ url('/img/logo/	' . $items->logo) }}" />
                                    <a href="{{ $items->website }}"><b>&emsp;{{ $items->name }}</b></a>
                                    <p>&emsp;{{ $items->nation }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div>
            <style>
                * {
                    box-sizing: border-box;
                }

                .column-mfg {
                    float: left;
                    width: 22.5%;
                    padding: 10px;
                    margin-top: 1.5%;
                    margin-left: 1.5%;
                }

                @media screen and (max-width: 900px) {
                    .column-mfg {
                        width: 48%;
                    }
                }

                @media screen and (max-width: 600px) {
                    .column-mfg {
                        width: 100%;
                    }
                }

            </style>
        </div>

        <script src="{{ asset('script/map.js') }}"></script>

        <script>
           
            var today = new Date();


            document.getElementById('children').value = today.getHours();
            document.getElementById('children1').value = today.getHours();

            parts = (today.getDate() + '/ ' + (today.getMonth() + 1) + ' /' + today.getFullYear()).split("/");
            date = new Date(+parts[2], parts[1] - 1, +parts[0]);
            start = (date.toString()).substr(0, 15);


            document.getElementById('inputCheckIn').value = ((new Date(+parts[2], parts[1] - 1, +parts[0])).toString()).substr(
                0, 15);
            document.getElementById('inputCheckOut').value = ((new Date(+parts[2], parts[1] - 1, +parts[0] + 1)).toString())
                .substr(0, 15);
        </script>


    @endsection
