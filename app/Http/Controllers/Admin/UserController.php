<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UserController extends Controller
{
    public function __construct()
    {
      
        $this->middleware('myauth');
        // $this->user = Auth::user();
    }
    public function getUserInfo($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->get();

        return $user;
    }

    public function deleteUser($id){
        DB::table('users')
            ->where('id', '=', $id)
            ->delete();

        return 1;
    }

    public function updateUser(Request $req, $id)
    {
        // extract data from input
        $username = $req->input(('username'));
        $fullname = $req->input(('fullname'));
        $email = $req->input(('email'));
        $role = $req->input(('role'));
        $dob = $req->input(('dob'));
        $dob = str_replace('-', '/', $dob);
        $address = $req->input(('address'));
        $dob = Carbon::parse($dob)->format('Y/m/d');

        $updateArr = [
            'address' => $address,
            'name' => $username,
            'email' => $email,
            'role' => $role,
            'dob' => $dob
        ];
        // return $updateArr;
        // process file
        $hasFile = $req->hasFile('file');
        if ($hasFile) {
            
            $file = $req->file('file');
            $newImageURL = $file -> move("assets\images\staff", rand(). ".png");
            $updateArr['image'] = $newImageURL;
        }

        DB::table('users')

            ->where('id', $id)
            ->update(
                $updateArr
            );
        return 1;
    }
}
