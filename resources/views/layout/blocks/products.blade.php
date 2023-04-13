<div class="glasses">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <h3 class="font-weight-bold" style="color: #03cafc">MẪU KÍNH MẮT MỚI</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row">
                @foreach($products as $index =>$product)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="glasses_box">
                            <a href="{{route('customer.productDetail',['id'=>$product->id])}}">
                                <figure><img src="{{$product->image}}" alt="#"/></figure>
                                <h3><span class="blu">$</span>{{$product->price}}</h3>
                                <p>{{$product->name}}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12">
                    <a class="read_more" href="#">Xem thêm</a>
                </div>
            </div>
    </div>
</div>
