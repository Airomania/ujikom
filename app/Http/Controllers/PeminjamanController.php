<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model peminjaman
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'nim' => 'required|unique:peminjamans|max:255',
            'tujuan' => 'required',
            'no_hp' => 'required',
            'waktu' => 'required',
            'no_pc' => 'required',
        ]);

        $peminjaman = new peminjaman();
        $peminjaman->tanggal = $request->tanggal;
        $peminjaman->nama = $request->nama;
        $peminjaman->nim = $request->nim;
        $peminjaman->tujuan = $request->tujuan;
        $peminjaman->no_hp = $request->no_hp;
        $peminjaman->waktu = $request->waktu;
        $peminjaman->no_pc = $request->no_pc;
        $peminjaman->save();
        return back()
            ->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([

            'tanggal' => 'required',
            'nama' => 'required',
            'nim' => 'required|unique:peminjamans|max:255',
            'tujuan' => 'required',
            'no_hp' => 'required',
            'waktu' => 'required',
            'no_pc' => 'required',
        ]);

        $peminjaman = new peminjaman();
        $peminjaman->tanggal = $request->tanggal;
        $peminjaman->nama = $request->nama;
        $peminjaman->nim = $request->nim;
        $peminjaman->tujuan = $request->tujuan;
        $peminjaman->no_hp = $request->no_hp;
        $peminjaman->waktu = $request->waktu;
        $peminjaman->no_pc = $request->no_pc;
        $peminjaman->save();
        return redirect()->route('peminjaman.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}