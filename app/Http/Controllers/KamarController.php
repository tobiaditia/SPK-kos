<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use App\FasilitasKamar;
use App\Kamar;
use App\Kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{

    public function create(Kos $kos)
    {
        $fasilitas = Fasilitas::get();
        return view('kamar.create', ['kos' => $kos, 'fasilitas' => $fasilitas]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required',
            'pembayaran' => 'required',
        ]);
        
        DB::beginTransaction();
        try {
            $kamar = Kamar::create([
                'kos_id' => $request->kos_id,
                'nama' => $request->nama,
                'kapasitas' => $request->kapasitas,
                'harga' => $request->harga,
                'pembayaran' => $request->pembayaran,
            ])->id;

            Kamar::findOrFail($kamar)->fasilitas()->attach($request->fasilitas);

            DB::commit();

            return redirect('/admin/kos/' . $request->kos_id . '/kamar');
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }

    public function show(Kos $kos, Kamar $kamar)
    {
        return Kamar::with('kos','fasilitas')->findOrFail($kamar->id);
    }

    public function edit(Kos $kos, Kamar $kamar)
    {
        $fasilitas = Fasilitas::get();
        $has_fasilitas = $kamar->fasilitas()->pluck('fasilitas_id')->toArray();
        return view('kamar.edit', [
            'kos' => $kos,
            'kamar' => Kamar::with('fasilitas')->findOrFail($kamar->id),
            'fasilitas' => $fasilitas,
            'has_fasilitas' => $has_fasilitas
        ]);
        
    }

    public function update(Request $request, Kos $kos, Kamar $kamar)
    {

        $request->validate([
            'nama' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required',
            'pembayaran' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $kamar->update([
                'kos_id' => $request->kos_id,
                'nama' => $request->nama,
                'kapasitas' => $request->kapasitas,
                'harga' => $request->harga,
                'pembayaran' => $request->pembayaran,
            ]);

            $kamar->fasilitas()->sync($request->fasilitas);

            DB::commit();

            return redirect('/admin/kos/' . $kos->id . '/kamar');
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }

    public function destroy(Kos $kos, Kamar $kamar)
    {
        $kamar = Kamar::findOrFail($kamar->id);
        if (count($kamar->fasilitas) != 0) {
            $kamar->fasilitas()->detach();
        }
        $kamar->delete();

        return redirect('/admin/kos/' . $kos->id . '/kamar');
    }
}
