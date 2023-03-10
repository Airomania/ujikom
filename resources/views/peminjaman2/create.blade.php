@extends('layouts.admin')

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
                        <form action="{{ route('peminjaman2.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">fakultas</label>
                                <select class="form-control  @error('fakultas') is-invalid @enderror"name="fakultas">
                                <option selected>pilih salah satu</option>
                                <option value="Ushuluddin">Ushuluddin</option>
                                <option value="Tarbiyah dan Keguruan">Tarbiyah dan Keguruan.</option>
                                <option value="Syariah dan Hukum">Syariah dan Hukum</option>
                                <option value="Dakwah dan Komunikasi">Dakwah dan Komunikasi.</option>
                                <option value="Adab dan Humaniora">Adab dan Humaniora</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Sains dan Teknologi">Sains dan Teknologi</option>
                                <option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
                                </select>
                                @error('fakultas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                                <select class="form-control  @error('jurusan') is-invalid @enderror"name="jurusan">
                                <option selected>pilih salah satu</option>
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                                <option value="Ilmu Agama Islam">Ilmu Agama Islam</option>
                                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                <option value="Keguruan & Pendidikan">Keguruan & Pendidikan</option>
                                <option value="Manajemen Pendidikan">Manajemen Pendidikan</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Kimia">Kimia</option>
                                <option value="Biologi">Biologi</option>
                                <option value="Sastra Arab">Sastra Arab</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Agroteknologi">Agroteknologi</option>
                                <option value="Sosiologi">Sosiologi</option>
                                <option value="Ilmu Politik">Ilmu Politik</option>
                                <option value="Administrasi Negara (Publik)">Administrasi Negara (Publik)</option>
                                <option value="Filsafat">Filsafat</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Ekonomi Syariah">Ekonomi Syariah</option>
                                <option value="Manajemen Keuangan">Manajemen Keuangan</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                                <input type="text" class="form-control  @error('tujuan') is-invalid @enderror"
                                    name="tujuan">
                                @error('tujuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Waktu Mulai</label>
                                <input type="text" class="form-control  @error('waktu_mulai') is-invalid @enderror"
                                    name="waktu_mulai">
                                @error('waktu_mulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label class="form-label">Waktu Selesai</label>
                                <input type="text" class="form-control  @error('waktu_selesai') is-invalid @enderror"
                                    name="waktu_selesai">
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




<!-- 
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                        type="radio" name="jenis_kelamin" value="Laki-laki">
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                        type="radio" name="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="agama">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Katolik">Katolik</option>
                                </select>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            -->