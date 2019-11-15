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
      
        // $this->middleware('myauth');
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
        return view('adminpage.UserManagement');
    }
    public function renderProduct(){
        $shoes=DB::table('shoes')
                                 ->join('category', 'shoes.categoryID', '=', 'category.id')
                                 ->select('shoes.id','shoes.name','category.categoryName','shoes.inStock')
                                 ->get();
        $category=DB::table('category')
                                ->get();
        return view('adminpage.ProductManagement',['shoes'=>$shoes],['category'=>$category]);
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
