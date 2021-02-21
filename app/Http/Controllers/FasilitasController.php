<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{

    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(5);
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Fasilitas::create([
            'nama' => $request->nama,
        ]);

        return redirect('/admin/fasilitas')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function show($id)
    {
        //
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('fasilitas.edit', [
            'fasilitas' => $fasilitas,
        ]);
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $fasilitas->update([
            'nama' => $request->nama,
        ]);

        return redirect('/admin/fasilitas')->with(['success' => 'Data berhasil diedit']);
    }

    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas = Fasilitas::findOrFail($fasilitas->id);
        if (count($fasilitas->kamar) != 0) {
            $fasilitas->kamar()->detach();
        }
        $fasilitas->delete();

        return redirect('/admin/fasilitas')->with(['success' => 'Data berhasil dihapus']);
    }
}
