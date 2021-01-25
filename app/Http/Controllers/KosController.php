<?php

namespace App\Http\Controllers;

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
            'no_hp' => 'required',
        ]);

        Kos::create([
            'nama' => $request->nama,
            'id_lokasi' => $request->id_lokasi,
            'deskripsi' => $request->deskripsi,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/admin/kos');
    }

    public function show(Kos $kos)
    {
        return response()->json($kos);
    }

    public function edit(Kos $kos)
    {
        return view('kos.edit',['kos'=>$kos]);
    }

    public function update(Request $request, Kos $kos)
    {
    }

    public function destroy(Kos $kos)
    {
        $kos->delete();
    }

    public function kamar(Kos $kos)
    {
        $kamar = Kamar::where('kos_id', $kos->id)->latest()->paginate(5);
        return view('kos.kamar', ['kamar' => $kamar, 'id' => $kos->id]);
    }
}
