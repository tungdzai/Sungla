@extends('layout.index')
@section('title','Product Detail')
@section('product_detail')
    <div class="product-detail" style="padding: 30px">
        <div class="container">
            <div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-info">Trang chủ </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-info">Bộ sưu
                                tập</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                                  class="text-info">{{$product->category_name}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                                  class="text-info">{{$product->brand_name}}</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="slider" class="owl-carousel product-slider">
                        <div class="item">
                            <img src="{{asset($product->image)}}"/>
                        </div>
                        <div class="item">
                            <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg"/>
                        </div>
                        <div class="item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw"/>
                        </div>
                        <div class="item">
                            <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg"/>
                        </div>
                        <div class="item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw"/>
                        </div>
                        <div class="item">
                            <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg"/>
                        </div>
                        <div class="item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw"/>
                        </div>
                    </div>
                    <div id="thumb" class="owl-carousel product-thumb">
                        <div class="item">
                            <img src="{{asset($product->image)}}"/>
                        </div>
                        <div class="item">
                            <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg"/>
                        </div>
                        <div class="item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw"/>
                        </div>
                        <div class="item">
                            <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg"/>
                        </div>
                        <div class="item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw"/>
                        </div>
                        <div class="item">
                            <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg"/>
                        </div>
                        <div class="item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-dtl">
                        <div class="product-info">
                            <div class="product-name">{{$product->name}}</div>
                            <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" checked/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" checked/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" checked/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2"/>
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount">
                                <span class="text-danger">${{$product->price}}</span>
                                <span class="line-through">${{($product->price)*1.5}}</span>
                            </div>
                        </div>
                        <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="{{route('customer.cart')}}" method="post">
                                @csrf
                                <div class="d-flex">
                                    <div class="qtyminus">-</div>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <div class="qtyplus">+</div>
                                </div>
                                <button class="round-black-btn">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                           aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                           aria-controls="review" aria-selected="false">Reviews (0)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                         aria-labelledby="description-tab">
                        {{$product->description}}
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="review-heading">REVIEWS</div>
                        <p class="mb-20">There are no reviews yet.</p>
                        <form class="review-form">
                            <div class="form-group">
                                <label>Your rating</label>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5"/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3"/>
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2"/>
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1"/>
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <button class="round-black-btn">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
