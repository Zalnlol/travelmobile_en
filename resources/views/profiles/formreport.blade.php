@extends('layoutUser.layout')
@section('titleweb', 'Trip cancellation form')
    
@section('bodycode')

<div  style="margin-top: 10%; height:300px">
    <h3 style="text-align: center">Trip cancellation form</h3>

    <form action="{{url('/user/mytrips/cancell')}}" onsubmit="return checklydio()" method="POST">
        @csrf
        <div class="row" style="margin-top: 5%">
            <div class="col-sm-6" style="text-align: right">
                <label style="font-size: 12pt">Please choose one of the reasons for canceling your car rental</label>
            </div>
    
            <div class="col-sm-3" style="text-align: left" >
               <select name="" id="selectlydo" class="form-control" >
                   <option selected value="">Please select the reason</option>
                   <option value="1">Choose the wrong address</option>
                   <option value="2">Choose the wrong date</option>
                   <option value="3">Unexpectedly busy</option>
                   <option value="4">Change plan</option>
                   <option value="5">Find a better new car</option>
               </select>
            </div>
           <input type="text" hidden name="contract_id" value="{{$id}}">

        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col" style="text-align: center">
                <span id="lydo" style="font-size: 13pt; color:red"></span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col" style="text-align: center">
                <input type="submit" class="btn btn-success" value="Cancel Trip">
            </div>
        </div>
       

    </form>

</div>

<script>
    function checklydio(){
        if(document.getElementById('selectlydo').value==''){
            document.getElementById('lydo').innerText="Please select the reason<"
            return false;
        }else{
            return true;  
        }
    }


</script>


@endsection