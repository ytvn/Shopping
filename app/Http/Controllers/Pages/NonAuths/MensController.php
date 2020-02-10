<?php

namespace App\Http\Controllers\Pages\NonAuths;

use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Http\Request;
use App\Models\Product;
session_start();
class MensController extends NonAuthController
{
    public function __construct() {
        parent::__construct();
    }
    public function clothing ($page) {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("mens", array_merge(Product::getByPage($page,1),['status' => 'success']));   
        return $this->view("mens", Product::getByPage($page,1));
    }
    public function shoe ($page) {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("mens", array_merge(Product::getByPage($page,2),['status' => 'success']) );
        return $this->view("mens", Product::getByPage($page,2));
    }
    public function watch ($page) {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("mens", array_merge(Product::getByPage($page,3),['status' => 'success']) );
        return $this->view("mens", Product::getByPage($page,3));
    }
    public function bag ($page) {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("mens", array_merge(Product::getByPage($page,4),['status' => 'success']) );
        return $this->view("mens", Product::getByPage($page,4));
    }
    public function belt ($page) {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("mens", array_merge(Product::getByPage($page,5),['status' => 'success']) );
        return $this->view("mens", Product::getByPage($page,5));
    }
    public function accessories ($page) {
        if(isset($_GET['status']) && $_GET['status']=="success")
            return $this->view("mens", array_merge(Product::getByPage($page,6),['status' => 'success']) );
        return $this->view("mens", Product::getByPage($page,6));
    }

}
