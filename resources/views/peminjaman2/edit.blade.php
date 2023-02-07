@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data peminjaman
                    </div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman2.update', $peminjaman2->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ $peminjaman2->tanggal }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ $peminjaman2->nama }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fakultas</label>
                                <select class="form-select @error('fakultas') is-invalid @enderror" name="fakultas">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Ushuluddin" {{ $peminjaman2->fakultas == 'Ushuluddin' ? 'selected' : '' }}>Ushuluddin</option>
                                    <option value="Tarbiyah dan Keguruan" {{ $peminjaman2->fakultas == 'Tarbiyah dan Keguruan' ? 'selected' : '' }}>Tarbiyah dan Keguruan</option>
                                    <option value="Syariah dan Hukum" {{ $peminjaman2->fakultas == 'Syariah dan Hukum' ? 'selected' : '' }}>Syariah dan Hukum</option>
                                    <option value="Dakwah dan Komunikasi" {{ $peminjaman2->fakultas == 'Dakwah dan Komunikasi' ? 'selected' : '' }}>Dakwah dan Komunikasi</option>
                                    <option value="Adab dan Humaniora" {{ $peminjaman2->fakultas == 'Adab dan Humaniora' ? 'selected' : '' }}>Adab dan Humaniora</option>
                                    <option value="Psikologi" {{ $peminjaman2->fakultas == 'Psikologi' ? 'selected' : '' }}>Psikologi</option>
                                    <option value="Sains dan Teknologi" {{ $peminjaman2->fakultas == 'Sains dan Teknologi' ? 'selected' : '' }}>Sains dan Teknologi</option>
                                    <option value="Ilmu Sosial dan Ilmu Politik" {{ $peminjaman2->fakultas == 'Ilmu Sosial dan Ilmu Politik' ? 'selected' : '' }}>Ilmu Sosial dan Ilmu Politik</option>
                                </select>
                                @error('fakultas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">jurusan</label>
                                <select class="form-select @error('jurusan') is-invalid @enderror" name="jurusan">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Ilmu Hukum" {{ $peminjaman2->jurusan == 'Ilmu Hukum' ? 'selected' : '' }}>Ilmu Hukum</option>
                                    <option value="Ilmu Agama Islam" {{ $peminjaman2->jurusan == 'Ilmu Agama Islam' ? 'selected' : '' }}>Ilmu Agama Islam</option>
                                    <option value="Pendidikan Bahasa Inggris" {{ $peminjaman2->jurusan == 'Pendidikan Bahasa Inggris' ? 'selected' : '' }}>Pendidikan Bahasa Inggris</option>
                                    <option value="Pendidikan Matematika" {{ $peminjaman2->jurusan == 'Pendidikan Matematika' ? 'selected' : '' }}>Pendidikan Matematika</option>
                                    <option value="Pendidikan Guru Sekolah Dasar" {{ $peminjaman2->jurusan == 'Pendidikan Guru Sekolah Dasar' ? 'selected' : '' }}>Pendidikan Guru Sekolah Dasar</option>
                                    <option value="Keguruan & Pendidikan" {{ $peminjaman2->jurusan == 'Keguruan & Pendidikan' ? 'selected' : '' }}>Keguruan & Pendidikan</option>
                                    <option value="Manajemen Pendidikan" {{ $peminjaman2->jurusan == 'Manajemen Pendidikan' ? 'selected' : '' }}>Manajemen Pendidikan</option>
                                    <option value="Fisika" {{ $peminjaman2->jurusan == 'Fisika' ? 'selected' : '' }}>Fisika</option>
                                    <option value="Kimia" {{ $peminjaman2->jurusan == 'kimia' ? 'selected' : '' }}>kimia</option>
                                    <option value="Biologi" {{ $peminjaman2->jurusan == 'biologi' ? 'selected' : '' }}>biologi</option>
                                    <option value="Sastra Arab" {{ $peminjaman2->jurusan == 'Sastra Arab' ? 'selected' : '' }}>Sastra Arab</option>
                                    <option value="Sastra Inggris" {{ $peminjaman2->jurusan == 'Sastra Inggris' ? 'selected' : '' }}>Sastra Inggris</option>
                                    <option value="Sejarah" {{ $peminjaman2->jurusan == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
                                    <option value="Psikologi" {{ $peminjaman2->jurusan == 'Psikologi' ? 'selected' : '' }}>Psikologi</option>
                                    <option value="Matematika" {{ $peminjaman2->jurusan == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                                    <option value="Teknik Elektro" {{ $peminjaman2->jurusan == 'Teknik Elektro' ? 'selected' : '' }}>Teknik Elektro</option>
                                    <option value="Teknik Informatika" {{ $peminjaman2->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                    <option value="Agroteknologi" {{ $peminjaman2->jurusan == 'Agroteknologi' ? 'selected' : '' }}>Agroteknologi</option>
                                    <option value="Sosiologi" {{ $peminjaman2->jurusan == 'Sosiologi' ? 'selected' : '' }}>Sosiologi</option>
                                    <option value="Ilmu Politik" {{ $peminjaman2->jurusan == 'Ilmu Politik' ? 'selected' : '' }}>Ilmu Politik</option>
                                    <option value="Administrasi Negara (Publik)" {{ $peminjaman2->jurusan == 'Administrasi Negara (Publik)' ? 'selected' : '' }}>Administrasi Negara (Publik)</option>
                                    <option value="Filsafat" {{ $peminjaman2->jurusan == 'Filsafat' ? 'selected' : '' }}>Filsafat</option>
                                    <option value="Ilmu Komunikasi" {{ $peminjaman2->jurusan == 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi</option>
                                    <option value="Manajemen" {{ $peminjaman2->jurusan == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                                    <option value="Akuntansi" {{ $peminjaman2->jurusan == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                                    <option value="Ekonomi Syariah" {{ $peminjaman2->jurusan == 'Ekonomi Syariah' ? 'selected' : '' }}>Ekonomi Syariah</option>
                                    <option value="Manajemen Keuangan" {{ $peminjaman2->jurusan == 'Manajemen Keuangan' ? 'selected' : '' }}>Manajemen Keuangan</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">tujuan</label>
                                <input type="text" class="form-control  @error('tujuan') is-invalid @enderror"
                                    name="tujuan" value="{{ $peminjaman2->tujuan }}">
                                @error('tujuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">waktu_mulai</label>
                                <input type="text" class="form-control  @error('waktu_mulai') is-invalid @enderror"
                                    name="waktu_mulai" value="{{ $peminjaman2->waktu_mulai }}">
                                @error('waktu_mulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">waktu_selesai</label>
                                <input type="text" class="form-control  @error('waktu_selesai') is-invalid @enderror"
                                    name="waktu_selesai" value="{{ $peminjaman2->waktu_selesai }}">
                                @error('waktu_selesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection