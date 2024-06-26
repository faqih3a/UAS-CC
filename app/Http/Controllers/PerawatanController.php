<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perawatan;
use App\Models\Mobil;
use App\Models\Jenis_Perawatan;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perawatan = Perawatan::all();
        $mobil = Mobil::all();
        $jenis_perawatan = Jenis_Perawatan::all();
        return view('admin.perawatan.index',compact('perawatan','mobil','jenis_perawatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobil = Mobil::all();
        $jenis_perawatan = Jenis_Perawatan::all();
        return view('admin.perawatan.create', compact('mobil','jenis_perawatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'km_mobil' => 'required|integer',
            'biaya' => 'required|integer',
            'mobil_id' => 'required',
            'jenis_perawatan_id' => 'required',
    ]);
        //mengirim data ke model
        Perawatan::create($validatedData);
        return redirect('/dashboard/perawatan')->with('success', 'Data berhasil di update');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perawatan = Perawatan::find($id);
        return view('admin.perawatan.show',[
            'perawatan' => $perawatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perawatan = Perawatan::find($id);
        $mobil = Mobil::all();
        $jenis_perawatan = Jenis_Perawatan::all();
        return view('admin.perawatan.edit',[
            'perawatan' => $perawatan,
            'mobil' => $mobil,
            'jenis_perawatan' => $jenis_perawatan
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'km_mobil' => 'required|integer',
            'biaya' => 'required|integer',
            'mobil_id' => 'required',
            'jenis_perawatan_id' => 'required',
    ]);
        //mengirim data ke model
        Perawatan::create($validatedData);
        return redirect('/dashboard/perawatan')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Perawatan::destroy($id);
        return redirect('/dashboard/perawatan')->with('success', 'Data berhasil dihapus');
    }
}
