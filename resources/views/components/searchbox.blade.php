<link rel="stylesheet" type="text/css" href="{{ asset('css/scrollbar.css') }}">


<div class="card " style="height:500px">
    <div class="card-body scrollbar-grey" style=" overflow-y: auto;">
       

        <form action="{{ url('/searchcar/filter') }}" id="fillter" onsubmit="return savessesion()">
            <label id="title-box">Search Scope</label>
            <select id="phamvi" name="phamvi" class="form-control">
                <option value="5">5km</option>
                <option value="10" selected>10km</option>
                <option value="20">20km</option>
                <option value="30">30km</option>
            </select>

            <label id="title-box" style="margin-top: 7%">Price</label>
            <div class="row">
                <div class="col"><input type="text" id="min" name="min" class="form-control" placeholder="Minimum "></div>

                <div class="col"><input type="text" id="max" name="max" class="form-control" placeholder="Maximum "></div>

            </div>

            {{-- Loai xe --}}
            <label id="title-box">Type of car</label>
            <div class="row">
                <div class="col-lg-4">
                    <div class="xe" style="width: 80px" onclick="return checkcars1()">
                        <input type="text" value="0" name="4cho" id="4cho" hidden>
                        <div class="carimage" id="carimage1">
                            <img src="{{ asset('images/mf-4-mini.png') }}"
                                style="width: 60px;padding: 23px 0px; margin-left: 10px;" alt="">
                        </div>
                        <div style="text-align: center;" id="stylecar1">4 seats </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="xe" style="width: 80px" onclick="return checkcars2()">
                        <input type="text" value="0" name="7cho" id="7cho" hidden>
                        <div class="carimage" id="carimage2">
                            <img src="{{ asset('images/mf-7-suv.png') }}"
                                style="width: 60px;padding: 23px 0px; margin-left: 10px;" alt="">
                        </div>
                        <div style="text-align: center;" id="stylecar2">7 seats </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="xe" style="width: 80px" onclick="return checkcars3()">
                        <input type="text" value="0" name="bantai" id="bantai" hidden>
                        <div class="carimage" id="carimage3">
                            <img src="{{ asset('images/mf-pickup.png') }}"
                                style="width: 60px;padding: 23px 0px; margin-left: 10px;" alt="">
                        </div>
                        <div style="text-align: center;" id="stylecar3">Pickup Truck </div>
                    </div>
                </div>

            </div>


            <label id="title-box">Car company</label>

            {{-- {{$hangxe[1]->$name}} --}}
            <select name="brand" id="brand" class="form-control">
                <option value="" >All</option>
                
                @foreach ($hangxe as $xe ){
                    
                    <option value="{{$xe->name}}">{{$xe->name}} </option>
                } 
                @endforeach
                
            </select>

            <label id="title-box">Transmission</label>
            <select name="auto" id="auto" class="form-control">
                <option value="" >All</option>
                <option value="1">Automatic Transmission Car</option>
                <option value="2" >Manual Transmission Car</option>
            </select>

            {{-- {{dd($ngaygio['city'])}} --}}
            <input type="text" name="city" hidden value="{{$ngaygio['city']}}" >
            <input type="text" name="lat" hidden value="{{$ngaygio['lat']}}" >
            <input type="text" name="lng" hidden value="{{$ngaygio['lng']}}" >
            <input name="checkin" type="text" hidden value="{{$ngaygio['checkin']}}">
            <input name="hourstart" type="text" hidden value="{{$ngaygio['hourstart']}}">
            <input name="checkout" type="text" hidden value="{{$ngaygio['checkout']}}">
            <input name="hourend" type="text" hidden value="{{$ngaygio['hourend']}}">

            
            <div class="row" style="margin-top: 20px">
                <div class="col" style="text-align: center">
                    <input type="submit" class="btn btn-success" style="padding: 10px 30px" name="" id="ndndnd" value="Apply">    
                       <input type="button" class="btn btn-info" onclick="return boloc()" style="padding: 10px 30px" id="ndndnd" value="Remove filter">
                    
        
                </div>
            </div>

        


        </form>





    </div>


</div>


<script>
    function checkcars1() {

        let value1 = document.getElementById("4cho").value;


        if (value1 == 0) {
            document.getElementById("carimage1").style.border = "solid";
            document.getElementById("carimage1").style.borderWidth = "1px";
            document.getElementById("stylecar1").style.fontWeight = "bold";
            document.getElementById("4cho").value = 1;
        } else {
            document.getElementById("carimage1").style.border = "none";
            document.getElementById("stylecar1").style.fontWeight = "normal";
            document.getElementById("4cho").value = 0;
        }

    }

    function checkcars2() {

        let value1 = document.getElementById("7cho").value;


        if (value1 == 0) {
            document.getElementById("carimage2").style.border = "solid";
            document.getElementById("carimage2").style.borderWidth = "1px";
            document.getElementById("stylecar2").style.fontWeight = "bold";
            document.getElementById("7cho").value = 1;
        } else {
            document.getElementById("carimage2").style.border = "none";
            document.getElementById("stylecar2").style.fontWeight = "normal";
            document.getElementById("7cho").value = 0;
        }

    }

    function checkcars3() {

        let value1 = document.getElementById("bantai").value;


        if (value1 == 0) {
            document.getElementById("carimage3").style.border = "solid";
            document.getElementById("carimage3").style.borderWidth = "1px";
            document.getElementById("stylecar3").style.fontWeight = "bold";
            document.getElementById("bantai").value = 1;
        } else {
            document.getElementById("carimage3").style.border = "none";
            document.getElementById("stylecar3").style.fontWeight = "normal";
            document.getElementById("bantai").value = 0;
        }

    }
    function boloc(){


        document.getElementById('sb').click()=true;
    }

  
   

</script>
