<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Manual;
use App\CustomerManual;

class Customer extends Model
{
    protected $fillable = [
        'email', 'session_id'
    ];

    public function getManuals(){
        $customerManuals = CustomerManual::where('customer_id', $this->id)->get();
        $manuals = [];
        foreach($customerManuals as $customerManual){
            $manuals[] = Manual::find($customerManual->manual_id);
        }
        return $manuals;
    }
}
