<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Manual;
use App\CustomerManual;

class ManualController extends Controller
{
    public function validateEmail(Request $request){
        $customer = Customer::where('email', $request->input('email'))->first();
        if($customer){
            if(($old = Customer::where('session_id', $request->session()->getId())->first()) != null){
                $old->session_id = null;
                $old->save();
            }
            $customer->session_id = $request->session()->getId();
            $customer->save();
            return redirect('/instrukcje');
        }
    }

    public function manuals(Request $request){
        $customer = Customer::where('session_id', $request->session()->getId())->first();
        $manuals = $customer->getManuals();
        return view('front.manuals', ['manuals' => $manuals]);
    }

    public function manual(Request $request, $id, $slug){
        //
    }
}
