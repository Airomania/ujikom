@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Peminjaman
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal" value="{{ $peminjaman->tanggal }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $peminjaman->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control " name="nim" value="{{ $peminjaman->nim }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <input type="text" class="form-control " name="tujuan" value="{{ $peminjaman->tujuan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">no_hp</label>
                            <input type="text" class="form-control " name="no_hp" value="{{ $peminjaman->no_hp }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">waktu</label>
                            <input type="text" class="form-control " name="waktu" value="{{ $peminjaman->waktu }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">no_pc</label>
                            <input type="text" class="form-control " name="no_pc" value="{{ $peminjaman->no_pc }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('peminjaman.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection