<?php

namespace App\Http\Controllers;

use App\Kamar;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function search(Request $request)
    {
        $where = [];
        $lokasi = null;
        $fasilitas = null;

        if ($request->query('fasilitas')) {
            $fasilitas = $request->query('fasilitas');
        }


        if ($request->query('lokasi')) {
            $lokasi = ['id_lokasi' => $request->query('lokasi')];
        }

        if ($request->query('kapasitas')) {
            $where['kapasitas'] = $request->query('kapasitas');
        }

        if ($request->query('harga_min')) {
            $where[] = ['harga', '>=', $request->query('harga_min')];
        }

        if ($request->query('harga_max')) {
            $where[] = ['harga', '<=', $request->query('harga_max')];
        }

        if ($request->query('pembayaran')) {
            $where['pembayaran'] = $request->query('pembayaran');
        }

        $data = Kamar::with('kos', 'fasilitas');
        if (!empty($lokasi)) {
            $data->orWhereHas('kos', function ($q) use ($lokasi) {
                $q->where($lokasi);
            });
        };
        if (!empty($fasilitas)) {
            $data->orWhereHas('fasilitas', function ($q) use ($fasilitas) {
                $q->where('fasilitas.id', $fasilitas);
            });
        }
        $data->where($where);
        $data2 = $data->get();

        return ['jumlah' => count($data2), 'data' => $data2];
    }
}
