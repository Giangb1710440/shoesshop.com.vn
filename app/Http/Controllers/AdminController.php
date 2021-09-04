<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Detail_product;
use App\Models\Order;
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
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                return view('admin.index_admin');
            }
        }else{
            return view('home.page_login');
        }
    }
    public function logout(Request $request){
        if (Auth::user()->role_id == 1){
            Auth::logout();
            Session::forget('cart');
            return redirect()->route('page_login');
        }else{
            Auth::logout();
            Session::forget('cart');
            return redirect()->back();
        }
    }
    public function list_product(){
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                return view('admin.list_product');
            }
        }else{
            return view('home.page_login');
        }

    }
    //them loai san pham
    public function add_category(){
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                return view('admin.add_category');
            }
        }else{
            return view('home.page_login');
        }
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
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                return view('admin.add_supplier');
            }
        }else{
            return view('home.page_login');
        }

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
         if (Auth::check()){
             if(Auth::user()->role_id !== 1){
                 return redirect()->route('home');
             }else{
                 $show_product=DB::table('products')->get();
                 $cate_product=DB::table('categorys')->get();
                 return view('admin.show_product')->with([
                     'showproduct'=>$show_product,
                     'cate_product'=>$cate_product
                 ]);
             }
         }else{
             return view('home.page_login');
         }

     }

     //them mau sac
    public function add_color(){
        return view('admin.add_color');
    }

    public function post_add_color(Request $res){
        $name_color=$res->input('color');
        $color = new Color();
        $color->name_color=$name_color;
        $res->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        if($res->hasfile('image')) {
            foreach ($res->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
            }
        }
        $color->color_image=json_encode($imgData);

        $color->save();
        $register_success = Session::get('success_add_color');
        Session::put('success_add_color');
        return redirect()->back()->with('success_add_color','Thành công');
    }

     //thêm mới sản phẩm
    public function add_product(){
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                $category=DB::table('categorys')->get();
                return view('admin.add_product')->with([
                    'category'=>$category
                ]);
            }
        }else{
            return view('home.page_login');
        }
    }
    public function post_product(Request $res){
        $category=$res->input('category');
        $name_product=$res->input('name_product');
        $price=$res->input('price');

        $discription=$res->input('discription');
        $discost=$res->input('discost');

        $product = new Product();
        $product->category_id=$category;
        $product->product_name=$name_product;
        $product->product_price=$price;
        //image
        $res->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        if($res->hasfile('image')) {
            foreach ($res->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
            }
        }
        $product->product_image=json_encode($imgData);

        $product->product_discribe=$discription;
        $product->product_discount=0;
        $product->save();
        $register_success = Session::get('success_add_product');
        Session::put('success_add_product');
        return redirect()->route('show_product')->with('success_add_product','Thành công');
    }


    //them chi tiet san pham
    public function temp_detail_product(){
        $product = DB::table('products')->get();
        return view('admin.temp_detail_product')->with([
            'product'=>$product
        ]);
    }
    public function add_detail_product(Request $res){
        $product = DB::table('products')->where('id',$res->input('id_product'))->get();
        $color = DB::table('colors')->get();
        $idP=$res->input('id_product');
        return view('admin.add_detail_product')->with([
            'idP'=>$idP,
            'product'=>$product,
            'color'=>$color
        ]);
    }

    public function post_add_detail_product(Request $res){
        $id_product = $res->input('id_product');
        $size = $res->input('size_giay');
        $color = $res->input('color_product');
        $qty = $res->input('qty_product');

        $detail_test = DB::table('detail_products')->get();
        $i=0;
        foreach ($detail_test as $detail_tests){
            if(($detail_tests->product_id == $id_product) && $detail_tests->size == $size && $detail_tests->color_id == $color) {
                $sl = $detail_tests->qty + $qty;
                Detail_product::where('id',$detail_tests->id)->update(['qty' => $sl]);
                $register_success = Session::get('success_add_detail_product');
                Session::put('success_add_detail_product');
                return redirect()->route('temp_detail_product')->with('success_add_detail_product','Thành công');

            }
        }
        $detail_product = new Detail_product();
        $detail_product->product_id =$id_product;
        $detail_product->size=$size;
        $detail_product->color_id=$color;
        $detail_product->qty=$qty;
        $detail_product->save();
        $register_success = Session::get('success_add_detail_product');
        Session::put('success_add_detail_product');
        return redirect()->route('temp_detail_product')->with('success_add_detail_product','Thành công');
    }


    //edit product
    public function edit_product($id){
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                $category=DB::table('categorys')->get();
                $product=DB::table('products')->where('id',$id)->get();
                return view('admin.edit_product')->with([
                    'category'=>$category,
                    'product'=>$product,
                    'id'=>$id
                ]);
            }
        }else{
            return view('home.page_login');
        }
    }

    //post_edit_product
    public function post_edit_product($id,Request $res){

        $edit_product = Product::find($id);

        $category=$res->input('category');
        $name_product=$res->input('name_product');
        $quality=$res->input('quality');
        $price=$res->input('price');
        $discription=$res->input('discription');
        $discost=$res->input('discost');

        if($category != null){
            $edit_product->category_id = $category;
        }
        if($name_product != null){
            $edit_product -> product_name = $name_product;
        }
        if($quality != null) {
            $edit_product->product_quality = $quality;
        }
        if($price == null){
            $edit_product->product_price = $price;
        }
        if($discription != null){
            $edit_product -> product_discribe=$discription;
        }
        if($discost != null){
            $edit_product -> product_discount=$discost;
        }
        //image
        $res->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        if($res->hasfile('image')) {

            $img = $edit_product->product_image;
            $arr_img=json_decode($img,true);
            foreach ($res->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $image[]=$name;
                array_push($arr_img,$name);
            }
            $edit_product->product_image=json_encode($arr_img);
        }
        $edit_product -> save();
        $register_success = Session::get('success_edit_product');
        Session::put('success_edit_product');
        return redirect()->route('show_product')->with('success_edit_product','Thành công');
    }

    //delete product
    public function delete_item($id){
        $todo = Product::find($id);
        $todo->delete();
        Session::put('delete_product');
        return redirect()->route('show_product')->with('delete_product','Thành công');
    }

    //delete image
    public function delete_image($id,Request $res){
        $delete_img = Product::find($id);
        $res->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        if($res->hasfile('image')) {

            $img = $delete_img->product_image;
            $arr_img=json_decode($img,true);

            foreach ($res->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);


                $image[]=$name;
                array_push($arr_img,$name);
            }
            $edit_product->product_image=json_encode($arr_img);
        }
    }

    //show user

    public function show_user(){
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                $users=DB::table('users')->get();
                $role=DB::table('role_accesss')->get();
                return view('admin.show_user')->with([
                    'users'=>$users,
                    'role'=>$role
                ]);
            }
        }else{
            return view('home.page_login');
        }

    }

    //tinh trang don hang
    public function status_order(){
        if (Auth::check()){
            if(Auth::user()->role_id !== 1){
                return redirect()->route('home');
            }else{
                $order=DB::table('orders')->get();
                $user=DB::table('users')->get();
                return view('admin.status_order')->with([
                    'order'=>$order,
                    'user'=>$user
                ]);
            }
        }else{
            return view('home.page_login');
        }
    }
    //cap nhat tinh trang don hang
    public function post_status_order($iddh , Request $request){
        $newstt = $request->input('trangthai');
        $dhs = Order::find($iddh);
        $dhs->order_status = $newstt;
        $dhs->save();
        Session::put('stt_success');
        return redirect()->route('status_order')->with('stt_success', 'Cập nhật thành công');
    }
}
