<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background: rgb(210, 210, 210);
            background: linear-gradient(107deg, rgba(210, 210, 210, 1) 0%, rgba(233, 233, 233, 1) 46%, rgba(241, 244, 245, 1) 100%);
        }

    </style>
</head>

<body>
 
    <div class="row">
        <div class="col" style="text-align: center">
            <img src="{{ url('images/travel-mobile-logo.png') }}" style="width: 30%" alt="">
        </div>
    </div>


    <div  style="background: white; width:50%; padding:2%; margin-top:2%; margin-left:25%">
        <div class="row">
            <div class="col">
                <span>Hi, {{$datamail1['name']}} !</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span>Your car has been booked by a customer. Please click the button below to confirm with the customer!!</span>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col" style="text-align: center">
                <a href="{{$datamail1['link']}}" target="_blank" ><input type="button" value="Xác nhận ngay" class="btn btn-success" ></a>
            </div>
        </div>
        
       


        <hr>

        <div class="row">
            <div class="col"><i>For any inquiries, please contact us at the address</i></div>
        </div>


        <div class="row">
            <div class="col"><b>Address:</b> <a href="https://goo.gl/maps/HNC3wxS3UBVQG8uT6">  590 Cach Mang Thang 8 Street, Ward 11, District 3, Ho Chi Minh City.</a></div>
            
        </div>


        <div class="row">
            <div class="col"><b>Phone:</b> <a href="tel:+0375515719"> 0375515719</a> </div>
        </div>
       
        <div class="row">
            <div class="col"><b>Website:</b><a href="http://localhost:8080/travelmobile/public/">http://localhost:8080/travelmobile/public/</a></div>
        </div>
        <div class="row">
            <div class="col"><b>Mail:</b> <a href="mailto:travelmobile@gmail.com">travelmobile@gmail.com</a></div>

            
        </div>
        
        
    </div>

</body>

</html>
