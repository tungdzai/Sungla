@extends('layout.index')
@section('title','Cart')
@section('showCart')
    <link rel="stylesheet" href="{{asset('template/css/cart.css')}}">
    <div class="card">
        <div class="row m-0">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row m-0">
                        <div class="col"><h4><b>Giỏ hàng</b></h4></div>
                        <div class="col align-self-center text-right text-muted">{{count($showCarts)}} sản phẩm</div>
                    </div>
                </div>
                @foreach($showCarts as $showCart)
                    <div class="row m-0">
                        <div class="row m-0 main align-items-center">
                            <div class="col-2 p-0"><img class="img-fluid" src="{{asset($showCart->image)}}"></div>
                            <div class="col">
                                <div class="row m-0">{{$showCart->name}}</div>
                            </div>
                            <div class="col">
                                <a href="#">-</a><a href="#" class="border">{{$showCart->quantity}}</a><a href="#">+</a>
                            </div>
                            <div class="col">&dollar; {{ ($showCart->quantity)*($showCart->price) }}
                                <a class="close" href="">&#10005;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="back-to-shop"><a href="{{route('client.home')}}">&leftarrow;<span class="text-muted">Back to shop</span></a>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Chi tiết đơn hàng</b></h5></div>
                <hr>
                <form>
                    <p>Vận chuyển</p>
                    <select>
                        <option class="text-muted">Giaohangnhanh(GHN)</option>
                        <option class="text-muted">Bưu điện Việt Nam (VNPost)</option>
                        <option class="text-muted">Viettel Post</option>
                        <option class="text-muted">Nhất Tín logistics</option>
                        <option class="text-muted">DHL</option>
                        <option class="text-muted">Kerry</option>
                    </select>
                    <p>GIVE CODE</p>
                    <input id="code" placeholder="Enter your code">
                    <p>Phương thức thanh toán </p>
                    <select>
                        <option class="text-muted">Momo</option>
                        <option class="text-muted">Zalopay</option>
                        <option class="text-muted">Shopeepay</option>
                        <option class="text-muted">Thanh toán khi nhận hàng</option>
                    </select>
                </form>
                <div class="row m-0">
                    <div class="col" style="padding-left:0;">Giá ban đầu</div>
                    <div class="col text-right">&dollar;
                        @php
                        $sum=0;
                        foreach ( $showCarts as  $showCart) {
                            $sum+=($showCart->quantity)*($showCart->price);
                        }
                        echo $sum;
                        @endphp
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col" style="padding-left:0;">Giao hàng</div>
                    <div class="col text-right">&dollar; 5</div>
                </div>
                <div class="row m-0" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">Tổng tiền </div>
                    <div class="col text-right">&dollar;
                        @php
                            $sum=0;
                            foreach ( $showCarts as  $showCart) {
                                $sum+=($showCart->quantity)*($showCart->price);
                            }
                            echo $sum + 5;
                        @endphp
                    </div>
                </div>
                <button class="btn-checkout">Thanh toán</button>
            </div>
        </div>
    </div>
@endsection