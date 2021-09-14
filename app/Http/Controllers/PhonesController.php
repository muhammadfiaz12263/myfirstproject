<?php

namespace App\Http\Controllers;

use App\Models\Phones;

use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index(){
        $phones = Phones::orderBy('id','desc')->get();
        return view('phones.phones',[
            "phones" => $phones
        ]);
    }
    public function owner($number){
        // return $number;
        $phone = Phones::where('number', $number)->first();
        if( $phone ){
            $owner = $phone->owner;
            return view('phones.owner', [
                "owner" => $owner
            ]);
        }
        // return $phone;
        // dd ($phone);
    }
}
