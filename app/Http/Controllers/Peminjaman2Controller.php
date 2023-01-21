<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman2;
use Illuminate\Http\Request;

class Peminjaman2Controller extends Controller
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
        //
        $peminjaman2 = Peminjaman2::all();
        return view('peminjaman2.index', compact('peminjaman2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peminjaman2.create');
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
            'fakultas' => 'required',
            'jurusan' => 'required',
            'tujuan' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
        ]);

        $peminjaman2 = new peminjaman2();
        $peminjaman2->tanggal = $request->tanggal;
        $peminjaman2->nama = $request->nama;
        $peminjaman2->fakultas = $request->fakultas;
        $peminjaman2->jurusan = $request->jurusan;
        $peminjaman2->tujuan = $request->tujuan;
        $peminjaman2->waktu_mulai = $request->waktu_mulai;
        $peminjaman2->waktu_selesai = $request->waktu_selesai;
        $peminjaman2->save();
        return redirect()->route('peminjaman2.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $peminjaman2 = peminjaman2::findOrFail($id);
        return view('peminjaman2.show', compact('peminjaman2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $peminjaman2 = peminjaman2::findOrFail($id);
        return view('peminjaman2.edit', compact('peminjaman2'));
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
        //
        $validated = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'tujuan' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
        ]);
        
        $peminjaman2 = new peminjaman2();
        $peminjaman2->tanggal = $request->tanggal;
        $peminjaman2->nama = $request->nama;
        $peminjaman2->fakultas = $request->fakultas;
        $peminjaman2->jurusan = $request->jurusan;
        $peminjaman2->tujuan = $request->tujuan;
        $peminjaman2->waktu_mulai = $request->waktu_mulai;
        $peminjaman2->waktu_selesai = $request->waktu_selesai;
        $peminjaman2->save();
        return redirect()->route('peminjaman2.index')
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
        //
        $peminjaman2 = peminjaman2::findOrFail($id);
        $peminjaman2->delete();
        return redirect()->route('peminjaman2.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
