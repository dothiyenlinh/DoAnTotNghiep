@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách danh mục sản phẩm
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
          <th>Tên danh mục</th>
          <th>Mô tả danh mục</th>
          <th>Trạng thái</th>
          <th>Sửa/Xóa</th>
          <th style="width:30px;"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($all_category_product as $key =>$cate_pro)
        <tr>
          <td>{{$cate_pro->category_name}}</td>
          <td>{{$cate_pro->category_desc}}</td>
          <td><span class="text-ellipsis">
              <?php
              if ($cate_pro->category_status == 0) {
                echo 'Ẩn';
              } else {
                echo "Hiển thị";
              }
              ?>
            </span></td>
          <td>
            <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-success text-active"></i></a>
            <a onclick="return confirm('bạn có thật sự muốn xóa?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i></a>

          </td>
        </tr>
        @endforeach
</tbody>
</table>
</div>
<footer class="panel-footer">
  <div class="row">

    <div class="col-sm-5 text-center">
      <small class="text-muted inline m-t-sm m-b-sm">Xem thêm</small>
    </div>
    <div class="col-sm-7 text-right text-center-xs">
      <ul class="pagination pagination-sm m-t-none m-b-none">
        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
</div>
</div>
@endsection
