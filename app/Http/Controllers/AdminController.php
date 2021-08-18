<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Session;
class AdminController extends Controller
{

    public function admin(){
        return view('admin.index_admin');
    }

    public function list_product(){
        return view('admin.list_product');
    }
    //them loai san pham
    public function add_category(){
        return view('admin.add_category');
    }

    public function post_category(Request $res){
        $type_category = $res->input('type_category');
        $cate = new Category();
        $cate->category_name = $type_category;
        $cate->save();
        $register_success = Session::get('success_category');
        Session::put('success_category');
        return redirect()->back()->with('success_category','vui lòng nhập loại sản phẩm');
    }

    //thêm nhà cung cấp sản phẩm
    public function add_supplier(){
        return view('admin.add_supplier');
    }

    public function post_supplier(Request $res){
        $namesup=$res->input('name_supplier');
        $addresssup=$res->input('address_supplier');
        $description=$res->input('description');
        $suppliers=new Supplier();
        $suppliers->supplier_name=$namesup;
        $suppliers->supplier_address=$addresssup;
        $suppliers->supplier_discribe=$description;
        $suppliers->save();
        $register_success = Session::get('success_supplier');
        Session::put('success_supplier');
        return redirect()->back()->with('success_supplier','Thành công');
    }

    //hiển thị sản phẩm
     public function show_product(){
        return view('admin.show_product');
     }

     //thêm mới sản phẩm
    public function add_product(){
        $category=DB::table('categorys')->get();
        return view('admin.add_product')->with([
            'category'=>$category
        ]);
    }
    public function post_product(Request $res){
        $category=$res->input('category');
        $name_product=$res->input('name_product');
        $quality=$res->input('quality');
        $price=$res->input('price');
        $image=$res->input('image');
        $discription=$res->input('discription');
        $discost=$res->input('discost');


        $product = new Product();
        $product->category_id=$category;
        $product->product_name=$name_product;
        $product->product_quality=$quality;
        $product->product_price=$price;
        $product->product_image=$image;
        $product->product_discribe=$discription;
        $product->product_discount=0;
        $product->save();
        $register_success = Session::get('success_add_product');
        Session::put('success_add_product');
        return redirect()->route('show_product')->with('success_add_product','Thành công');
    }
}
