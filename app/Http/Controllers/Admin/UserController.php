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
    private $options = [
        'cost' => 10
    ];
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
    public function addUser(Request $request){
        // return "fsd";
        $staffusernameadd = $request->input('staffusernameAdd');
        $stafffullnameadd = $request->input('stafffullnameAdd');
        $ArrayUsername = DB::table('users')
            ->select('name')
            ->get();
    
        // info(array_search($staffusernameadd,$ArrayUsername));
        $staffpasswordadd = $request->input('staffpasswordAdd');
        // $hashPassword = Hash::make($staffpasswordadd);
        $hashPassword = password_hash($staffpasswordadd, PASSWORD_BCRYPT, $this->options);
        $staffaddressadd = $request->input('staffaddressAdd'); //
        $staffemailadd = $request->input('staffemailAdd'); //
        $staffdobadd = $request->input('staffdobAdd'); //
        $created_atStaffAdd = now();
        $updated_atStaffAdd = now();
        $staffroleAdd = $request->get('rolestaff');
        // info($request->has('staffaddressAdd'));
        // info(empty($staffaddressadd));
        $insertValues =
            [
            'name' => $staffusernameadd,
            // 'fullname' => $stafffullnameadd,
            'password' => $hashPassword,
            'role' => $staffroleAdd,
            'created_at' => $created_atStaffAdd,
            'updated_at' => $updated_atStaffAdd,
        ];
    
        // insert image if available
        // if ($request->hasFile('imagestaffAdd')) {
        //     $imageStaffAdd = $request->file('imagestaffAdd');
        //     $newURLStaffAdd = UploadFile::uploadFile('upload', $imageStaffAdd);
        //     $insertValues['image'] = $newURLStaffAdd;
        // }
        $hasFile = $request->hasFile('imagestaffAdd');
        if ($hasFile) {
            
            $file = $request->file('imagestaffAdd');
            $newImageURL = $file -> move("assets\images\staff", rand(). ".png");
            $insertValues['image'] = $newImageURL;
        }
    
        // insert address if not null
        if (empty($staffaddressadd) != 1) {
            $insertValues['address'] = $staffaddressadd;
        }
    
        // insert email if not null
        if (empty($staffemailadd) != 1) {
            $insertValues['email'] = $staffemailadd;
        }
    
        // insert dob if not null
        if (empty($staffdobadd) != 1) {
            $insertValues['dob'] = $staffdobadd;
        }
    
        DB::table('users')->insert(
            $insertValues
        );
        return redirect('/admin/manageStaff');
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
