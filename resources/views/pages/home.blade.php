@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">{{__('Sản phẩm mới nhất')}}</h2>
                        @foreach($all_product as $key =>$product)
                        <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="320" width="50" alt="" />
                                            <p>{{($product->product_name)}}</p>
                                            <a href="{{URL::to('/save-cart?productid_hidden='.$product->product_id.'&qty=1')}}"
                                            class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{__('Thêm vào giỏ hàng')}}</a>
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->
                    <div style="margin-top: 2%; margin-bottom: 2%; margin-left: 95%;" class="fb-share-button" data-href="http://localhost:8080/trasuatoco/" data-layout="button" data-size="large"><a target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
@endsection
