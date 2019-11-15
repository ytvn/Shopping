<?php

namespace App\Http\Controllers\Pages\NonAuths;

use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Http\Request;

class checkout extends NonAuthController
{
    public function __construct() {
        parent::__construct();
    }
    
 
    public function index () {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("checkout", ['status' => 'success']);     
       return $this->view('checkout');
    }
    
}
