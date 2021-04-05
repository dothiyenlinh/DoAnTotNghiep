<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
//use Session;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Environment\Console;

session_start();

class ProductController extends Controller
{
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        return view('admin.add_product')->with('cate_product',$cate_product);
    }

    public function all_product(){
        $all_product=DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->orderby('tbl_product.product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_product',$manager_product);
    }

    public function save_product(Request $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_status'] = $request->product_status;
        $data['product_desc'] = $request->product_desc;
        $data['meta_keywords'] = $request->product_keywords;
        $data['category_id'] = $request->product_cate;
        $get_image = $request->file('product_image');
        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $edit_product=DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);
        return view('admin_layout')->with('admin.edit_product',$manager_product);
    }

    public function update_product(Request $request, $product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_status'] = $request->product_status;
        $data['product_desc'] = $request->product_desc;
        $data['meta_keywords'] = $request->product_keywords;
        $data['category_id'] = $request->product_cate;
        $get_image = $request->file('product_image');

        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','Cập nhập thành công');
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->insert($data);
        Session::put('message','Cập nhập thành công');
        return Redirect::to('all-product');
    }

    public function delete_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        return Redirect::to('all-product');
    }

    //End Admin Pages
    public function details_product(Request $request,$product_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id', '=','tbl_product.category_id')
        ->where('tbl_product.product_id',$product_id)->get();

        foreach($details_product as $key => $value){
            $category_id = $value ->category_id;
            $meta_desc = $value->product_desc;
            $meta_keywords = $value->meta_keywords;
            $meta_title = $value->product_name;
            $url_canonical = $request->url();
        }

        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id', '=','tbl_product.category_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();

        return view('pages.sanpham.show_details')->with('category',$cate_product)
        ->with('product_details',$details_product)->with('relate',$related_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}
