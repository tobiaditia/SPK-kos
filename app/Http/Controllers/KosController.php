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
    }

    public function show(Kos $kos)
    {
        dd($kos->id);
        return view('kos.show');
    }

    public function edit(Kos $kos)
    {
        dd($kos->id);
        return view('kos.edit');
    }

    public function update(Request $request, Kos $kos)
    {
    }

    public function destroy(Kos $kos)
    {
    }

    public function kamar(Kos $kos)
    {
        $kamar = Kamar::where('kos_id', $kos->id)->latest()->paginate(5);
        return view('kos.kamar', ['kamar' => $kamar, 'id' => $kos->id]);
    }
}
