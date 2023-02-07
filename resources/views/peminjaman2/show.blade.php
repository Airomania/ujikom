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
                            <input type="text" class="form-control" name="tanggal" value="{{ $peminjaman2->tanggal }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $peminjaman2->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">fakultas</label>
                            <input type="text" class="form-control " name="fakultas" value="{{ $peminjaman2->fakultas }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">jurusan</label>
                            <input type="text" class="form-control " name="jurusan" value="{{ $peminjaman2->jurusan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <input type="text" class="form-control " name="tujuan" value="{{ $peminjaman2->tujuan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Waktu Mulai</label>
                            <input type="text" class="form-control " name="waktu_mulai" value="{{ $peminjaman2->waktu_mulai }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">waktu_selesai</label>
                            <input type="text" class="form-control " name="waktu_selesai" value="{{ $peminjaman2->waktu_selesai }}" readonly>
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