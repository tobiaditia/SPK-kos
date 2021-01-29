<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrativeAreaController extends Controller
{
    public function getKecamatan($id_kab)
    {
        if (empty($id_kab)) {
        } else {
            $parent_code = DB::table("v_kecamatan")
                ->select("provinsi_code", "kabupatenkota_code")
                ->where("kabupatenkota_code", $id_kab)
                ->first();

            $data = DB::table("v_kecamatan")
                ->select("kecamatan_code", "kecamatan_name")
                ->where("kabupatenkota_code", $id_kab)
                ->get();
                
            return [
                'parent_code' => $parent_code->provinsi_code.$parent_code->kabupatenkota_code, 
                'data' => $data
            ];
        }
    }

    public function getKelurahan($id_kab, $id_kec)
    {
        if (empty($id_kec)) {
        } else {
            $parent_code = DB::table("v_kecamatan")
                ->select("provinsi_code", "kabupatenkota_code","kecamatan_code")
                ->where("kabupatenkota_code", $id_kab)
                ->where("kecamatan_code", $id_kec)
                ->first();

            $data = DB::table("v_kelurahan")
                ->select("area_code", "kelurahan_code", "kelurahan_name")
                ->where("kabupatenkota_code", $id_kab)
                ->where("kecamatan_code", $id_kec)
                ->get();

                return [
                    'parent_code' => $parent_code->provinsi_code.$parent_code->kabupatenkota_code.$parent_code->kecamatan_code, 
                    'data' => $data
                ];
        }
    }
}
