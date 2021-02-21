<?php

namespace App\Http\Controllers;

use App\AdministrativeArea;
use App\Fasilitas;
use App\Kamar;
use App\Kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::get();
        $kabkota = DB::table('v_kabkota')->get();
        $kamar = Kamar::with('kos', 'fasilitas')->limit(6)->get();
        return view('public.index', [
            'fasilitas' => $fasilitas,
            'kabkota' => $kabkota,
            'kamar' => $kamar
        ]);
    }

    public function search(Request $request)
    {
        // dd($request);
        $where = [];
        $lokasi = null;
        $fasilitas = null;

        if ($request->query('fasilitas')) {
            $fasilitas = $request->query('fasilitas');
        }

        if ($request->query('lokasi')) {
            if (strlen($request->query('lokasi')) == 4 || substr($request->query('lokasi'), -6) == '000000') {
                $cek = 'use_like';
                $lokasi = $request->query('lokasi');
            } elseif (strlen($request->query('lokasi')) == 6 || substr($request->query('lokasi'), -4) == '0000') {
                $cek = 'use_like';
                $lokasi = $request->query('lokasi');
            } else {
                $cek = 'use_where';
                $lokasi = ['id_lokasi' => $request->query('lokasi')];
            }
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
            $data->orWhereHas('kos', function ($q) use ($lokasi, $cek) {
                if ($cek == 'use_like') {
                    $q->where('id_lokasi', 'like', '%' . $lokasi . '%');
                } elseif ($cek == 'use_where') {
                    $q->where($lokasi);
                }
            });
        };
        if (!empty($fasilitas)) {
            return $fasilitas;
            die();
            $data->orWhereHas('fasilitas', function ($q) use ($fasilitas) {
                $q->whereIn('fasilitas.id', $fasilitas);
            });
        }
        $data->where($where);
        $data2 = $data->paginate(8);
        // return $data2;
        return view('public.result', [
            'search' => [
                'lokasi' => $request->query('lokasi'),
                'kapasitas' => $request->query('kapasitas'),
                'harga_min' => $request->query('harga_min'),
                'harga_max' => $request->query('harga_max'),
                'fasilitas' => $request->query('fasilitas'),
                'pembayaran' => $request->query('pembayaran'),
            ],
            'jumlah' => count($data2),
            'fasilitas' => ($fasilitas) ? Fasilitas::whereIn('id', $fasilitas)->get() : null,
            'data' => $data2
        ]);
    }

    public function searchKos(Request $request)
    {
        $cari = $request->query('kos');
        $data = Kos::where('nama', 'like', '%' . $cari . '%')->paginate(8);

        return view('public.result_kos', [
            'data' => $data
        ]);
    }

    public function kamar($id)
    {
        $kamar = Kamar::with('kos', 'fasilitas')->find($id);
        return view('public.kamar', compact('kamar'));
    }

    public function kos($id)
    {
        $kos = Kos::with('kamar', 'administrative_area')->find($id);
        $area = [
            'kabupaten' => AdministrativeArea::where('area_code', substr($kos->id_lokasi, 0, 4) . '000000')->first()->area_name,
            'kecamatan' => AdministrativeArea::where('area_code', substr($kos->id_lokasi, 0, 6) . '0000')->first()->area_name,
            'kelurahan' => AdministrativeArea::where('area_code', $kos->id_lokasi)->first()->area_name,
        ];
        // return $area;
        return view('public.kos', compact('kos', 'area'));
    }
}
