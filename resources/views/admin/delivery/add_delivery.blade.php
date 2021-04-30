@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm nơi vận chuyển
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tỉnh</label>
                            <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                <option value="">--Tỉnh--</option>
                                @foreach($city as $key => $ci)
                                <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thành phố</label>
                            <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                <option value="">--Thành phố--</option>
                                <option value="">Hiển thị</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phường</label>
                            <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                <option value="">--Phường--</option>
                                <option value="">Hiển thị</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phí vận chuyển</label>
                            <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1">
                        </div>
                        <button type="button" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận chuyển</button>
                    </form>
                </div>
                <div id="load_delivery">
                </div>
            </div>
        </section>

    </div>
    @endsection
