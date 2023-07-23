<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Daftarbuku;
use Illuminate\Http\Request;

class DaftarbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $daftarbuku = Buku::all();
        return view('buku.index', compact('daftarbuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->kategori = $request->kategori;
        $buku->save();

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftarbuku $daftarbuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftarbuku $daftarbuku)
    {

        return view('daftarbuku.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftarbuku $daftarbuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftarbuku $daftarbuku)
    {
        //
    }
}
