<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Mobil;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sewa = Sewa::all();
        return view('admin.sewa.index', [
            'sewa' => $sewa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobil = Mobil::all();
        return view('sewa', compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'tujuan' => 'required',
            'mobil_id' => 'required',
            'nama_customer' => 'required',
            'no_ktp' => 'required|integer',
        ]);
        Sewa::create($validatedData);
        return redirect('/sewa')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sewa = Sewa::find($id);
        return view('admin.sewa.show',[
            'sewa' => $sewa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sewa = Sewa::find($id);
        return view('admin.sewa.edit',[
            'sewa' => $sewa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'tujuan' => 'required',
            'mobil_id' => 'required',
            'nama_customer' => 'required',
            'no_ktp' => 'required|integer',
    ]);
        Sewa::where('id', $id)->update($validatedData);
        return redirect('/dashboard/sewa')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sewa::destroy($id);
        return redirect('/dashboard/sewa')->with('success', 'Data berhasil dihapus');
    }
}
