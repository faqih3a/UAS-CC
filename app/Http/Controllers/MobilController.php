<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Merk;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::all();
        $merk = Merk::all();
        return view('admin.mobil.index', compact('mobil', 'merk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merk = Merk::all();
        return view('admin.mobil.create', compact('merk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:20',
            'no_polisi' => 'required | string',
            'warna' => 'required | string',
            'cc' => 'required|integer',
            'harga_sewa' => 'required|integer',
            'merk_id' => 'required|integer',
            'gambar' => 'required|string',
    ]);
        //mengirim data ke model
        Mobil::create($validatedData);
        return redirect('/dashboard/mobil')->with('success', 'Data berhasil di buat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = Mobil::find($id);
        return view('admin.mobil.show',[
            'mobil' => $mobil
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //mencari data berdasarkan id
        $mobil = Mobil::find($id);
        $merk = Merk::all();
        return view('admin.mobil.edit', compact('mobil', 'merk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mencari data berdasarkan id
        $mobil = Mobil::find($id);

        //validasi form input
        $validatedData = $request->validate([
           'nama' => 'required|min:5|max:20',
           'no_polisi' => 'required',
           'warna' => 'required',
           'cc' => 'required',
           'harga_sewa' => 'required|integer',
           'merk_id' => 'integer',
           'gambar' => 'string',
        ]);
        //update data
        $mobil->update($validatedData);
        return redirect('/dashboard/mobil')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //mencari data berdasarkan id
         $mobil = Mobil::find($id);
         $mobil->delete();
         return redirect('/dashboard/mobil')->with('success', 'Data berhasil di update');
    }
}
