<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// use App\Providers\shoes;

class AdminPageController extends Controller
{
    public function __construct()
    {
      
        // $this->middleware('adminlogin');
        // $this->user = Auth::user();
    }

    function loginPage(){
        return view("adminpage.loginAdmin");
    }
   
    public function renderAdminPage(){
                return view('adminpage.index');
    }
    public function renderStaff(){
        $users=DB::select('select * from users where role in ("admin","staff")');
        return view('adminpage.staffManagement',['users'=>$users]);
    }
    public function renderUser(){
        $users=DB::select('select * from users where role in ("customer")');
        return view('adminpage.staffManagement',['users'=>$users]);
    }
    public function renderProduct($page){
        $count_product= DB::table('products')->count();
        $page_num = ceil($count_product / 100);
        if($page > $page_num){
            $page = $page_num;
        }

        $products=DB::table('products')
             ->join('categorys', 'products.category_id', '=', 'categorys.category_id')
             ->select('product_id','title','category_name','pricespecial')
             ->offset(($page-1) * 100)
            ->limit(100)
            ->get();
        $category=DB::table('categorys')
                                ->get();
      
        return view('adminpage.ProductManagement',['products'=>$products],['categorys'=>$category]);
    }
    public function deleteProduct($id){
        DB::table('shoes')
            ->where('id', '=', $id)
            ->delete();

        return 1;
    }
    public function index(){

    }
    public function create(){

        return view('adminpage.ProductManagement');
    }
}
