<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

abstract class ApiController extends CookieController
{
    protected $user;
    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
        $this->user = Auth::user();
    }


    public abstract function cast_to_model($input);

   

    public function create(Request $re) {
         
        $model = $this->model;
        $doc = new $model();   
        $arr=[];
        if(array_key_exists("returnurl",$_GET))
            $returnUrl=$_GET['returnurl'];
        foreach ($_POST as $key => $value) {       
            if (in_array($key, $doc->getfillable() )) {
                $doc->$key = $value;
            }
        }
        // return $key;
        $doc->before_create($doc);
        try{
            $doc->save();
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            // dd($ex->getMessage()); 
            return redirect("/?status=fail");
           
        }
        // array_push($arr, $doc);
        return redirect($returnUrl ."?status=register_success");
        // return response()->json($doc);
        
    }
    public function read() {

    }
    public function update() {

    }
    public function delete() {

    }

    public function getByPage($page) {
        // var_dump($user);
        return response()->json($this->model::getByPage($page, 1));
    }


    // public abstract function before_create();
    // public abstract function before_update();
    // public abstract function after_create();
    // public abstract function after_update();
}
