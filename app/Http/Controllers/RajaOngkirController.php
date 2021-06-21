<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Province;
use Illuminate\Support\Facades\DB;
use App\City;
use App\Courier;
use App\BiayaPengiriman;
use App\JenisPengiriman;

class RajaOngkirController extends Controller
{

    public function getCity($id) {
        // dd($id);

        $response = Http::withHeaders([
            'key' => 'e4dd6ae85f21c3e8a0ec8e2661b0f592'
        ])->get('https://api.rajaongkir.com/starter/city?&province='.$id.'');

        $data = $response['rajaongkir']['results'];

        $jml_data = count($data);

        for($a = 0; $a<$jml_data; $a++) {
            $city = new City;
            $city->city_id = $data[$a]['city_id'];
            $city->province_id = $data[$a]['province_id'];
            $city->province = $data[$a]['province'];
            $city->type = $data[$a]['type'];
            $city->city_name = $data[$a]['city_name'];
            $city->postal_code = $data[$a]['postal_code'];
            $city->save();
        }

        return redirect('/city/'.$id)->with('success', 'Data Berhasil Diperbarui');
    }

    public function checkOngkir(Request $request) {
        // dd($request->courier);

        $response = Http::withHeaders([
            'key' => 'e4dd6ae85f21c3e8a0ec8e2661b0f592'
            
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $request->origin,
            'destination' => $request->destination,
            "weight" => $request->weight,
            "courier" => $request->courier
        ]);

        $data = ($response['rajaongkir']['results']);

        foreach($data as $item) {
            $courier = new Courier();
            $courier->code = $item['code'];
            $courier->name = $item['name'];
            $courier->save();

            foreach($item['costs'] as $value) {
                $jenisPengiriman = new JenisPengiriman();
                $jenisPengiriman->courier_id = $courier->courier_id;
                $jenisPengiriman->service = $value['service'];
                $jenisPengiriman->description = $value['description'];
                $jenisPengiriman->save();

                foreach($value['cost'] as $nilai) {

                    $biayaPengiriman = new BiayaPengiriman();
                    $biayaPengiriman->jenis_pengiriman_id = $jenisPengiriman->jenis_pengiriman_id;
                    $biayaPengiriman->harga = $nilai['value'];
                    $biayaPengiriman->estimasi = $nilai['etd'];
                    $biayaPengiriman->save();
                }
            }
        }

        return redirect('/')->with('success', 'Data Berhasil Diperbarui');
    }

    public function getProvince() {

        $province = DB::table('province')->delete();

        $data = Province::all();

        $response = Http::withHeaders([
            'key' => 'e4dd6ae85f21c3e8a0ec8e2661b0f592'
            
        ])->get('https://api.rajaongkir.com/starter/province');
        
        $data = $response['rajaongkir']['results'];
        
        $jml_data = count($data);

        for($a = 0; $a<$jml_data; $a++) {
            $province = new Province;
            $province->province_id = $data[$a]['province_id'];
            $province->province = $data[$a]['province'];

            $province->save();
        }

        return redirect('/')->with('success', 'Data Berhasil Diperbarui');
    }
}
