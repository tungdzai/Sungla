<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('template/images/logo.png')}}" alt="#"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link" id="categories">Bộ sưu tập</span>
                                <ul></ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="glasses.html">Giảm giá</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.html">Cửa hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Blog</a>
                            </li>
                            <li class="nav-item d_none sea_icon">
                                <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item d_none sea_icon">
                                <a class="nav-link" href="{{route('customer.showCart')}}"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            @if(session('customer'))
                                <div class="dropdown ">
                                    <button class="btn dropdown-toggle p-0" type="button" data-toggle="dropdown"
                                            aria-expanded="false">
                                        Xin chào : {{session('customer')->name}}
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Thông tin</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Cài đặt</a>
                                        <a class="dropdown-item" href="{{route('client.logout')}}"><i
                                                class="fas fa-sign-out-alt"></i> Sign out</a>
                                    </div>
                                </div>
                            @else
                                <li class="nav-item d_none login_btn">
                                    <a class="nav-link" href="{{route('client.login')}}">Login</a>
                                </li>
                                <li class="nav-item d_none">
                                    <a class="nav-link" href="{{route('client.register')}}">Register</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<script>
    const categories = document.querySelectorAll('#categories');
</script>
