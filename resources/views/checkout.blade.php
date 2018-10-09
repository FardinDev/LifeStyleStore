@extends('layouts.app')
@section('title', 'About')
@section('content')

<div class="t-center p-l-15 p-r-15 p-b-100 p-t-100">
        <div class="t-center m-text12 p-t-20 p-b-20">
            We Accept
        </div>
    <a href="#">
        <img class="h-size1 footerImg" style="padding:40px;" src="{{asset('images/icons/bkash.png')}}" alt="IMG-DISCOVER">
    </a>

    <a href="#">
        <img class="h-size1 footerImg" style="padding:40px;" src="{{asset('images/icons/rocket.png')}}" alt="IMG-DISCOVER">
    </a>

    <a href="#">
        <img class="h-size1 footerImg" style="padding:40px;" src="{{asset('images/icons/paypal.png')}}" alt="IMG-PAYPAL">
    </a>

    <a href="#">
        <img class="h-size1 footerImg" style="padding:40px;" src="{{asset('images/icons/visa.png')}}" alt="IMG-VISA">
    </a>

    <a href="#">
        <img class="h-size1 footerImg" style="padding:40px;" src="{{asset('images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
    </a>

    <a href="#">
        <img class="h-size1 footerImg" style="padding:40px;" src="{{asset('images/icons/express.png')}}" alt="IMG-EXPRESS">
    </a>

    <div class="t-center m-text10 p-t-20 p-b-20" style="line-height: 1.6;">
       As This is just a demo project, Further Processes Have Not Been Implemented. <br> However In my other project 
        (<a class="m-text12" href="http://www.laravel-ecommerce.xyz/">www.laravel-ecommerce.xyz</a>) Everything up to this and from here is Implemented and running great. So if you 
        you want you can visit <a class="m-text12" href="http://www.laravel-ecommerce.xyz/">www.laravel-ecommerce.xyz</a> to see further process, Thank You.
    </div>
</div>

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    swal("Not been Implemented", "www.laravel-ecommerce.xyz you can see all this processes.", "warning");
</script>
@endsection