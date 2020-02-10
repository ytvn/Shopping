<?php

namespace App\Http\Controllers\Pages\Auths;
use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\User;
session_start();
require_once( __DIR__ . "/../../../../libs/jwt.php");
class CheckOutController extends AuthController
{
    public function __construct() {
      // if(!isset($_SESSION['URL']))
        $_SESSION["URL"] = "thanhtoan";
  // session_unset();
      $this->middleware('myauth');

        parent::__construct();
    }
    public function index(){
      
      $token = json_decode(getPayLoad($_COOKIE['token']), true);
      $user_id = $token['id'];
      $user = User::select("name", 'email', 'id')->where("id", $user_id)->first();

      return $this->view("thanhtoan",
       ["name" => $user->name,
       "email" => $user->email,
       "id" => $user->id]);
  }
}
