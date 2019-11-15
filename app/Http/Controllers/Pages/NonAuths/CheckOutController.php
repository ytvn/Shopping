<?php

namespace App\Http\Controllers\Pages\NonAuths;

use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Http\Request;

class HomeController extends NonAuthController
{
    public function __construct() {
        parent::__construct();
    }
    //
    public function index () {
        if(isset($_GET['status']))
            if($_GET['status']=="fail" && !isset($_GET['email']))
                return $this->view("index", ['status' => 'register_fail']); 
            else if($_GET['status']=="fail")
                return $this->view("index", ['status' => 'fail', 'email' => $_GET['email']]);
            else 
            return $this->view("index", ['status' => 'success']); 
        return $this->view("index");
    }
}
