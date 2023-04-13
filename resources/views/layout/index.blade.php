<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/product_detail.css')}}">
{{--    <link rel="stylesheet" href="{{asset('template/css/cart.css')}}">--}}
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('template/images/fevicon.png')}}" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('template/images/loading.gif')}}" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    @include('layout.blocks.header')
</header>
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
@yield('banner')
<!-- end banner -->
<!-- about section -->
@yield('about')
<!-- about section -->
{{--login--}}
@yield('login')
@yield('register')
<!-- Our  Glasses section -->
@yield('products')
@yield('product_detail')
@yield('showCart')
<!-- end Our  Glasses section -->
<!-- Our shop section -->
@yield('shop')
<!-- end Our shop section -->
<!-- clients section -->
@yield('clients')
<!-- end clients section -->
<!-- contact section -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="request" class="main_form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <h3> Liên hệ với chúng tôi </h3>
                        </div>
                        <div class="col-md-12 ">
                            <input class="contactus" placeholder="Họ và tên" type="text" name="Name">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Số điện thoại" type="number" name="Phone Number">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                            <input class="contactusmess" placeholder="Comment" type="text" name="comment">
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--map--}}
    <div class="container-fluid">
        <div class="map_section">
            <div id="map">
            </div>
        </div>
    </div>
</div>
</div>
<!-- end contact section -->
<!--  footer -->
<footer>
    @include('layout.blocks.footer')
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('template/js/jquery.min.js')}}"></script>
<script src="{{asset('template/js/popper.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('template/js/custom.js')}}"></script>
<script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: 40.645037, lng: -73.880224},
        });

        var image = '{{asset('template/images/maps-and-flags.png')}}';
        var beachMarker = new google.maps.Marker({
            position: {lat: 40.645037, lng: -73.880224},
            map: map,
            icon: image
        });
    }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDevKVNhAQWEb3ifdk81-d_uJJtbt8RHkU&callback=initMap"></script>
<!-- end google map js -->
<script src="{{asset('template/js/product_detail.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

