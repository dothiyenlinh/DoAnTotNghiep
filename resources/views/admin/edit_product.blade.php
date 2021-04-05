@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                @foreach($edit_product as $key => $pro)
                    <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key =>$cate)
                                <option value="{{$cate->category_id}}"></option>
                                @endforeach
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key =>$cate)
                                <option value="{{$cate->category_id}}">
                                    {{$cate->category_name}}
                                </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Hình sản phẩm">
                            <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="80" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none" rows="7" class="form-control" name="product_desc" id="editor" placeholder="Mô tả sản phẩm">{{$pro->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Từ khóa sản phẩm</label>
                            <textarea style="resize: none" rows="7" class="form-control" name="product_keywords" id="ckeditor1" placeholder="Từ khóa sản phẩm">{{$pro->meta_keywords}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input value="{{$pro->product_price}}" type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng thái (0 là Ẩn - 1 là Hiện)</label>
                            <input type="text" value="{{$pro->product_status}}" name="product_status" class="form-control" id="exampleInputEmail1" placeholder="Trạng thái sản phẩm">
                        </div>

                        <button type="submit" name="add_product" class="btn btn-info">Cập nhập sản phẩm</button>
                    </form>
                    @endforeach
                    <div>

                    </div>
                    <!-- <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo '<span class="text-alert">', $message . '</span>';
                        $message = Session::put('message', null);
                    }
                    ?> -->
                </div>

            </div>
        </section>

    </div>
    @endsection
