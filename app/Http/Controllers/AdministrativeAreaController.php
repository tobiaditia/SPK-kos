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
            $data = DB::table("v_kecamatan")
                ->select("kecamatan_code", "kecamatan_name")
                ->where("kabupatenkota_code", $id_kab)
                ->get();
            return $data;
        }
    }

    public function getKelurahan($id_kab, $id_kec)
    {
        if (empty($id_kec)) {
        } else {
            $data = DB::table("v_kelurahan")
                ->select("area_code", "kelurahan_code", "kelurahan_name")
                ->where("kabupatenkota_code", $id_kab)
                ->where("kecamatan_code", $id_kec)
                ->get();
            return $data;
        }
    }
}
