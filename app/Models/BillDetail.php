<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    public function __construct () {
        parent::__construct();

        $this->table = "bill_detail";
        $this->fillable = array_merge($this->fillable, array(
            "bill_id",
            "product_id",
            "quantity"
        ));
    }

    public static function createBillDetail($data, $bill_id){
        foreach($data as $obj){
            $bill = new BillDetail;
            $bill->bill_id = $bill_id;
            $bill->product_id = $obj->product_id;
            $bill->quantity = $obj->quantity;
            $bill -> save();
        }
    }
    public function before_create(BaseModel &$doc) {

    }
    public function before_update(BaseModel &$new_doc, BaseModel &$old_doc) {
        
    }
}
