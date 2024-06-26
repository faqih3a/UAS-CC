<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Perawatan;

class Jenis_PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_perawatan = Jenis_Perawatan::all();
        return view('admin.jenis_perawatan.index', [
            'jenis_perawatan' => $jenis_perawatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis_perawatan.create');
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
        Jenis_Perawatan::create($validatedData);
        return redirect('/dashboard/jenis_perawatan')->with('success', 'Data berhasil di update');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis_perawatan = Jenis_Perawatan::find($id);
        return view('admin.jenis_perawatan.show',[
            'jenis_perawatan' => $jenis_perawatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis_perawatan = Jenis_Perawatan::find($id);
        return view('admin.jenis_perawatan.edit',[
            'jenis_perawatan' => $jenis_perawatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:20',
    ]);
        Jenis_Perawatan::where('id', $id)->update($validatedData);
        return redirect('/dashboard/jenis_perawatan')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jenis_Perawatan::destroy($id);
        return redirect('/dashboard/jenis_perawatan')->with('success', 'Data berhasil dihapus');
    }
}
