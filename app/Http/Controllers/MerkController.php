<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merk = Merk::all();
        return view('admin.merk.index', [
            'merk' => $merk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.merk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:20',
    ]);
        //mengirim data ke model
        Merk::create($validatedData);
        return redirect('/dashboard/merk')->with('success', 'Data berhasil di update');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merk = Merk::find($id);
        return view('admin.merk.show',[
            'merk' => $merk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merk = Merk::find($id);
        return view('admin.merk.edit',[
            'merk' => $merk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mencari data berdasarkan id
        $merk = Merk::find($id);

        //validasi form input
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:20',
        ]);
        //update data
        $merk->update($validatedData);
        return redirect('/dashboard/merk')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Merk::destroy($id);
        return redirect('/dashboard/merk')->with('success', 'Data berhasil dihapus');
    }
}
