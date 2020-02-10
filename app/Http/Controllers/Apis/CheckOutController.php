<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;

class CheckOutController extends ApiController
{
    public function create(Request $request){
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $len =  (int)count($data);
    
        $total= $data[$len-4]->total;
        $user_id = $data[$len-3]->user_id;
        $phone = $data[$len-2]->phone;
        $address =$data[$len-1]->address;
        
        unset($data[$len-4]);
        unset($data[$len-3]);
        unset($data[$len-2]);
        unset($data[$len-1]);


        $bill_id = Bill::insertBill((int)$user_id, (float)$total, $phone, $address);
        BillDetail::createBillDetail($data, $bill_id);
        return 1;
    }
    function cast_to_model($input) {
        $obj = new $this->model();
        return $obj;
    }
    public function getDetail($id) {
        return response()->json($this->model::getSingle($id));


    }

}
