<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Category;
use App\Slider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(3)->get();
        //Seo
        $meta_desc = "Trà sữa siêu thơm ngon dành cho tất cả mọi người, ai thèm trà sữa thì hãy tới với tui nè";
        $meta_keywords = "Trà sữa, Trà sữa ngon, Thức uống ngon";
        $meta_title = "Home | ToCoToCo";
        $url_canonical = $request->url();
        //Seo

        $cate_product = Category::where('category_status', '1')->orderby('category_id', 'desc')->get();
        $all_product = Product::where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        return view('index')->with('category', $cate_product)->with('all_product', $all_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider);

    }

    public function san_pham(Request $request)
    {
        //Seo
        $meta_desc = "Trà sữa siêu thơm ngon dành cho tất cả mọi người, ai thèm trà sữa thì hãy tới với tui nè";
        $meta_keywords = "Trà sữa, Trà sữa ngon, Thức uống ngon";
        $meta_title = "Sản phẩm";
        $url_canonical = $request->url();
        //Seo

        $cate_product = Category::where('category_status', '1')->orderby('category_id', 'desc')->get();
        $all_product = Product::where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        return view('pages.home')->with('category', $cate_product)->with('all_product', $all_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

    }

    public function search(Request $request)
    {
        //Seo
        $meta_desc = "Tìm kiếm sản phẩm";
        $meta_keywords = "Tìm kiếm sản phẩm";
        $meta_title = "Tìm kiếm sản phẩm";
        $url_canonical = $request->url();
        //Seo
        $keywords = $request->keyworks_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name', 'like', '%' . $keywords . '%')->get();

        return view('pages.sanpham.search')->with('category', $cate_product)
        ->with('search_product', $search_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }

    public function all_customer()
    {
        $all_customer = DB::table('tbl_customers')->get();
        $manager_customer = view('admin.all_customer')->with('all_customer', $all_customer);
        return view('admin_layout')->with('admin.all_customer', $manager_customer);
    }

    public function contact(Request $req)
    {
        $meta_desc = "Liên lạc";
        $meta_keywords = "Liên lạc";
        $meta_title = "Liên lạc";
        $url_canonical = $req->url();
        $cate_product = Category::where('category_status', '1')->orderby('category_id', 'desc')->get();
        $all_product = Product::where('product_status', '1')->orderby('product_id', 'desc')->limit(4)->get();
        return view('pages.mail.contact')->with('category', $cate_product)->with('all_product', $all_product)
        ->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)
                ->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);
    }

    public function postcontact(Request $req)
    {
        $to_email = "dolinh.17.09.99@gmail.com";
        Mail::send('pages.mail.send_maill', [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'content' => $req->content,
        ], function ($mail) use ($req, $to_email) {
            $mail->to($to_email);
            $mail->from($to_email, $req->name);
            $mail->subject('Mail phản hồi của khách hàng');
        });
        return redirect('/');
    }
}
