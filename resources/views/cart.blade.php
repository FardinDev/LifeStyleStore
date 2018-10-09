@extends('layouts.app')
@section('title','Cart')
@section('content')



<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/about-banner.png); background-attachment:fixed; ">
    <h2 class="l-text2 t-center">
        Cart
    </h2>
</section>




<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@if(Cart::count()==0)

<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">

                <center>

                    <span class="m-text12 text-center">Your Cart Is Empty</span>

                    <br>
                    <br>

                    <div class="size12 trans-0-4">
                        <!-- Button -->
                        <a href="{{route('products')}}">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Go shopping
                            </button>
                        </a>
                    </div>

                </center>
            </div>
        </div>
    </div>
</section>
@else

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100" id="cart">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">

                <table class="table-shopping-cart" id="table">
                    <tr class="table-head">
                        <th class="column-1"></th>
                        <th class="column-2">Product</th>
                        <th class="column-3">Price</th>
                        <th class="column-4 p-l-70">Quantity</th>
                        <th class="column-5">Total</th>
                        <th class="column-5"></th>
                    </tr>

                    @foreach(Cart::content() as $item)

                    <tr class="table-row">
                        <td class="column-1">
                            <a href="{{route('products.show', $item->model->name)}}">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="{{asset('storage/'.$item->model->img)}}" alt="IMG-PRODUCT">
                                </div>
                            </a>
                        </td>
                        <td class="column-2">

                            <a href="{{route('products.show', $item->model->name)}}" class="s-text20">
                                {{$item->name}}

                            </a>
                        </td>
                        <td class="column-3">৳ {{$item->price}}</td>
                        <td class="column-4">

                            <form action="{{route('cart.update')}}" method="post" id="update">
                                {{ csrf_field() }}
                                <div class="flex-w bo5 of-hidden">
                                    <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>



                                    <input class="size8 m-text18 t-center num-product" type="number" name="quantity"
                                        value="{{$item->qty}}">


                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>

                                    <button type="submit" class="color1 flex-c-m size9 bg8 eff2 m-r-0">Update</button>
                                </div>


                            </form>
                        </td>
                        <td class="column-5">৳ {{$item->price * $item->qty}}</td>
                        <td class="column-5">
                            <a href="{{route('cart.destroy', $item->rowId)}}"> <i class="fa fa-trash fa-lg"></i> </a>

                            {{-- <button class="btn" name="btn" id="btn" value={{$item->rowId}}>
                                Ajax
                            </button> --}}

                        </td>


                    </tr>

                    @endforeach

                </table>
            </div>
        </div>


        <!-- Total -->
        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">



            <div class="size15 trans-0-4">

                <!--  -->
                <div class="flex-w flex-sb-m p-l-150 p-b-30">
                    <span class="m-text22 w-size19 w-full-sm">
                        Total:
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                        ৳ {{Cart::subtotal()}}
                    </span>
                </div>
                <!-- Button -->
                <form action="{{ route('checkout')}}" method="post">
					{{ csrf_field() }}
					<input type="hidden">
					<div class="w-sizefull p-t-20">
					<button type="submit"  class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="height:40px">
                        Proceed to Checkout
					</button>
					</div>
                </form>
            </div>
        </div>
    </div>

</section>
@endif



<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@if (session()->has('removed'))
<script>
    $(document).ready(function () {
        swal("", "Product Removed", "error");
    });
</script>
@elseif(session()->has('updated'))
<script>
    $(document).ready(function () {
        swal("", "Product Updated", "success");
    });
</script>
@endif
<!--===============================================================================================-->
<script src="js/main.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".btn").click(function () {
            var rowId = $(this).attr('value');
            $.ajax({

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                url: '/ajax',
                data: {
                    id: rowId
                },
                success: function (msg) {
                    location.reload();
                }
            })
        });


        $(".selection-2").change(function () {
            var qty = $(this).find('option:selected').text();
            var rowId = $(this).attr('value');

            $.ajax({

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                url: '/update',
                data: {
                    rowId: rowId,
                    qty: qty
                },
                success: function (msg) {
                    location.reload();
                }
            })


        });






    });
</script>







@endsection