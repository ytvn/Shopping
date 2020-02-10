<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bill extends Model
{
    public function __construct () {
        parent::__construct();

        $this->table = "bill";
        $this->fillable = array_merge($this->fillable, array(
            "bill_id",
            "user_id",
            "total"
        ));
    }

    public static function insertBill( $user_id, $total, $phone, $address){
        $bill = new Bill;
        $bill->user_id = $user_id;
        $bill->total = $total;
        $bill->number = $phone;
        $bill->address = $address;
        $bill->save();
        return ($bill->id);
    }
    public function before_create(BaseModel &$doc) {

    }
    public function before_update(BaseModel &$new_doc, BaseModel &$old_doc) {
        
    }
}
