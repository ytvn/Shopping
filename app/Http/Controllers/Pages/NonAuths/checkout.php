<?php

namespace App\Http\Controllers\Pages\NonAuths;

use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Http\Request;
require_once('D:\Xampp1\htdocs\Shopping\Shopping_Card\app\libs\jwt.php');
// require_once(__DIR__ ."/../../libs/jwt.php");   
session_start();
class checkout extends NonAuthController
{
    public function __construct() {
       
        if(!isset($_SESSION['URL']))
            $_SESSION["URL"] = "viewCart";
        // session_unset();
        $this->middleware('myauth');
        parent::__construct();
    }
    
    public function index () {
        // return getPayLoad($_COOKIE['token']);
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("checkout", ['status' => 'success']);     
       return $this->view('checkout');
    }
    
}
