<?php
namespace App\Http\Controllers\Apis\Authentication;
use App\Http\Controllers\Apis\ApiController;
use Illuminate\Http\Request;
use App\Utils\UrlUtil;
use Illuminate\Http\Response;
require_once( __DIR__ . "/../../../../libs/jwt.php");
session_start();
class LoginController extends ApiController
{
    public function __construct() {
        $this->model = "App\Models\User";
    }


    public function dangnhap(){
        return view('partials.signin'); 
    }
    public function login(){      
      
        $doc = new $this->model (); 
        $email="";
        $password="";
        $returnUrl="";
        $role="";
        $returnUrl = $_GET['returnurl'];
        if(array_key_exists("role",$_GET))
            $role=$_GET['role'];
        if(array_key_exists("password",$_POST))
            $password=$_POST['password'];
        if(array_key_exists("email",$_POST))
            $email=$_POST['email'];
            
        $token=$doc->login($email, $password, $role);
       
        if($token!=null){
            // $_SESSION["token"] = $token; 
            setcookie("token", $token, time()+600000000, '/');
           return  redirect()->route($_SESSION['URL']);        
        }
        else if($role!="")
            return redirect("/admin/login");
        return redirect("/?status=fail&email=" . $email);
    }

    public function setCookie($token){
        $reponse=new Response;
        $reponse->withCookie("token2", $token, 10);
        return $reponse;
    }

    public function getHeader(){
        $headers = apache_request_headers();
        // echo ($headers['Authorization']);
        list($header, $payload) = explode(" ", $headers['Authorization']);
        if(verifyJWT($payload))
            return "true";
        return "false";
    
        // foreach($headers as $key=>$value){
        //     echo $key . "         -           " . $value . "</br>";
        // }
    }

    function cast_to_model($input) {
        $obj = new $this->model($input);
        return $obj;
    }
}
