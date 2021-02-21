<?php

namespace App\Http\Controllers;

use App\AdministrativeArea;
use App\Kamar;
use App\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{

    public function index()
    {
        $kos = Kos::latest()->paginate(5);
        return view('kos.index', compact('kos'));
    }

    public function create()
    {
        return view('kos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_lokasi' => 'required',
            'deskripsi' => 'required',
            'no_hp' => 'required'
        ]);

        if (empty($request->gambar)) {
            $imageName = 'sampul_kos.jpg';
        } else {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/kos'), $imageName);
        }

        Kos::create([
            'nama' => $request->nama,
            'id_lokasi' => $request->id_lokasi,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/admin/kos')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function show(Kos $kos)
    {
        $kos->area = [
            'kabupaten' => AdministrativeArea::where('area_code', substr($kos->id_lokasi, 0, 4) . '000000')->first()->area_name,
            'kecamatan' => AdministrativeArea::where('area_code', substr($kos->id_lokasi, 0, 6) . '0000')->first()->area_name,
            'kelurahan' => AdministrativeArea::where('area_code', $kos->id_lokasi)->first()->area_name,
        ];
        return response()->json($kos);
    }

    public function edit(Kos $kos)
    {
        return view('kos.edit', ['kos' => $kos]);
    }

    public function update(Request $request, Kos $kos)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'no_hp' => 'required'
        ]);

        if (empty($request->gambar)) {
            $imageName = $kos->gambar;
        } else {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/kos'), $imageName);
        }

        $kos->update([
            'nama' => $request->nama,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/admin/kos')->with(['success' => 'Data berhasil diedit']);
    }

    public function destroy(Kos $kos)
    {
        $namakos = $kos->nama;
        $kos->delete();
        return redirect('/admin/kos')->with(['success' => 'Data ' . $namakos . ' berhasil dihapus']);
    }

    public function kamar(Kos $kos)
    {
        $kamar = Kamar::with('kos')->where('kos_id', $kos->id)->latest()->paginate(5);
        return view('kos.kamar', ['kamar' => $kamar, 'id' => $kos->id, 'nama_kos' => $kos->nama]);
    }
}
