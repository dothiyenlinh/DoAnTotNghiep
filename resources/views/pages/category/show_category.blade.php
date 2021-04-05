@extends('welcome')
@section('content')
<div class="features_items">
    <!--features_items-->
    @foreach($category_name as $key => $name)
    <h2 class="title text-center">{{$name->category_name}}</h2>
    @endforeach

    @foreach($category_by_id as $key => $product)
    <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="300px" width="80px" alt="" />

                        <p>{{$product->product_name}}</p>
                        <a href="{{URL::to('/save-cart?productid_hidden='.$product->product_id.'&qty=1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{__('Thêm vào giỏ hàng')}}</a>
                        <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                    </div>

                </div>
            </div>
        </div>
    </a>
    @endforeach

</div>
<!--features_items-->
@endsection
