<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;

class ViewController extends Controller
{
    
    public function index() {

        $province = Province::all();

        return view('index', ['data' =>$province]);
    }

    public function city($id) {
        // dd($id);

        $countCity = City::where('province_id', $id)->count();

        // dd($countCity);

        if($countCity > 0) {

            $city = City::all();

            return view('city', ['data' =>$city]); 
        } else {
            return redirect('/getCity/'.$id);
        }


               
    }

    public function viewCekOngkir() {

        return view('cek-harga');
    }
}
