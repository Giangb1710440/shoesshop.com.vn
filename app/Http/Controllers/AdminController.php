<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

public function admin(){
    return view('admin.index_admin');
}

public function list_product(){
    return view('admin.list_product');
}

}